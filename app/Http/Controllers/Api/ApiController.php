<?php

namespace App\Http\Controllers\Api;

use App\Contact;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{


    public function makefriends($email, $uuid)
    {
        try {

            $contact = Contact::where('uuid', '=', $uuid)->first();

            $user = User::where('email', '=', $email)->first();

            $user->hasManyContacts()->attach($contact);

            return redirect()->route('frontend.makefriend.success');

        }
        catch (\Exception $e)
        {

            return response()->json([
            ], 409);
        }

    }
}
