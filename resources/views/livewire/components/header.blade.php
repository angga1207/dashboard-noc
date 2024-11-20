<?php
?>
<div>

    <div class="slim-header">
        <div class="container-fluid">
            <div class="slim-header-left">
                <h2 class="slim-logo">
                    <a href="{{ route('home') }}">
                        Dash OI<span>.</span>
                    </a>
                </h2>

                <div class="search-box">
                    <input type="text" class="form-control" placeholder="Search">
                    <button class="btn btn-primary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="slim-header-right">
                <div class="dropdown dropdown-c" x-data="{showMenu : false}">
                    <a href="#" class="logged-user" data-toggle="dropdown" x-on:click="showMenu = !showMenu">
                        {{-- <i class="fa fa-user-circle" style="font-size: 18px;"></i> --}}
                        <img src="{{ asset($user->photo) }}"
                            onerror="this.onerror=null;this.src='{{ asset('images/logo-oi.png') }}';"
                            style="object-fit: contain; width:40px;height:40px" />
                        <span>
                            {{ $user->name }}
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" x-show="showMenu" x-on:click.away="showMenu = false"
                        x-cloak>
                        <nav class="nav">
                            {{-- <a href="#" class="nav-link">
                                <i class="icon ion-person"></i>
                                View Profile
                            </a> --}}
                            <a href="{{ route('logout') }}" class="nav-link">
                                <i class="icon ion-forward"></i>
                                Keluar Aplikasi
                            </a>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
