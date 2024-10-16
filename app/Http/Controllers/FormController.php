<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
        $rules = [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];

        $messages = [
            'name.required' => 'The name field is required.',
            'name.min' => 'The name must be at least 3 characters.',
            'name.max' => 'The name may not be more than 50 characters.',
            'email.required' => 'Please provide an email address.',
            'email.email' => 'Please provide a valid email address.',
            'password.required' => 'A password is required.',
            'password.min' => 'The password must be at least 6 characters.'
        ];

        $customAttributes = [
            'name' => 'full name'
        ];

        $validatedData = $request->validate($rules, $messages, $customAttributes);

        return back()->with('success', 'Form submitted successfully!');
    }
}
?>+