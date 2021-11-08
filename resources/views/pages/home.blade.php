@extends('layouts.app')

@section('content')
<img src="{{asset('images/header-image.png')}}" class="img-fluid" alt="Header ">
<div class="container">
<h5 class="pt-5" align="center">Finn kjøretøyopplysninger og se hvem som eier bilen</h5>

<p align="center">Sok med registreringsnummer</p>
</div>
<div class="container pb-5 custom-input" >
<form method="POST" action="{{ route('showDetails') }}">
{{ csrf_field() }}
    <div class="input-group mb-3">
        <span class="input-group-text " id="license-addon" style="background-color: #122E96 !important;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12" style="padding: 0px !important; margin:0px !important;">
                    <img style="width:30px; padding:0px; margin:0px;" src="{{asset('images/istockphoto-502755311-612x612.jpg')}}">
                </div>
                <div class="col-lg-12" style="padding: 0px !important; margin:0px !important;">
                    <h3 class="text-light" style="padding: 0px !important; margin:0px !important; font-weight:700">N</h3>
                </div>
            </div>
        </span>

            <input type="text" class="form-control" name="license" id="license" :value="old('license')" required aria-describedby="license-addon">
                <button style="border:none; padding:0px"><span class="input-group-text " id="basic-addon1" >
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <img style="width:30px; padding:0px; margin:0px;" src="{{asset('images/loupe.png')}}">
                        <h6>Sek na</h6>
                    </div>

                </div>
            </span></button>
    </div>
    </form>

</div>
<div class="mb-5 d-none d-sm-block" style="background-color: #F5F5F5;">
    <div class="row" style="padding:0px 15rem 0px 15rem;">
        <div class="col-lg-6 col-xs-12" style="background-color: #F5F5F5; padding:0px !important; margin:0px !important">
        <img src="{{asset('images/home-image.jpg')}}" class="img-fluid img-banner" style="width: 100%; padding:0px !important; margin:0px !important"">
        </div>
        <div class="col-lg-6 col-xs-12 " align="center" style="background-color: #F5F5F5; padding:0px !important; margin:0px !important">
            <h6 class="pt-5">Finn kjøretøyopplysninger</h6>
            <button class="btn btn-secondary ">Søk etter bi</button>
        </div>
    </div>
</div>

<div class="container mb-5 d-lg-none d-md-none d-xl-none" style="background-color: #F5F5F5; padding:0px !important; margin:0px !important">
    <p align="center" style="padding:20px 40px 20px 40px !important; margin:0px !important;"> Ved ȧ søke med et registreringsnummer finner du nyttig informasjon om et kjøretøy som blant annet navn pȧ eier og teknisk data</p>
</div>

<div class="modal fade" id="contact_us_modal" tabindex="-1" aria-labelledby="contact_us_modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contact_us_modalLabel">Kontakt oss</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="{{ route('sendEmail') }}">
      {{ csrf_field() }}
      <div class="modal-body">
          
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-post</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Din henvendelse</label>
            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Send Melding</button>
      </div>
      </form>
    </div>
  </div>
</div>
@if ($errors->has('license'))
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $( document ).ready(function() {
        console.log("asd");
        $('#contact_us_modal').modal('show');
});
</script>
@endif
@endsection
