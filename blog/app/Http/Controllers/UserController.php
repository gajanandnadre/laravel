<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // make a function in controller

    // function getUser(){
    //     return "gaju nadre";
    // }
    function getUser(){
        return view('user');
    }
    function aboutUser(){
        return "this is form gaju nadre address";
    }
    function adminLogin(){
        return view('admin.login');
    }
    function getUserName($name){
        // return "this is from $name ";
        return view('getUserName',['name'=>$name]);
    }
}
