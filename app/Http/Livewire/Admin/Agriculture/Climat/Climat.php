<?php

namespace App\Http\Livewire\Admin\Agriculture\Climat;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Climat extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.admin.agriculture.climat.climat', compact('user'));
    }
}
