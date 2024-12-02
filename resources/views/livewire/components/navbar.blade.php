<?php

use Illuminate\Support\Facades\Route;

?>
<div>
    <div class="slim-navbar">
        <div class="container-fluid">
            <ul class="nav">
                <li class="nav-item {{ str()->contains(Route::currentRouteName(), 'home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="icon ion-ios-home-outline"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li
                    class="nav-item {{ str()->contains(Route::currentRouteName(), 'pemerintahan-kesra') ? 'active' : '' }}">
                    <a class=" nav-link" href="{{ route('pemerintahan-kesra.kependudukan') }}">
                        <i class="icon ion-ios-book-outline"></i>
                        <span>Pemerintahan & Kesra</span>
                    </a>
                </li>
                <li
                    class="nav-item {{ str()->contains(Route::currentRouteName(), 'perekonomian-pembangunan') ? 'active' : '' }}">
                    <a class=" nav-link" href="{{ route('perekonomian-pembangunan') }}">
                        <i class="icon ion-ios-book-outline"></i>
                        <span>Perekonomian & Pembangunan</span>
                    </a>
                </li>
                <li
                    class="nav-item {{ str()->contains(Route::currentRouteName(), 'administrasi-umum') ? 'active' : '' }}">
                    <a class=" nav-link" href="{{ route('administrasi-umum.semesta') }}">
                        <i class="icon ion-ios-book-outline"></i>
                        <span>Administrasi Umum</span>
                    </a>
                </li>
            </ul>
        </div><!-- container -->
    </div>
    <!-- slim-navbar -->
</div>
