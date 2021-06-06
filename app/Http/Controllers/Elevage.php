<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Elevage extends Controller
{
    public function formulaireElevage()
    {
        return View('layouts.elevage.formElevage');
    }
    public function listeElevage()
    {
        return View('layouts.elevage.listElevage');
    }
}
