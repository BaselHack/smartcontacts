<?php

namespace App\Http\Controllers\Api;

use App\Contact;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function login(Request $request)
    {
            $data = $request->all();

            $user = User::where('email','=',$data['email'])->first();
        
            return response()->json([

                'uuid' => $user->contact->first()->uuid

            ], 200);

    }



    public function makefriends(Request $request)
    {
        try
        {
            $data = $request->all();

            $contact = Contact::where('uuid','=',$data['uuid'])->first();

            $user = User::where('email','=',$data['email'])->first();

            $user->hasManyContacts()->attach($contact);

            return response()->json([
            ], 200);
        }
        catch (\Exception $e)
        {

            return response()->json([
            ], 409);
        }

    }
}
