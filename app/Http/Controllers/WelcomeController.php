<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hellow World';
    }
    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Adel dari controller']);
    // }
    public function greeting(){
        return view('blog.hello')
        ->with('name','ADELL')
        ->with('occupation','Astronaut');
    }
}
