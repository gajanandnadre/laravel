<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // make a function in controller

    function getUser(){
        return "gaju nadre";
    }
    function aboutUser(){
        return "this is form gaju nadre address";
    }
    function getUserName($name){
        return "this is from $name ";
    }
}
