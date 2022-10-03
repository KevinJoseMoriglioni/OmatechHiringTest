<?php namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class UserCreateValidator {
    public static function UserCreateValidate($request){
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'description' => ['required', 'string', 'max:200']
        ]);
    }
}
