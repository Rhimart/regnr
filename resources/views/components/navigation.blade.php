<nav class="navbar navbar-expand-lg navbar-light bg-light p-lg-5" style="background-color: #454F55 !important;">
  <div class="container-fluid">
    <a class="navbar-brand text-light nav-header" style="display: none;"  href="/">Bilregisteret Norge</a>
    <!-- <button class="navbar-toggler "  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon navbar-light" style="color:#ffffff !important"></span>
    </button> -->
    <div class="container custom-input-nav d-lg-none d-md-none d-xl-none">
<form method="POST" action="{{ route('showDetails') }}">
{{ csrf_field() }}
    <div class="input-group" style="border:none">
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
            <input type="text" class="form-control custom-input-home" name="license" id="license"  Placeholder="Skriv inn regnr" :value="old('license')" required aria-describedby="license-addon">
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
  </div>
</nav>