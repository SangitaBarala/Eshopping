<?php

namespace App\Http\Controllers;

use App\Models\myuser;
use Illuminate\Http\Request;

class myController extends Controller
{
    //
    public function createUser(){
        // 1. receive data from html form
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        // 2. store data into Database using model
        $user = new myuser();
        $user->user_id = Auth::user()->id;
        $user->First_Name = $firstName;
        $user->Last_Name = $lastName;
        $user->Email = $email;
        $user->Password = $password;
        $user->Phone = $phone;
        $user->Address = $address;
        $user->save();

        // 3. redirect back to view page
        return redirect()->back()->with(['msg'=>'User added successfully']);
    }
    public function listUsers(){
        // 1. retrieve contacts from Database using id
        $users = myuser::where('user_id', Auth::user()->id)->orderBy('created_at','desc')->get();

        // 2. show them on showContact page
        return view('/myView')->with(['list_of_users' => $users]);
    }
}
