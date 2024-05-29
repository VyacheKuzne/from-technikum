<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login_user(Request $req){
        if(Auth::check()){
            return redirect()->intended(route('log_in.index'));
        }
       
        $formsFields = $req->only(['email', 'password']);
        if(Auth::attempt($formsFields)){
            return redirect()->intended(route('log_in.index'));
        }
        return redirect(route('log_in.login'))->withErrors([
            'email' => 'Email or password is incorrect'
        ]);
    }
    public function login_admin(Request $req){
        if(Auth::guard('admin')->check()){
            return redirect()->intended(route('admin.user_table'));
        }
       
        $formsFields = $req->only(['email', 'password']);
        if(Auth::guard('admin')->attempt($formsFields)){
            return redirect()->intended(route('admin.user_table'));
        }
        return redirect(route('admin.admin_login'))->withErrors([
            'email' => 'Email or password is incorrect'
        ]);
    }
}

