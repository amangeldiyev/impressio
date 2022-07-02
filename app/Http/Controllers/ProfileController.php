<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Return user data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show()
    {
        return request()->user();
    }

    /**
     * Update user profile data
     *
     * @param UpdateProfileRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(UpdateProfileRequest $request)
    {
        $validated = $request->validated();

        $request->user()->update($validated);

        return response()->json([
            'success' => true
        ]);
    }
}
