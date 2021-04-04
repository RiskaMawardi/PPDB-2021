<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function authenticate(Request $request)
    {
        $credentials = [
            'username' => $request['username'],
            'password' => $request['password'],
        ];
    
        // Dump data
        dd($credentials);
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('ppdb');
        }
    
        return 'Failure';
    }
}
