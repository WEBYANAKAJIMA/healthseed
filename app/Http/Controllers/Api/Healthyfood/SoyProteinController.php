<?php

namespace App\Http\Controllers\Api\Healthyfood;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Log;
use Mail;

class SoyProteinController extends Controller
{

    public function contact(Request $request)
    {

        //$responseToken = $request->responseToken;

        try {
            // reCAPTCHA機能
            /*
            $client = new Client;
            $response = $client->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'form_params' =>
                    [
                        'secret' => env('MIX_RECAPTCHA_SECRET'),
                        'response' => $responseToken
                    ]
                ]
            );*/
            
            //$results = json_decode($response->getBody(), true);

            //if($results['success']){

                // 送信メールのパラメータ設定
                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'meetingType' => $request->meetingType,
                    'contactContent' => $request->contactContent
                ];
                $client = [
                    'name' => $request->name,
                    'email' => $request->email,
                ];
                $admin1 = [
                    'name' => env('MAIL_FROM_NAME', '中嶋弘太'),
                    'email' => env('MAIL_USERNAME', 'health.seed.site@gmail.com'),
                ];
                $admin2 = [
                    'name' => '中嶋弘太',
                    'email' => 'k.nakajima.hightwo@gmail.com',
                ];
                // 依頼元に受領メールを送信
                Mail::send('emails.toSoyProteinCustomer', $data, function($message) use($client){
    	            $message->to($client['email'])
                       ->subject('説明会実施依頼受付のご案内');
                });
        
                // 管理者に受領メールを送信
                Mail::send('emails.toSoyProteinAdmin', $data, function($message) use($admin1){
    	            $message->to($admin1['email'])
                        ->subject('説明会実施依頼受付の連絡');
                });
                Mail::send('emails.toSoyProteinAdmin', $data, function($message) use($admin2){
    	            $message->to($admin2['email'])
                        ->subject('説明会実施依頼受付の連絡');
                });

                return $return = ['status' => "OK"];

            //} else {
                //return $return = ['status' => "NG"];
            //}

        } catch ( Exception $ex ) {
            return $return = ['status' => "NG", 
                   'message' =>$ex->getMessage()];
        }
    }

}
