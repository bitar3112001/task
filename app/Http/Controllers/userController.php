<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class userController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name'=>"required",
            'email'=>"required",
            'password'=>"required"
        ]);

        $incomingFields['password']=bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        // return view('welcome')->with('success', 'New post successfully created.');
        return redirect("/");
    }

    public function login(Request $request){
        $incoming= $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);
        if(auth()->attempt(['name'=>$incoming['name'],'password'=>$incoming['password']])){
            $request->session()->regenerate();
           // return auth()->user()->name;
             return view('welcome');
        }else{
            return "sorry";
        }
    }
public function logout(){
    auth()->logout();
    return view('welcome');
}
public function uploadAvatar(Request $request){
$request->file('avatar')->store('public/avatar');
return "Done";
}

}
