<?php

namespace App\Http\Livewire\Admin\Agriculture\Sols;

use App\Models\Sols;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class Solslivewire extends Component
{

    use WithFileUploads;

    public $updateMode;
    public $type_de_sol, $image, $imageView, $id_sol;

    public function render()
    {

        $sols = Sols::All();
        return view('livewire.admin.agriculture.sols.solslivewire', compact('sols'));
    }

    // Add new semie

    protected $messages = [
        'type_de_sol.required' => 'Veuillez saisir le nom du sol',
        'image.required' => 'Veuillez mettre une image pour une meilleure expérience utilisateur',
    ];

    private function resetInput()
    {
        $this->type_de_sol = null;
        $this->imageView = null;
        $this->image = null;
    }

    public function annule(){
        $this->resetInput();
        $this->updateMode = false;
    }

    public function addSemie(Request $request)
    {
        $validatedData = $this->validate([
            'type_de_sol' => 'required',
            'image' => 'required',
        ]);

        $imageSelect = $this->image;
        //dd($imageSelect);
        /* if($imageSelect){
            $this->validate([
                'image' => 'mimes:jpeg,jpg,bmp,png',
            ]);

            $extension = $imageSelect->extension();
            $imageName = time().'_semie.'.$extension;
            $imageSelect->storeAs('image/sol', $imageName);

            $validatedData += [
                "image"=> $imageName,
                ];

            //$updateMode = true;
        } */

        $imageSelect = $this->image;
        //dd($imageSelect);
        if ($imageSelect) {

            $file_name = time().'.'.$imageSelect->getClientOriginalExtension();
            $path_name = 'storage\culture\sols';

            $imageSelect->storeAs('image/sol', $file_name);
            /* if ($imageSelect->move($path_name, $file_name)) {
                $imageSelect = $path_name.$file_name;
            } */

        }

        Sols::create($validatedData);

        session()->flash('message', 'Sol ajouter avec succès !');
        $this->resetInput();
    }

    public function destroy($id)
    {
        if ($id) {
            $semie = Sols::find($id);
            //dd($id);
            $semie->delete();
            session()->flash('message', 'Vous venez de supprimer le sol avec succès !');
            $this->resetInput();
        }
    }


    public function edit($id)
    {
        $sol = Sols::find($id);

        $this->id_sol = $sol->id;
        $this->type_de_sol = $sol->type_de_sol;
        $this->imageView = $sol->image;
        $this->updateMode = true;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'type_de_sol' => 'required',
        ]);

        $imageSelect = $this->image;
        $id = Sols::find($this->id_sol);
        $defaultImage = $id->image;

        if($imageSelect){
            $this->validate([
                'image' => 'mimes:jpeg,jpg,bmp,png',
            ]);

            $extension = $imageSelect->extension();
            $imageName = time().'.'.$extension;
            $imageSelect->storeAs('image/sol', $imageName);

            $validatedData += [
                "image"=> $imageName,
                ];

            //$updateMode = true;
        }else{
            $validatedData += [
                "image"=> $defaultImage,
                ];
        }
        //dd($validatedData);

        $id->update($validatedData);
        session()->flash('message', 'Sol modifier avec succès !');
        $this->resetInput();
    }
}
