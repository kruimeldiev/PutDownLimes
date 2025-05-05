<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public const string NAME = 'name';
    public const string EMAIL = 'email';
    public const string PASSWORD = 'password';

    public function rules(): array
    {
        return [
            self::NAME => 'required|string|max:255',
            self::EMAIL => 'required|string|email|max:255|unique:users',
            self::PASSWORD => 'required|string|min:8|confirmed',
        ];
    }
}