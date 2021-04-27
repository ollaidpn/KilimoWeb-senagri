<?php

namespace App\Http\Controllers;

use App\Models\InfosSystem;
use App\Models\InfosUser;
use App\Models\User;
use App\Models\Sociale_network;
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
        $sociales = Sociale_network::all()->where('user_id', $user->id);
        $abouts = InfosSystem::all()->where('user_id',  $user->id);

        return view('Admin.Users.infos', compact('user', 'sociales', 'abouts'));
    }
    //

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
                    session()->flash('message','Vos mots de passe ne correspondent pas');
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateUserAccount()
    {
        $user = request()->validate([
            'user_id' => "required",
            'prenom' => "required",
            'nom' => "required",
            'email' => "required",
            'telephone' => "required",
        ]);

        dd($user);
        //$id->update($user);
        session()->flash('message','Compte modifier avec succès');
        return redirect()->back();
    }

    public function updateUserAvatar(User $id)
    {
        $user = request()->validate([
            'user_id' => "required",
            'image' => "required",
        ]);
        $imageSelect = $user['image'];
        dd($imageSelect);

        /* if ($request->hasFile('image')) {

            $file_name = time().'.'.$request->image->getClientOriginalExtension();
            $path_name = 'storage/uploads/produits/'.'1'. date('Y')."/". date('F'). '/';

            if ($request->image->move($path_name, $file_name)) {
                $imageSelect->image = $path_name.$file_name;
            }

        } */
    }

}

