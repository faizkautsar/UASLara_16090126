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

// Route::get('/', function () {
//     return view('user.welcome');
// });

// Route::get('/produk', function(){
//   return view('pages.produk.produk');
// })->name('produk');


// Route::get('/tmbobat', function(){
//   return view('pages.produk.t_obat');
// })->name('tmb_obat');


// Route::get('/tmbkategori', function(){
//   return view('pages.produk.t_kategori');
// })->name('tmb_kategori');


Auth::routes();
Route::get('/admin/beranda','AdminController@index')->name('beranda');
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pages/tambah','AdminController@index');
Route::get('/kategori','AdminController@kategori')->name('kategori');
Route::get('/kategori/tambah','AdminController@kategoricreate')->name('kategori.tambah');
Route::post('/kategori/tambah','AdminController@kategoristore')->name('kategori.store');
Route::get('/kategori/edit/{id}','AdminController@kategoriedit')->name('kategori.edit');
Route::patch('/kategori/edit/{id}','AdminController@kategoriupdate')->name('kategori.update');
Route::get('/kategori/destroy/{id}','AdminController@kategoridestroy')->name('kategori.destroy');





Route::get('/admin/obat','ObaatController@index')->name('obat');
Route::get('/admin/obat/tambah','ObaatController@create')->name('obat.tambah');
Route::post('/admin/obat/tambah','ObaatController@store')->name('obat.store');
Route::get('/admin/obat/edit/{id}','ObaatController@edit')->name('obat.edit');
Route::patch('/admin/obat/edit/{id}','ObaatController@update')->name('obat.update');
Route::get('/admin/obat/destroy/{id}','ObaatController@destroy')->name('obat.destroy');
Route::resource('obat','ObaatController');


Route::get('/','FrontEndController@userhome')->name('user.home');
Route::get('/obat/','FrontEndController@userobat')->name('user.obat');
Route::get('/detail/{slug}','FrontEndController@obatdetail')->name('obat.detail');
Route::get('/about','FrontEndController@aboutuser')->name('about.user');
Route::get('/contact','FrontEndController@contact')->name('contact');