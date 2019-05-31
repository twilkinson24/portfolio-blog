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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog/{text?}', ['uses' => 'PublicArticleController@publicIndex', 'as' => 'articles.publicIndex']);
Route::get('/article/{title}/{id}', ['uses' => 'PublicArticleController@description', 'as' => 'articles.description']);

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/send', ['uses' => 'ContactController@send', 'as' => 'contact.send']);




//ADMIN & ARTICLE ROUTES
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], 
            function() {
                // Route admin
                Route::get('/', ['uses' => 'AdminController@index', 'as' => '/']);
                
                // Users
                Route::get('/users/', ['uses' => 'UserController@index', 'as' => 'users.main']);
                // Create user
                Route::get('/users/create', ['uses' => 'UserController@create', 'as' => 'users.create']);
                // Save user to DB
                Route::post('/users/store', ['uses' => 'UserController@store', 'as' => 'users.store']);
                // show
                Route::get('/users/show/{id}', ['uses' => 'UserController@show', 'as' => 'users.show']);
                // edit user
                Route::get('/users/edit/{id}', ['uses' => 'UserController@edit', 'as' => 'users.edit']);
                // update user
                Route::post('/users/update/{id}', ['uses' => 'UserController@update', 'as' => 'users.update']);
                // delete user
                Route::get('/users/destroy/{id}', ['uses' => 'UserController@destroy', 'as' => 'users.destroy']);  

                // Articles
                Route::get('/articles/', ['uses' => 'ArticleController@index', 'as' => 'articles.main']);
                // Create article
                Route::get('/articles/create', ['uses' => 'ArticleController@create', 'as' => 'articles.create']);
                // Save article to DB
                Route::post('/articles/store', ['uses' => 'ArticleController@store', 'as' => 'articles.store']);
                // show
                Route::get('/articles/show/{id}', ['uses' => 'ArticleController@show', 'as' => 'articles.show']);
                // edit article
                Route::get('/articles/edit/{id}', ['uses' => 'ArticleController@edit', 'as' => 'articles.edit']);
                // update article
                Route::post('/articles/update/{id}', ['uses' => 'ArticleController@update', 'as' => 'articles.update']);
                // delete article
                Route::get('/articles/destroy/{id}', ['uses' => 'ArticleController@destroy', 'as' => 'articles.destroy']);  

                
                // authors
                Route::get('/authors/', ['uses' => 'AuthorController@index', 'as' => 'authors.main']);
                // Create Author
                Route::get('/authors/create', ['uses' => 'AuthorController@create', 'as' => 'authors.create']);
                // Save Author to DB
                Route::post('/authors/store', ['uses' => 'AuthorController@store', 'as' => 'authors.store']);
                // show
                Route::get('/authors/show/{id}', ['uses' => 'AuthorController@show', 'as' => 'authors.show']);
                // edit Author
                Route::get('/authors/edit/{id}', ['uses' => 'AuthorController@edit', 'as' => 'authors.edit']);
                // update Author
                Route::post('/authors/update/{id}', ['uses' => 'AuthorController@update', 'as' => 'authors.update']);
                // delete Author
                Route::get('/authors/destroy/{id}', ['uses' => 'AuthorController@destroy', 'as' => 'authors.destroy']);  
            });
