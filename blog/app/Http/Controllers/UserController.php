<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // make a function in controller

    // function getUser(){
    //     return "gaju nadre";
    // }
    function userHome(){
        $name = "gajanand";
        $users = ['datta','avinash','gaju','ganesh'];
        return view('home',['name'=>$name,'users'=>$users]);
    }
    function aboutUser(){
        return view('about');
    }
    function adminLogin(){
        return view('admin.login');
    }
    function getUserName($name){
        // return "this is from $name ";
        return view('getUserName',['user'=>$name]);
    }
}
