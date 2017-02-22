@extends('layouts.base', ['page' => 'partners'])

@section('content')
  <header class="intro-header" style="background-image: url('{{ URL::to('img/home-bg.jpg') }}')">
      <div class="container">
          <div class="row">
              <div class="site-heading">
                  <h1>{{ __('partners.hero_heading') }}</h1>
                  <span class="subheading">{{ __('partners.hero_subheading') }}</span>
              </div>
          </div>
      </div>
  </header>

  <div class="container margin-bottom-20">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="text-row text-center">
          <h2>{{ __('partners.heading') }}</h2>
          <p>{{ __('partners.subheading') }}</p>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Real partners should be wri -->
      @foreach(['https://kworks.ku.edu.tr/wp-content/uploads/sites/20/2016/04/plusclouds.png','img/home-bg.jpg','img/home-bg.jpg','img/home-bg.jpg','img/home-bg.jpg','img/home-bg.jpg','img/home-bg.jpg','img/home-bg.jpg','img/home-bg.jpg','img/home-bg.jpg'] as $item)
      <div class="text-center col-md-3 col-xs-12 col-sm-6">
        <div class="partners">
          <img src="{{ URL::to($item) }}"
            class="img-responsive"
            alt="partners">          
        </div>
      </div>    
      @endforeach 
    </div>
  </div>

@endsection
