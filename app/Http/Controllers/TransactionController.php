<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Validator;

/**
 * @group  TransactionController
 *
 * APIs for managing users
 */
class TransactionController extends Controller
{
    public function transaction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'user_id' => 'required|integer|between:1,10',
            'transaction_id' => 'required|integer|max:10',
            'transaction_date' => 'required|string|between:2,100',
            'transaction_wallet_id' => 'required|integer|between:2,100',
            'type' => 'required|string|between:2,100',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $text = new Transaction();
// update here
        $text->user_id = $user->id;
        // $text->user_id = $request->user_id;
        $text->transaction_id = $request->transaction_id;
        $text->transaction_date = $request->transaction_date;
        $text->transaction_wallet_id = $request->transaction_wallet_id;
        $text->type = $request->type;

        $text->save();
        if ($text->save()) {

            return ['status' => "successfully done"];
        } else {
            return ['status' => "failed"];
        }

    }
}
