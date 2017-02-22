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
    return redirect('/en');
});

Route::get('/{locale}', 'HomeController@index');

Route::get('/{locale}/programs', 'ProgramsController@index');

Route::get('/{locale}/events', 'EventsController@index');

Route::get('/{locale}/knowledge-base', 'KnowledgeBaseController@index');

Route::get('/{locale}/blog', 'BlogController@index');
Route::get('/{locale}/blog/create-article', 'BlogController@create_article');
Route::post('/{locale}/blog/send-article', 'BlogController@send_article');
Route::get('/{locale}/blog/{id}', 'BlogController@show_article');

Route::get('/{locale}/contact', 'ContactController@index');
Route::get('/{locale}/show-contact', 'ContactController@show');
Route::post('/{locale}/send-contact', 'ContactController@send_contact');

Route::get('/{locale}/partners', 'PartnerController@index');
