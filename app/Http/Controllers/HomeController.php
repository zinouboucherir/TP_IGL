<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;  
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
        $user=Auth::user();
           
       if (! $etudiant=$user->etudiant) 
        {
           return view('home',['type'=>'admin','admin'=>$user->name]);
        }
        $notes=$etudiant->notes; 
        return view('home',['type'=>'etudiant','etudiant'=>$etudiant,'notes'=>$notes]);
        
    }

}
