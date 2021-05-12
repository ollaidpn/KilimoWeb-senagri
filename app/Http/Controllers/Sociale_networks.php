<?php

namespace App\Http\Controllers;

use App\Models\InfosSystem;
use Illuminate\Http\Request;
use App\Models\Sociale_network;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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


    public function updateSocialeNetwork(Sociale_network $sociale)
    {
        $user = User::find(Auth::user()->id);
        $sociales = Sociale_network::all()->where('user_id', $user->id);
        $abouts = InfosSystem::all()->where('user_id',  $user->id);

        $data = request()->validate([
            'facebook'=>'required',
            'instagram'=> 'required',
            'linkedin'=>'required',
            'twitter'=> 'required'
        ]);
        $sociale->update($data);
        //
        session()->flash('message','Social média mis à jour avec succès');
        return redirect()->back();
        //return view('Admin.Users.infos', compact('user', 'sociales', 'abouts'));
    }
}
