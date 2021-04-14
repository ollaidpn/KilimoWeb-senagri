<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use App\Models\CultureSemie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class Semie extends Controller
{

    public $updateMode = false;

    public function render()
    {
        $semies = DB::table('culture_semies')
                    ->join('cultures', 'cultures.id', '=', 'culture_semies.culture_id')
                    ->get();

        $user = User::find(Auth::user()->id);
        $updateMode = false;

        $cultures = Culture::pluck('nom', 'id');
        $selectedID = 1;

        return view('livewire.Admin.Agriculture.Culture.Semies.semie', compact('semies', 'user', 'selectedID', 'cultures', 'updateMode'));
    }

    // Add new semie

    public function addSemie(Request $request)
    {
        {
            $this->validate($request, [
                'nom_semie'=>'required',
                'culture_id'=>'required',
                'description'=>'required',

            ]);

            // Get element from form


            // verify if image is selected

            if ($request->hasFile('image')) {

                //Format d'image autorisée
                $request->validate([
                    'image' => 'mimes:jpeg,jpg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);

                // Recuperation des valeurs depuis le formulaire
                $nom = $request->input('nom_semie');
                $description = $request->input('description');
                $culture_id = $request->input('culture_id');
                $image = $request->file('image');

                // Nom définitif de l'image
                $imageName = time().'_semie.'.$image->extension();

                // enregistrement de l'image dans le repertoire storage/public/image/semie
                $image->move(public_path('image/semie'), $imageName);

                $semie = new CultureSemie([
                    "nom_semie"=>$nom,
                    "culture_id"=>$culture_id,
                    "description"=>$description,
                    "image"=>$imageName,
                ]);

            }else{
                $semie = new CultureSemie();
                $semie->nom_semie=$request->input('nom_semie');
                $semie->culture_id=$request->input('culture_id');
                $semie->description=$request->input('description');
            }

            $semie->save();

            return redirect('/admin/culture/type-semie') ->with('success', "Vous venez d'ajouter une nouvelle semie avec succès !");

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CultureSemie $semie
     * @return \Illuminate\Http\Response
     */

    public function edit(CultureSemie $id)
    {
        $semie = $id;
        //dd($semie->id);
        $semies = DB::table('culture_semies')
                    ->join('cultures', 'cultures.id', '=', 'culture_semies.culture_id')
                    ->get();
        $cultures = Culture::pluck('nom', 'id');
        $user = User::find(Auth::user()->id);
        $updateMode = true;

        return view('livewire.Admin.Agriculture.Culture.Semies.semie', compact('semie', 'cultures', 'semies', 'user', 'updateMode'));
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\CultureSemie $semie
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, CultureSemie $semie)
    {
        $data = request()->validate([
            'nom_semie'=>'required',
            'culture_id'=>'required',
            'description'=>'required',

        ]);

        $imageSelect = $request->hasFile('image');

        if ($imageSelect) {

            //Format d'image autorisée
            $request->validate([
                'image' => 'mimes:jpeg,jpg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Recuperation des valeurs depuis le formulaire

            $image = $request->file('image');

            // Nom définitif de l'image
            $imageName = time().'_semie.'.$image->extension();

            // enregistrement de l'image dans le repertoire storage/public/image/semie
            $image->move(public_path('image/semie'), $imageName);

            $data += [
                "image"=> $imageName,
                ];


        }

        $semie -> update($data);


        return redirect('/admin/culture/type-semie') ->with('success', "Semie modifier avec succès !");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CultureSemie $semie
     * @return \Illuminate\Http\Response
     */


    public function destroy(CultureSemie $id)
    {

        $id->delete();

        return redirect('/admin/culture/type-semie') ->with('success', "Vous venez de supprimer une semie avec succès !");
    }

}
