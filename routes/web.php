<?php

use App\Customer;
use App\Http\Controllers\CustomerController;
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

//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});
//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/dashboard', 'HomeController@index');
    });
});

// Route::get('foo', ['middleware' => 'admin', function () { return 'This is for ADMINS only'; }]);

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/product/create', 'ProductController@create')->name('product.create');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/company', 'CompanyController@index')->name('company.index');
Route::get('/company/create', 'CompanyController@create')->name('company.create');
Route::post('/company/store', 'CompanyController@store')->name('company.store');
Route::get('/company/edit/{company_id}', 'CompanyController@edit')->name('company.edit');
Route::put('/company/update/{company_id}', 'CompanyController@update')->name('company.update');
Route::delete('/company/delete/{company_id}', 'CompanyController@destroy')->name('company.destroy');

Route::get('/customer', 'CustomerController@index')->name('customer.index');
Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('/customer/store', 'CustomerController@store')->name('customer.store');
Route::get('/customer/edit/{customer_id}', 'CustomerController@edit')->name('customer.edit');
Route::put('/customer/update/{customer_id}', 'CustomerController@update')->name('customer.update');
Route::delete('/customer/delete/{customer_id}', 'CustomerController@destroy')->name('customer.destroy');
Route::get('/customer/showcompany', 'CustomerController@showcompany')->name('customer.showcompany');

Route::get('/company/customer/{company_id}', 'CompanyController@showcustomer')->name('company.showcustomer');



