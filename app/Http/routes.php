<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@dashboard');

    Route::group(['prefix' => 'managers'], function() {
        Route::get('/', 'ManagerController@listManagers');
        Route::get('/{id}', 'ManagerController@single')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'ManagerController@edit');
        Route::get('/new', 'ManagerController@add');
    });

    Route::group(['prefix' => 'customers'], function() {
        Route::get('/', 'CustomerController@listCustomers');
        Route::get('/{id}', 'CustomerController@single')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'CustomerController@edit');
        Route::get('/new', 'CustomerController@add');
    });

    Route::group(['prefix' => 'makers'], function() {
        Route::get('/', 'MakerController@listMakers');
        Route::get('/{id}', 'MakerController@single')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'MakerController@edit');
        Route::get('/new', 'MakerController@add');
    });

    Route::group(['prefix' => 'partners'], function() {
        Route::get('/', 'PartnerController@listPartners');
        Route::get('/{id}', 'PartnerController@single')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'PartnerController@edit');
        Route::get('/new', 'PartnerController@add');
    });

    Route::group(['prefix' => 'products'], function() {
        Route::get('/', 'ProductController@listProducts');
        Route::get('/{id}', 'ProductController@single')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'ProductController@edit');
        Route::get('/new', 'ProductController@add');
    });

    Route::group(['prefix' => 'categories'], function() {
        Route::get('/', 'CategoryController@listCategories');
        Route::get('/{id}', 'CategoryController@single')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'CategoryController@edit');
        Route::get('/new', 'CategoryController@add');
    });

    Route::group(['prefix' => 'subcategories'], function() {
        Route::get('/', 'SubcategoryController@listSubcategories');
        Route::get('/{id}', 'SubcategoryController@single')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'SubcategoryController@edit');
        Route::get('/new', 'SubcategoryController@add');
    });

    Route::group(['prefix' => 'product-types'], function() {
        Route::get('/', 'ProductController@listTypes');
        Route::get('/{id}', 'ProductController@singleType')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'ProductController@editType');
        Route::get('/new', 'ProductController@newType');
    });

    Route::group(['prefix' => 'orders'], function() {
        Route::get('/', 'OrderController@listOrders');
        Route::get('/{id}', 'OrderController@single')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'OrderController@edit');
        Route::get('/new', 'OrderController@add');
    });

    Route::group(['prefix' => 'news'], function() {
        Route::get('/', 'NewsController@list');
        Route::get('/{id}', 'NewsController@single')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'NewsController@edit');
        Route::get('/new', 'NewsController@add');
    });

    Route::group(['prefix' => 'articles'], function() {
        Route::get('/', 'ArticleController@listArticles');
        Route::get('/{id}', 'ArticleController@single')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'ArticleController@edit');
        Route::get('/new', 'ArticleController@add');

        Route::group(['prefix' => 'categories'], function() {
            Route::get('/', 'ArticleController@listCategories');
            Route::get('/{id}', 'ArticleController@singleCategory')->where('id', '[0-9]+');
            Route::get('/{id}/edit', 'ArticleController@editCategory');
            Route::get('/new', 'ArticleController@newCategory');
        });
    });

    Route::group(['prefix' => 'settings'], function() {
        Route::get('/general', 'SettingController@getGeneral');
        Route::get('/makers', 'SettingController@makerSettings');
        Route::get('/managers', 'SettingController@managerSettings');
        Route::get('/customers', 'SettingController@customerSettings');
        Route::get('/payment_delivery', 'SettingController@paymentSetting');
        Route::get('/taxes', 'SettingController@taxesSetting');
        Route::get('/notes', 'SettingController@noteSetting');
        Route::get('/invoices', 'SettingController@invoiceSetting');
        Route::get('/social', 'SettingController@socialSetting');
        Route::get('/site', 'SettingController@siteSetting');
    });

    Route::group(['prefix' => 'news'], function() {
        Route::get('/', 'NewsController@listNews');
        Route::get('/{id}', 'NewsController@single')->where('id', '[0-9]+');
        Route::get('/new', 'NewsController@add');
    });

    Route::get('/chats', 'ChatController@index');
});
