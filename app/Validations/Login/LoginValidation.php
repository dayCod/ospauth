<?php

namespace App\Validations\Login;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginValidation
{
    public function rules()
    {
        return [
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute Tidak Boleh Kosong',
            'exists' => ':attribute Tidak Ditemukan',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    public function validate($request)
    {
        $result = [];
        $result['status'] = false;

        $request->validate($this->rules(), $this->messages(), $this->attributes());

        $user = User::firstWhere('email', $request->email);

        // Check password is correct
        if (!Hash::check($request->password, $user->password)) {
            $result['message'] = 'Password salah !';
            $result = (object) $result;

            return $result;
        }
        // Validation success
        $result['status'] = true;
        $result['message'] = 'Validasi berhasil !';
        $result = (object) $result;

        return $result;
    }
}
