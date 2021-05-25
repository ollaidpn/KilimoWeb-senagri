<?php

namespace App\Http\Livewire\Admin\Agriculture\Sols;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sols extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);

        return view('livewire.admin.agriculture.sols.sols', compact('user'));
    }
}
