@extends('partials.section-block')

@section('id')
  section-2
@overwrite

@section('heading')
  Neler Sunuyoruz
@overwrite

@section('description')
  Gönüllü öğrencilerimizin çalışmalarıyla çeşitli projeler yürütüyoruz.
@overwrite

@section('extras')

  <div class="row margin-bottom-20">
    @foreach($items = [
      [
        "icon" => "book",
        "heading" => "Bilgi Bankası",
        "description" => "Girişimlere referans oluşturacak bir kaynak olup,
        girişimcilere iş fikirlerini hayata geçirirken ihtiyaç duyacakları birçok bilgiye ulaşma imkanı sağlamaktadır."
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
        "heading" => "Let's Start(up)",
        "description" => "Takım oluşturmak, startup kurmak ve girişimine destek bulmak isteyenler
        için yıl boyunca düzenlenen tanışma ve eşleştirme programlarıdır."
      ],
      [
        "icon" => "question",
        "heading" => "Farkındalık Programları",
        "description" => "Okuldaki girişimcilik kültürünü geliştirmek üzere planlanmış
         Startup Carnival, Let’s Begin, Start Now How ve Tech Influencers gibi eğitici ve yol gösterici programlardır."
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

  <div class="row text-center margin-top-60">
    <a href="/{{ $locale }}/programs"
       class="btn btn-default cta-button cta-button-blue">
         {{ $locale == 'tr' ? strtoupper_tr(__('home.explore_programs')) : strtoupper(__('home.explore_programs')) }}
       </a>
  </div>

@overwrite
