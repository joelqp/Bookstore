<?php

namespace App\Http\Controllers;

//use App\Models\Author;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class HomeController extends Controller
{
    public function index()
    {
        $description = [];
        for ($i=0; $i < 3; $i++){
            $paragraph = Faker::create();
            $description[] = $paragraph->paragraphs(10, true);

        }
        return view('home', ['description' => $description]);
    }

}
/*
ruta -> controlador -> modelo

                    -> view

                    */