@extends('layouts.dashboard')

@section('contentCardBody')
    <div class="row">
        @isset($users)
            @foreach($users as $user)
                <div class="col-6 p-2 text-center border border-dark">
                    <div class="p-2">
                        <a class="nav-link" href="{{route('showUser', [$user])}}">
                            <h5 class="card-title">Email: {{$user->email}}</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
@endsection
