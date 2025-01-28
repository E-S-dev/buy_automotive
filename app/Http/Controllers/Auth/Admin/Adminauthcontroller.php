<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Adminauthcontroller extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(AdminLoginRequest $request): JsonResponse
    {
        $request->authenticate();

        $user = User::where('email', $request->email)->first();

        Auth::login($user);
        
        return response()->json([
            'message' => 'You Logged n successfully!',
            'user' => $user->email,
            'role' => $user->getRoleNames()->first(),
        ], 200);
    }
}
