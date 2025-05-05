<?php

namespace App\Services;

use App\Repositories\AuthRepository;
use App\Repositories\UserRepository;

class AuthService
{
    public function __construct(
        protected AuthRepository $authRepository,
        protected UserRepository $userRepository
    ) {
    }

    public function handleLoginRequest($request)
    {
        $user = $this->userRepository->findByEmail($request->email);
        $credentialsValid = false;
        if ($user && $this->authRepository->verifyPassword($user, $request->password)) {
            $credentialsValid = true;
        }
        if ($credentialsValid) {
            return response()->json(['message' => 'User validated. TODO: handle auth tokens'], 200);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }
}