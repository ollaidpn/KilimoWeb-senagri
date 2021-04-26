<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sociale_network;
class Sociale_networks extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "facebook"=>"required",
            "instagram"=>"required",
            "linkedin" => "required",
        ]);

        $addSociale_networks = new Sociale_network([
            'facebook'=>$request->input('facebook'),
            'instagram'=>$request->input('instagram'),
            'linkedin'=>$request->input('linkedin'),
            'twitter'=>$request->input('twitter'),
            'user_id'=>$request->input('user_id'),
        ]);
        $addSociale_networks->save();
        session()->flash('message','Profil mis à jour avec succès');
        return redirect()->back();
    }
    // public function show(Sociale_network $sociale_network)
    // {
    //     return view('Admin.Users.infos',compact('sociale_network'));
    // }
}
