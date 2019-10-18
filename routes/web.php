<?php
use App\manu_kat;

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

Auth::routes();
 
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/FAQ', 'kontroler@faq');

Route::get('/kontakt', function(){
    return view('kontakt');
});

Route::get('/onas', function(){
    return view('onas');
});

Route::get('/menu', function(){
    $kat=manu_kat::all()->first();
    return redirect("menu/$kat->kategoria");
});

Route::get('/menu/{kat}', 'kontroler@menu');