<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnowledgeBaseController extends Controller
{
  function index($locale) {
    app()->setLocale($locale);

    return view('knowledge_base', ['locale' => $locale]);
  }
}
