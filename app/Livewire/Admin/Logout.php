<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();
        return to_route('admin.login');
    }
    public function render()
    {
        return view('livewire.admin.logout');
    }
}
