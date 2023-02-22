<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        header("Location: https://www.educastudio.com/about-us");
        exit();
    }
}
