<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Exception;

class UserRepository implements UserRepositoryInterface
{
    public function create(
        string $name,
        string $email,
        string $password,
    ): User {
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();
        return $user;
    }

    public function findByEmail(string $email): User
    {
        $user = User::where('email', $email)->first();
        if ($user) {
            return $user;
        }
        throw new Exception("User with email {$email} not found");        
    }

    public function doesUserExist(string $email): bool
    {
        return User::where('email', $email)->exists();
    }
}