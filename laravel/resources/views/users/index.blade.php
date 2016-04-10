@extends ('layouts.app')

@section('content')

    <h1>Users</h1>

    <hr/>

    @foreach($users as $user)

        <h3>
            <a href="{{action('UsersController@show' , [$user->id])}}" >{{$user->name}} </a>
        </h3>
        <p>
            @if($user->type === '1')
                Superman Lover
            @elseif($user->type === '2')
                Neutral
            @else
                Batman Lover
            @endif
        </p>
    @endforeach

@stop