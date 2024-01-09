<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view

        return view('index.index');
    }
}
