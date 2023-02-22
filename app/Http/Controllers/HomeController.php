<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        header("Location: https://www.educastudio.com/");
        exit();
    }
}
