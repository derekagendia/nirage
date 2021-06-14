@extends('layouts.app')

@section('content')

    <section class="" style="margin-top:8rem; margin-bottom:5rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- product carousel -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset(voyager::image($apartment->image)) }}" class="d-block w-100" alt="{{ $apartment->name }}">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset(voyager::image($apartment->image2)) }}" class="d-block w-100" alt="{{ $apartment->name }}">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset(voyager::image($apartment->image3)) }}" class="d-block w-100" alt="{{ $apartment->name }}">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- end of product carousel -->
                </div>
                <div class="col-md-6">
                    <h3 class="display-4">{{ $apartment->name }}</h3>
                    <p class="lead">{{ $apartment->description }}</p>
                    <hr>

                    <h3 class="">Amenities</h3>
                    <ul class="list-unstyled">
                        <li><i data-feather="minus-square"></i> {{ $apartment->amenities }}</li>
                        <li><i data-feather="minus-square"></i> {{ $apartment->amenities2 }} </li>
                        <li><i data-feather="minus-square"></i> {{ $apartment->amenities3 }} </li>
                        <li><i data-feather="minus-square"></i> {{ $apartment->amenities4 }} </li>
                        <li><i data-feather="minus-square"></i> {{ $apartment->amenitis5 }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
