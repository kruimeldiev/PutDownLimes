<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    public function __construct(
        protected UserRepository $userRepository,
    ) {
    }

    public function register($userRequest)
    {
        if ($this->userRepository->doesUserExist($userRequest->email)) {
            // TODO: Error handling
            throw new \Exception('Email already exists');
        }
        $user = $this->userRepository->create(
            name: $userRequest->name,
            email: $userRequest->email,
            password: $userRequest->password
        );
        return [
            'message' => 'User registered successfully',
            'user' => $user,
        ];
    }
}