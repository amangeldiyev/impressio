<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle an incoming registration request
     *
     * @param RegistrationRequest $request
     * @return \Illuminate\Http\JsonResponse
     *
     * @bodyParam email string required Must be a valid email address.
     * @bodyParam password string required Must be between 8 and 50 characters.
     * @bodyParam password_confirmation string required Must match 'password' field
     * @bodyParam device_name string required Name of device. Ex: 'iphone', 'tablet', etc.
     * @unauthenticated
     */
    public function register(RegistrationRequest $request)
    {
        $validated = $request->validated();

        $user = User::create($validated);

        return response()->json([
            'success' => true,
            'user' => $user,
            'token' => $user->createToken($validated['device_name'])->plainTextToken
        ]);
    }
}
