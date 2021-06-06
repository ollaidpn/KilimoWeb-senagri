<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Agriculture extends Controller
{
    public function formulaireAgriculture()
    {
        return View('layouts.agriculture.formAgri');
    }
    public function listeAgriculture()
    {
        return View('layouts.agriculture.listAgriculture');
    }
}
