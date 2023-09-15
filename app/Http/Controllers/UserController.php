<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 

class UserController extends Controller
{
    //
    function getData(Request $request)
    {
        $request->validate([
            'username' => 'required | max:10',
            'userpassword' => 'required | min:5'

        ]);

        $data = $request->input();
        $request->session()->put('person', $data['username']);
        return redirect('bite');
    }

   
}

