<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function loginProcess(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();
            return redirect('');
        }
    }
}
