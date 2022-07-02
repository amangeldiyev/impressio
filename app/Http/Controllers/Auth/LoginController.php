<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Handle an incoming login request
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     *
     * @unauthenticated
     */
    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
    
        $user = User::where('email', $validated['email'])->first();
    
        if (! $user || ! Hash::check($validated['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'success' => true,
            'user' => $user,
            'token' => $user->createToken($validated['device_name'])->plainTextToken
        ]);
    }
}
