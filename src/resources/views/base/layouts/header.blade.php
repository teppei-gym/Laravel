<header>
    <div class="header">
        <p class="header-title">Larvel</p>
        <ul class="header-nav">
            @if (session()->exists('user'))
            <li><a>{{ session()->get('user')['name'] }}</a></li>
            <li><button class="button">Logout</button></li>
            @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('create') }}">Register</a></li>
            @endif
        </ul>
    </div>
</header>