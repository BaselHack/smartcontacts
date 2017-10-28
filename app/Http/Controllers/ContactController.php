<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\StoreContactRequest;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('backend.contact.index')->with(compact('user'));
    }

    public function store(StoreContactRequest $request)
    {

            $contact = new Contact;
            $contact->uuid = uniqid() . base_convert(microtime(false), 10, 36);
            $contact->user_id = Auth::user()->id;

            $contact->firstname = $request->firstname;
            $contact->lastname = $request->lastname;
            $contact->email = $request->email;
            $contact->mobile = $request->country_code . $request->mobile;

            $contact->save();


            try
            {
                $client = new Client([
                    'headers' => [ 'Content-Type' => 'application/json' ]
                ]);

                $response = $client->post(env('CARDDAV_URL') . 'api/create_vcard',
                    ['body' => json_encode(
                        [
                            'uuid' => $contact->uuid,
                            'firstname' => $contact->firstname,
                            'lastname' => $contact->lastname,
                            'email' => $contact->email,
                            'mobile' => $contact->mobile,
                        ]
                    )]
                );
            }
            catch (\Exception $exception)
            {
                //Queue -> LogResponse
            }



            return redirect()->route('backend.contact.index');
    }


    public function update(StoreContactRequest $request, Contact $contact)
    {

        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->mobile = $request->country_code . $request->mobile;

        $contact->save();
        
        try
        {
            $client = new Client([
                'headers' => [ 'Content-Type' => 'application/json' ]
            ]);

            $response = $client->post(env('CARDDAV_URL') . 'api/create_vcard',
                ['body' => json_encode(
                    [
                        'uuid' => $contact->uuid,
                        'firstname' => $contact->firstname,
                        'lastname' => $contact->lastname,
                        'email' => $contact->email,
                        'mobile' => $contact->mobile,
                    ]
                )]
            );
        }
        catch (\Exception $exception)
        {
            //Queue -> LogResponse
        }

        return redirect()->route('backend.contact.index');
    }





}
