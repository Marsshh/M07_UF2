<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function login()
    {
        $email = trim(request('email'));
        $password = trim(request('password'));
        
        
        
        
        $userType = $this -> getUserType($email);

        switch ($userType) {
            case 'professor':
                return view('profesor')->with('email', $email);
                break; 
                
            case 'alumne':
                return view('alumne')->with('email', $email);
                break;
        
            case 'admin':
                return view('centre')->with('email', $email);
               break;
        
            default:
            return 'email no reconegut';
                break;
        }
    }

    public function showError()
    {
        return "Error d’accés";
    }

    // Función auxiliar para determinar el tipo de usuario
    public function getUserType($email)
    {
        // Lógica para determinar el tipo de usuario basado en el email
       
        $professors = ['professor@example.com'];
        $alumnes = ['alumne@example.com'];
        $admins = ['admin@example.com'];
        
        if (in_array($email, $professors)) {
            return 'professor';
        } elseif (in_array($email, $alumnes)) {
            return 'alumne';
        } elseif (in_array($email, $admins)) {
            return 'admin';
        } else {
            // Manejar cualquier otro caso si es necesario
            return 'unknown';
        }
   
}
}