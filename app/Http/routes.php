<?php
use App\Product;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => ['web']], function () {

    Route::auth();
    Route::get('/', [
        'uses' => 'ProductController@getIndex'
    ]);

// ADD
    Route::get('/add-to-cart/{id}', [
        'as' => 'product.addToCart',
        'uses' => 'ProductController@getAddToCart'
    ]);

// Reduce
    Route::get('/reduce/{id}', [
        'as' => 'product.reduceByOne',
        'uses' => 'ProductController@getReduceByOne'
    ]);

    Route::get('/remove/{id}', [
        'as' => 'product.remove',
        'uses' => 'ProductController@getRemoveItem'
    ]);

    Route::get('/shopping-cart', [
        'as' => 'product.shoppingCart',
        'uses' => 'ProductController@getCart'
    ]);

    // Checkout
    Route::get('/checkout', [
        'as' => 'checkout',
        'uses' => 'ProductController@getCheckout',
        'middleware' => 'auth'
    ]);
    Route::post('/checkout', [
       'as' => 'checkout',
       'uses' => 'ProductController@postCheckout',
        'middleware' => 'auth'
    ]);
    //

Route::get('/home', 'HomeController@index');
});

