@extends('partials.section-block')

@section('id')
  subscribe-section
@overwrite

@section('heading')
  Abone Ol
@overwrite

@section('description')
  Bültenlerimizi almak ve programlarımızdan haberdar olmak için abone ol.
@overwrite

@section('extras')
  <div class="row subscribe-form">
    <div class="form-group floating-label-form-group controls email-col">
        <label>Email Address</label>
        <input type="email" class="form-control"
               placeholder="Email Address"
               id="subscription-email"
               required data-validation-required-message="Please enter your email address.">
    </div>
    <div class="form-group submit-col">
        <a type="submit" class="btn btn-default">Katıl</a>
    </div>
  </div>
@overwrite
