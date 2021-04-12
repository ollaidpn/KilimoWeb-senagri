<?php

namespace App\Http\Controllers;

use App\Models\Culture;
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
        return view('Admin.Agriculture.Culture.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCulture()
    {
        $user = User::find(Auth::user()->id);
        return view('Admin.Agriculture.Culture.addCulture', compact('user'));
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
        //
    }
}
