<?php namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class UserEditValidator {
    public static function UserEditValidate($request, $id){
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'description' => ['required', 'string', 'max:200']
        ]);
    }
}
