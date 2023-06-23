<nav class="navbar">
    <div>
        <a class="app-name" href="{{ route('home') }}">{{ config('app.name') }}</a>
    </div>
    <div>
        <a href="{{ route('home') }}">Scoreboard</a>
    </div>
    <div>
        @guest()
        <a href="{{ route('login') }}">Accedi</a>
        <a href="{{ route('register') }}">Registrati</a>
        @endguest
        @auth()
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Esci</button>
        </form>
        @endauth
    </div>
</nav>
