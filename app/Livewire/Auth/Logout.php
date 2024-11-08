<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Logout extends Component
{
    use LivewireAlert;

    function mount()
    {
        Auth::logoutCurrentDevice();
        $this->clearCookie();

        $this->flash('success', 'Berhasil Keluar!', [
            'text' => 'Anda telah keluar dari aplikasi Dashboard Pimpinan.',
            'toast' => false,
            'position' => 'center',
        ], route('login'));
    }

    function clearCookie()
    {
        Cookie::forget('seu');
        Cookie::forget('sesb');
        return;
    }

    public function render()
    {
        return view('livewire.auth.logout');
    }
}
