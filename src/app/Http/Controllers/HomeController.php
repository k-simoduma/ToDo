<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $data = Todo::get();
        return view('home', ['data' => $data]);
    }

    public function create(Request $req)
    {
        $user_id = Auth::id();
        
        Todo::create([
            "user_id" => $user_id,
            "content" => $req->content,
        ]);

        return redirect('/');
    }
}
