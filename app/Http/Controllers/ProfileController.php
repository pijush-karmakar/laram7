<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   
    public function page(Request $request){
        return view('home');
    }
    public function about(Request $request){
        return view('about');
    }
    public function project(Request $request){
        return view('project');
    }
    public function contact(Request $request){
        return view('contact');
    }




}
