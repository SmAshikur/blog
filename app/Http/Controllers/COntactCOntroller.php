<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class COntactCOntroller extends Controller
{
    public function contact(){
        return view('Blog.Contact');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('ashikgbcse1@gmail.com')->send(new Contact($data));




        return redirect()->back()->with('status', "Thank you, we'll be in touch soon");
    }
}
