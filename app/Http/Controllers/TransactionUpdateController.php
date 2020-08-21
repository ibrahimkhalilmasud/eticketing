<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionUpdateController extends Controller
{
    public function transaction_update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required|integer|max:10',
            'transaction_date' => 'required|string|between:2,100',
            'transaction_wallet_id' => 'required|integer|between:2,100',
            'type' => 'required|string|between:2,100',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $text = Update(Transaction());
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
