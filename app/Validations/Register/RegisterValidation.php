<?php

namespace App\Validations\Register;

use App\Models\User;

class RegisterValidation
{
    /**
     * Store validation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return  ArrayObject
     */

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute Tidak Boleh Kosong',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nama',
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
        if ($user) {
            $result['status'] = false;
            $result['errors'] = 'Email sudah terdaftar';
            return (object) $result;
        }

        // Validation success
        $result['status'] = true;
        $result['message'] = 'Validasi berhasil';
        $result = (object) $result;

        return $result;
    }
}
