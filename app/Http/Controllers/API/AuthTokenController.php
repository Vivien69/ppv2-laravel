<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;

class AuthTokenController extends Controller
{
    
    public function authenticat(Request $request)
    {
        $user = User::where('email', $request->email);

        if(Hash::check($request->password, $user->password)) {
            return response()->json([
                'user' => $user,
                'token' => $user->createToken('API Token of '. $user->name)->plainTextToken
            ]);
        }
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email) ->first();

        if ($user) {
            //if ($request->authenticate()) {
                if(Hash::check($request->password, $user->password)) {
                $token = $user->createToken('API Token of '. $user->name)->plainTextToken;

                $response = ['token' => $token, 'user' =>  $user->only(['id', 'name', 'email', 'created_at', 'updated_at', 'content', 'role'])];
                return response($response, 200);
            } else {
                $response = ["message" => "Mot de passe incorrect"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'Utilisateur inconnu'];
            return response($response, 422);
        }
    }

    public function register (RegisterRequest $request) {
        $request['password'] = Hash::make($request['password']);
        $request['remember_token'] = Str::random(10);
        $user = User::create($request->toArray());

        $token = $user->createToken('API Token of '. $user->name)->plainTextToken;

        $response = ['token' => $token, 'user' => $user];
        return response($response, 200);
    }


    public function logout (Request $request) {
        $user = $request->user();
        $user->currentAccessToken()->delete();
        $response = ['message' => 'Vous avez été déconnecté'];
        return response($response, 200);
    }

    public function userInfo() 
    {
     $user = auth()->user();
     return response()->json(['user' => $user], 200);
    }

}
