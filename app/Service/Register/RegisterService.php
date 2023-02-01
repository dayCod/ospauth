<?php

namespace App\Service\Register;

use App\Models\User;
use App\Service\Register\RegisterInterface;
use App\Validations\Register\RegisterValidation;

class RegisterService implements RegisterInterface
{
    public function register($data)
    {
        $data['password'] = bcrypt($data['password']);

        return User::create($data);
    }
}
