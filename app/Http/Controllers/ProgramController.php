<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        header("Location: https://www.educastudio.com/program/karir");
        exit();
    }
    public function magang(){
        header("Location: https://www.educastudio.com/program/magang");
        exit();
    }
    public function industri(){
        header("Location: https://www.educastudio.com/program/kunjungan-industri");
        exit();
    }
}
