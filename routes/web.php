<?php

use App\Http\Controllers\listingsController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
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

Route::get('/test',function(){
    $Alldata=[
        'title'=>'this is our title',
        'section'=>
        [
            [
                'id'=>1,
                'sectionTitle'=>'not me it is you'
            ],
            [
                'id'=>2,
                'sectionTitle'=>'i love you'
            ]
        ]
            ];
 return view('test',['data'=>$Alldata]);

});


Route::get('/listings', [listingsController::class,'index']);
Route::get('/listings/create', [listingsController::class,'create'])->middleware('auth');
Route::get('/listings/{id}/edit', [listingsController::class,'edit'])->middleware('auth');
Route::put('/listings/update/{listing}', [listingsController::class,'update']);
// code above, it is a new way to pass an object listing, contineu with me
//inListingcontroller in update function

route::get('/listings/destroy/{abs}',[listingsController::class,'destroy'])->middleware('auth');
route::get('/lisitngs/manage/{id}',[listingsController::class,'manage']);


Route::post('/listings/store', [listingsController::class,'store']);

Route::get('/listings/{id}', [listingsController::class,'show']);

// user route
Route::get('/register',[UserController::class,'create'])->middleware('guest');
Route::post('/users/store',[UserController::class,'store'])->name('signUp');

Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate',[UserController::class,'authenticate']);


Route::get('/logout',[UserController::class,'logout']);



Route::get('/',[listingsController::class,'testComponents']);
  
