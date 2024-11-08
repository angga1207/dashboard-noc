<div>

    <ul class="nav nav-tabs nav-tabs-for-dark card-header-tabs">
        <li class="nav-item">
            <a class="nav-link bd-0 {{ str()->contains(Route::currentRouteName(), 'administrasi-umum.semesta') ? 'active pd-y-8' : '' }}"
                href="{{ route('administrasi-umum.semesta') }}">
                Semesta
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link bd-0 {{ str()->contains(Route::currentRouteName(), 'administrasi-umum.sidesi') ? 'active pd-y-8' : '' }}"
                href="{{ route('administrasi-umum.sidesi') }}">
                Sidesi
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link bd-0 {{ str()->contains(Route::currentRouteName(), 'administrasi-umum.guruku') ? 'active pd-y-8' : '' }}"
                href="{{ route('administrasi-umum.guruku') }}">
                Guruku
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link bd-0 {{ str()->contains(Route::currentRouteName(), 'administrasi-umum.sinona') ? 'active pd-y-8' : '' }}"
                href="{{ route('administrasi-umum.sinona') }}">
                Statistik Non ASN
            </a>
        </li>
    </ul>

</div>