<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\UserRequest;
class UserController extends Controller
{
    public function index()
    {
        return view('first.login');
    }
    public function create(Request $request)
    {
        return view('first.register');
    }
    public function store(UserRequest $request)
    {
        $username = $request->username;
        $input_data = [
            'username' => $username
        ];
        return view('first.result', $input_data);
    
    }
}
