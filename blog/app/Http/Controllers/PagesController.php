<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
    public function getIndex(){
        return view('pages.welcome');
    }
    
    public function getAboutUs(){
        $fname = "Bhasker";
        $lname = "Thapa";
        $full_name = $fname . $lname;
        $email = "bk@live.in";
        return view('pages.about-us')->with('full_name',$full_name)->with('email',$email);
    }
    
    public function getContact(){
        return view('pages.contact-us');
    }
    
    public function postContact(){
        return "post contact";
    }
}
