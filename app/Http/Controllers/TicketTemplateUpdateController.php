<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use DB;
use Illuminate\Http\Request;
use Validator;

class TicketTemplateUpdateController extends Controller
{

    public function index(Request $request)
    {
        // $users = DB::select('select * from student');
        $users = DB::select('select * from ticket_templates');
        return User::find(1);
    }

    public function ticket_template_show($id)
    {
        // dd($request->all());

        // $users = DB::select('select * from ticket_templates');
        $users = DB::select('select * from ticket_templates where id = ?', [$id]);
        return response()->json(auth()->user());

    }

    public function ticket_template_update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'template_title' => 'required|string|between:2,100',
            'template_body' => 'required|string|between:2,100',
            'template_attachment' => 'required|string|between:2,100',

        ]);
        if (\JWTAuth::getToken()) {
            $user = \JWTAuth::parseToken()->toUser();
            // return response()->json($user);
            // return response()->json('here');
        } else {
            // return response()->json($user);
            return 'not found';
        }

        $returnValue = DB::table('ticket_templates')
            ->where('id', '=', $request['user_id'])
            ->update([
                'template_title' => $request['template_title'],
                'template_body' => $request['template_body'],
                'template_attachment' => $request['template_attachment'],
            ]);

        echo "Record updated successfully.";

        // https://stackoverflow.com/questions/38551397/laravel-dbupdate-only-return-0-or-1

        // dd($request->all());
        // dd($request->token);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors()->toJson(), 400);
        // }

        // $text = new TicketTemplate();
        // // update here
        // $text->user_id = $user->id;
        // $text->template_id = $request->template_id;
        // $text->template_title = $request->template_title;
        // $text->template_body = $request->template_body;
        // $text->template_attachment = $request->template_attachment;

        // $text->save();
        // if ($text->save()) {

        //     return ['status' => "successfully done"];

        // } else {
        //     return ['status' => "failed"];
        // }
    }

    // public function list_for_all(Request $request)
    // {

    //     return TicketTemplate::all();

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
