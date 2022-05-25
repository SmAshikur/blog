<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class COntactCOntroller extends Controller
{
    public function contact(){
        return view('Blog.Contact');
    }
}
