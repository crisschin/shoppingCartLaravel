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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main',function() {
    return view('main');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addProduct',[
    'uses'=>'ProductController@create',
    'as'=>'product'
]);

Route::post('/product/store',[
    'uses'=>'ProductController@store',
    'as'=>'addProduct.store'
]);

Route::get('/viewproduct',[
    'uses'=>'ProductController@view',
    'as'=>'view.product'
]);

Route::get('/viewproduct/delete/{id}', [
    'uses'=>'ProductController@delete',
    'as' => 'viewproduct.delete'
]);

Route::get('/viewlist',[
    'uses'=>'ProductController@viewlist',
    'as'=>'view.list'
]);

Route::get('/viewlist2',[
    'uses'=>'ProductController@viewlist2',
    'as'=>'view.list2'
]);

Route::get('/viewlist_dell',[
    'uses'=>'ProductController@dell',
    'as'=>'view.list_dell'
]);

Route::get('/viewlist_asus',[
    'uses'=>'ProductController@asus',
    'as'=>'view.list_asus'
]);

Route::get('/viewlist_i5',[
    'uses'=>'ProductController@CPUi5',
    'as'=>'view.list_i5'
]);

Route::get('/viewlist_i7',[
    'uses'=>'ProductController@CPUi7',
    'as'=>'view.list_i7'
]);

Route::get('/viewlist_i9',[
    'uses'=>'ProductController@CPUi9',
    'as'=>'view.list_i9'
]);

Route::get('/viewlist_ram8',[
    'uses'=>'ProductController@RAM8',
    'as'=>'view.list_ram8'
]);

Route::get('/viewlist_ram16',[
    'uses'=>'ProductController@RAM16',
    'as'=>'view.list_ram16'
]);

Route::get('/viewlist_ram32',[
    'uses'=>'ProductController@RAM32',
    'as'=>'view.list_ram32'
]);

Route::get('/viewlist_1660',[
    'uses'=>'ProductController@GPU1660',
    'as'=>'view.list_1660'
]);

Route::get('/viewlist_2060',[
    'uses'=>'ProductController@GPU2060',
    'as'=>'view.list_2060'
]);

Route::get('/viewlist_2070',[
    'uses'=>'ProductController@GPU2070',
    'as'=>'view.list_2070'
]);

Route::get('/viewlist_2080',[
    'uses'=>'ProductController@GPU2080',
    'as'=>'view.list_2080'
]);

Route::get('/productdetail/{id}', [
    'uses'=>'ProductController@detail',
    'as' => 'product.detail'
]);

Route::post('/viewlist', [
    'uses'=>'ProductController@search',
    'as' => 'search.product'
]);

Route::get('/editproduct/{id}', [
    'uses'=>'ProductController@edit',
    'as' => 'edit.product'
]);

Route::post('updateproduct', [
    'uses'=>'ProductController@update',
    'as' => 'update.product'
]);
//route for processing payment
Route::post('paypal','PaymentController@payWithpaypal');
//route for check status
Route::get('status','PaymentController@getPaymentStatus');

Route::get('/feedback',function() {
    return view('feedback');
});