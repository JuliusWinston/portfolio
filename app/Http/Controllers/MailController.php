<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function sendMessage(Request $request){
        Mail::to(env('MAIL_FROM_ADDRESS', 'devwinston35@gmail.com'))->send(new ContactMeMail($request));
        return redirect('/');
    }
}
