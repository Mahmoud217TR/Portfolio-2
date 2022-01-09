<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    //
    public function store(){
        $data = request()->validate([
            'fullname'  => 'required',
            'subject'   => 'required',
            'email'     => ['required','email'],
            'message'   => 'required'
        ]);
        Message::create($data);
        return back();
    }
}
