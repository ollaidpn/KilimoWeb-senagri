<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileClient extends Controller
{
    public function profile()
    {
        return View('layouts.profileClient.profile');
    }
}
