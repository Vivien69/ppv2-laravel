<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthTokenController extends Controller
{
    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email);

        if(Hash::check($request->password, $user->password)) {
            return response()->json([
                'user' => $user,
                'token' => $user->createToken('API Token of '. $user->name)->plainTextToken
            ]);
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6'
        ]);
        if ($validator->fails())
    {
        return response(['errors'=>$validator->errors()], 422);
    }

        $user = User::where('email', $request->email) ->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token];
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

    public function register (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:3|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()], 422);
        }
        $request['password']=Hash::make($request['password']);
        $request['remember_token'] = Str::random(10);
        $user = User::create($request->toArray());
        return response($user, 200);
    }


    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'Vous avez été déconnecté'];
        return response($response, 200);
    }

}
