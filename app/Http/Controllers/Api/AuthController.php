<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password'=> 'required|min:6|confirmed'
        ]);

        $user = User:: create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
        ]);

        $user->roles()->attach(1);

        return response()->json($user, 200);
    }

    public function login(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        $credentials = request(['email', 'password']);
        if(!auth()->attempt($credentials)){
            return response()->json([
                'message'=> 'Invalid credentials',
                'error'=> 'Unauthorized Person'
            ], 422);
        }

    $user = User::where('email', $request->email)->first();
    $authToken = $user->createToken('auth-token')->plainTextToken;

    return response()->json([
        'access_token'=> $authToken
    ]);
    }


}
