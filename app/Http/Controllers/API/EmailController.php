<?php

namespace App\Http\Controllers;

use App\Events\SendEmailEvent;
use App\Mail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * 1.- Enviar mensaje de recibido al usuario
     * 2.- Enviar mensaje del contacto al admin
     */
    public function newContactMessage(Request $request)
    {
        $this->sendToSender($request)->sendToAdmin($request);
        return response()->json(['message' => 'Tu correo ha sido enviado'], 200);
    }

    public function sendToSender($request)
    {
        $mail = new Mail();
        $mail->id = $request->id;
        $mail->sender = ['email' => 'noreply@alemanisch.xyz', 'name' => 'Alemanisch'];
        $mail->recipient = ['email' => $request->email, 'name' => $request->name];
        $mail->subject = ['sender' => $request->subject, 'recipient' => 'Correo recibido | Alemanisch'];
        $mail->content = $request->message;
        $mail->template = 'mail.toSender';
        $mail->timestamp = Carbon::now()->format("F j, Y, g:i a");

        event(new SendEmailEvent($mail));

        return $this;
    }

    public function sendToAdmin($request)
    {
        $mail = new Mail();
        $mail->id = $request->id;
        $mail->sender = ['email' => 'noreply@alemanisch.xyz', 'name' => 'Alemanisch'];
        $mail->recipient = ['email' => 'admin@alemanisch.xyz', 'name' => 'Administrador'];
        $mail->user = ['email' => $request->email, 'name' => $request->name];
        $mail->subject = ['sender' => $request->subject, 'recipient' => 'Alemanisch | Nuevo correo de contacto'];
        $mail->content = $request->message;
        $mail->template = 'mail.toAdmin';
        $mail->timestamp = Carbon::now();
        event(new SendEmailEvent($mail));

        return $this;
    }
}
