<?php

namespace App\Http\Controllers;

use App\Models\Whatsapp;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
        ]);
        // dd($request->all());

        $mess = new Whatsapp();

        $mess->name = $request->name;
        $mess->email = $request->email;
        $mess->phone = $request->phone;
        $mess->message = $request->message;

        $mess->save();

        return response()->json(['message'=>'message sending....']);
    }
}
