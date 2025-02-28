<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Mail;

class UsersController extends Controller
{
    public function sendEmail(){
        $data['code']=rand(1000,9999);
        $to="omartadeo648@outlook.com";
        $subject="codigo de verificacion";
        Mail::send('mails.verification',$data, function($massage) use ($to,$subject){
            $massage->to($to,'Mi tienda Online')
            ->subject($subject);
            $massage->from('omartadeo648@outlook.com','Test');
        });
        echo "Se envio el correo";
    }
}
