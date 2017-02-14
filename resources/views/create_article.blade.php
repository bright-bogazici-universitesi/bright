@extends('layouts.base', ['page' => 'contact'])

@section('content')
  <!-- Page Header -->
  <!-- Set your background image for this header on the line below. -->
  <header class="intro-header" style="background-image: url('{{ URL::to('img/contact-bg.jpg') }}')">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="page-heading">
                      <h1>{{ __('blog.add_article') }}</h1>
                      <span class="subheading">
                      {{ __('blog.add_article_description') }}
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
              <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
              <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
              <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
              {!! Form::open(array('url' => '/'.$locale.'/blog/send-article')) !!}
                <div class="row control-group">
                      <div class="form-group col-xs-12 floating-label-form-group controls">
                          <label> {{ __('blog.author') }}</label>
                          {!! Form::text('author', null, ['class' => 'form-control', 'placeholder' => 'Author', 'id' => 'author', 'required' => 'true', 'data-validation-required-message' => 'Please enter your name.']) !!}
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  <div class="row control-group">
                      <div class="form-group col-xs-12 floating-label-form-group controls">
                          <label>{{ __('blog.title') }}</label>
                          {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'id' => 'email', 'required' => 'true', 'data-validation-required-message' => 'Please enter title.']) !!}
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  <div class="row control-group">
                      <div class="form-group col-xs-12 floating-label-form-group controls">
                          <label>{{ __('blog.subtitle') }}</label>
                          {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Subtitle', 'id' => 'phone', 'required' => 'true', 'data-validation-required-message' => 'Please enter subtitle.']) !!}
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  <div class="row control-group">
                      <div class="form-group col-xs-12 floating-label-form-group controls">
                          <label>{{ __('blog.body') }}</label>
                          {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Body', 'id' => 'message', 'required' => 'true', 'data-validation-required-message' => 'Please enter body.', 'rows' => '5']) !!}
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  <br>
                  <div id="success"></div>
                  <div class="row">
                      <div class="form-group col-xs-12">
                          {!! Form::submit(__('blog.send'), ['class' => 'btn btn-default']) !!}
                      </div>
                  </div>
              {!! Form::close() !!}


          </div>
      </div>
  </div>

@endsection
