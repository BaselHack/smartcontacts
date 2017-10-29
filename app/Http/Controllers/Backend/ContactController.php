<?php

namespace App\Http\Controllers\Backend;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::where('user_id', '=', Auth::user()->id)->first();

        return view('backend.contact.index')->with(compact('contact'));
    }

    public function create()
    {
        $contact = Contact::where('user_id', '=', Auth::user()->id)->first();


        return view('backend.contact.create')->with(compact('contact'));
    }


    public function edit(Contact $contact)
    {

        return view('backend.contact.edit')->with(compact('contact'));
    }

    public function store(StoreContactRequest $request, Contact $contact)
    {

        $contact = new Contact;
        $contact->uuid = uniqid() . base_convert(microtime(false), 10, 36);
        $contact->user_id = Auth::user()->id;

        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->mobile = $request->mobile;

        $contact->save();


        if (env('CARDDAV_STATUS')) {

            try {
                $client = new Client([
                    'headers' => ['Content-Type' => 'application/json']
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
            } catch (\Exception $exception) {
                //Queue -> LogResponse
            }
        }


        return redirect()->route('backend.contact.index');
    }


    public function update(StoreContactRequest $request, Contact $contact)
    {

        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->mobile = $request->mobile;

        $contact->save();

        if (env('CARDDAV_STATUS')) {

            try {
                $client = new Client([
                    'headers' => ['Content-Type' => 'application/json']
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
            } catch (\Exception $exception) {
                //Queue -> LogResponse
            }
        }


        return redirect()->route('backend.contact.index');
    }


}
