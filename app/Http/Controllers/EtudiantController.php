<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User; 
use App\Etudiant; 

class EtudiantController extends Controller
{
    public function get_marks () 
    {
       $etudiant=Auth::user()->etudiant; 
       $notes=$etudiant->notes; 
       return response()->json(['notes'=>$notes],200);
    }
    public function add_student(Request $request) 
    {
        $request->validate([



        ]); 
       $etudiant=new Etudiant();
       $etudiant->nom=$request->input('nom'); 
       $etudiant->prenom=$request->input('prenom'); 
       $etudiant->adress=$request->input('adress'); 
       $etudiant->groupe=$request->input('groupe'); 
       $etudiant->promo=$request->input('promo'); 
       $etudiant->matricule=$request->input('matricule'); 

    }
}
