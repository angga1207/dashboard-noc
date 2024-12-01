<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Cookie;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Header extends Component
{
    use LivewireAlert;
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

    function goSearch()
    {
        $this->alert('info', 'Mohon Maaf!', [
            'position' =>  'center',
            'timer' =>  5000,
            'toast' =>  false,
            'text' =>  'Fitur ini belum tersedia',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }
}
