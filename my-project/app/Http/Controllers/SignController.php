<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function signin($p1, $p2, $p3, $p4){
  
        $titol = $p1 . " " . $p2 . " " . $p3 . " " . $p4;
        return view('signin') -> with ('a', $titol) ;
    }

    public function signout($p1, $p2, $p3){
  
        $titol = $p1 . " " . $p2 . " " . $p3 ;
        return view('signout') -> with ('b', $titol) ;
    }
    
    
   
}
