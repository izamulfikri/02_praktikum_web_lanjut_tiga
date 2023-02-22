<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marbeledugames(){
        header("Location: https://www.educastudio.com/category/marbel-edu-games");
        exit();
    }
    public function marbelandfriendskidsgames(){
        header("Location: https://www.educastudio.com/category/marbel-and-friends-kids-games");
        exit();
    }
    public function riristorybooks(){
        header("Location: https://www.educastudio.com/category/riri-story-books");
        exit();
    }
    public function kolakkidssongs(){
        header("Location: https://www.educastudio.com/category/kolak-kids-songs");
        exit();
    }
}
