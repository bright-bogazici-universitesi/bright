<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  function index($locale) {
    app()->setLocale($locale);

    return view('contact', ['locale' => $locale]);
  }
}
