<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsController extends Controller
{
  function index($locale) {
    app()->setLocale($locale);

    return view('programs', ['locale' => $locale]);
  }
}
