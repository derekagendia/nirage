<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Fonts -->
    <link rel="preconnects" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/nirage-01.png') }}">


    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">


    <title>{{ $title }}</title>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>

<!-- navbar -->
<section class="page-header" style="background-image:url({{ asset('assets/img/apartments/cover.jpg') }});">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/nirage-01.png') }}" style="height:48px; width:auto;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-bolder" aria-current="page" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('appartement') }}">APARTMENTS</a>
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
    <!-- end of navbar -->

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

@yield('content')


<!-- contact form -->
<section class="pt-5 pb-5 bg-gold">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-3 shadow-lg">
                    <h2 class="text-center display-4">Request a visit</h2>
                    <div class="card-body">
                        <form class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Votre nom">
                                    <label for="floatingInput">Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                                    <label for="floatingInput">email address</label>
                                </div>
                            </div>
                        </form>

                        <form class="row mt-lg-3">
                            <p class="text-muted">leave a message</p>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Message</label>
                                </div>
                            </div>
                        </form>

                    </div>

                    <p class="text-center">
                        <a href="#"><button type="submit" class="btn btn-dark btn-lg mt-5">Request</button></a>
                    </p>
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
</script>
</body>
</html>
