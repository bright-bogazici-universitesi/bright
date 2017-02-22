@extends('partials.section-block')

@section('id', 'section-1')

@section('heading', 'Bright | Boğaziçi Üniversitesi Girişimcilik Merkezi')

@section('description', 'Bright, mevcut yapıların çalışmasını güçlendirici ve bu yapıları Boğaziçi Üniversitesi değerleri ile birleştirici bir etkiye sahip bir oluşum olarak, dünya ile rekabet edecek yenilikçi şirketlerin Türkiye\'den çıkmasına zemin hazırlamak için çalışır.')

@section('extras')

  @foreach($items = [
    ["icon" => "share-alt", "text" => __('home.section1_el1')],
    ["icon" => "cogs", "text" => __('home.section1_el2')],
    ["icon" => "graduation-cap", "text" => __('home.section1_el3')],
    ["icon" => "line-chart", "text" => __('home.section1_el4')]
  ] as $item)

    <div class="text-center section-1-icon-text-block col-md-3 col-xs-6">
      <div class="icon">
        <i class="fa fa-3x fa-{{ $item['icon'] }}"></i>
      </div>
      <div>
        <h3>{{ $item['text'] }}</h3>
      </div>
    </div>

  @endforeach

@endsection
