<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Login extends Component
{
    use LivewireAlert;
    public $username, $password;
    public $captcha, $captchaImg;
    public $referal, $loginType = 'semesta';
    public $attempt = 0;

    public function mount()
    {
        $this->captchaImg = captcha_img('default');
        $this->referal = url()->previous();

        // Cookie::forget('failAttempt');

        if (Cookie::get('failAttempt')) {
            $this->attempt = Cookie::get('failAttempt');
        }
    }


    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.auth');
    }

    public function reloadCaptcha()
    {
        $this->captchaImg = captcha_img('default');
        $this->captcha = null;
        $this->resetErrorBag('captcha');
    }

    function loginSemesta()
    {
        // sleep(1);
        if ($this->username == 'developer') {
            $validasi = $this->validate([
                'username' => 'required',
                'password' => 'required',
                'captcha' => 'nullable|captcha',
            ], [
                'username.exists' => 'Username tidak ditemukan.',
                'captcha.captcha' => 'Enter valid captcha code shown in image',
            ], ['captcha' => 'Captcha']);
        } else {
            if ($this->attempt >= 5) {
                $validasi = $this->validate([
                    'username' => 'required',
                    'password' => 'required',
                    'captcha' => 'required|captcha',
                ], [
                    'username.exists' => 'Username tidak ditemukan.',
                    'captcha.captcha' => 'Enter valid captcha code shown in image',
                ], ['captcha' => 'Captcha']);
            } else {
                $validasi = $this->validate([
                    'username' => 'required',
                    'password' => 'required',
                    'captcha' => 'nullable|captcha',
                ], [
                    'username.exists' => 'Username tidak ditemukan.',
                    'captcha.captcha' => 'Enter valid captcha code shown in image',
                ], ['captcha' => 'Captcha']);
            }
        }

        // https://semesta.oganilirkab.go.id/api/auth-user
        // POST

        $response = Http::post('https://semesta.oganilirkab.go.id/api/auth-user', [
            'username' => $this->username,
            'password' => $this->password,
        ]);
        if ($response->status() == 200) {
            $response = collect(json_decode($response, true));
            if ($response['status'] == 'success') {
                $resUser = $response['atribut_user'];
                $resSkpdBawahan = $response['skpd_bawahan'];

                // check exists
                $user = User::where('semesta_id', $resUser['id'])->first();
                if (!$user) {
                    $user = new User();
                    $user->semesta_id = $resUser['id'];
                }
                $user->name = $resUser['fullname'];
                $user->username = $this->username;
                $user->password = bcrypt($this->password);
                $user->email = $resUser['email'];
                $user->photo = $resUser['foto_pegawai'];
                $user->status = 'active';
                $user->save();

                Auth::loginUsingId($user->id);
                $this->setCookieUser($resUser);
                $this->setCookieSkpdBawahan($resSkpdBawahan);

                Cookie::queue('failAttempt', 0, 1);

                $this->flash('success', 'Selamat Datang!', [
                    'text' => 'Anda baru saja memasuki aplikasi DashOI.',
                    'toast' => false,
                    'position' => 'center',
                ], route('home'));
            }
        } elseif ($response->status() == 401) {
            $this->attempt++;
            Cookie::queue('failAttempt', $this->attempt, 1);
            if ($this->attempt >= 5) {
                $this->alert('error', 'Username atau Password Salah', [
                    'text' => 'Anda Sudah Gagal 5x Percobaan Login. Silahkan coba lagi dengan memasukkan Captcha.',
                    'toast' => false,
                    'position' => 'center',
                ]);
                $this->reloadCaptcha();
            } else {
                $this->alert('error', 'Username atau Password Salah',[
                    'text' => 5 - $this->attempt . ' kali Percobaan Login lagi.',
                    'toast' => false,
                    'position' => 'center',
                ]);
            }
        } else {
            $this->alert('error', 'Terjadi Kesalahan Pada Server Semesta');
        }



        // $this->alert('success', 'TEST');
    }

    function setCookieUser($data)
    {
        Cookie::queue('seu', json_encode($data));
        return;
    }

    function setCookieSkpdBawahan($data)
    {
        Cookie::queue('sesb', json_encode($data));
        return;
    }

    function loginSicaram()
    {
        sleep(1);
        if ($this->username == 'developer') {
            $validasi = $this->validate([
                'username' => 'required',
                'password' => 'required',
                'captcha' => 'nullable|captcha',
            ], [
                'username.exists' => 'Username tidak ditemukan.',
                'captcha.captcha' => 'Enter valid captcha code shown in image',
            ], ['captcha' => 'Captcha']);
        } else {
            $validasi = $this->validate([
                'username' => 'required',
                'password' => 'required',
                'captcha' => 'required|captcha',
            ], [
                'username.exists' => 'Username tidak ditemukan.',
                'captcha.captcha' => 'Enter valid captcha code shown in image',
            ], ['captcha' => 'Captcha']);
        }


        // $this->alert('success', 'TEST');
    }

    function isInDeveloped()
    {
        $this->alert('info', 'Mohon Maaf!', [
            'text' => 'Fitur belum dapat digunakan.',
            'toast' => false,
            'position' => 'center',
        ]);
    }
}
