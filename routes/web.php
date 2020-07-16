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
    return view('pages.home_dev');
})->name('Home');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('Contact');
Route::get('/gallery', 'GalleryController@galleryFrontEnd')->name('Gallery');
Route::get('/privacy-policy', function () {
    return view('pages.quotes');
})->name('Quotes');
Route::get('/blogs', 'BlogController@blogsPage')->name('Blogs');
Route::get('/blogs/{id}', 'BlogController@show')->name('blog-detail');
Route::get('/blogs/search', 'BlogController@searchBlog')->name('blog-search');
Route::get('/blog-detail-en', function () {
    return view('pages.blog_detail_en');
})->name('blog-detail-en');
Route::get('/blog-detail-id', function () {
    return view('pages.blog_detail_id');
})->name('blog-detail-id');
Route::get('/about-us', function(){
    return view('pages.about_us');
})->name('About Us');

//ADMIN
Route::get('/login', 'UserController@index')->name('login');
Route::post('/login', 'UserController@login')->name('do-login');
Route::get('logout', 'UserController@logout')->name('logout');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/blog-list', 'BlogController@index')->name('blog-list');
Route::get('/blog-add', 'BlogController@create')->name('blog-add');
Route::get('/blog/edit/{id}', 'BlogController@edit')->name('blog-edit');
Route::get('/blog/search', 'BlogController@adminSearchBlog')->name('admin-blog-search');
Route::post('blog-add', 'BlogController@store')->name('blog-save');
Route::put('blog/edit/{id}', 'BlogController@update')->name('blog-save-update');
Route::delete('/blog/{id}', 'BlogController@destroy')->name('delete-blog');

Route::get('/gallery-list', 'GalleryController@index')->name('gallery-list');
Route::get('/add-image', 'GalleryController@create')->name('add-image');
Route::get('/edit-image/{id}', 'GalleryController@edit')->name('edit-image');
Route::post('add-image', 'GalleryController@store')->name('save-image');
Route::delete('/image/{id}', 'GalleryController@destroy')->name('delete-image');
Route::put('image/edit/{id}', 'GalleryController@update')->name('image-save-update');

Route::get('/quote-list', 'QuoteController@index')->name('quote-list');
Route::get('/quote-create', 'QuoteController@create')->name('quote-add');
Route::get('/quote-list/search', 'QuoteController@adminQuoteSearch')->name('admin-quote-search');
Route::post('quote-create', 'QuoteController@store')->name('quote-save');
Route::get('/web-information', 'WebInfoController@index')->name('web-info');
Route::get('/web-information-edit', 'WebInfoController@edit')->name('web-info-edit');
Route::put('web-information-edit', 'WebInfoController@update')->name('web-info-edit-save');
