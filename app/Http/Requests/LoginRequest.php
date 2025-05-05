<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public const string EMAIL = 'email';
    public const string PASSWORD = 'password';

    public function rules(): array
    {
        return [
            self::EMAIL => 'required|string|email|max:255',
            self::PASSWORD => 'required|string|min:8',
        ];
    }
}