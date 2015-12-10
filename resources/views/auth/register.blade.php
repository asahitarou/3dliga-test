@extends('layouts/master')

@section('title', 'Register')

@section('content')
    <div class="container">
        @include('partials.errors', ['errors' => $errors])

        {!! Form::open(['route' => 'register']) !!}
            <div class="form-group">
                {!! Form::label('login', 'Login:') !!}
                {!! Form::text('login', old('login'), ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password_confirmation', 'Confirm Password:') !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Register', ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop