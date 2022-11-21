<?php
use App\Http\Controllers\CalculController;
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

Route::prefix('/')->group(function() {
    Route::get('/oddOrEven/{number}', [CalculController::class, 'numbertest'])->name('calcul.numbertest');
    Route::post('/api/addition', [CalculController::class, 'addition'])->name('calcul.addition'); 
    Route::post('/api/multiplication', [CalculController::class, 'multiplication'])->name('calcul.multiplication'); 
    Route::put('/teapot', [CalculController::class, 'show'])->name('calcul.show');
    Route::post('/api/division', [CalculController::class, 'division'])->name('calcul.division'); 
    Route::post('/api/substraction', [CalculController::class, 'substraction'])->name('calcul.substraction');
});

Route::get('/', function () {
    return view('welcome');
});
