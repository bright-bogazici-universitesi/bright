<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
  function index($locale) {
    app()->setLocale($locale);

    return view('events', ['locale' => $locale]);
  }
}
