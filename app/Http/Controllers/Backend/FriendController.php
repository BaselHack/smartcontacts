<?php

namespace App\Http\Controllers\Backend;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $contacts = Contact::where('user_id','!=', Auth::user()->id)->get();

        return view('backend.friends.index')->with(compact('user','contacts'));
    }

    public function add(Request $request)
    {
        $contact = Contact::where('id','=',$request->contacts)->first();

        $user =  Auth::user();

        $user->hasManyContacts()->attach($contact);


        if(ini_set('max_execution_time', 200))
        {
           /* try
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

            }*/
        }


        return redirect()->route('backend.friends.index');

    }
}
