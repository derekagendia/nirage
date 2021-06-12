@extends('layouts.app')

@section('content')

    <section class=" pt-lg-5 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="text-uppercase text-center text-gold fw-bolder">Our Appartments</p>
                    <h3 class="text-center display-4 mb-5">View our Exquisite Apartments</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
                    <div class="card bg-transparent">
                        <div class="img-hover-zoom">
                            <a href="prop_details.html"><img src="./img/apartments/1.jpg" class="img-fluid" alt="This zooms-in really well and smooth">
                            </a></div>
                        <div class="card-body bg-transparent">
                            <p class="text-center">Lorem ipsum dolore annuit apsunit olore annuit apsunit</p>
                            <a href="prop_details.html"><button type="button" class="btn btn-link text-gold">Explore</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="card bg-transparent">
                        <div class="img-hover-zoom">
                            <a href="prop_details.html"><img src="./img/apartments/1.jpg" class="img-fluid" alt="This zooms-in really well and smooth">
                            </a></div>
                        <div class="card-body bg-transparent">
                            <p class="text-center">Lorem ipsum dolore annuit apsunit olore annuit apsunit</p>
                            <a href="prop_details.html"><button type="button" class="btn btn-link text-gold">Explore</button></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
