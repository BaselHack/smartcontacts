<?php

namespace App\Http\Controllers\Api;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function makefriends(Request $request)
    {
        $contact = Contact::where('uuid','=',$request->uuid)->first();

        $user = User::where('email','=',$request->email)->first();

        $user->hasManyContacts()->attach($contact);
        
        return response()->json([
        ], 204);

    }


}
