<?php

namespace App\Http\Livewire\Admin\Agriculture\Culture\Semies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Semie extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);

        return view('livewire.Admin.Agriculture.Culture.Semies.semie', compact('user'));
    }
}
