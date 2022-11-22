<?php
use App\Http\Controllers\CalculController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/api/addition', [CalculController::class, 'addition'])->name('calcul.addition'); 
Route::post('/api/multiplication', [CalculController::class, 'multiplication'])->name('calcul.multiplication'); 
Route::post('/api/division', [CalculController::class, 'division'])->name('calcul.division'); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
