<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function prakash() {
     return view('welcome');
    }

    public function nikash() {
        return view('nikash');
    }

    public function firstView() {
        return view('firstView');
    }

    public function about() {
        return view('about');
    }

    public function todolist() {
        return view('todolist');
    }

    public function news() {
        return view('news');
    }


}
