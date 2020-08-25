<?php

namespace App\Http\Controllers;

use App\TicketTemplate;
use App\User;
use DB;
use Illuminate\Http\Request;
use Validator;

/**
 * @group  Ticket_templateController
 *
 * APIs for managing users
 */
class Ticket_templateController extends Controller
{
    public function ticket_template(Request $request)
    {

        // get the user from the token = id
        $user = auth()->user();

        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'template_title' => 'required|string|between:2,100',
            'template_body' => 'required|string|between:2,100',
            'template_attachment' => 'required|string|between:2,100',
        ]);

        if (\JWTAuth::getToken()) {
            $user = \JWTAuth::parseToken()->toUser();
            // return response()->json($user);

            // else {
            //     return 'not found';
            // }

            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }

            $text = new TicketTemplate(); // The name of the model
            $text->user_id = $user->id;
            $text->template_title = $request->template_title;
            $text->template_body = $request->template_body;
            $text->template_attachment = $request->template_attachment;

            $text->save();
            if ($text->save()) {
                return response()
                    ->json(['Success fully done']);

            } else {
                return response()
                    ->json(['Failed']);
                // ->withCallback($request->all());
            }

        }
    }

//     Retrieving A List Of Column Values

// $roles = DB::table('roles')->lists('title');

// This method will return an array of role titles.
    // You may also specify a custom key column for the returned array:

// $roles = DB::table('roles')->lists('title', 'name');

    public function user_template_request(Request $request)
    {

        $user = auth()->user();

        if (\JWTAuth::getToken()) {
            $user = \JWTAuth::parseToken()->toUser();
            // dd($request->all());
            $user = auth()->user();
            return DB::table('ticket_templates')->pluck('template_title', 'template_body', '');

            // return TicketTemplate::all();
            // return TicketTemplate::pluck('user_id', 'template_title', 'template_body', 'template_attachment');
            // $users = $users->fresh();
        }
    }
    public function index(Request $request)
    {

        // user() is a helper for Auth::user()
        $tickets = user()->tickets()->open()->paginate(4);
        // $users = DB::select('select * from student');
        $users = DB::select('select * from ticket_templates');
        return User::find(1);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function ticket_template_show(Request $request)
    {

        // $validator = Validator::make($request->all(), [
        //     'token' => 'string',

        // ]);
        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 422);
        // }
        // // dd($request->all());
        // if (!$token = auth()->attempt($validator->validated())) {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }

        $user = auth()->user();

        return response()->json([
            $ticket_templates = TicketTemplate::find($user)]);

    }

    // public function ticket_template_show($id)
    // {
    //     // dd($request->all());

    //     // $users = DB::select('select * from ticket_templates');
    //     // $users = DB::select(['select * from ticket_templates where id = ?'], [$id]);

    //     // If the ticket does not belong to the logged in user, abort
    //     if ($ticket->user_id != user()->id) {
    //         abort(403, 'This is not your ticket');
    //     }
    //     return response()->json(auth()->user());
    //     echo $this->hasMany(Ticket::class);
    // }

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
