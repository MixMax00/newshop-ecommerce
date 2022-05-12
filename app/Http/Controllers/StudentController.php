<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

//        $name = ['Tamim','Joy','Shanto','Mominul','Musfiq','Mithun','Liton','Yeasir','Miraj','Shoriful'];


        $name = "Sakib";
        $age = 21;
        return view('home',[
            'name' => $name,
            'age' => $age,
        ]);
    }

}
