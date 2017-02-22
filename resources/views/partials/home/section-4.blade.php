@extends('partials.section-block')

@section('id')
  section-4
@overwrite

@section('heading')
  Üyelerimiz
@overwrite

@section('description')
  Insert slider here.
@overwrite

@section('extras')

  <div class="row">
    @foreach($items = [
      ["name" => "Yönetim Kurulu", "photo" => "user"],
      ["name" => "Yönetim Kurulu", "photo" => "user"],
      ["name" => "Yönetim Kurulu", "photo" => "user"],
      ["name" => "Yönetim Kurulu", "photo" => "user"]
    ] as $item)

      <div class="section-4-img-block text-center col-md-3 col-xs-6">
        <div>
          <h3 style="margin-top: 0">{{ $item['name'] }}</h3>
        </div>
        <div class="icon">
          <i class="fa fa-4x fa-{{ $item['photo'] }}"></i>
        </div>
      </div>

    @endforeach
  </div>

  <div class="row text-center margin-top-60">
    <a href="/{{ $locale }}/programs"
       class="btn btn-default cta-button cta-button-blue">
         {{ __('home.meet_board') }}
       </a>
  </div>

@overwrite
