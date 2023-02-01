<?php

namespace App\Service\Login;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Service\Login\LoginInterface;
use App\Validations\Login\LoginValidation;

class LoginService implements LoginInterface
{
    public function login($request)
    {
        $status = false;

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            $status = true;

            $users = User::firstWhere('id', auth()->user()->id);
        }

        $result = (object) [
            'status' => $status,
        ];

        return $result;
    }
}
