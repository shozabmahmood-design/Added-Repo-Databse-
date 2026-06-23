<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function message(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'msg' => 'required',
        ],
        [  
            'firstName.required' => 'Please enter firstName',
            'lastName.required' => 'Please enter lastName',
            'email.required' => 'Please enter email',
            'phone.required' => 'Please enter phone',
            'msg.required' => 'Please enter message',    
        ] 
    );
        $msg = new Message();
        $msg->firstName = $request->firstName;
        $msg->lastName = $request->lastName;
        $msg->email = $request->email;
        $msg->phone = $request->phone;
        $msg->msg = $request->msg;
        $msg->save();

        return redirect('/contact-us')->with('status', 'message sent successfully');
    }

    public function message2(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'msg' => 'required',
        ],
        [  
            'firstName.required' => 'Please enter firstName',
            'lastName.required' => 'Please enter lastName',
            'email.required' => 'Please enter email',
            'phone.required' => 'Please enter phone',
            'msg.required' => 'Please enter message',    
        ] 
    );
        $msg = new Message();
        $msg->firstName = $request->firstName;
        $msg->lastName = $request->lastName;
        $msg->email = $request->email;
        $msg->phone = $request->phone;
        $msg->msg = $request->msg;
        $msg->product_id = $request->product_id;
        $msg->save();

        return redirect('/products')->with('status', 'message sent successfully');
    }
}
