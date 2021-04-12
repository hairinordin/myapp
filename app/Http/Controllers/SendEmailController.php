<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SendEmailController extends Controller
{
    //
    public function index(){

        $data['name'] = "Ahmad Farid";
        $data['age'] = "27";

        Mail::send('view_mail',$data,function($message){
            //$message->sent()
            $message->to('farid@test.com');
            $message->cc(['test1@test.com','test2@test.com']);
            $message->subject('Testing Email from laravel 8');
        });

        dd('Mail Send Succesfully');
    }
}
