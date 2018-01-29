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
        return('Exito, Este mensaje Fue Enviado');
        $bulkSms::sendMessage('57'.$data["phone"], 'Señor(a) '. $data['namecli'] . ' Este es un mensaje de prueba');
        //$telefono='+5731088869409';
        /*Twilio::message($telefono , ' Elefantes Rosados ​​y Arco Iris Feliz ');*/
        /*$sid='ACc512ca80a77a939ba77b3c493f998555';
        $token='12804650627a50c828080d0530efad87';
        $from='+56945950224';
        $twilio = new Twilio($sid, $token, $from);
        $twilio::from('twilio')->message('12345', 'Go go go!');
        /*$twilio->message( $telefono , ' Elefantes Rosados ​​y Arco Iris Feliz ' );*/
        /*$mensaje = $client->acount->messages->create(array(
                "From"=>$from,
                "To"=>$telefono,
                "Body"=>"Holaa otro Ejemplo"

        ));
        /*$sdk = Twilio::getTwilio();*/

    	return('Exito, Este mensaje Fue Enviado');
    }
}
