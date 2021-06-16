<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <script
        src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js">
    </script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <title>Apartement {{ $apartment->name }}</title>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/nirage-01.png') }}" style="height:48px; width:auto;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bolder" href="{{ route('appartement') }}">APARTMENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <span class="text-gold fw-bolder"><i data-feather="phone"></i></span> +237 650 022 708 | +237 677 922 064
                </li>
            </ul>

        </div>
    </div>
</nav>
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

<!-- contact form -->
<section class="pt-5 pb-5 bg-gold">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-3 shadow-lg">
                    <h2 class="text-center display-6">Request a visit {{ (isset($apartment->slug)? 'for '.$apartment->slug :'') }}</h2>
                    <div class="card-body">
                        <form class="row" action="{{ route('send') }}" method="POST" >
                            @csrf

                            <input type="hidden" class="form-control" id="floatingInput" placeholder="Votre nom" name="slug" value="{{ (isset($apartment->slug)?$apartment->slug :' ') }}">

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Votre nom" name="name" value="{{ old('name') }}">
                                    <label for="floatingInput">Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="Email" name="email" value="{{ old('email') }}">
                                    <label for="floatingInput">email address</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="floatingInput" placeholder="Email" name="phone" value="{{ old('phone') }}">
                                    <label for="floatingInput">Your phone number</label>
                                </div>
                            </div>

                            <p class="text-muted">leave a message</p>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea class="form-control @error('content') is-invalid @enderror" placeholder="Leave a comment here" id="floatingTextarea" name="content" value="{{ old('content') }}" ></textarea>
                                    <label for="floatingTextarea">Message</label>
                                </div>
                            </div>

                            <p class="text-center">
                                <button type="submit" class="btn btn-dark btn-lg mt-5">Request</button>
                            </p>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark text-white pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                Apartement lanirage © 2021
            </div>
            <div class="col-md-4">
                <ul class="list-unstyled">
                    <li class="list-inline-item"><a href="#"><button class="btn btn-primary">Facebook</button></a></li>
                    <li class="list-inline-item"><a href="#"><button class="btn btn-danger">instagram</button></a></li>
                    <li class="list-inline-item"><a href="#"><button class="btn btn-info">twitter</button></a></li>

                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-unstyled">
                    <li class="list-inline-item">Privacy policy</li>
                    <li class="list-inline-item">Terms of service</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script>
    feather.replace()

    @if(session()->has('message'))
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.success("{{ session('message') }}");
    @endif
</script>
</body>
</html>
