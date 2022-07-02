<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Handle an incoming logout request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        request()->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
