<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;



class AuthController extends Controller
{
    public function register(Request $request){

        $fields = $request->validate([

                'name' => 'required|string',
                'email' => 'required|string|unique:users,email',
                'password' => 'required|string|confirmed'
        ]);

        $user = User::create(
            [
                'name' => $fields['name'],
                'email' => $fields['email'],
                'password' => bcrypt($fields['password'])
            ]
        );

        $token = $user ->createToken('myapptoken')->plainTextToken;

        $respose = [
                'User' => $user,
                'Token' => $token
        ];

        return response($respose,201);


    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();
    return response()->json([
        'message' => 'Successfully logged out'
    ]);

    }
}
