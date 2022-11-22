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
    Route::get('/oddOrEven/{number}', [CalculController::class, 'numbertest'])->where('number','[0-9]+');
    Route::put('/teapot', [CalculController::class, 'show']);
    Route::post('/api/substraction', [CalculController::class, 'substraction']);
    
    // Route::post('/api/addition', [CalculController::class, 'addition'])->name('calcul.addition'); 
    // Route::post('/api/multiplication', [CalculController::class, 'multiplication'])->name('calcul.multiplication'); 
    // Route::post('/api/division', [CalculController::class, 'division'])->name('calcul.division'); 
});

Route::get('/', function () {
    return view('welcome');
});
