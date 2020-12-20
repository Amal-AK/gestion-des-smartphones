<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\smartphoneController  ; 
use App\Http\Controllers\affectationController ; 
use App\Http\Controllers\countController  ; 

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

Route::post('/AjouterAffectation' , [affectationController::class , 'store'
])->middleware(['auth']);

Route::get('/getStatistiques' , [countController ::class , 'getCountsTel'
])->middleware(['auth']) ;

Route::get('/ajoutSmartphone' , [smartphoneController::class , 'add'
])->middleware(['auth']);

Route::post('/AjouterSmartphone' , [smartphoneController::class , 'store'
])->middleware(['auth']);

Route::get('/getAffectations' , [affectationController::class , 'getdata'
])->middleware(['auth'])->name('affectations.list') ;

Route::get('/afficherAffectations' , [affectationController::class , 'afficher'
])->middleware(['auth']) ;
require __DIR__.'/auth.php';
