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



Auth::routes();

//front end
Route::get('/', [
	'uses' => 'PageController@index',
	'as' => 'home.index'
]);

Route::get('/faq', [
	'uses' => 'PageController@faq',
	'as' => 'faq'
]);

Route::get('/contact', [
	'uses' => 'PageController@contact',
	'as' => 'contact'
]);

Route::get('/shop', [
	'uses' => 'ShopController@index',
	'as' => 'shop'
]);

Route::get('/shop/product/{slug}', [
	'uses' => 'ShopController@show',
	'as' => 'shop.product'
]);

Route::get('/shop/cart', [
	'uses' => 'ShopController@cart',
	'as' => 'cart'
]);


Route::post('/cart/add', [
	'uses' => 'ShopController@addToCart',
	'as' => 'cart.add'
]);

Route::get('/cart/delete/{id}', [
	'uses' => 'ShopController@cartDelete',
	'as' => 'cart.delete'
]);

Route::get('/cart/decr/{id}/{qty}', [
	'uses' => 'ShopController@cartDecr',
	'as' => 'cart.decr'
]);

Route::get('/cart/incr/{id}/{qty}', [
	'uses' => 'ShopController@cartIncr',
	'as' => 'cart.incr'
]);

Route::get('/cart/quick/add/{id}', [
	'uses' => 'ShopController@quickAdd',
	'as' => 'cart.quick.add'
]);



Route::get('/shop/checkout', [
    'uses' => 'CheckoutController@index',
    'as' => 'shop.checkout'
]);
Route::get('/return', [
    'uses' => 'ReturnController@index',
    'as' => 'return'

]);

//my account
Route::get('/my_account', [
    'uses' => 'MyAccountController@index',
    'as' => 'my_account'

]);

Route::get('/my_account/orders', [
    'uses' => 'MyAccountController@orders',
    'as' => 'my_account.orders'

]);

Route::get('/my_account/orders/show/{id}', [
    'uses' => 'MyAccountController@show_order',
    'as' => 'my_account.order.show'

]);

//product review

Route::post('/review/store', [
    'uses' => 'ReviewController@store',
    'as' => 'review.store'

]);



//backend

//all admin routes will go inside this route group
Route::group(['prefix' => 'administrator', 'middleware' => ['auth', 'admin'] ], function(){

	Route::get('/', [
		'uses' => 'Admin\DashboardController@index',
		'as' => 'admin.home'
	]);


    Route::get('settings', [
        'uses' => 'Admin\SettingController@settings',
        'as' => 'admin.settings'
    ]);
    Route::post('settings/change', [
        'uses' => 'Admin\SettingController@change',
        'as' => 'settings.change'
    ]);
	//products

	Route::get('/products', [
		'uses' => 'Admin\ProductController@index',
		'as' => 'products'
	]);

	Route::get('/product/create', [
		'uses' => 'Admin\ProductController@create',
		'as' => 'product.create'
	]);

	Route::post('/product/store', [
		'uses' => 'Admin\ProductController@store',
		'as' => 'product.store'
	]);

	Route::get('/product/edit/{slug}', [
		'uses' => 'Admin\ProductController@edit',
		'as' => 'product.edit'
	]);

	Route::post('/product/update/{id}', [
		'uses' => 'Admin\ProductController@update',
		'as' => 'product.update'
	]);

	Route::get('/product/trash/{id}', [
		'uses' => 'Admin\ProductController@trash',
		'as' => 'product.trash'
	]);

	Route::get('/product/trashed', [
		'uses' => 'Admin\ProductController@viewTrashed',
		'as' => 'product.trashed'
	]);

	Route::get('/product/restore/{id}', [
		'uses' => 'Admin\ProductController@restore',
		'as' => 'product.restore'
	]);
	

	//categories
	
	Route::get('/categories', [
		'uses' => 'Admin\CategoryController@index',
		'as' => 'categories'
	]);

	Route::get('/category/edit/{id}', [
		'uses' => 'Admin\CategoryController@edit',
		'as' => 'category.edit'
	]);

	Route::post('/category/update/{id}', [
		'uses' => 'Admin\CategoryController@update',
		'as' => 'category.update'
	]);


	Route::get('/category/delete/{id}', [
		'uses' => 'Admin\CategoryController@destroy',
		'as' => 'category.delete'
	]);

	Route::get('/category/create', [
		'uses' => 'Admin\CategoryController@create',
		'as' => 'category.create'
	]);

	Route::post('/category/store', [
		'uses' => 'Admin\CategoryController@store',
		'as' => 'category.store'
	]);


	//suppliers

	Route::get('/suppliers', [
		'uses' => 'Admin\SupplierController@index',
		'as' => 'suppliers'
	]);

	Route::get('/supplier/create', [
		'uses' => 'Admin\SupplierController@create',
		'as' => 'supplier.create'
	]);

	Route::post('/supplier/store', [
		'uses' => 'Admin\SupplierController@store',
		'as' => 'supplier.store'
	]);

	Route::get('/supplier/edit/{id}', [
		'uses' => 'Admin\SupplierController@edit',
		'as' => 'supplier.edit'
	]);

	Route::post('/supplier/update/{id}', [
		'uses' => 'Admin\SupplierController@update',
		'as' => 'supplier.update'
	]);



	//stocks

	Route::get('/stocks', [
		'uses' => 'Admin\StockController@index',
		'as' => 'stocks'
	]);

	Route::get('/stock/create', [
		'uses' => 'Admin\StockController@create',
		'as' => 'stock.create'
	]);

	Route::get('/stock/edit/{id}', [
		'uses' => 'Admin\StockController@edit',
		'as' => 'stock.edit'
	]);

	Route::post('/stock/store', [
		'uses' => 'Admin\StockController@store',
		'as' => 'stock.store'
	]);

	Route::post('/stock/update/{id}', [
		'uses' => 'Admin\StockController@update',
		'as' => 'stock.update'
	]);

    //orders
    Route::get('/order', [
        'uses' => 'Admin\OrderController@index',
        'as' => 'order'
    ]);


    Route::get('/order/show/{id}', [
        'uses' => 'Admin\OrderController@show',
        'as' => 'order.show'
    ]);

    Route::post('/order/update/{id}', [
        'uses' => 'Admin\OrderController@update',
        'as' => 'order.update'
    ]);



});


//emails

Route::get('/send/email', 'HomeController@mail');

