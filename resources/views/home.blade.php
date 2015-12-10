@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ URL::route('logout') }}">Logout</a>
                    </li>
                    <li>
                        <a href="{{ URL::route('change') }}">Change password</a>
                    </li>
                </ul>
            </div>
        </nav>

        @if (count($visits) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Row</th>
                        <th>IP</th>
                        <th>Login time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visits as $key => $visit)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $visit['client_ip'] }}</td>
                            <td>{{ $visit['visited'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@stop