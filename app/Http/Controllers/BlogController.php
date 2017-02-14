<?php

namespace App\Http\Controllers;

use App\Article;
use Request;

class BlogController extends Controller
{
  function index($locale) {
    app()->setLocale($locale);

    return view('blog', ['locale' => $locale]);
  }
  function show_article($locale,$id){
  	app()->setLocale($locale);
  	$article = Article::find($id);

  	return view('show_article',['locale' => $locale, 'article' => $article]);
  }
  function create_article($locale){
  	app()->setLocale($locale);
  
  	return view('create_article',['locale' => $locale]);
  }
  function send_article($locale){
  	$input = Request::all();
  	Article::create($input);
  	return redirect($locale.'/blog/create-article');
  }

}
