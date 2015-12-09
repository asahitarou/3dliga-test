@extends('layouts.master')

@section('title', 'Login')

@section('content')
    {{ var_dump(Session::all()) }}
    <nav>
        <ul>
            <li>
                <a href="{{ URL::route('register') }}">Register</a>
            </li>
            <li>
                <a href="/">Main</a>
            </li>
        </ul>
    </nav>
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

        <div>
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div>
            Password
            <input type="password" name="password" id="password">
        </div>

        <div>
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
@stop