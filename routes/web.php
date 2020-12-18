<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\smartphoneController  ; 
use App\Http\Controllers\affectationController ; 
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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/indexSmartphone' , [smartphoneController::class , 'index'])->middleware(['auth']) ; 

Route::get('/getdataSmartphone' , [smartphoneController::class , 'getdata'
])->middleware(['auth'])->name('smartphone.list');

Route::get('/AjouterAffectation' , [affectationController::class , 'IndexAjout'
])->middleware(['auth']);

Route::post('/AjouterAffectation' , [affectationController::class , 'add'
])->middleware(['auth'])->name('affect.add');

require __DIR__.'/auth.php';
