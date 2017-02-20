<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{	
	//Funcion de Login
    function checkAuth(Request $request)
    {
    	//Set del arreglo de credenciales
    	$credentials = [
    		'email' => $request->input('email'),
    		'password' => $request->input('password'),
    	];

    	//Si las credenciales son erroneas
    	if (!Auth::attempt($credentials)) {
    		return response('Usuario y Contraseña no coinciden', 403);
    	}
    	
    	return response(Auth::user(), 201);

    }
}
