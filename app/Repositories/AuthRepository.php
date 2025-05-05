<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\AuthRepositoryInterface;

class AuthRepository implements AuthRepositoryInterface
{
    public function verifyPassword(User $user, string $password): bool
    {
        return password_verify($password, $user->password);
    }
}