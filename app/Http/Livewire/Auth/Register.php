<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $form = [
        'name' => '',
        'email' => '',
        'password' => '',
        'password_confirmation' => ''
    ];

    public function submit(){
        $this->validate([
            'form.name' => 'required',
            'form.email' => 'required|email|unique:users,email',            
            'form.password' => 'required|confirmed'
        ]);

        User::create([
            'name'  => $this->form['name'],
            'email' => $this->form['email'],
            'password' => bcrypt($this->form['password']),
        ]);
        redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
