<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Validator;

class Register extends Controller
{
    //

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function index()
    {

        return user::all();
    }
///Registration function

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|between:2,100',
            'password' => 'required|string|min:6',
            // 'password' => 'required|string|confirmed|min:6',
            'phone_number' => 'required |string|string|min:8',
            'email' => 'required|string|email|max:100|unique:users',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = new user();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;

        if ($user->save()) {
            return ['status' => "Success fully done"];
        }
    }
/// Login Function

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function login(Request $request)
    {
        // dd($request->login());
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // return $this->createNewToken($token);
        return response()->json($token);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        // auth()->logout();

        // return response()->json(['message' => 'User successfully signed out']);
        if (Auth::check()) {

            Auth::logout();

            // return response()
            // ->json(['message' => 'User successfully signed out']);
            // return Redirect::route('home');
            return response()

                ->json(['/login']);

        } else {
            return response()
                ->json(['Failed']);
            // ->withCallback($request->all());
        }
    }

    /**
     * Refresh a token.////// new line of codes
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->createNewToken(auth()->refresh());
    }

/// User_Profile Function

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function userProfile()
    {
        return response()->json(auth()->user());
        // echo "Unauthorized.";
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user(),
        ]);
    }

}
