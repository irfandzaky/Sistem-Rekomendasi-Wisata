<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

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
        if(auth()->user()->role == 'admin'){
            return view('admin.index');
        }
        elseif(auth()->user()->role == 'user'){
            $genres = Genre::all();

            return view('wisatawan.preferensi', compact('genres'));
        }
    }
}
