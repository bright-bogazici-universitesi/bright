<section class="block" id="{{ trim(View::yieldContent('id')) }}">
  <div class="container col-md-11">
      <div class="text-row text-center">
        <h2>{{ trim(View::yieldContent('heading')) }}</h2>
        <p>{{ trim(View::yieldContent('description')) }}</p>
      </div>

      @yield('extras')
  </div>
</section>
