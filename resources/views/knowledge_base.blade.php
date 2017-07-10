@extends('layouts.base', ['page' => 'knowledge_base'])

@section('content')
  <!-- Page Header -->
  <!-- Set your background image for this header on the line below. -->
  <header class="intro-header" style="background-image: url('{{ URL::to('img/about-bg.jpg') }}')">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="page-heading">
                      <h1>About Me</h1>

                      <span class="subheading">This is what I do.</span>
                  </div>
              </div>
          </div>
      </div>
  </header>






<div class="row">
    <nav class="col-sm-4">
      <u1 class="nav nav-pills nav-stacked">

 <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li>a1</li>
      <li>a1</li>
      <li>a1</li>
    </ul>
  </li>

   <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li>a1</li>
      <li>a1</li>
      <li>a1</li>
    </ul>
  </li>
 

     </u1>
  </nav>


  <div class="col-sm-8">

      <section id="1">
        <article id="11">
          <h2>Mavi Liman</h2>
          <p>Beni o limana çıkaramazsın</p>
        </article>

        <article id="12">
          <h2>Sarı Liman</h2>
          <p>Beni o limana çıkaramazsın</p>
        </article>

        <article id="13">
          <h2>Yeşil Liman</h2>
          <p>Beni o limana çıkaramazsın</p>
        </article>       
      </section>


      <section id="2">
        <article id="21">
          <h2>Mavi Liman</h2>
          <p>Beni o limana çıkaramazsın</p>
        </article>

        <article id="22">
          <h2>Sarı Liman</h2>
          <p>Beni o limana çıkaramazsın</p>
        </article>

        <article id="23">
          <h2>Yeşil Liman</h2>
          <p>Beni o limana çıkaramazsın</p>
        </article>       
      </section>







  </div>
  


</div>



@endsection
