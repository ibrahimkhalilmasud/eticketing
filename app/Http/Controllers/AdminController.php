<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

/**
 * @group  AdminController
 *
 * APIs for managing users
 */

/**
 * Complete the registration of the User
 *
 * @param  \Illuminate\Http\Request $request
 * @return \Illuminate\Http\Response
 */
class AdminController extends Controller
{
    //
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['Admin_login', 'Admin_register']]);
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function Admin_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|between:2,100',
            'password' => 'required|string|min:6',
            'password' => 'required|string|min:8',
            'email' => 'required|string|email|max:100|unique:users',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;

        if ($user->save()) {

            return response()->json([
                'User successfully registered'], 201);
        }
    }

    public function Admin_login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        // dd($request->all());
        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // return $this->createNewToken($token);
        return response()->json($token);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'User successfully signed out']);

    }

    // public function edit(User $user)
    // {
    //     abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    //     $roles = Role::all()->pluck('username', 'id');

    //     $user->load('roles');

    //     return response(compact('roles', 'user'));
    // }

    // public function destroy(User $user)
    // {
    //     abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    //     $user->delete();

    //     return back();
    // }

    public function getTokenFromUserObject()
    {$user = User::first();
        $token = JWTAuth::fromUser($user);
        return $this->respondWithToken($token);}

/// Add the fountain from TemplateController
    public function list_of_all_user_ticket()
    {

    }

}
