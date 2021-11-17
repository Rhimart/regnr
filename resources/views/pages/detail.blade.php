@extends('layouts.app')

@section('content')
<div class="row pt-5 pb-5 px-lg-5" style="background-color:#E5E7E8 !important;">
    <div class="col-lg-6 col-xs-12 left-column">
        <div class="box container" >
            <div class="d-none d-sm-block">
            <div class="input-group input-group-lg " style="box-shadow:5px 5px 5px rgba(0,0,0,0.1); border-radius:20px">
                <span class="input-group-text " id="basic-addon1" style="background-color: #122E96 !important; border:1px solid #000000; border-radius:20px; margin-right:-17px; z-index:100;">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12" style="padding: 0px !important; margin:0px !important;">
                            <img style="width:30px; padding:0px; margin:0px;" src="{{asset('images/istockphoto-502755311-612x612.jpg')}}">
                        </div>
                        <div class="col-lg-12" style="padding: 0px !important; margin:0px !important;">
                            <h3 class="text-light" style="padding: 0px !important; margin:0px !important; font-weight:700">N</h3>
                        </div>
                    </div>
                </span>
                    <input type="text"  class="form-control custom-input-detail" readonly aria-label="License" aria-describedby="basic-addon1" value="{{$regnr}}">
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
            </div>

            <div class="card mt-5" style="border-radius:30px; box-shadow:5px 5px 5px rgba(0,0,0,0.1);">
                <div class="card-body">
                    <h5 class="card-title">{{$details->TEKN_MERKENAVN}}</h5>
                    <h2 style="font-weight: 700;">{{$details->TEKN_MODELL}}</h2>
                    <hr class="custom-hr">
                    <table class="table border-warning pb-5 mb-5">
                        <tbody>
                            <tr class="py-4" >
                            <th scope="row">Registret første gang</th>
                            <td align="right">{!!$details->TEKN_REG_F_G!!}</td>
                            </tr>
                            <tr>
                            <th scope="row">Neste frist for godkjent EU-kontroll</th>
                            <td align="right">{!!$details->TEKN_REG_F_G_N!!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card card-hvem mt-5" style="border-radius:30px; box-shadow:5px 5px 5px rgba(0,0,0,0.1);">
                <div class="card-body">

                    <h3 class="card-title" style="font-weight: 700;">Hvem eier bilen?</h3>
                    <span class="mb-2 d-lg-none d-md-none d-xl-none"><a href="sms://+2292?body=REGNR%20{{$regnr}}" class="btn btn-primary">Klikk her</a> &nbsp&nbsp for a finne eier av bilen</span>
                    <p class="card-text">Send SMS "REGNER {{$regnr}}" til 2292 </p>
                    <p>Tjenesten koster kr. 49 og dette belastes ditt
                        mobilabonnement i øyeblikket svaret mottas.
                        Tjenesten er gratis dersom ventetiden overstiger to
                        minutter.
                    </p>
                    <p>Du vil innen to minutter motta informasjon om hvem som eier
                        leaser bilen, i tilegg til andre navm som har en relasjon til
                    kjøretøyet, sammen med kontaktinformasjon dette er tilgjengelig</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xs-12 right-column" >
        <div class="box container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">

                <p for="something1" class="form-label">Estimert bilforhandlerpris</p>
                <div class="input-group">
                    <input type="text" id="something1" readonly name="something1" class="form-control" style="background-color:#C6DCCF !important; border:1px solid #000000; font-size:22px; box-shadow:5px 5px 5px rgba(0,0,0,0.1);" value="921 400 kr">
                </div>
                </div>
                <div class="col-lg-6 col-xs-12">

                <p for="something2" class="form-label">Estimert privatpris</p>
                <div class="input-group">
                    <input type="text" id="something2" readonly name="something2" class="form-control" style="background-color:#C6DCCF !important; border:1px solid #000000; font-size:22px; box-shadow:5px 5px 5px rgba(0,0,0,0.1);" value="836 600 - 885 900 kr">
                </div>
                </div>
            </div>

            <div class="card mt-5" style="border-radius:30px; box-shadow:5px 5px 5px rgba(0,0,0,0.1); padding-bottom:70px;">
                <div class="card-body">
                    <h2 style="font-weight: 700; margin-top:30px">Kjøretøydata</h2>
                    <hr class="custom-hr">
                    <table class="table border-warning pb-5 mb-5">
                        <tbody>
                            <tr style="border-bottom: 1px solid #F59D28 !important">
                            <th scope="row">Oppgitt effekt</th>
                            <td align="right">{{$details->TEKN_MOTORYTELSE}} HK</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #F59D28 !important">
                            <th scope="row">Maks hastighet</th>
                            <td align="right">{{$details->TEKN_SITTEPLASSER_TOTALT}}</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #F59D28">
                            <th scope="row">Girkasse</th>
                            <td align="right">{{$details->TEKN_GIRKASSE}}</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #F59D28">
                            <th scope="row">Drivstoff</th>
                            <td align="right">{{$details->TEKN_DRIVST}}</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #F59D28">
                            <th scope="row">Egenvekt</th>
                            <td align="right">{{$details->TEKN_EGENVEKT}} kg</td>
                            </tr >
                            <tr style="border-bottom: 1px solid #F59D28">
                            <th scope="row">Tillatt totalvekt</th>
                            <td align="right">{{$details->TEKN_TOTVEKT}} kg<td>
                            </tr>
                            <tr style="border-bottom: 1px solid #F59D28">
                            <th scope="row">Lengde</th>
                            <td align="right">{{$details->TEKN_LENGDE}} mm</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #F59D28">
                            <th scope="row">Bredde</th>
                            <td align="right">{{$details->TEKN_BREDDE}} mm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
