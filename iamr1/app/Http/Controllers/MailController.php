<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
        $viewData["title"] = "Nous Contacter";
        return view('contact')->with('viewData', $viewData);
    }

    public function send_email(Request $request) {
        $data = array(
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'content'=> $request->message,
        );
        Mail::send('mail', $data, function($message) use ($request){
           $message->to('lupeteplacide@gmail.com', 'Message de contact')->subject
              ($request->subject);
           $message->from($request->email, $request->name) ;
        });
        return redirect()->back()->with('success', 'Merci de nous avoir contacté !');
    }

    public function attachment_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
           $message->to('abc@gmail.com', 'Tutorials Point')->subject
              ('Laravel Testing Mail with Attachment');
           $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
           $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
           $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}
