@extends('auth.scaffold')

@section('title', 'Accedi')

@section('scripts')
    <script>
        $(() => {
            $("input").on("blur", function() {
                validateInput("login_form", $(this).attr("name"));
            });
            validateAndSubmitForm("login_form");
        });
    </script>
@endsection

@section('content')
    <div>
        <div>
            <a href="{{ route('home') }}">{{ config('app.name') }}</a>
        </div>
        <form id="login_form" method="POST" action="{{ route('login') }}">
            @csrf
            <x-forms.custom-input id="username" name="username" type="string" placeholder="Username" required maxlength="64" autofocus/>
            <x-forms.custom-input id="password" name="password" type="password" placeholder="Password" required maxlength="64"/>
            <x-forms.custom-input id="remember_me" name="remember" type="checkbox" value="1" checked/>
            <div>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Hai dimenticato la password?</a>
                @endif
                <a href="{{ route('register') }}">Vuoi registrarti?</a>
                <button type="submit">Accedi</button>
            </div>
        </form>
    </div>
@endsection
