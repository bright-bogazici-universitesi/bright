@extends('partials.section-block')

@section('id')
  section-3
@overwrite

@section('heading')
  Kimin İçin
@overwrite

@section('description')
@overwrite

@section('extras')

<div class="row">
  @foreach($items = [

  [
    "icon" => "graduation-cap",
    "heading" => "Mezunlar ve Öğrenciler",
    "description" => "Boğaziçi Girişimcilik Merkezi Boğaziçi ismiyle gelen rekabet avantajını kendine has uzun vadeli bir rekabet avantajına dönüştürmene yardımcı olur."
  ],
    [
      "icon" => "wrench",
      "heading" => "Girişimciler",
      "description" => "Boğaziçi Girişimcilik Merkezi zorlandığın her aşamada başvurabileceğin bir bilgi ve kişi ağı sunar."
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

  <div class="row margin-bottom-20">
    @foreach($items = [
    [
      "icon" => "briefcase",
      "heading" => "Şirketler",
      "description" => "Boğaziçi Girişimcilik Merkezi şirketinin girişimciliğini değerlendirir, şirketine eğitim verir, şirketinin Boğaziçi yeteneğinden faydalanmasını sağlar."
    ],
      [
        "icon" => "flash",
        "heading" => "Akademisyenler ve Araştırmacılar",
        "description" => "Boğaziçi Girişimcilik Merkezi araştırma geliştirme faaliyetlerinizin ticarileştirilmesi ve iş modelleri üretilebilmesi için destek verir."
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
