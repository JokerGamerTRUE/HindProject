<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/b41802e842.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('framework/fontawesome/css/all.min.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('styles/css/ScrollSpy.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('styles/framework/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('assets/logo/logo.png') }}" type="image/x-icon">
    <link href="{{ asset('styles/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/css/inputs.css') }}" rel="stylesheet">
</head>
<body data-bs-theme="light" class="bg-black">
<div id="back-navbar" class="position-fixed top-0">

</div>
<div id="app" class="max-width-element">
    <nav class="navbar navbar-expand-md position-fixed" style="z-index: 5">
        <div class="container-fluid bg-warning_ mx-auto">
            <a class="navbar-brand mb-auto text-primary" href="/">
                <h3 class="fw-bolder fs-1">
                    {{ config('app.name', 'Hind') }}
                </h3>
            </a>
            <button onclick="toggler_icon()" class="navbar-toggler position-fixed end-0 top-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="mt-3">
                    <i class="fa-solid fa-bars text-white pt-3"></i>
                </span>
            </button>
            <div class="collapse mt-2 bg-danger_ navbar-collapse w-100 justify-content-center mb-auto bg-primary_" id="navbarcollapse" style="height: 100px;margin-left: -10px">
                <ul id="list-nav-items" class="container-underline-texts position-relative justify-content-center navbar-nav mx-auto mt-3 mb-lg-auto justify-content-center text-center fs-5">
                    <li class="nav-item mx-auto mb-5">
                        <a class="nav-link hover-underline-animation fw-bolder" href="#">HOME</a>
                        <a class="nav-link hover-underline-animation fw-bolder" href="#about_me">ABOUT</a>
                        <a class="nav-link hover-underline-animation fw-bolder" href="#start_services">SERVICES</a>
                        <a class="nav-link hover-underline-animation fw-bolder" href="#BLOG">BLOG</a>
                        <a class="nav-link hover-underline-animation fw-bolder" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<img id="img-tree-fixed" src="{{ asset('assets/home/overlay-bg.jpg') }}" class="position-fixed bottom-0">
@yield('content')

{{--Footer--}}


{{--    Contact--}}
<div class="position-relative" id="contact">
    <div class="max-width-element" style="z-index: 1">
        <br><br>
        <div class="card shadow-lg rounded-5 bg-light p-md-5 py-md-3 p-3 px-2 mx-2 mx-md-4">
            <div class="row gy-3">
                <div class="col">
                    <div class="d-inline-block">
                        <h3 class="py-0 text-dark mb-0">Send Message Us</h3>
                        <hr class="border border-3 border-primary opacity-100 rounded-pill mt-2 w-50">
                    </div>
                    <br>
                    <form method="post" action="#">
                        @csrf
                        @method('POST')
                        <div class="row row-cols-1 gy-3">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" maxlength="255" name="name" class="form-control rounded-pill px-4" placeholder="..." id="name" data-bs-toggle="tooltip" data-bs-title="Your Name">
                                    <label for="name" class="">Your Name...</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control rounded-pill px-4" placeholder="..." id="email" data-bs-toggle="tooltip" data-bs-title="Your Email">
                                    <label for="email" class="">Your Email...</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" maxlength="255" name="subject" class="form-control rounded-pill px-4" placeholder="..." id="subject" data-bs-toggle="tooltip" data-bs-title="Subject">
                                    <label for="subject" class="">Subject...</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <textarea type="text" maxlength="2500" name="message" class="form-control rounded-4 px-4" placeholder="..." id="message" data-bs-toggle="tooltip" data-bs-title="message" style="height: 150px"></textarea>
                                    <label for="message" class="px-3">Message...</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary px-4 py-2 rounded-pill btn-primary fw-bolder" value="Send Message">
                    </form>
                </div>
                <div class="col">
                    <div class="d-inline-block">
                        <h3 class="py-0 text-dark mb-0">INTERESTS</h3>
                        <hr class="border border-3 border-primary opacity-100 rounded-pill mt-2 w-50">
                    </div>
                    <br>
                    <h6>
                        In addition to being an IT student, I have a passion for outdoor activities. In the winter I love to travel, I am a keen skier and an aspiring ice climber. When the weather is spring here in Qassim, I love to engage in cycling. These outdoor pursuits not only keep me physically active but also allow me to embrace the beauty of nature and challenge myself in different ways.
                    </h6>
                    <br><br>
                    <span class="small-text">
                            <i class="fa-solid fa-map-marked-alt text-dark opacity-75 fa-1x"></i>
                            Saudi Arabia
                        </span>
                    <br>
                    <span class="small-text">
                            <i class="fa-solid fa-phone text-dark opacity-75 fa-1x"></i>
                             (966) 0507942119
                        </span>
                    <br>
                    <span class="small-text">
                            <i class="fa-solid fa-mail-bulk text-dark opacity-75 fa-1x"></i>
                            hindas7@hotmail.com
                        </span>
                    <br><br><br><br><br><br>
                    <div class="d-flex">
                        <div class="flex-fill-1 contact-card">
                            <a href="https://www.linkedin.com/in/hindas" target="_blank">
                                <div class="position-relative rounded-circle mx-auto card-contact-icon">
                                    <span class="position-absolute top-50 start-50 translate-middle">
                                        <i class="fa-brands fa-linkedin fa-2x icon-contact-inside-card"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="flex-fill-1 contact-card">
                            <a href="https://twitter.com/HindAlbutti" target="_blank">
                                <div class="position-relative rounded-circle mx-auto card-contact-icon">
                                    <span class="position-absolute top-50 start-50 translate-middle">
                                        <i class="fa-brands fa-twitter fa-2x icon-contact-inside-card"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="flex-fill-1 contact-card">
                            <a href="https://github.com/HindA7" target="_blank">
                                <div class="position-relative rounded-circle mx-auto card-contact-icon">
                                    <span class="position-absolute top-50 start-50 translate-middle">
                                        <i class="fa-brands fa-github fa-2x icon-contact-inside-card"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<div align="center">
    <div class="text-white">
        © Copyright <a href="#" class="text-decoration-none text-light fw-bolder">DevFolio</a>. All Rights Reserved
        <br>
        Designed by <a href="#" class="text-decoration-none text-light fw-bolder">BootstrapMade</a>
    </div>
</div>
<script>
    $(window).scroll(function() {
        if (window.scrollY >= 450){
            $('#back-navbar').addClass('active')
        }else{
            $('#back-navbar').removeClass('active')
        }
    });
</script>
<script src="{{ asset('styles/js/TogglerIcon.js') }}"></script>
<script src="{{ asset('styles/js/tooltips.js') }}"></script>
</body>
</html>
