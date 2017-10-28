<?php

namespace App\Http\Controllers;

use App\Contact;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        $user = Auth::user();

        return view('backend.friends.index')->with(compact('user','contacts'));
    }

    public function update(Request $request)
    {
        $contact = Contact::where('id','=',$request->contacts)->first();

        try
        {

            $client = new Client([
                'headers' => [ 'Content-Type' => 'application/json' ]
            ]);

            $response = $client->post(env('CARDDAV_URL') . 'api/make_friends',
                ['body' => json_encode(
                    [
                        'email' => Auth::user()->email,
                        'uuid' => $contact->uuid,
                    ]
                )]
            );

        }
        catch (\Exception $exception)
        {

        }

        return redirect()->route('backend.friends.index');

    }
}
