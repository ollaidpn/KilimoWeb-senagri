<?php

namespace App\Http\Livewire\Admin\Agriculture\Culture\Varietes;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Variete extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.admin.agriculture.culture.varietes.variete', compact('user'));
    }
}
