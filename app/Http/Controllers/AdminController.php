<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use App\Models\CulturesType;
use App\Models\CulturesVariete;
use App\Models\Sols;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $role = ($user->role_id);

        $typeCultures = CulturesType::pluck('nom_typeculture', 'id');
        $sols = Sols::pluck('type_de_sol', 'id');
        $speculations = Culture::pluck('nom_speculation', 'id');
        $varietes = CulturesVariete::pluck('nom_variete', 'id');

        // SI l'UTLISATEUR CONNECTE EST UN CLIENT, REDIRECTION VERS SA DASHBORD
        // ==>

        if($role == 0){
            return view('livewire.Client.index', compact('user', 'typeCultures', 'sols', 'speculations', 'varietes'));
        }

        // SI l'UTLISATEUR CONNECTE EST UN ADMINISTRATEUR, REDIRECTION VERS SA DASHBORD

        if($role == 1){
            return view('livewire.Admin.index', compact('user'));
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
