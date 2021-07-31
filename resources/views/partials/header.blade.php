<header>
    <div class="wrapper">
        <ul>
            <li>
                <a class="{{ Route::currentRouteName() == 'comics' ? 'active' : '' }}" href="{{ route("home") }}">HOME</a>
                <a class="{{ Route::currentRouteName() == 'comics' ? 'active' : '' }}" href="{{ route("comics.index") }}">COMIC</a>
            </li>
            
        </ul>
    </div>
</header>