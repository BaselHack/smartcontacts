<?php

namespace App\Http\Controllers\Frontend;

use App\Form;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormRequest;

class FormController extends Controller
{

    public function subscribe(StoreFormRequest $request)
    {
        $meta = array('tags' => ['BaselHack','2017','BaselHack2017','Basel']);

        $form = new Form;

        $form->name = $request->name;
        $form->email = $request->email;
        $form->meta = json_encode($meta);

        $form->save();

        return redirect()->route('frontend.home.index');
    }

}
