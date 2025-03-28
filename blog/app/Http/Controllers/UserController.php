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

    function userForm(Request $request){

        $request->validate([
            'full_name'=>'required | min:2 | max:50',
            'mobile_number'=>'required',
            'email'=>'required | email',
            'password'=>'required',
            'city'=>'required'
        ],[
            'full_name.required'=>'full_name can not be empty',
            'full_name.min'=>'full_name is minimum 2 characters',
            'full_name.max'=>'full_name is not be greter than  20 characters',
            'email.email'=>'This email is not valid ',
        ]);
      echo "Name is ". $request->full_name;
      echo "</br>";
      echo "mobile number is ". $request->mobile_number;
      echo "</br>";
      echo "Email Id  is ". $request->email;
      echo "</br>";
      echo "password  is ". $request->password;
      echo "</br>";
      echo "City is ". $request->city;
      echo "</br>";
    //   return $request;
    }




    // function adminLogin(){
    //     return view('admin.login');
    // }
    // function getUserName($name){
    //     // return "this is from $name ";
    //     return view('getUserName',['user'=>$name]);
    // }
}
