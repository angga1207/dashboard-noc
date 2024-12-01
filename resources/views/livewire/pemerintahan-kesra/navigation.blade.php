<div>

    <ul class="nav nav-underline-dark align-items-center flex-column flex-md-row" role="tablist">
        <li class="nav-item">
            <a class="nav-link {{ str()->contains(Route::currentRouteName(), 'pemerintahan-kesra.kependudukan') ? 'active pd-y-8' : '' }}"
                href="{{ route('pemerintahan-kesra.kependudukan') }}">
                Kependudukan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ str()->contains(Route::currentRouteName(), 'pemerintahan-kesra.bantuan') ? 'active pd-y-8' : '' }}"
                href="{{ route('pemerintahan-kesra.bantuan') }}">
                Bantuan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ str()->contains(Route::currentRouteName(), 'pemerintahan-kesra.kebencanaan') ? 'active pd-y-8' : '' }}"
                href="{{ route('pemerintahan-kesra.kebencanaan') }}">
                Kebencanaan
            </a>
        </li>
    </ul>

</div>
