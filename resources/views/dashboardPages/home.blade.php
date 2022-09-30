@extends('layouts.dashboard')

@section('contentCardBody')
    <div class="row">
        @isset($users)
            @foreach($users as $user)
                <div class="col-6 p-2 text-center border border-dark">
                    <div class="p-2">
                        <a class="nav-link" href="">
                            <h5 class="card-title">Name: {{$user->name}}</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
@endsection
