<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $phone;
    public $password;
    public $remember_me = false;

    public function rules()
    {
        return [
            'phone' => "required|string",
            'password' => "required|string",
            'remember_me' => 'boolean'
        ];
    }

    public function authenticate()
    {
        $credentials = $this->validate();

        if (Auth::attempt(['phone' => $credentials['phone'], 'password' => $credentials['password']], $credentials['remember_me'])) {
            request()->session()->regenerate();
                return to_route('admin.dashboard.index');
        } else {
            $this->addError("loginFailed", __('Numéro de téléphone ou mot de passe incorrect'));
        }
    }

    public function render()
    {
        return view('livewire.admin.login')->layout('layouts.blank', [
            'title' => __('Connexion')
        ]);;
    }
}
