@extends('layouts.app')

@section('content')

    <!-- header content -->

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 class="display-4 fw-bolder text-white" style="padding-top:15rem;">Beautiful apartments tailored for your needs</h2>
                <p class=""><a href="{{ route('appartement') }}"><button type="button" class="btn btn-lg btn-primary">Our apartments</button></a></p>
            </div>
            <div class="col-md-5"></div>
        </div>
    </div>
    </section>

    <!-- value proposition -->
    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-uppercase fw-bolder text-gold">Classy just the way you like it</p>
                    <h2 class="display-4">
                        Mordern space and premium appartments
                    </h2>
                    <p class="text-muted">
                        Providing the best lodgging experience is of the topest priority for our institution, we want
                        you to enjoy as much confort as possible during your stay. that is why we put alot of attention
                        to details on our appartments.
                    </p>
                    <div class="blockquote text-gold" style="font-style: italic;">The living room should be a place
                        where you are totaly at ease - Temple for the soul
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/apartments/6.jpg') }}" class="img-fluid"
                         style="position:absolute; height:300px; width:auto;">
                    <img src="{{ asset('assets/img/apartments/7.jpg') }}" class="img-fluid shadow-lg"
                         style="position:relative; left:25%; top: 15%; height:300px; width:auto; ">
                </div>
            </div>
        </div>
    </section>

    <!-- appartments -->
    <section class="mt-5 pt-lg-5 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="text-uppercase text-center text-gold fw-bolder">Our Appartments</p>
                    <h3 class="text-center display-4 mb-5">View our Exquisite Appartments</h3>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach($apartments as $apartement)
                    <div class="col-md-6 mt-5">
                        <div class="card bg-transparent">
                            <div class="img-hover-zoom">
                                <a href="{{ route('details',$apartement->slug) }}"><img src="{{ asset(voyager::image($apartement->image)) }}" class="img-fluid"
                                                                 alt="This zooms-in really well and smooth">
                                </a></div>
                            <div class="card-body bg-transparent">
                                <p class="text-center">{{ $apartement->name }}</p>
                                <a href="{{ route('details',$apartement->slug) }}">
                                    <button type="button" class="btn btn-link text-gold">Explore</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
        </div>
    </section>

@endsection
