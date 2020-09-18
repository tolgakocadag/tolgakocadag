<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::get('/', 'Visitor\HomeController@index')->name('homepage');
Route::get('/blog/{slug}', 'Visitor\HomeController@blog')->name('blog');

Route::get('/sitemap.xml', 'Visitor\HomeController@sitemap');

Route::post('/change/feature/next','Visitor\HomeController@changeFeature_next')->name('change.feature.next');
Route::post('/change/feature/prev','Visitor\HomeController@changeFeature_prev')->name('change.feature.prev');




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware('isAdminLogin')->group(function(){
  Route::get('login', 'Admin\Login@login')->name('login');
  Route::post('login','Admin\Login@loginPost')->name('login.post');
});

Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
  Route::get('', 'Admin\Login@index')->name('index');
  Route::get('logout','Admin\Login@logout')->name('logout');

  /*
  |--------------------------------------------------------------------------
  | ANALYTICS PAGE Routes
  |--------------------------------------------------------------------------
  */

  Route::get('analyticsdashboard','Admin\Dashboard@analytics')->name('dashboard.analytics');

  /*
  |--------------------------------------------------------------------------
  | POST PAGE Routes
  |--------------------------------------------------------------------------
  */

  Route::get('posts','Admin\Posts@show')->name('posts');
  Route::post('postlist','Admin\Posts@list')->name('posts.list');
  Route::get('posts/add','Admin\Posts@addshow')->name('posts.showadd');
  Route::post('postadd','Admin\Posts@add')->name('posts.add');
  Route::post('posts/edit','Admin\Posts@editshow')->name('posts.showedit');
  Route::post('postedit','Admin\Posts@edit')->name('posts.edit');
});
