@extends('layouts.base', ['page' => 'blog'])

@section('content')
  <!-- Page Header -->
  <!-- Set your background image for this header on the line below. -->
  <header class="intro-header" style="background-image: url('{{ URL::to('img/post-bg.jpg') }}')">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="post-heading">
                      <h1>{{ $article->title }}</h1>
                      <h2 class="subheading">{{ $article->subtitle }}</h2>
                      <span class="meta">Posted by <a href="#">{{ $article->author }}</a> on {{ $article->updated_at }}</span>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <!-- Post Content -->
  <article>
      <div class="container margin-bottom-20">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <?php 
                    //How to print HTML with blade???
                    echo $article->body; 
                  ?>
              </div>
          </div>
      </div>
  </article>
@endsection
