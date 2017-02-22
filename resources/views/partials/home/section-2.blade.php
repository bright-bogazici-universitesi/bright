@extends('partials.section-block')

@section('id')
  section-2
@overwrite

@section('heading')
  Neler Sunuyoruz
@overwrite

@section('description')
  Buraya bir açıklama gelebilir.
@overwrite

@section('extras')

  <div class="row margin-bottom-20">
    @foreach($items = [
      [
        "icon" => "book",
        "heading" => "Bilgi Üretimi",
        "description" => "Referans oluşturacak bilgi bankası, vaka çalışmaları, girişimcilik değerlendirmesi, Boğaziçi yetenekleri ile şirketleri buluşturan problem çözme programları."
      ],
      [
        "icon" => "hand-peace-o",
        "heading" => "Finansman ve Kuluçka",
        "description" => "Buba ve TTO ile beraber girişimlere finans ve altyapı desteği."
      ]
    ] as $item)

      <div class="section-2-3-icon-text-block col-md-6 col-xs-12">
        <div class="icon">
          <i class="fa fa-{{ $item['icon'] }}" style="font-size: 24px"></i>
        </div>
        <div>
          <h3>{{ $item['heading'] }}</h3>
          <span>{{ $item['description'] }}</span>
        </div>
      </div>

    @endforeach
  </div>

  <div class="row">
    @foreach($items = [
      [
        "icon" => "users",
        "heading" => "Kişi Ağı",
        "description" => "Mezunlar ve öğrenciler için girişimcilik envanteri, takım kurmak, fikir bulmak ve şirket kurmak isteyenler için eşleştirme programları."
      ],
      [
        "icon" => "question",
        "heading" => "Farkındalık Programları",
        "description" => "Okuldaki girişimcilik kültürünü geliştirmek üzere eğitici etkinliklerin yanı sıra, yol gösterici eğitimler, kişisel farkındalık oluşturma, rol modelleri ile kariyer planlaması, motivasyon ve destek programları."
      ]
    ] as $item)

      <div class="section-2-3-icon-text-block col-md-6 col-xs-12">
        <div class="icon">
          <i class="fa fa-{{ $item['icon'] }}" style="font-size: 24px"></i>
        </div>
        <div>
          <h3>{{ $item['heading'] }}</h3>
          <span>{{ $item['description'] }}</span>
        </div>
      </div>

    @endforeach
  </div>

@overwrite
