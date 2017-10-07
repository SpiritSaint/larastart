<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Http\Requests\Api\SignupRequest;
use App\Http\Requests\Api\LoginRequest;

class AuthController extends Controller
{
    public function signup(SignupRequest $request) {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'is_admin' => false,
        ]);
        return response()->json([
            'status' => 'success',
            'user' => $user,
        ]);
    }

    public function login(LoginRequest $request) {
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            $user = User::where('email','=',$request->input('email'))->get();
            return response()->json([
                'status' => 'success',
                'user' => $user,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
            ]);
        }
    }
}
