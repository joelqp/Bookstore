<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    //
    public function index(int $user_id): View
    {
        //implementar logica, BD
        //dd($user_id);

        //instancia funcion all del modelo User (clase de eloquent, que es un orm)
        $user = User::find($user_id);

        return view('welcome', ['user'=> $user]);
    }
}
