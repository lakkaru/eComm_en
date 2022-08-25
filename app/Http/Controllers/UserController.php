<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user= User:: where(['email'=>$req->email])->first();
        $req->session()->put('user', $user);
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "User name or password is not match";
            // $req->session()->forget('user');
        } else{
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
}
