@extends('layouts.master')

@section('title', 'Login')

@section('content')
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ URL::route('register') }}">Register</a>
                    </li>
                    <li>
                        <a href="{{ URL::route('email') }}">Reset password</a>
                    </li>
                </ul>
            </div>
        </nav>

        @include('partials.errors', ['errors' => $errors])

        {!! Form::open(['route' => 'login']) !!}
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Login', ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop