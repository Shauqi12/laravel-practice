<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "name" => "newfy",
        "role" => "Exp/Roam/Mid",
        "team" => ["rizal", "andy", "febri", "arhan", "jack"]
    ]);
});
Route::get('/student', [StudentController::class, 'index']);
