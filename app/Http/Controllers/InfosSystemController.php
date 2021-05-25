<?php

namespace App\Http\Controllers;

use App\Models\InfosSystem;
use App\Models\User;
use Illuminate\Http\Request;

class InfosSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            "date_naissance"=>"required",
            "situation_matrimoniale"=>"required",
            "adresse" => "required",
        ]);

        $info = new InfosSystem([
            'user_id'=>$request->get('user_id'),
            'date_naissance'=>$request->get('date_naissance'),
            'situation_matrimoniale'=>$request->get('situation_matrimoniale'),
            'adresse'=>$request->get('adresse'),
            'pays'=>$request->get('pays'),
            'a_propos'=>$request->get('a_propos'),
            'activite_principale'=>$request->get('activite_principale'),
        ]);
        //dd($info);
        $info->save();
        session()->flash('message','Profil mis à jour avec succès');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfosSystem  $infosSystem
     * @return \Illuminate\Http\Response
     */
    public function update(InfosSystem $id)
    {

        $info = request()->validate([
            'user_id' => "required",
            'date_naissance' => "required",
            'situation_matrimoniale' => "required",
            'adresse' => "required",
            'pays' => "",
            'a_propos' => "",
            'activite_principale' => "",
        ]);


        $id->update($info);
        session()->flash('message','Profil modifier avec succès');
        return redirect()->back();
    }




}
