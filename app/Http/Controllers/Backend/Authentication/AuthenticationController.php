<?php

namespace App\Http\Controllers\Backend\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('authentication.loginform');
    }
    public function login(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        $credentials = $request->only('email', 'password');

            $user=User::where('email',$request->email)->where('password',sha1($request->password))->first();
            // dd($user);

            if($user){
                return redirect()->intended('dashboard')
                        ->with('success', 'Signed in Successfully');
            }
            else{
                return redirect()->intended('login')
                ->with('error', 'Email or password error'); 
            }

        // if (Auth::attempt($credentials)) {
        //     dd('true');
        //     return redirect()->intended('dashboard')
        //         ->with('success', 'Signed in Successfully');
        // }
        // else{
        //     dd('false');
        // }

        return redirect("login")->with('error', 'Login details are not valid');
    }
}