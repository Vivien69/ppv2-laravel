<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
            $user = $user->only(['id', 'name', 'email', 'created_at', 'updated_at', 'content', 'role']);
            return response()->json($user);
       
    }

    public function showPrivate(Request $request)
    {
        //Récupération de l'user à partir du token
          $token = \Laravel\Sanctum\PersonalAccessToken::findToken($request->token);
          $user = $token->tokenable;

          return response()->json($user);
    }


    public function profil(Request $request, User $user)
    {
        $user = User::where('name', $request->name) ->first();
        $user = $user->only(['id', 'name', 'email', 'created_at', 'updated_at', 'content', 'role']);
        return response()->json($user);
    }


    public function role(Request $request,  User $user)
    {
        $token = \Laravel\Sanctum\PersonalAccessToken::findToken($request->token);
        $user = $token->tokenable;
        return response()->json($user->only(['role']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required','string','email','max:255',Rule::unique('users')->ignore($user->id),
            'content' => 'string|min:5',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()], 422);
        }
        
        $user->update([
            'email' => $request->email,
            'content' => $request->content
        ]);

        return response( $user->only('content', 'email'), 200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json();
    }
}
