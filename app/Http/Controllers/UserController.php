<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User_client;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function submit(Request $req)
{
    $valiidateFields = $req->validate([
        'name' => 'required',
        'surname' => 'required',
        'phone' => 'required|string',
        'email' => 'required|email',
        'password' => 'required',
    ]);
    if(User_client::where('email', $valiidateFields['email'])->exists()){
        return redirect(route('log_in.registr'))->withErrors([
            'forError' => 'Ошибка при регистрации'
        ]);
    }
 
    $user = User_client::create($valiidateFields);

    if ($user) {
        Auth::login($user);
        return redirect(route('log_in.index'));
    }

    return redirect(route('log_in.login'))->withErrors([
        'forError' => 'Ошибка при регистрации'
    ]);
}


}
