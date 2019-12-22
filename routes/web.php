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

Route::get('/FAQ', 'kontroler@faq')->name('faq');

Route::get('/kontakt', 'kontroler@kontakt')->name('kontakt');

Route::get('/onas', function(){
    return view('onas');
})->name('onas');

Route::get('/menu', function(){
    $kat=manu_kat::all()->first();
    return redirect("menu/$kat->kategoria");
})->name('menu');

Route::get('/menu/{kat}', 'kontroler@menu');

Route::get('/rezerwacja', 'kontroler@rezerwacja')->name('rezerwacja');

Route::post('/rezerwacja/check', 'zapisy@check')->middleware('CheckRezerwacja')->name('rezerwacja_check');

Route::post('/rezerwacja/confirm', 'zapisy@confirm')->name('rezerwacja_confirm');

Route::post('/rezerwacja/save', 'zapisy@save')->name('rezerwacja_save');

Route::post('/message', 'kontroler@message')->middleware('CheckMsg')->name('message');