@extends('layouts.base', ['page' => 'contact'])

@section('content')
  <!-- Page Header -->
  <!-- Set your background image for this header on the line below. -->
  <header class="intro-header" style="background-image: url('{{ URL::to('img/contact-bg.jpg') }}')">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="page-heading">
                      <h1>{{ __('contacts.contact_me') }}</h1>
                      <span class="subheading">
                      {{ __('contacts.subheading') }}
                      </span>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <!-- Main Content -->
  <div class="container margin-bottom-20">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
              <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
              <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
              <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
              {!! Form::open(array('url' => '/'.$locale.'/send-contact')) !!}
                <div class="row control-group">
                      <div class="form-group col-xs-12 floating-label-form-group controls">
                          <label> {{ __('contacts.name') }}</label>
                          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name', 'id' => 'name', 'required' => 'true', 'data-validation-required-message' => 'Please enter your name.']) !!}
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  <div class="row control-group">
                      <div class="form-group col-xs-12 floating-label-form-group controls">
                          <label>{{ __('contacts.email') }}</label>
                          {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address', 'id' => 'email', 'required' => 'true', 'data-validation-required-message' => 'Please enter your email address.']) !!}
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  <div class="row control-group">
                      <div class="form-group col-xs-12 floating-label-form-group controls">
                          <label>{{ __('contacts.phone_number') }}</label>
                          {!! Form::tel('phone_number', null, ['class' => 'form-control', 'placeholder' => 'Phone Number', 'id' => 'phone', 'required' => 'true', 'data-validation-required-message' => 'Please enter your phone number.']) !!}
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  <div class="row control-group">
                      <div class="form-group col-xs-12 floating-label-form-group controls">
                          <label>{{ __('contacts.message') }}</label>
                          {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message', 'id' => 'message', 'required' => 'true', 'data-validation-required-message' => 'Please enter your message.', 'rows' => '5']) !!}
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  <br>
                  <div id="success"></div>
                  <div class="row">
                      <div class="form-group col-xs-12">
                          {!! Form::submit(__('contacts.send'), ['class' => 'btn btn-default']) !!}
                      </div>
                  </div>
              {!! Form::close() !!}

          </div>
      </div>
  </div>

@endsection
