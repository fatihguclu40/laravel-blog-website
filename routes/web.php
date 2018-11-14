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

Route::get('/', 'HomeGetController@get_index' );
Route::get('/index', 'HomeGetController@get_index_yonlendir' );
Route::get('/home', 'HomeGetController@get_index_yonlendir' );
Route::get('/anasayfa', 'HomeGetController@get_index_yonlendir' );
Route::get('/iletisim', 'HomeGetController@get_iletisim' );
Route::get('/hakkimizda', 'HomeGetController@get_hakkimizda' );
Route::get('/blog', 'HomeGetController@get_blog' );
Route::get('/blog/{slug}', 'HomeGetController@get_blog_icerik' );


Route::group(['prefix'=>'admin','middleware'=>'Admin'],function (){
	Route::get('/','AdminGetController@get_index');
	Route::get('/ayarlar','AdminGetController@get_ayarlar');
	Route::post('/ayarlar','AdminPostController@post_ayarlar');
	Route::get('/hakkimizda','AdminGetController@get_hakkimizda');
	Route::post('/hakkimizda','AdminPostController@post_hakkimizda');

	Route::group(['prefix'=>'blog'],function(){

        Route::get('/','AdminGetController@get_blog');
        Route::post('/','AdminPostController@post_blog_sil');
        Route::get('/blog-ekle','AdminGetController@get_blog_ekle');
        Route::post('/blog-ekle','AdminPostController@post_blog_ekle');
        Route::get('/blog-duzenle/{slug}','AdminGetController@get_blog_duzenle');
        Route::post('/blog-duzenle/{slug}','AdminPostController@post_blog_duzenle');

    });


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
