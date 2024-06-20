<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(int $user_id): string
    {
        //implementar logica, BD
        //dd($user_id);
        return '<h1> Hola mundo: '. $user_id .'</h1>:';
    }
}
