<?php

namespace App\Http\Controllers\Api;

use App\Contact;
use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{


    public function makefriends($email, $friend)
    {
        try {

           /* $contact = Contact::where('uuid', '=', $uuid)->first();*/


            $friend = User::where('email', '=', $friend)->first();

            $contact = Contact::where('user_id','=',$friend->id)->first();

            $user = User::where('email', '=', $email)->first();

            $user->hasManyContacts()->attach($contact);

            if (env('CARDDAV_STATUS')) {

                try
                {

                    $client = new Client([
                        'headers' => [ 'Content-Type' => 'application/json' ]
                    ]);

                    $response = $client->post(env('CARDDAV_URL') . 'api/make_friends',
                        ['body' => json_encode(
                            [
                                'email' => $user->email,
                                'uuid' => $contact->uuid,
                            ]
                        )]
                    );

                }
                catch (\Exception $exception)
                {

                }
            }

            return redirect()->route('frontend.makefriend.success');

        }
        catch (\Exception $e)
        {

            return response()->json([
            ], 409);
        }

    }
}
