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
        
        $validator  = \Validator::make($request->all() , [
            "nom" => "required" , 
            "prenom" => "required",
            "adress"=>"required", 
            "groupe"=>"required", 
            "matricule"=>"required|unique:etudiants",
            "email"=>"required|email|unique:users"
        ]) ;  
        if ($validator->fails())
            return redirect()->route('home')
            ->with('error',$validator->errors()->first()); 
        
       $etudiant=new Etudiant();
       $user=new User(); 
       $user->name=$request->input('nom')." ".$request->input('prenom'); 
       $user->email=$request->input('email');
       $user->password=bcrypt($request->input('password')); 
       $user->save(); 
       $etudiant->nom=$request->input('nom'); 
       $etudiant->prenom=$request->input('prenom'); 
       $etudiant->adress=$request->input('adress'); 
       $etudiant->groupe=$request->input('groupe'); 
       $etudiant->promo=$request->input('promo'); 
       $etudiant->matricule=$request->input('matricule'); 
       $etudiant->user_id=$user->id; 
       $etudiant->save(); 
       
       return redirect()->route('home')
       ->with('success','étudiant ajouté avec succés!'); 
       
    }
}
