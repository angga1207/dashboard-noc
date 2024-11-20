<?php

?>
<div>

    <div class="signin-box">
        <img class="mg-b-20" src="assets/img/logo-oi.png" width="70" alt="">
        <h2 class="signin-title-primary">Selamat Datang!</h2>
        <h3 class="signin-title-secondary">
            {{-- Aplikasi Dashboard Pimpinan --}}
            Aplikasi DashOI
        </h3>

        <!-- Login Form -->
        @if($this->loginType == 'semesta')
        <form wire:submit.prevent="loginSemesta">
            <div class="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Masukan Nama Pengguna Semesta"
                        wire:model="username">
                    @error('username')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="" x-data="{showPassword : false}">
                <div class="form-group mg-b-15 password-container">
                    <input :type="showPassword ? 'text' : 'password'" class="form-control" placeholder="Kata Sandi"
                        wire:model="password">
                    <i class="fa fa-eye toggle-password" @click="showPassword = !showPassword"></i>
                </div>
                @error('password')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Custom CAPTCHA: Display Random 4-Digit Number -->
            <div class="form-group rechaptcha_custom">
                <div class="d-flex flex-column justify-content-center gap-2">
                    <div class="captcha mb-3" style="position: relative">
                        <div class="text-center">{!! $captchaImg !!}</div>
                        <div>
                            <button type="button" class="btn btn-icon text-danger" id="reload"
                                wire:click.prevent="reloadCaptcha()"
                                style="position: absolute;bottom:25%; top:25%; right:0">
                                <i class="fa fa-undo"></i>
                            </button>
                        </div>
                    </div>

                    <input id="captcha" type="text" class="form-control" placeholder="Masukkan Captcha"
                        wire:model.defer="captcha">
                </div>
                @error('captcha')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mg-t-20">
                <button type="submit" class="btn btn-primary btn-block btn-signin">Masuk</button>
            </div>
        </form>
        @elseif($this->loginType == 'sicaram')
        @endif


        <hr>
        <div class="mb-4">
            <h4 class="text-center">
                Masuk Menggunakan
            </h4>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="btn btn-primary btn-block btn-signin px-5 py-4"
                    wire:click.prevent="$set('loginType', 'semesta')">
                    <h5 class="mb-0">
                        SEMESTA
                    </h5 class="mb-0">
                </div>
            </div>
            <div class="col-6">
                <div class="btn btn-primary btn-block btn-signin px-5 py-4" wire:click.prevent="isInDeveloped">
                    <h5 class="mb-0">
                        SICARAM
                    </h5 class="mb-0">
                </div>
            </div>
        </div>

        <div class="footers">
            <div class="row">
                <div class="col-12 tx-center">
                    &copy; Copyright 2024 | Pemerintahan Daerah Kabupaten Ogan Ilir <br> Design by <a href="#">Dinas
                        Komunikasi
                        Informatika
                        Statistik dan Persandian</a>
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>

</div>
