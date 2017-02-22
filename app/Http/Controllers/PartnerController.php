<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
  function index($locale) {
    app()->setLocale($locale);

    return view('partners', ['locale' => $locale]);
  }
}
