<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userAdmin()
    {
        $Users = User::where('role_id', 1)->get();
        return view('livewire.Admin.Users.userAdmin', compact('Users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addUserAdmin(Request $request)
    {
        {
            $this->validate($request, [
                'prenom'=>'required',
                'nom'=>'required',
                'telephone'=>'required',
                'email'=>'required',

            ]);
            $AddAdmin = new User();
            $AddAdmin->prenom=$request->input('prenom');
            $AddAdmin->nom=$request->input('nom');
            $AddAdmin->telephone=$request->input('telephone');
            $AddAdmin->email=$request->input('email');
            $AddAdmin->role_id=1;

            $AddAdmin->password= Hash::make("@KILIMO2021");





            $AddAdmin->save();
            return redirect('/admin/utilisateurs/administrateurs') ->with('success', "Vous venez d'ajouter un nouveau utilisateur admin avec succès !");
        }
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
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
