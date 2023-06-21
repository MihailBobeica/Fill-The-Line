<nav class="navbar">
    <div>
        <a class="app-name" href="{{ route('home') }}">{{ config('app.name') }}</a>
    </div>
    <div>
        <a href="{{ route('home') }}">Scoreboard</a>
    </div>
    <div>
        <a href="{{ route('login') }}">Accedi</a>
        <a href="{{ route('register') }}">Registrati</a>
    </div>
</nav>
