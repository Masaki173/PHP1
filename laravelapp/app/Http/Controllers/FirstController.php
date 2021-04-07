<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
 public function login() {
     return view('first.login');
 }
 public function register(){
     return view('first.register');
 }
}
