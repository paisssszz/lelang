<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lobby extends Controller
{
    public function index(){
        return view('halaman.user');
    }
}
