<?php

namespace App\Http\Controllers;

use App\Models\InfosUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InfosUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);


        return view('Admin.Users.infos', compact('user'));
    }

    public function changePassword(Request $request){
        $this->validate($request, [

            'password' => 'required',
            'new_password' => 'required',
            'confirm_new_password' => 'required',
            ]);



        $hashedPassword = Auth::user()->password;
        $oldPasswordHashed = Hash::check($request->password , $hashedPassword );
        $newPasswordHashed = Hash::check($request->new_password , $hashedPassword);


        $newpassword = $request->new_password;
        $confirmpassword = $request->confirm_new_password;

           if ($oldPasswordHashed) {

             if (!$newPasswordHashed) {
                if($newpassword == $confirmpassword){
                  $users = User::find(Auth::user()->id);
                  $passwordChange = Hash::make($request->newpassword);
                  $users->update(['password' =>  $passwordChange]);

                  session()->flash('message','Mot de passe modifier avec succès');
                  return redirect()->back();
                }else{
                    session()->flash('message','Vos mot de passe ne correspondent pas');
                      return redirect()->back();
                }
            }else{
                      session()->flash('message','Vous devez mettre un mot de passe différente de votre ancienne mot de passe');
                      return redirect()->back();
                    }

               }else{
                   session()->flash('message','Votre mot de passe n\'est pas valide ');
                   return redirect()->back();
                 }

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfosUser  $infosUser
     * @return \Illuminate\Http\Response
     */
    public function show(InfosUser $infosUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfosUser  $infosUser
     * @return \Illuminate\Http\Response
     */
    public function edit(InfosUser $infosUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfosUser  $infosUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfosUser $infosUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfosUser  $infosUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfosUser $infosUser)
    {
        //
    }
}
