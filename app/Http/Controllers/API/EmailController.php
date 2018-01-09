<?php

namespace App\Http\Controllers;

use App\Events\SendEmailEvent;
use App\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * 1.- Enviar mensaje de recibido al usuario
     * 2.- Enviar mensaje del contacto al admin
     */
    public function newContactMessage(Request $request)
    {
        $mail = new Mail();
        $mail->id = $request->id;
        $mail->sender = ['email' => 'admin@alemanisch.xyz', 'name' => 'Alemanisch'];
        $mail->recipient = ['email' => $request->email, 'name' => $request->name];
        $mail->subject = $request->subject;
        $mail->content = $request->message;
        $mail->template = 'mail.toSender';

        event(new SendEmailEvent($mail));
    }
}
