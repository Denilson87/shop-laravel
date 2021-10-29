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
//Dashboard
//login
Route::get('admin', 'loginController@adminIndex')->name('admin.login');
Route::post('admin', 'loginController@adminPosted');

Route::group(['middleware' => 'admin'], function(){
 
    Route::get("/admin_panel", 'admin_panel\dashboardController@index')->name('admin.dashboard');

    Route::get('admin/logout', 'loginController@adminLogout')->name('admin.logout');
    //categories
    Route::get('/admin_panel/categories', 'admin_panel\categoriesController@index')->name('admin.categories');
    Route::post('/admin_panel/categories', 'admin_panel\categoriesController@posted');

    Route::get('/admin_panel/categories/edit/{id}', 'admin_panel\categoriesController@edit')->name('admin.categories.edit');
    Route::post('/admin_panel/categories/edit/{id}', 'admin_panel\categoriesController@update');

    Route::get('/admin_panel/categories/delete/{id}', 'admin_panel\categoriesController@delete')->name('admin.categories.delete');
    Route::post('/admin_panel/categories/delete/{id}', 'admin_panel\categoriesController@destroy');
    
    //Brands
    Route::get('/admin_panel/Brands', 'admin_panel\brandsController@index')->name('admin.Brands');
    Route::post('/admin_panel/Brands', 'admin_panel\brandsController@posted');

    Route::get('/admin_panel/Brands/edit/{id}', 'admin_panel\brandsController@edit')->name('admin.Brands.edit');
    Route::post('/admin_panel/Brands/edit/{id}', 'admin_panel\brandsController@update');

    Route::get('/admin_panel/Brands/delete/{id}', 'admin_panel\brandsController@delete')->name('admin.Brands.delete');
    Route::post('/admin_panel/Brands/delete/{id}', 'admin_panel\brandsController@destroy');

    
    //Clients in base
    Route::get('admin_panel/our_clients',  'admin_panel\clientesController@index')->name('admin.Clients');
    Route::post('/admin_panel/our_clients', 'admin_panel\clientesController@posted');

    Route::get('/admin_panel/Clients/edit/{id}', 'admin_panel\clientesController@edit')->name('admin.Clients.edit');
    Route::post('/admin_panel/Clients/edit/{id}', 'admin_panel\clientesController@update');

    Route::get('/admin_panel/Clients/delete/{id}', 'admin_panel\clientesController@delete')->name('admin.Clients.delete');
    Route::post('/admin_panel/Clients/delete/{id}', 'admin_panel\clientesController@destroy');

    //products
    Route::get('/admin_panel/products', 'admin_panel\productsController@index')->name('admin.products');

    Route::get('/admin_panel/products/create', 'admin_panel\productsController@create')->name('admin.products.create');
    Route::post('/admin_panel/products/create', 'admin_panel\productsController@store');

    Route::get('/admin_panel/products/edit/{id}', 'admin_panel\productsController@edit')->name('admin.products.edit');
    Route::post('/admin_panel/products/edit/{id}', 'admin_panel\productsController@update');

    Route::get('/admin_panel/products/delete/{id}', 'admin_panel\productsController@delete')->name('admin.products.delete');
    Route::post('/admin_panel/products/delete/{id}', 'admin_panel\productsController@destroy');

    //cards requests
    Route::get('/admin_panel/cards-requests', 'admin_panel\cardsController@index')->name('admin.cards.show');
    Route::get('/admin_panel/cards-requests/edit/{id}', 'admin_panel\cardsController@edit')->name('admin.cards.edit');
    Route::get('/admin_panel/cards-requests/delete/{id}', 'admin_panel\cardsController@delete')->name('admin.cards.delete');
    
    //order management 
    Route::get('/admin_panel/management', 'admin_panel\managementController@manage')->name('admin.orderManagement');
    Route::post('/admin_panel/management', 'admin_panel\managementController@update')->name('admin.orderUpdate');

});

Route::get('/login', 'loginController@userIndex')->name('user.login');
Route::post('/login', 'loginController@userPosted');

//signup
Route::get('/signup', 'signupController@userIndex')->name('user.signup');
Route::post('/signup', 'signupController@userPosted');
Route::post('/check_email', 'signupController@emailCheck')->name('user.signup.check_email'); 

//usuario
Route::get('/', 'user\userController@index')->name('user.home');
Route::get('/product/{id}', 'user\userController@view')->name('user.product');

Route::get('/search', 'user\userController@search')->name('user.search');
Route::get('/search?c={id}', 'user\userController@view')->name('user.search.cat');
Route::get('/products?d={id}', 'ControllerProducts@index')->name('user.products.bra');

Route::get('/view/{id}', 'user\userController@view')->name('user.view');
Route::post('/view/{id}', 'user\userController@post');

Route::get('/cart', 'user\userController@cart')->name('user.cart');
Route::post('/cart', 'user\userController@confirm');
Route::get('/cremes', 'cremeContoller@index')->name('user.cremes');

Route::post('/edit_cart', 'user\userController@editCart')->name('user.editCart');
Route::post('/delete_item_from_cart', 'user\userController@deleteCartItem')->name('user.deleteCartItem');

Route::get('/loyality-card','loyalityController@index')->name('user.loyality-card');
Route::get('/loyality-cards','loyalityController@view2')->name('Registration.success');
// Route::get('/Registration success', function () {
//     return view ('store.success')->name('Registration.success');
// });

Route::post('/loyality-card-vip','loyalityController@store')->name('user.loyality-card-post');

Route::get('/about-us', 'AboutController@index')->name('user.about-us');
Route::get('/Contact', 'ContactController@index')->name('user.Contact');
Route::get('/logout', 'loginController@userLogout')->name('user.logout');
Route::get('/products', 'ControllerProducts@index')->name('user.products2');


Route::group(['middleware' => 'user'], function(){
Route::get('/history', 'user\userController@history')->name('user.history');

});
