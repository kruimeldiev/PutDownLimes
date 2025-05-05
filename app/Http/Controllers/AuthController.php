<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Services\UserService;

class AuthController extends Controller
{
    // TODO: Add authentication logic
    public function __construct(
        protected AuthService $authService,
        protected UserService $userService
    ) {
        // Constructor injection
    }

    // Login page
    public function goToLoginPage()
    {
        return view('auth.login');
    }

    // Register page
    public function goToRegister()
    {
        return view('auth.register');
    }

    public function loginUser(Request $request)
    { 
        $loginResponse = $this->authService->handleLoginRequest($request);
        return response()->json($loginResponse, 200);
    }

    public function registerUser(Request $request)
    {
        $response = $this->userService->register($request);
        return response()->json($response, 201);
    }
}
