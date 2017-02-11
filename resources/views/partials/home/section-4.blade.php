@extends('partials.section-block')

@section('id')
  section-1
@overwrite

@section('heading')
  Üyelerimiz
@overwrite

@section('description')
  Insert slider here.
@overwrite

@section('extras')

  @foreach($items = [
    ["name" => "Yönetim Kurulu", "photo" => "user"],
    ["name" => "Yönetim Kurulu", "photo" => "user"],
    ["name" => "Yönetim Kurulu", "photo" => "user"],
    ["name" => "Yönetim Kurulu", "photo" => "user"]
  ] as $item)

    <div class="text-center col-md-{{ 12 / count($items) }}">
      <div>
        <h3>{{ $item['name'] }}</h3>
      </div>
      <div class="icon">
        <i class="fa fa-4x fa-{{ $item['photo'] }}"></i>
      </div>
    </div>

  @endforeach

@overwrite
