@extends('auth.scaffold')

@section('title', 'Registrati')

@section('scripts')
    <script>
        $(() => {
            $("input").on("blur", function() {
                validateInput("register_form", $(this).attr("name"));
            });
            validateAndSubmitForm("register_form");
        });
    </script>
@endsection

@section('content')
    <div>
        <div>
            <a href="{{ route('home') }}">{{ config('app.name') }}</a>
        </div>
        <form id="register_form" method="POST" action="{{ route('register') }}">
            @csrf
            <x-forms.custom-input id="username" name="username" type="string" placeholder="Username" required maxlength="64" autofocus/>
            <x-forms.custom-input id="email" name="email" type="email" placeholder="Email" maxlength="256"/>
            <x-forms.custom-input id="password" name="password" type="password" placeholder="Password" required maxlength="64"/>
            <x-forms.custom-input id="password_confirmation" name="password_confirmation" type="password" placeholder="Conferma Password" required maxlength="64"/>
            <div>
                <a href="{{ route('login') }}">Sei già registrato?</a>
                <button type="submit">Registrati</button>
            </div>
        </form>
    </div>
@endsection
