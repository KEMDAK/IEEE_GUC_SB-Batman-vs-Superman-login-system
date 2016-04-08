@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h4>Name: {{ $info->name }}</h4>
            </div>

            <div class="col-md-5">
                <h4>Email: {{ $info->email }}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if (strcmp($info->role, "batman") === 0)
                    <h3>This User is a Batman Lover</h3>
                @endif
                @if (strcmp($info->role, "superman") === 0)
                    <h3>This User is a Superman Lover</h3>
                @endif
                @if (strcmp($info->role, "neutral") === 0)
                    <h3>This User is Neutral</h3>
                @endif
            </div>
        </div>
    </div>
@endsection