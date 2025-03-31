<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function showForm()
    {
        return view('register');
    }
    public function handleForm(Request $request)
    {
        $validatedData = $request->validate(
            [
                'fname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'Kevinpassword' => 'required|string|min:8|confirmed',
            ],
            [
                'fname.required' => 'The first name is required.',
                'fname.string' => 'The first name must be a string.',
                'fname.max' => 'The first name may not be greater than 255 characters.',

                'lname.required' => 'The last name is required.',
                'lname.string' => 'The last name must be a string.',
                'lname.max' => 'The last name may not be greater than 255 characters.',

                'email.required' => 'The email address is required.',
                'email.email' => 'The email address must be a valid email format.',
                'email.max' => 'The email address may not be greater than 255 characters.',

                'Kevinpassword.required' => 'The password is required.',
                'Kevinpassword.string' => 'The password must be a string.',
                'Kevinpassword.min' => 'The password must be at least 8 characters.',
                'Kevinpassword.confirmed' => 'The password confirmation does not match.',
            ]
        );
        return view('success', ['data' => $validatedData]);
    }
}
