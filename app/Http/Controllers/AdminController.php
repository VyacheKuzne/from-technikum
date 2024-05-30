<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_admins;
use App\Models\user_client;
use App\Models\restoran;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function submit(Request $req)
    {
        // Validate and create the admin user
        $valiidateFields = $req->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(user_admins::where('email', $valiidateFields['email'])->exists()){
            return redirect(route('admin.registr_admin'))->withErrors([
                'forError' => 'Ошибка при регистрации'
            ]);
        }
     


        $user_admins = user_admins::create($valiidateFields);
    
        if ($user_admins) {
            
            // Log in the admin user using the admin guard
            Auth::guard('admin')->login($user_admins);
            $user_clients = user_client::orderBy('id', 'asc')->get();
            $data = []; // инициализируйте $data
            return view('admin.all_user', compact('user_clients', 'data'));
        }
    
        return redirect(route('admin.admin_login'))->withErrors([
            'forError' => 'Ошибка при регистрации'
        ]);
     }
// 
        public function date()
        {
            if (Auth::guard('admin')->check()) {
                $user_clients = user_client::orderBy('id', 'asc')->get();
                return view('admin.all_user', compact('user_clients'));
            }
            return view('admin.admin_login');
        }


        public function show($id){
        $user_client= new user_client;
        return view ('admin.user_table', ['data' => $user_client -> find($id)]);
       }
    
    
       public function update($id){
        $user_client= new user_client;
        return view ('admin.update_user', ['data' => $user_client -> find($id)]); 
       }
    

        public function update_submit($id, Request $req){
        $user_client = user_client::find($id);
            $user_client -> name = $req -> input('name');
            $user_client -> surname = $req -> input('surname');
            $user_client -> email = $req -> input('email');
            $user_client -> phone = $req -> input('phone');
            $user_client -> password = $req -> input('password');
        $user_client -> save();
        return redirect() -> route('admin.login_date_show', $id);
       }
    
    
       public function user_delete($id){
        user_client::find($id) -> delete($id);
        return redirect() -> route('admin.user_table');
       }


// все что ниже нуждаеться в доработке 
     

       public function show_all_restoran()
    {
        if (Auth::guard('admin')->check()) {
            $restoran = restoran::orderBy('id', 'asc')->get();
            return view('create.show_all_restoran', compact('restoran'));
        }
        return view('admin.admin_login'); 
    }




    public function create_restoran(Request $req)
    {
        $originalName = $req->file('images')->getClientOriginalName();
        $path = $req->file('images')->storeAs('public/img', $originalName);
    
        $data = [
            'name' => $req->input('name'),
            'adres' => $req->input('adres'),
            'INN' => $req->input('INN'),
            'otziv' => $req->input('otziv'),
            'image' => $originalName,
        ];
    
        $restoran = restoran::create($data);
    
        if (!$restoran) {
            // The create method failed to insert the new record
            // You can check the error message by calling $req->getErrorMsg()
            return redirect()->back()->withErrors(['create_restoran' => $req->getErrorMsg()]);
        }
    
        // Retrieve all restoran objects from the database
        $restoran = restoran::all();
    
        return view('create.show_all_restoran', ['restoran' => $restoran, 'path' => $path]);
    }
}

//     public function create_restoran(Request $req)
// {
//     // Validate and create the admin user
//     $validatedFields = $req->validate([
//         'name' => 'required',
//         'adres' => 'required',
//         'INN' => 'required',
//         'otziv' => 'required',
//         'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//     ]);

//     if(restoran::where('name', $validatedFields['name'])->exists()){
//         return redirect(route('admin.create_restoran'))->withErrors([
//             'forError' => 'Ошибка при регистрации'
//         ]);
//     }

//     $restoran = restoran::create($validatedFields);

//     if ($restoran) {
//         // Save a copy of the uploaded image to public/img/Main page
//         $imageName = time() . '.' . $req->img->getClientOriginalExtension();
//         $req->img->move(public_path('img/Main page'), $imageName);

//         // Log in the admin user using the admin guard
//         Auth::guard('admin')->login($restoran);
//         $restoran = restoran::orderBy('id', 'asc')->get();
//     }

//     return redirect(route('admin.admin_login'))->withErrors([
//         'forError' => 'Ошибка при регистрации'
//     ]);
// }
