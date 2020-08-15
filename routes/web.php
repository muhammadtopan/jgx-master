<?php

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
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/', function () {
    return view('/auth/login');
});
Route::get('/cs/index', function () {
    return view('cs/index');
});

Route::get('cs/input_paket', function () {
    return view('cs/input_paket');
});
// GUEST
Route::get('/perusahaan', 'GuestController@index')->name('perusahaan');
Route::get('/layanan', 'GuestController@layanan')->name('layanan');
Route::get('/tentang', 'GuestController@tentang')->name('tentang');

Route::get('/cs/create', function () {
    return view('cs/create');
});
Auth::routes();
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::resource('packets','PacketsController');
Route::get('/packets/cari','PacketsController@cari');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('generate-pdf','PDFController@generatePDF');
Route::get('users/index','SearchController@search');
Route::get('/packets/create_reguler','PacketsController@create');
Route::get('/users/create','UsersController@create');
Route::post('users/index','UsersController@store');
// });
// Route::get('/packets','PacketsController@index');
// Route::get('/packets/{packet}','PacketsController@show');
// Route::post('/packets','PacketsController@store');
// Route::delete('/packets/{packet}','PacketsController@destroy');
// Route::get('/packets/{packet}/edit','PacketsController@edit');
// Route::patch('/packets/{packet}','PacketsController@update');

// Route::get('packets/cetak_pdf', 'PacketsController@cetak_pdf')->name('packets.cetak_pdf');
// Route::get('/pdf', 'PdfController@print')->name('print');
// Route::get('search', 'PacketsController@index')->name('search');
// Route::get('autocomplete', 'PacketsController@autocomplete')->name('autocomplete');
// 25/7/2020
// Route::group(['prefix' => 'invoice'], function() {
//     //ROUTE UNTUK HALAMAN INVOICE
//     Route::get('/new', 'InvoiceController@create')->name('invoice.create');
//     //ROUTE UNTUK MENG-HANDLE DATA YANG DIKIRIM
//     Route::post('/', 'InvoiceController@save')->name('invoice.store');
//     Route::put('/{id}', 'InvoiceController@update')->name('invoice.update');
//     Route::delete('/{id}', 'InvoiceController@deleteProduct')->name('invoice.delete_product');
// });