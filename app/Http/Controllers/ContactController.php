<?php

namespace App\Http\Controllers;

use App\Contact;
use Request;

class ContactController extends Controller
{
  function index($locale) {
    app()->setLocale($locale);

    return view('contact', ['locale' => $locale]);
  }
  function show($locale) {
  	app()->setLocale($locale);
  	$contacts = Contact::all();

  	return view('show_contacts', ['locale' => $locale, 'contacts' => $contacts]);
  }
  function send_contact($locale){
  	$input = Request::all();
  	Contact::create($input);
  	return redirect($locale.'/contact');
  }

}
