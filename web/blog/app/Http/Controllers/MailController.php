<?php

namespace App\Http\Controllers;


use App\Mail\CustomerReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class MailController extends Controller
{
    //
    public function MailSender(Request $request)
    {
      // code...
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $AdminMail = 'meenkc@suttikan.co.th';

        if($name && $email && $subject && $message){
            Mail::to( $AdminMail )->send( new CustomerReport( $name , $subject , $email , $message ) );
            return Response::json("ส่งจดหมาย เรียบร้อย", 200);
        }else{
            return Response::json("Email not send", 404);
        }

    }
}
