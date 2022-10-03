@extends('layouts.dashboard')

@section('contentCardBody')
    <div class="row">
        @isset($user)
            <div class="col-12 p-2 text-center border border-dark">
                <div class="p-2">
                    <h5 class="card-title">Name: {{$user->name}}</h5>
                    <h5 class="card-title">Email: {{$user->email}}</h5>
                    <p>Description: {{$user->description}}</p>
                    <p>Email verified at: {{$user->email_verified_at}}</p>
                    <div class="mb-2">
                        <a href="{{route('editUser', [$user])}}">
                            <input type="button" class="btn btn-dark" value="Edit">
                        </a>
                    </div>
                    <form method="POST" action="{{route('deleteUser', [$user])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <input type="submit" class="btn btn-danger delete-user" value="Delete user">
                        </div>
                    </form>
                </div>
            </div>
        @endisset
    </div>
@endsection
