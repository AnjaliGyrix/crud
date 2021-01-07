<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Validator;


class UserController extends Controller
{
    //user sign in
    function userSignup(Request $req){
        $data = new Customer;
        $data->username=$req->username;
        $data->email=$req->email;
        $data->gender=$req->gender;
        $data->dob=$req->dob;
        $data->pwd=$req->password;
        $data->save();
        $req->session()->put('email',$data->u_email);
        return redirect('profile');
    }


    //User login
    function userLogin(Request $req){
        if(session()->has('email')){
            return redirect('profile');
        } 
         
        $req->validate([
            'email'   => 'required|email',
            'pwd'  => 'required|alphaNum|min:3',
        ]);
        $credentials = $req->only('email', 'pwd');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('profile');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // to show list
    function show(){
        $data= Customer::paginate(3);
        return view('profile',['users'=>$data]);
    }

    //to delete data
    function delete($id){
        $data = Customer::find($id);
        $data ->delete();
        return redirect('profile');
    }

    //to get user data to update it
    function updateData($id){
        $data = Customer::find($id);
        return view('update',['data'=>$data]);
    }

    //to update data
    function updateUser(Request $req){
        $data = Customer::find($req->id);
        $data->username=$req->username;
        $data->email=$req->email;
        $data->gender=$req->gender;
        $data->dob=$req->dob;
        $data->save();
        return redirect('profile');
    }

    
}
