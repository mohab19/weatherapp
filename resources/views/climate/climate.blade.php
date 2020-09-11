@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/climate_style.css') }}">
@endpush
@section('content')
<!--start climate section-->
<div class="climate">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="climate-data">
                    <h2 class="py-3">CLIMATE CHANGE</h2>
                    <p class="text-muted">A scientific look at global change.</p>
                    <img src="images/temprature.jpg" alt="temprature" class="img-fluid">
                </div>
                <div class="climate-left mt-5">
                    <h2 class="py-3">IMPACTS & ADAPTATION</h2>
                    <div class="media py-3">
                        <img src="images/hurricane.jpg" class="align-self-start mr-3 img-fluid" alt="hurricane">
                        <div class="media-body">
                            <h5 class="mt-0">weather impacts</h5>
                            <p>In the early 2000s, a new field of climate-science research emerged that began to explore the human fingerprint on extreme weather, such as floods, heatwaves, droughts and storms.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="media py-3">
                        <img src="images/hurricane_florence.png" class="align-self-start mr-3 img-fluid" alt="hurricane">
                        <div class="media-body">
                            <h5 class="mt-0">weather adaptation</h5>
                            <p>Scientists have published more than 300 peer-reviewed studies looking at weather extremes around the world,
                            from wildfires in Alaska (pdf) and hurricanes in the Caribbean to flooding in France and heatwaves in China.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="climate-causes">
                    <h2 class="py-3">CAUSES OF CLIMATE CHANGE</h2>
                    <p class="text-muted">The term climate refers to the general weather conditions of a place over many years.</p>
                    <div class="climate-list">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-chevron-right"></i> <b>VESTIBULUM IAC</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>ENIM SIT AMET MPOR</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>NULA IN TRIS</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>NUNC VENENARHO</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>NCUS EROS</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>PHARETRA ELIT</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>PHARETRA ET</b></li>
                        </ul>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-chevron-right"></i> <b>IN NEC</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>VOLUTPAT NISI</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>FUSCE ALIQUAM EU</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>DUI VITAE ORNARE</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>PHASELUS ULLA</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>MCORPER</b></li>
                            <li><i class="fas fa-chevron-right"></i> <b>CRAS IN ACUM</b></li>
                        </ul>
                    </div>
                </div>
                <div class="climate-right">
                    <h2 class="py-3">What We Can Do</h2>
                    <div class="media py-3">
                        <img src="images/pic1.jpg" class="align-self-start mr-3 img-fluid" alt="hurricane">
                        <div class="media-body">
                            <h5 class="mt-0">weather impacts</h5>
                            <p>In the early 2000s, a new field of climate-science research emerged that began to explore the human fingerprint on extreme weather</p>
                        </div>
                    </div>
                    <div class="media py-3">
                        <img src="images/pic2.jpg" class="align-self-start mr-3 img-fluid" alt="hurricane">
                        <div class="media-body">
                            <h5 class="mt-0">weather impacts</h5>
                            <p>In the early 2000s, a new field of climate-science research emerged that began to explore the human fingerprint on extreme weather</p>
                        </div>
                    </div>
                    <div class="media py-3">
                        <img src="images/pic3.jpg" class="align-self-start mr-3 img-fluid" alt="hurricane">
                        <div class="media-body">
                            <h5 class="mt-0">weather impacts</h5>
                            <p>In the early 2000s, a new field of climate-science research emerged that began to explore the human fingerprint on extreme weather</p>
                      </div>
                    </div>
                    <div class="media py-3">
                        <img src="images/pic4.jpg" class="align-self-start mr-3 img-fluid" alt="hurricane">
                        <div class="media-body">
                          <h5 class="mt-0">weather impacts</h5>
                          <p>In the early 2000s, a new field of climate-science research emerged that began to explore the human fingerprint on extreme weather</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end climate section-->
@endsection
