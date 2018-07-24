<?php

namespace App\Http\Controllers;


use App\Mail\CustomerReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function MailSender(Request $request)
    {
      // code...
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required',
//            'subject' => 'required',
//            'message' => 'required'
//
//        ]);
//        $data = [
//            'name' => $request->name,
//            'email' => $request->email,
//            'subject' => $request->subject,
//            'BodyMessage' => $request->message
//        ];
//        Mail::send('suttikan.mail',$data,function ($message) use ($data){
//            $message->from('tyamdej@gmail.com','จดหมายจากผู้ใช้');
//            $message->to($data['email']);
//            $message->subject($data['subject']);
//        });
//        Mail::to(env('MAIL_USERNAME'))
//            ->send(new OrderShipped($data));

//        dd($request->email);
//        Mail::to($request->email)->send(new OrderShipped('tyamdej@gmail.com'));


//        Mail::send('suttikan.mail', ['name' => $name, 'email' => $email, 'subject' => $subject ,'message' => $message], function ($message)
//        {
//
//            $message->from('tyamdej@gmail.com', 'ADMIN SUTTIKAN ENGINEERING');
//
//            $message->to('tyamdej@gmail.com');
//
//            $message->subject('ทดสอบระบบ');
//
//        });

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $AdminMail = 'tyamdej@gmail.com';
        Mail::to( $AdminMail )->send( new CustomerReport( $name , $subject , $email , $message ) );

//        return response()->json(['message' => 'Request completed']);
        toast('ส่งจดหมาย เรียบร้อย','success','top-right');
        return redirect()->route('contact');
    }
}
