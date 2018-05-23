<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function home(){
        return view('home',['title' => 'Web Development With Pleasure']);
    }
    public function work(){
        
        return view('work',['title' => 'Check Out My Work!']);
    }
    public function skills(){
        return view('skills',['title' => 'My Skills']);
    }
    public function contact(){
        return view('contact',['title' => 'Contact Me']);
    }
}
