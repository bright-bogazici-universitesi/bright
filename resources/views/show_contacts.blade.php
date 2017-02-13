@extends('layouts.base', ['page' => 'contact'])

@section('content')
  <!-- Page Header -->
  <!-- Set your background image for this header on the line below. -->
  <header class="intro-header" style="background-image: url('{{ URL::to('img/contact-bg.jpg') }}')">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="page-heading">
                      <h1>Contact Me</h1>

                      <span class="subheading">Have questions? I have answers (maybe).</span>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <!-- Main Content -->
  <div class="container margin-bottom-20">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              	@forelse($contacts as $contact)
				    <div>
				    	<h6>{{ $contact->name }} - {{ $contact->email }} - {{ $contact->phone_number }}</h6>
				    	<p>{{ $contact->message }}</p>
				    </div>
				@empty
				    <p>No contact</p>
				@endforelse
          </div>
      </div>
  </div>

@endsection
