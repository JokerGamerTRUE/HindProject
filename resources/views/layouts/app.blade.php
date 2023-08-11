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
    <link href="{{ asset('styles/framework/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('assets/logo/logo.png') }}" type="image/x-icon">
    <link href="{{ asset('styles/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/css/inputs.css') }}" rel="stylesheet">
</head>
<body data-bs-theme="light" class="bg-danger">
<div id="app" class="max-width-element">
    <nav class="navbar navbar-expand-md position-fixed">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
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
        <div class="card shadow-lg rounded-5 bg-light p-5 py-3">
            <div class="row">
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
                                    <label for="message" class="px-5">Message</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary px-4 py-2 rounded-pill btn-primary fw-bolder" value="Send Message">
                    </form>
                </div>
                <div class="col">
                    <div class="d-inline-block">
                        <h3 class="py-0 text-dark mb-0">Get in Touch</h3>
                        <hr class="border border-3 border-primary opacity-100 rounded-pill mt-2 w-50">
                    </div>
                    <br>
                    <h6>
                        Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                    </h6>
                    <br><br>
                    <span>
                            <i class="fa-solid fa-map-marked-alt text-dark opacity-75 fa-1x"></i>
                             329 WASHINGTON ST BOSTON, MA 02108
                        </span>
                    <br>
                    <span>
                            <i class="fa-solid fa-phone text-dark opacity-75 fa-1x"></i>
                             (617) 557-0089
                        </span>
                    <br>
                    <span>
                            <i class="fa-solid fa-mail-bulk text-dark opacity-75 fa-1x"></i>
                             contact@example.com
                        </span>
                    <br><br><br><br><br><br>
                    <div class="d-flex">
                        <div class="flex-fill-1 contact-card">
                            <a href="#">
                                <div class="position-relative rounded-circle mx-auto card-contact-icon">
                                    <span class="position-absolute top-50 start-50 translate-middle">
                                        <i class="fa-brands fa-facebook fa-2x icon-contact-inside-card"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="flex-fill-1 contact-card">
                            <a href="#">
                                <div class="position-relative rounded-circle mx-auto card-contact-icon">
                                    <span class="position-absolute top-50 start-50 translate-middle">
                                        <i class="fa-brands fa-instagram fa-2x icon-contact-inside-card"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="flex-fill-1 contact-card">
                            <a href="#">
                                <div class="position-relative rounded-circle mx-auto card-contact-icon">
                                    <span class="position-absolute top-50 start-50 translate-middle">
                                        <i class="fa-brands fa-twitter fa-2x icon-contact-inside-card"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="flex-fill-1 contact-card">
                            <a href="#">
                                <div class="position-relative rounded-circle mx-auto card-contact-icon">
                                    <span class="position-absolute top-50 start-50 translate-middle">
                                        <i class="fa-brands fa-pinterest fa-2x icon-contact-inside-card"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
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

<script src="{{ asset('styles/js/tooltips.js') }}"></script>
</body>
</html>
