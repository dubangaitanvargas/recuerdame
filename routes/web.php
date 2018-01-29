<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'pagesController@home');

Route::get('/dashboard','Dashboard@dashboard');

Route::get('/login', 'pagesController@login');

Route::get('/alertas', 'alertas@alertas');

Route::post('/alertas', 'alertas@sendsms');


/*Route::post('/alertasSms', function()
{
  // Get form inputs
  $number = Input::get('phoneNumber');
  $message = Input::get('message');
 
  // Create an authenticated client for the Twilio API
  $client = new Services_Twilio($_ENV['TWILIO_ACCOUNT_SID'], $_ENV['TWILIO_AUTH_TOKEN']);
 
  try {
    // Use the Twilio REST API client to send a text message
    $m = $client->account->messages->sendMessage(
      $_ENV['TWILIO_NUMBER'], // the text will be sent from your Twilio number
      $number, // the phone number the text will be sent to
      $message // the body of the text message
    );
  } catch(Services_Twilio_RestException $e) {
    // Return and render the exception object, or handle the error as needed
    return $e;
  };
 
  // Return the message object to the browser as JSON
  return view('alertas');
});*/
