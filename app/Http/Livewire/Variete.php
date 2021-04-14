<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use App\Models\CulturesVariete;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class Variete extends Controller
{

    public $updateMode = false;

    public function render()
    {
        //$varietes = CulturesVariete::All();
        $varietes = DB::table('cultures_varietes')
                    ->join('cultures', 'cultures.id', '=', 'cultures_varietes.culture_id')
                    ->get();

        //dd($varietes);
        $user = User::find(Auth::user()->id);
        $updateMode = false;

        $cultures = Culture::pluck('nom', 'id');
        $selectedID = 1;

        //return view('Admin.Agriculture.Culture.Varietes.varietes', compact('varietes', 'user', 'selectedID', 'cultures'));
        return view('livewire.Admin.Agriculture.Culture.Varietes.variete', compact('varietes', 'user', 'selectedID', 'cultures', 'updateMode'));
    }

    // Add new variété

    public function addVariete(Request $request)
    {
        {
            $this->validate($request, [
                'varieteName'=>'required',
                'typeCulture'=>'required',
                'tempsRecolte'=>'required',
                'repiPlanche'=>'required',
                'repiAlveole'=>'required',
                'arrosage'=>'required',

            ]);
            $Variete = new CulturesVariete();
            $Variete->nom_variete=$request->input('varieteName');
            $Variete->culture_id=$request->input('typeCulture');
            $Variete->temps_de_recolte=$request->input('tempsRecolte');
            $Variete->repiquage_planche=$request->input('repiPlanche');
            $Variete->repiquage_alveole=$request->input('repiAlveole');
            $Variete->temps_arrosage=$request->input('arrosage');

            $Variete->save();

            return redirect('/admin/culture/varietes') ->with('success', "Vous venez d'ajouter une nouvelle variétè avec succès !");

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CulturesVariete $variete
     * @return \Illuminate\Http\Response
     */

    public function edit(CulturesVariete $id)
    {
        $variete = $id;
        //dd($variete->id);
        $varietes = DB::table('cultures_varietes')
                    ->join('cultures', 'cultures.id', '=', 'cultures_varietes.culture_id')
                    ->get();
        $cultures = Culture::pluck('nom', 'id');
        $user = User::find(Auth::user()->id);
        $updateMode = true;

        return view('livewire.Admin.Agriculture.Culture.Varietes.variete', compact('variete', 'cultures', 'varietes', 'user', 'updateMode'));
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\CulturesVariete $variete
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, CulturesVariete $variete)
    {
        $data = request()->validate([
            'nom_variete'=>'required',
            'culture_id'=>'required',
            'temps_de_recolte'=>'required',
            'repiquage_planche'=>'required',
            'repiquage_alveole'=>'required',
            'temps_arrosage'=>'required',

        ]);

        $variete -> update($data);
        //$variete->save();
        //dd($data);

        return redirect('/admin/culture/varietes') ->with('success', "Variétè modifier avec succès !");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CulturesVariete $variete
     * @return \Illuminate\Http\Response
     */


    public function destroy(CulturesVariete $id)
    {
        //$user = CulturesVariete::find($id);
        $id->delete();

        return redirect('/admin/culture/varietes') ->with('success', "Vous venez de supprimer une variétè avec succès !");
    }


}
