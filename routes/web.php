<?php

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
Route::get('/', 'postsController@index');
Route::get('/posts', 'tasksController@index');
Route::get('/posts/{post}', 'tasksController@show');
Route::get('/zayavki', 'zayavkiController@index');
Route::post('/zayavki', 'zayavkiController@store');
Route::get('/portfolio', 'portfolioController@index');
Route::get('/portfolio/{portfolio}', 'portfolioController@pics');
Route::get('/contacts', 'contactsController@index');
Route::get('/price', 'priceController@index');


Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function () {
    // доступ только админу
    Route::prefix('admin')->middleware('role:ROLE_ADMIN')->group(function(){
        Route::get('/', 'Admin\IndexController@index');
        Route::get('/zayavki', 'Admin\IndexController@zayavki');
        Route::delete('/zayavki/delete/{id}', 'Admin\IndexController@delete')->name('zayavka.delete');
        Route::resource('/posts', 'Admin\CRUDPostsController');
        Route::resource('/portfolio', 'Admin\CRUDPortfolioController');
        Route::resource('/category', 'Admin\CRUDCategoryController');
        Route::get('/backpic/{backpic}/edit', 'Admin\UpdateBackpicController@edit')->name('backpic.edit');
        Route::put('/backpic/{backpic}', 'Admin\UpdateBackpicController@update')->name('backpic.update');
        Route::get('/updinfo/{updinfo}/edit', 'Admin\UpdateInfoController@edit')->name('updinfo.edit');
        Route::put('/updinfo/{updinfo}', 'Admin\UpdateInfoController@update')->name('updinfo.update');
    
        Route::resource('/price', 'Admin\CRUDPricesController');
    });
    // доступ обычным пользователям
    Route::prefix('home')->group(function(){
        Route::get('/', 'Regular\IndexController@index');
        Route::resource('/zayavki', 'Regular\CRUDRegZayavkiController');
        Route::post('/zayavki/create', 'Regular\CRUDRegZayavkiController@store');
    });
});