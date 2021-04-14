<?php

use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\FrontController;
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

Route::get('/', function () {
    return view('');
});

Route::middleware('contact')->group(function(){
    Route::get('/', 'FrontController@index')->name('index'); 
});

Route::get('/about', 'AboutController@index')->name('about');
Route::get('/menu', 'MenuController@index')->name('menu');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@message');
Route::get('/franchising','FrontController@franchising')->name('franchising');
Route::post('/franchising', 'FrontController@franchisingform');


Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('/','AdminController@index')->name('admin.index');  
    Route::get('/home','HomeController@index')->name('admin.home');
    Route::get('/contact','AdminContactController@index')->name('admin.contact');
    Route::post('/contact','AdminContactController@add');
    Route::get('/about','AdminAboutController@index')->name('admin.about');
    Route::post('/about','AdminAboutController@add');

    Route::prefix('menu')->group(function(){
        Route::get('/','AdminMenuController@list')->name('admin.menu');
        Route::get('/add','AdminMenuController@addShow')->name('admin.menu.add');
        Route::post('/add','AdminMenuController@add');
        Route::post('/change-status', 'AdminMenuController@changeStatus')->name('admin.menu.changeStatus');
        Route::post('/delete', 'AdminMenuController@delete')->name('admin.menu.delete');
    
    });

    Route::get('/message','AdminMessageController@index')->name('admin.message');
    Route::post('/delete', 'AdminMessageController@delete')->name('admin.message.delete');

Route::prefix('franchising')->group(function(){
    Route::get('/', 'AdminFranchisingController@index')->name('admin.franchising');
    Route::post('/delete', 'AdminFranchisingController@delete')->name('admin.franchising.delete');


});

});


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');





