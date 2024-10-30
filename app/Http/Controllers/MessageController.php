<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Contact::all();
        return view('messages.index' , compact('messages'));
    }
    public function delete(request $request, int  $id){
        $message = Contact::find($id);
        $message->delete();
        return redirect( '/messages');
    }
    public function show(request $request, int $id){
        $message = Contact::find($id);

        dd($message->position,
        $message-> experiences,
        $message -> foreign_languages
        );
    }

}
