<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required',
            'dob' => 'required|date',
            'birth_place' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'city' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'postal_code' => 'required|string|max:5',
            'address' => 'required|string',
            'position' => 'required|string',
            'foreign_languages' => 'required|string',
            'experiences' => 'required|string',
        ]);

        Contact::create($validatedData);
        return redirect()->route('success')->with('message', 'Başarıyla kaydedildi!');
    }

}
