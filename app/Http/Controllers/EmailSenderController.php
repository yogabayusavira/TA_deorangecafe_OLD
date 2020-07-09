<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailSenderController extends Controller
{
    public function index()
    {
    $to_name = ‘RECEIVER_NAME’;
    $to_email = ‘RECEIVER_EMAIL_ADDRESS’;
    $data = array(‘name’=>”Ogbonna Vitalis(sender_name)”, “body” => “A test mail”);
    Mail::send(‘emails.mail’, $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)
    ->subject(Laravel Test Mail’);
    $message->from(‘SENDER_EMAIL_ADDRESS’,’Test Mail’);
    }
});
}
