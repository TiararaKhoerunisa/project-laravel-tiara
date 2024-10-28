<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        return view('index'); 

    }

    public function login(){
        return view('login'); 

    }

    public function about(){
        $data = [
            'name'       => 'Tiara Khoerunisa Ramadhani',
            'address'     => 'Banyumas',
            'email'      => 'tiarakhairunisa1@gmail.com'
            
        ];
        return view('about', $data); 

    }
}
