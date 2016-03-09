<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;
use Validator;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function postForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'                 => 'required|max:35|min:2',
            'phone'                => 'required|max:15',
            'email'                => 'required|email|max:100|unique:users',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $form            = new Form;
        $form->name      = $request->name;
        $form->telephone = $request->phone;
        $form->email     = $request->email;
        $form->save();

        return redirect('/');
    }
}
