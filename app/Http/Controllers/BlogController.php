<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
  function index($locale) {
    app()->setLocale($locale);

    return view('blog', ['locale' => $locale]);
  }
}
