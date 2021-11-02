@extends('layouts.app')

@section('content')
<img src="{{asset('images/header-image.png')}}" class="img-fluid" alt="Header ">
<div class="container">
<h5 class="pt-5" align="center">Finn kjoretoyopplysninger og se hvem som eier bilen</h5>

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

            <input type="text" class="form-control" name="license" id="license" placeholder="License" :value="old('license')" required aria-describedby="license-addon">
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
    @if ($errors->has('license'))
                    <span class="text-danger">{{ $errors->first('license') }}</span>
                @endif
</div>
<div class="container mb-5" >
    <div class="row">
        <div class="col-lg-6 col-xs-12" style="background-color: #F5F5F5; padding:0px !important; margin:0px !important">
        <img src="{{asset('images/home-image.jpg')}}" class="img-fluid img-banner" style="width: 100%; padding:0px !important; margin:0px !important"">
        </div>
        <div class="col-lg-6 col-xs-12 " align="center" style="background-color: #F5F5F5; padding:0px !important; margin:0px !important">
            <h6 class="pt-5">Finn kjoretoyopplysninger</h6>
            <button class="btn btn-secondary ">Sok etter bi</button>
        </div>
    </div>
</div>
@endsection
