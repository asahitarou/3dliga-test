@extends('layouts.master')

@section('title', 'New password')

@section('styles')
    @parent

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
@stop

@section('content')
    <div class="container">
        @include('partials.errors', ['errors' => $errors])

        {!! Form::open(['route' => 'change']) !!}
            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Confirm password:') !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Reset Password', ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop