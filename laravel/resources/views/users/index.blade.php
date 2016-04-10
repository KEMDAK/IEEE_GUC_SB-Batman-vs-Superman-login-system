@extends ('layouts.app')

@section('content')

    @if(Auth::user())

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
    @else
        <h4 style="text-align: center">Landing Page!</h4>
    @endif
@stop