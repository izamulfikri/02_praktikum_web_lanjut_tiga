<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// 01. Halaman Home
Route::get('/', [HomeController::class,'index']);

// 02. Halaman Product
Route::prefix('category')->group(function () {
    Route::get('marvel-edu-games',[ProductController::class,'marbeledugames']);
    Route::get('marbel-and-friends-kids-games',[ProductController::class,'marbelandfriendskidsgames']);
    Route::get('riri-story-books',[ProductController::class,'riristorybooks']);
    Route::get('kolak-kids-songs',[ProductController::class,'kolakkidssongs']);
});

// 03. Halaman Berita
Route::get('/news/{berita?}', [NewsController::class,'news']);

// 04. Halaman Program
Route::prefix('program')->group(function () {
    Route::get('karir',[ProgramController::class,'karir']);
    Route::get('magang',[ProgramController::class,'magang']);
    Route::get('kunjungan-industri',[ProgramController::class,'industri']);
});

// 05. Halaman About Us (Route Biasa)
Route::get('/about-us',[AboutController::class,'about']);

// 06. Route Resource Only
Route::resource('/contact-us',ContactController::class, [
    'only' => ['index','create','store']
]);