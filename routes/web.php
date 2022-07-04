<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\invoice;
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


//All Bills
Route::get('/', function () {
    return view('bills',[
        'heading' => 'Latest bills',
        'bills' =>  invoice::all()
    ]);
});

//Single Bill
Route::get('/bills/{id}', function($id){

    return view('bill', [
        'bill' => invoice::find($id)
    ]);
});