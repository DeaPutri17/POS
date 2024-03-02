<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userProfile($id, $nama){
        $user = ['id' => $id, 'nama' => $nama];
        return view('user', ['user' => $user]);
    }
    //
}
