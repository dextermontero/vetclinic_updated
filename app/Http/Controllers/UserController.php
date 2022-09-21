<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;

class UserController extends Controller
{
    public function login(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($data)){
            return redirect('/dashboard')->with('message', 'Welcome back!');
        }

        return back()->withErrors('login', 'Invalid Credentials');
    }
    public function registration(Request $request){
        $code = random_int(100000, 999999);

        $data = $request->validate([
            'firstname' => ['required', 'min:2', 'alpha'],
            'lastname' => ['required', 'min:2', 'alpha'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:8'
        ]);

        $data['password'] = \bcrypt($data['password']);

        $userLogin = User::create([
            'email' => $data['email'],
            'password' => $data['password'],
            'verification_code' => $code
        ]);

        $userData = UserData::create([
            'uid' => $userLogin['id'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email']
        ]);

        return redirect()->route('verify', ['id' => $userLogin['id']]);
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    //
/*     public function login(Request $request){

        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($data)){
            //$request->session()->regenarate();
            return redirect('/blogs')->with('message', 'Hello World');
        }

        return back()->withErrors('login', 'Invalid Credentials')->onlyInput('email');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function Registration(Request $request){

        $code = random_int(10000, 999999);

        $userdata = $request->validate([
            "firstname" => ['required', 'min:4', 'alpha'],
            "lastname" => ['required', 'min:2', 'alpha'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:8'
        ]);

        $userdata['password'] = \Hash::make($userdata['password']);

        $reg = UserLogin::create([
            'email' => $userdata['email'],
            'password' => $userdata['password'],
            'verification_code' => $code
        ]);

        $user = User::create([
            'uid' => $reg['id'],
            'firstname' => $userdata['firstname'],
            'lastname' => $userdata['lastname'],
            'email' => $userdata['email'],
        ]);
        auth()->login($reg);
    }
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

    public function Registration(Request $request){
        $data = $request->validate([
            "firstname" => ['required', 'min:4'],
            "lastname" => ['required', 'min:2'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:8'
        ]);

        $data['password'] = bcrypt($data['password']);
        $login = User::create($data);
        dd($login);
    } */
}
