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
Route::post('loginUser', 'Auth\LoginController@login');

// Route::get('/', function () {
    // abort(403, 'Unauthorized action.');
//     return view('welcome');
// });
Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'backoffice'], function()
    {
        // backoffice
        Route::resource('/dashboard', 'IndexController');
        // car
        Route::resource('/car', 'backoffice\CarController');
        Route::get('/indexcarmodel/{id}', 'backoffice\CarController@indexcarmodel');
        Route::post('/storecarmodel', 'backoffice\CarController@storecarmodel');
        Route::get('/edit_carmodel/{id}', 'backoffice\CarController@edit_carmodel');
        Route::post('/updatecarmodel/{id}', 'backoffice\CarController@updatecarmodel');
        Route::post('/carmodeldestroy/{id}', 'backoffice\CarController@carmodeldestroy');
        // user
        Route::resource('/user', 'backoffice\UserController');
        Route::get('/customerIndex', 'backoffice\UserController@customerIndex');
        Route::get('/checkemail', 'backoffice\UserController@checkemail');
        Route::get('/profile/{id}', 'backoffice\UserController@profile');
        // cart
        Route::resource('/cart', 'backoffice\CartController');
        // activitylog
        Route::resource('/activitylog', 'backoffice\ActivitylogController');
        // Manage Frontend
        Route::resource('/homebanner', 'managefront\HomeController');
        Route::resource('/ads', 'managefront\AdsController');
        Route::get('/homeproduct', 'managefront\HomeController@homeproduct');
        Route::get('/homepromotion', 'managefront\HomeController@homepromotion');
        Route::get('/modal-editNewProduct/{id}', 'managefront\HomeController@editNewProduct');
        Route::get('/modal-addBestSeller', 'managefront\HomeController@addBestSeller');
        Route::post('/updatebestseller', 'managefront\HomeController@updatebestseller');
        Route::post('/updatestatusProduct/{id}', 'managefront\HomeController@updatestatusProduct');
        // about
        Route::resource('/about', 'managefront\AboutController');
        Route::get('/aboutbanner', 'managefront\AboutController@aboutbanner');
        // news
        Route::resource('/news', 'managefront\NewsController');
        Route::get('/editnews', 'managefront\NewsController@editnews');
        Route::get('/newsbanner', 'managefront\NewsController@newsbanner');
        // contact
        Route::resource('/contact', 'managefront\ContactController');
        // promotion
        Route::resource('/promotion', 'managefront\PromotionController');
        Route::get('/promotionbanner', 'managefront\PromotionController@promotionbanner');
        // product
        Route::resource('/product', 'managefront\ProductController');
        Route::get('/productbanner', 'managefront\ProductController@productbanner');
        Route::get('/indexproducttype', 'managefront\ProductController@indexproducttype');
        Route::post('/storeproducttype', 'managefront\ProductController@storeproducttype');
        Route::get('/editproducttype', 'managefront\ProductController@editproducttype');
        Route::post('/updateproducttype/{id}', 'managefront\ProductController@updateproducttype');
        Route::get('/productIndex/{id}', 'managefront\ProductController@productIndex');
        Route::post('/productdestroy/{id}', 'managefront\ProductController@product_destroy');
        Route::get('/addwheel', 'managefront\ProductController@addwheel');
        Route::get('/filtercarbrand', 'managefront\ProductController@filtercarbrand');
        Route::get('/addProductDetail/{id}', 'managefront\ProductController@addProductDetail');
        // brand
        Route::resource('/brand', 'managefront\BrandController');
        Route::get('/editbrand', 'managefront\BrandController@editbrand');
        // award
        Route::resource('/award', 'managefront\AwardController');
        Route::get('/awardbanner', 'managefront\ProductController@awardbanner');
        // blog
        Route::resource('/blog', 'managefront\BlogController');
        });
    Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

    Route::get('addporducttocart', 'backoffice\CartController@addporducttocart');
    Route::get('editcolor/{id}', 'managefront\ProductController@editcolor');
    Route::post('updatecolor/{id}', 'managefront\ProductController@updatecolor');

    Route::post('branch_sort', 'managefront\ContactController@branch_sort');

    Route::get('filtercar_award', 'managefront\AwardController@filtercar_award');
    Route::get('filterproduct_brand', 'managefront\AwardController@filterproduct_brand');
});

// Frontend
Route::get('/', 'frontend\FrontendController@home');
Route::get('/product', 'frontend\FrontendController@product');
Route::get('/news', 'frontend\FrontendController@news');
Route::get('/news_detail/{id}', 'frontend\FrontendController@news_detail');
Route::get('/promotion', 'frontend\FrontendController@promotion');
Route::get('/promotion_detail/{id}', 'frontend\FrontendController@promotion_detail');
Route::get('/contact', 'frontend\FrontendController@contact');
Route::get('/branch', 'frontend\FrontendController@branch');
Route::get('/blog', 'frontend\FrontendController@blog');
Route::get('/award', 'frontend\FrontendController@award');
Route::get('/searchaward', 'frontend\FrontendController@searchaward');
Route::get('/branch_detail/{id}', 'frontend\FrontendController@branch_detail');
Route::get('/blog_detail/{id}', 'frontend\FrontendController@blog_detail');
Route::get('/filterdatacar', 'frontend\FrontendController@filterdatacar');
Route::get('/product_detail/{id}', 'frontend\FrontendController@product_detail');
Route::get('readmore_promotion/{id}', 'frontend\FrontendController@readmore_promotion');
Route::post('/search_wheelBySize', 'frontend\FrontendController@search_wheelBySize');
Route::post('/search_wheelByCar', 'frontend\FrontendController@search_wheelByCar');
Route::get('/filterdatesize', 'frontend\FrontendController@filterdatesize');
Route::post('/searchbyname', 'frontend\FrontendController@searchbyname');
Route::get('/producttype/{id}', 'frontend\FrontendController@producttype');
Route::get('/productbrand/{id}', 'frontend\FrontendController@productbrand');
Route::get('/signin', 'frontend\FrontendController@signin')->name('signin');
Route::post('/userregister', 'frontend\FrontendController@userregister');
Route::get('/searchnews', 'frontend\FrontendController@searchnews');
Route::get('/cart', 'frontend\FrontendController@cart');
Route::get('/filtertire', 'frontend\FrontendController@filtertire');
Route::post('/search_tireByCar', 'frontend\FrontendController@search_tireByCar');
Route::post('/search_tireBySize', 'frontend\FrontendController@search_tireBySize');
Route::get('/AddtoCart', 'frontend\FrontendController@AddtoCart');
Route::get('/account_customer', 'frontend\FrontendController@account_customer');
Route::post('/delProductInCart', 'frontend\FrontendController@delProductInCart');
Route::post('/new_address', 'frontend\FrontendController@new_address');
Route::get('/account_customer_payment', 'frontend\FrontendController@account_customer_payment');
Route::get('/filter_size/{id}', 'frontend\FrontendController@filter_size');
Route::get('/pickcolor/{id}', 'frontend\FrontendController@pickcolor');
Route::get('/products-tyre/{id}', 'frontend\FrontendController@productstyre');

Route::get('/clc', function() {

	Artisan::call('cache:clear');
	Artisan::call('config:clear');
	Artisan::call('config:cache');
	Artisan::call('view:clear');
    // Artisan::call('optimize');
    // Artisan::call('clear-compiled');
        // Artisan::call('view:clear');
        // session()->forget('key');
	return "Cleared!";
});
