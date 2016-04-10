@extends('layouts.app')

@section('content')

    <h3>{{$user->name}}'s Profile</h3>
    @yield('type')
@stop