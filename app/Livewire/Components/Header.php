<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Header extends Component
{
    public $user, $cookieUser = [], $cookieSkpdBawahan = [];
    function mount()
    {
        $this->user = auth()->user();
        $this->cookieUser = collect(json_decode(Cookie::get('seu', true)));
        $this->cookieSkpdBawahan = collect(json_decode(Cookie::get('sesb', true)));
        // dd($this->cookieUser);
    }

    public function render()
    {
        return view('livewire.components.header');
    }
}
