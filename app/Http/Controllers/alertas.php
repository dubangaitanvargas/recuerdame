<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Twilio\sdk\Services\Twilio;

#require '/vendor/autoload.php';
//require homeDir . '/vendor/twilio/sdk/Services/Twilio.php';

use Twilio;
use BulkSms;

class alertas extends Controller
{
    public function alertas()
    {
    	return view('alertas');
    }

    public function sendsms()
    {
        $data = request()->all();
        $bulkSms = new BulkSms('username', 'password', 'baseurl');
        $messageBody = 'ServisGirardot le recuerda Sr(a) '. $data['namecli'] . ' que su ' . $data["product"] . ' vence en 10 Dias. Comuniquese Al 3200000001 para mayor informacion.';
        return($messageBody);
        $bulkSms::sendMessage('57'.$data["phone"], $messageBody );
    	return('Exito, Este mensaje Fue Enviado');
    }
}
