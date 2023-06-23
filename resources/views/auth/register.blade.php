@extends('auth.scaffold')

@section('title', 'Registrati')

@section('content')
    <div>
        <div>
            <a href="{{ route('home') }}">{{ config('app.name') }}</a>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <x-forms.custom-input id="username" name="username" type="string" placeholder="Username"/>
            <x-forms.custom-input id="email" name="email" type="email" placeholder="Email"/>
            <x-forms.custom-input id="password" name="password" type="password" placeholder="Password" required/>
            <x-forms.custom-input id="password_confirmation" name="password_confirmation" type="password" placeholder="Conferma Password" required/>
            <div>
                <a href="{{ route('login') }}">Sei già registrato?</a>
                <button type="submit">Registrati</button>
            </div>
        </form>
    </div>
@endsection
