<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;
use App\Mail\MessageMail;

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
        
        try {
            Message::create($data);
            Mail::to('mahmoud17tr@gmail.com')->send(new MessageMail($data));
            session()->flash('message-type','success');
            session()->flash('message-title','Your Message Has been sent');
            session()->flash('message','Thanks for contacting me we will be in touch!');
        } catch (\Exception $e) {
            session()->flash('message-type','danger');
            session()->flash('message-title','Your Message wasn\'t sent');
            session()->flash('message',$e->getMessage());
        }finally{
            return back();
        }
    }
}
