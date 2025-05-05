<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    public function create(
        string $name,
        string $email,
        string $password,
    );

    public function findByEmail(string $email);
}