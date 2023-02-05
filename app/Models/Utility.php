<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Twilio\Rest\Client;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    public static function send_twilio_msg($to, $msg)
    {

        try
        {
            $account_sid    = 'AC950eca6a9bb8e8301ca858d7d207d6a9';

            $auth_token = 'b667ef9d469ba5b36c6ce045d59cfc5f';

            $twilio_number ='+13858992428';

            $client = new Client($account_sid, $auth_token);
            $str_to = substr($to, 0, 1);
            if($str_to != '+'){
                $to = '+91'.$to;
            }
            $client->messages->create($to, [
                'from' => $twilio_number,
                'body' => $msg]) ;
        }
        catch(\Exception $e)
        {
            //dd($e);
            return $e;
        }


    }
}
