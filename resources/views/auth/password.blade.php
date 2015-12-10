@extends('layouts.master')

@section('title', 'Reset password')

@section('content')
    <div class="container">
        @include('partials.errors', ['errors' => $errors])

        {!! Form::open(['route' => 'email']) !!}
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! app('captcha')->display() !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Send Password Reset Link', ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop