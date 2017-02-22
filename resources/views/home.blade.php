@extends('layouts.base', ['page' => 'home'])

@section('content')
  <!-- Page Header -->
  <!-- Set your background image for this header on the line below. -->
  <header class="intro-header intro-header-hero" style="background-image: url('{{ URL::to('img/home-bg.jpg') }}')">
      <div class="container hero-container">
          <div class="row">
              <div class="site-heading">
                  <h1>{{ __('home.hero_heading') }}</h1>
                  <span class="subheading">{{ __('home.hero_subheading') }}</span>
              </div>
          </div>
          <a class="down-arrow"
             href="#section-1">
            <i class="fa fa-2x fa-angle-down"></i>
          </a>
      </div>
  </header>

  <!-- Main Content -->
  @include('partials.home.section-1')

  @include('partials.home.section-2')

  @include('partials.home.section-3')

  @include('partials.home.section-4')

  @include('partials.home.subscribe-section')


@endsection
