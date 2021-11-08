@extends('layouts.app')

@section('content')
<div class="row pt-5 pb-5 px-lg-5" style="background-color:#E5E7E8 !important;">
    <div class="col-lg-6 col-xs-12 px-5">
        <div class="box container" >
            <div class="input-group input-group-lg" style="box-shadow: 5px 5px rgba(0,0,0,0.2);">
                <span class="input-group-text " id="basic-addon1" style="background-color: #122E96 !important;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12" style="padding: 0px !important; margin:0px !important;">
                    <img style="width:30px; padding:0px; margin:0px;" src="{{asset('images/istockphoto-502755311-612x612.jpg')}}">
                </div>
                <div class="col-lg-12" style="padding: 0px !important; margin:0px !important;">
                    <h3 class="text-light" style="padding: 0px !important; margin:0px !important; font-weight:700">N</h3>
                </div>
            </div>
            </span>
                    <input type="text" style="font-size:36px; text-align: center;" class="form-control" placeholder="License" aria-label="License" aria-describedby="basic-addon1" value="{{$regnr}}">
                    <span class="input-group-text " id="basic-addon1" >
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <img style="width:30px; padding:0px; margin:0px;" src="{{asset('images/loupe.png')}}">
                    <h6>Sek na</h6>
                </div>
                
            </div>
            </span>
        </div>

            <div class="card mt-5" style="border-radius:5%; box-shadow: 5px 5px rgba(0,0,0,0.2);">
                <div class="card-body">
                    <h5 class="card-title">{{$details->TEKN_MERKENAVN}}</h5>
                    <h2>{{$details->TEKN_MODELL}}</h2>
                    <hr class="text-warning">
                    <table class="table border-warning pb-5 mb-5">
                        <tbody>
                            <tr class="py-4" >
                            <th scope="row">Registret første gang</th>
                            <td>{{$details->TEKN_REG_F_G}}</td>
                            </tr>
                            <tr>
                            <th scope="row">Neste frist for godkjent EU-kontroll</th>
                            <td>{{$details->TEKN_REG_F_G_N}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card card-hvem mt-5" style="border-radius:5%; box-shadow: 5px 5px rgba(0,0,0,0.2);">
                <div class="card-body">
                    <h3 class="card-title">Hvem eier bilen?</h3>
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

    <div class="col-lg-6 col-xs-12 px-5">
        <div class="box container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">

                <p for="something1" class="form-label">Estimert bilforhandlerpris</p>
                <div class="input-group">
                    <input type="text" id="something1" readonly name="something1" class="form-control" style="background-color:#C6DCCF !important" value="921 400 kr">
                </div>
                </div>
                <div class="col-lg-6 col-xs-12">

                <p for="something2" class="form-label">Estimert privatpris</p>
                <div class="input-group">
                    <input type="text" id="something2" readonly name="something2" class="form-control" style="background-color:#C6DCCF !important" value="836 600 - 885 900 kr">
                </div>
                </div>
            </div>

            <div class="card mt-5" style="border-radius:5%; padding-bottom:100px; box-shadow: 5px 5px rgba(0,0,0,0.2);">
                <div class="card-body">
                    <h2>Kjøretøydata</h2>
                    <hr class="text-warning">
                    <table class="table border-warning pb-5 mb-5">
                        <tbody>
                            <tr class="py-4" >
                            <th scope="row">Oppgitt effekt</th>
                            <td>{{$details->TEKN_MOTORYTELSE}}</td>
                            </tr>
                            <tr>
                            <th scope="row">Maks hastighet</th>
                            <td>{{$details->TEKN_SITTEPLASSER_TOTALT}}</td>
                            </tr>
                            <tr>
                            <th scope="row">Girkasse</th>
                            <td>{{$details->TEKN_GIRKASSE}}</td>
                            </tr>
                            <tr>
                            <th scope="row">Drivstoff</th>
                            <td>{{$details->TEKN_DRIVST}}</td>
                            </tr>
                            <tr>
                            <th scope="row">Egenvekt</th>
                            <td>{{$details->TEKN_EGENVEKT}} kg</td>
                            </tr>
                            <tr>
                            <th scope="row">Tillatt totalvekt</th>
                            <td>{{$details->TEKN_TOTVEKT}} kg<td>
                            </tr>
                            <tr>
                            <th scope="row">Lengde</th>
                            <td>{{$details->TEKN_LENGDE}} mm</td>
                            </tr>
                            <tr>
                            <th scope="row">Bredde</th>
                            <td>{{$details->TEKN_BREDDE}} mm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
