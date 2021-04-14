<?php

namespace App\Http\Controllers;

use App\Models\CulturesVariete;
use App\Models\User;
use App\Models\Culture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CulturesVarietesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varietes = CulturesVariete::All();
        $user = User::find(Auth::user()->id);

        $cultures = Culture::pluck('nom', 'id');
        $selectedID = 1;

        return view('Admin.Agriculture.Culture.Varietes.varietes', compact('varietes', 'user', 'selectedID', 'cultures'));

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $id)
    {
        $variete = CulturesVariete::find($id);
        $varietes = CulturesVariete::All();
        $cultures = Culture::pluck('nom', 'id');
        $user = User::find(Auth::user()->id);

        return view('Admin.Agriculture.Culture.Varietes.varietesEdit', compact('variete', 'cultures', 'varietes', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $id)
    {
        $user = CulturesVariete::find($id);
        $user->delete();

        return redirect('/admin/culture/varietes') ->with('success', "Vous venez de supprimer une variétè avec succès !");
    }
}
