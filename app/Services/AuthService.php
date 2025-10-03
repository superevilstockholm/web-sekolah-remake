<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function hashPassword($password) {
        return Hash::make($password);
    }

    public function checkPassword($password, $hash) {
        return Hash::check($password, $hash);
    }
}
