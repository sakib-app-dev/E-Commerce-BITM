<?php


Route::get('/','welcomeController@index');
Route::get('/catagory_view/{id}','welcomeController@Catagory');
Route::get('/product_details/{id}','welcomeController@ProductContent');
Route::get('/contact','welcomeController@Contact');





Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

/* Category info */
Route::get('/user/manage', 'UserController@manageUser');
Route::get('/user/edit/{id}', 'UserController@editUser');
Route::post('/user/update', 'UserController@updateUser');
Route::get('/user/delete/{id}', 'UserController@deleteUser');
/*category info */
/* Category info */
Route::get('/category/add', 'CategoryController@createCategory');
Route::post('/category/save', 'CategoryController@storeCategory');
Route::get('/category/manage', 'CategoryController@manageCategory');
Route::get('/category/edit/{id}', 'CategoryController@editCategory');
Route::post('/category/update', 'CategoryController@updateCategory');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');
/*category info */

/* Manufacturer info */
Route::get('/manufacturer/add', 'ManufacturerController@createManufacturer');
Route::post('/manufacturer/save', 'ManufacturerController@storeManufacturer');
Route::get('/manufacturer/manage', 'ManufacturerController@manageManufacturer');
Route::get('/manufacturer/edit/{id}', 'ManufacturerController@editManufacturer');
Route::post('/manufacturer/update', 'ManufacturerController@updateManufacturer');
Route::get('/manufacturer/delete/{id}', 'ManufacturerController@deleteManufacturer');
/*Manufacturer info */

/* Product info */
Route::get('/product/add', 'ProductController@createProduct');
Route::post('/product/save', 'ProductController@storeProduct');
Route::get('/product/manage', 'ProductController@manageProduct');
Route::get('/product/view/{id}', 'ProductController@viewProduct');
Route::get('/product/edit/{id}', 'ProductController@editProduct');
Route::post('/product/update', 'ProductController@updateProduct');
Route::get('/product/delete/{id}', 'ProductController@deleteProduct');
/*Product info */
