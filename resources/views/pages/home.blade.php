@extends('layouts.app')

@section('content')
<div style="max-width:1800px" align="justify">
<img src="{{asset('images/header-image.png')}}" class="img-fluid" alt="Header ">
<div class="container">
<h5 class="pt-5" align="center">Finn kjøretøyopplysninger og se hvem som eier bilen</h5>

<p align="center">Sok med registreringsnummer</p>
</div>
<div class="container pb-5 custom-input" >
<form method="POST" action="{{ route('showDetails') }}">
{{ csrf_field() }}
    <div class="input-group mb-3" style="border:none">
        <span class="input-group-text " id="license-addon" style="background-color: #122E96 !important; border:1px solid #000000; border-radius:20px; margin-right:-17px; z-index:100;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12" style="padding: 0px !important; margin:0px !important;">
                    <img style="width:30px; padding:0px; margin:0px;" src="{{asset('images/istockphoto-502755311-612x612.jpg')}}">
                </div>
                <div class="col-lg-12" style="padding: 0px !important; margin:0px !important;">
                    <h3 class="text-light" style="padding: 0px !important; margin:0px !important; font-weight:700">N</h3>
                </div>
            </div>
        </span>
            <input type="text" class="form-control custom-input-home" name="license" id="license" style="font-size: 25px; padding-left:40px" Placeholder="Skriv inn regnr" :value="old('license')" required aria-describedby="license-addon">
            <button style="border:1px solid #000000; border-radius:20px;  padding:0px 10px 0px 10px; margin-left:-17px; z-index:100; background-color:#ffffff">
                    <span class="input-group-text " id="basic-addon1" style="background-color:#ffffff; border: none">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <img style="width:30px; padding:0px; margin:0px;" src="{{asset('images/loupe.png')}}">
                            <h6>Sek na</h6>
                        </div>

                    </div>
                    </span>
            </button>
            
    </div>
    </form>

</div>
<div class="mb-5 d-none d-sm-block" style="background-color: #F5F5F5;">
    <div class="row" style="padding:0px 15rem 0px 15rem;">
        <div class="col-lg-6 col-xs-12" style="background-color: #F5F5F5; padding:0px !important; margin:0px !important">
        <img src="{{asset('images/home-image.jpg')}}" class="img-fluid img-banner" style="width: 100%; padding:0px !important; margin:0px !important">
        </div>
        <div class="col-lg-6 col-xs-12 " align="center" style="background-color: #F5F5F5; padding:0px !important; margin:auto !important">
            <h6>Finn kjøretøyopplysninger</h6>
            <button class="btn btn-secondary" style="background-color:rgb(69,79,85)">Søk etter bi</button>
        </div>
    </div>
</div>

<div class="container mb-5 d-lg-none d-md-none d-xl-none" style="background-color: #F5F5F5; padding:0px !important; margin:0px !important">
    <p align="center" style="padding:20px 40px 20px 40px !important; margin:0px !important;"> Ved ȧ søke med et registreringsnummer finner du nyttig informasjon om et kjøretøy som blant annet navn pȧ eier og teknisk data</p>
</div>


</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
