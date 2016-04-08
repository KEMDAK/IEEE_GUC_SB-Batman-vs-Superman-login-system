@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        @if (!count($users))
                            <h4>You Are Our Very First Registered User :)</h4>
                        @else
                            <h4>Users on the website:-</h4>
                            <ul>
                                @foreach($users as $user)
                                    @if($user->id != Auth::user()->id)
                                        <li>
                                            <a href="show/{{ $user->id }}">{{ $user->name }}</a>
                                            <br/>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
