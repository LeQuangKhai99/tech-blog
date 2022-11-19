<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            $user = User::where('email', $request->email)->first();

            return response([
                'message' => 'login successs',
                'token' => $user->createToken($request->email)->plainTextToken
            ], 200);
        }

        return response([
            'message' => 'login fail'
        ], 401);
    }
}
