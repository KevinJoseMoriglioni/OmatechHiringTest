@extends('layouts.dashboard')

@section('contentCardBody')
    <div class="row">
        @isset($user)
            <div class="col-12 p-2 text-center border border-dark">
                <div class="p-2">
                    <form method="POST" action="{{route('editUser', [$user])}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="row mb-3 m-0">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ !empty(old('name'))?old('name'):$user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 m-0">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ !empty(old('email'))?old('email'):$user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 m-0">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                            <div class="col-md-6">

                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus cols="30" rows="10">
                                    {{ !empty(old('description'))?old('description'):$user->description }}
                                </textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 m-0">
                            <div class="col-md-6 offset-md-4 text-center">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endisset
    </div>
@endsection
