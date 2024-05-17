<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

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
        //home merujuk kepada resources/views/home.blade.php
        // return view('home');

        //call API http://jsonplaceholder.typicode.com/posts

        $response = Http::get('http://jsonplaceholder.typicode.com/posts');

        if($response->ok()){
            $posts = $response->object();
        } else{
            $posts = [];
        }

        // resources/views/home.blade.php
        return view('home', compact('posts'));
    }
}
