<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redirectController extends Controller
{
    function redirect(Request $request){
        session()->flash('message','You are trying flash message');
        return redirect('/flashmsg');
    }
    function formSubmit(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' =>  'required|min:8',
            'password_conformation' => 'required|same:password'

        ]);
        return response('Form submitted successfully');
    }

}
