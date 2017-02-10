<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  function index($locale) {
    app()->setLocale($locale);

    return view('home', ['locale' => $locale]);
  }
}
