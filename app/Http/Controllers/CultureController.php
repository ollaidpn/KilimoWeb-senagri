<?php

namespace App\Http\Controllers;

use App\Models\Climat;
use App\Models\Culture;
use App\Models\CulturesType;
use App\Models\Sols;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CultureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $cultures = Culture::
                    join('cultures_types', 'cultures_types.id', '=', 'cultures.typeculture_id')->
                    join('climats', 'climats.id', '=', 'cultures.climat_id')->
                    join('sols', 'sols.id', '=', 'cultures.type_sol_id')
                    ->get(['cultures.*', 'nom_typeculture','nom_climat','type_de_sol']);


        return view('livewire.Admin.Agriculture.Culture.index', compact('user', 'cultures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCulture()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.Admin.Agriculture.Culture.addCulture', compact('user'));
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
     * @param  \App\Models\Culture  $culture
     * @return \Illuminate\Http\Response
     */
    public function show(Culture $culture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Culture  $culture
     * @return \Illuminate\Http\Response
     */
    public function edit(Culture $culture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Culture  $culture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Culture $culture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Culture  $culture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Culture $culture)
    {

    }
}
