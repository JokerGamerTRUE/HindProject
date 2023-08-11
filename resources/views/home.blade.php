@extends('layouts.app')

@section('content')
    {{--    <link href="{{ asset('styles/css/progressbar.scss') }}" rel="stylesheet">--}}
    {{--    <link href="{{ asset('styles/css/over.css') }}" rel="stylesheet">--}}

    {{--    Name Categorie--}}
    <div class="bg-person mt-0" align="center">
        <div class="title-name">
            <h1 class="text-center fw-bolder words_spaces display-1 text-white">
                I am Hind
            </h1>
            <div class="fs-1 text-white" align="center">
                <span id="element" class="fs-1"></span><span id="cursor" class="text-secondary">|</span>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="max-width-element container-fluid" align="center">
            <Br>
            {{--        About Me--}}
            <div id="about_me" class="card card-shadow bg-white mb-4 py-5 px-4 rounded-4">
                <div class="row row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="row">
                            <div class="col-4 my-auto">
                                <img src="{{ asset('assets/home/photo.jpg') }}" class="w-100 px-1 mx-auto">
                            </div>
                            <div class="col-8 my-auto" align="start">
                                <h4 class="fw-normal text-para mb-3">
                                    <span class="fw-bolder">Name: </span>
                                    Morgan Freeman
                                </h4>
                                <h4 class="fw-normal text-para mb-3">
                                    <span class="fw-bolder">Profile: </span>
                                    full stack developer
                                </h4>
                                <h4 class="fw-normal text-para mb-3">
                                    <span class="fw-bolder">Email: </span>
                                    contact@example.com
                                </h4>
                                <h4 class="fw-normal text-para mb-3">
                                    <span class="fw-bolder">Phone: </span>
                                    (617) 557-0089
                                </h4>
                            </div>
                        </div>
                        <br>
                        <h4 class="text-start text-black" onscroll="alert(21)">Skills</h4>
                        <div id="HTML" class="mb-3">
                            <div class="row justify-content-between mb-2">
                                <div class="col" align="start">
                                    HTML
                                </div>
                                <div class="col" align="end">
                                    76%
                                </div>
                            </div>
                            <div class="progress rounded-pill" role="progressbar" aria-label="Basic example" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-primary" style="width: 0"></div>
                            </div>
                        </div>
                        <div id="CSS3" class="mb-3">
                            <div class="row justify-content-between mb-2">
                                <div class="col" align="start">
                                    CSS3
                                </div>
                                <div class="col" align="end">
                                    26%
                                </div>
                            </div>
                            <div class="progress rounded-pill" role="progressbar" aria-label="Basic example" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-primary" style="width: 0"></div>
                            </div>
                        </div>
                        <div id="PHP" class="mb-3">
                            <div class="row justify-content-between mb-2">
                                <div class="col" align="start">
                                    PHP
                                </div>
                                <div class="col" align="end">
                                    80%
                                </div>
                            </div>
                            <div class="progress rounded-pill" role="progressbar" aria-label="Basic example" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-primary" onscroll="animateValue(80, 0, 1000, 'PHP')" style="width: 0"></div>
                            </div>
                        </div>
                        <div id="JAVASCRIPT" class="mb-3">
                            <div class="row justify-content-between mb-2">
                                <div class="col" align="start">
                                    JAVASCRIPT
                                </div>
                                <div class="col" align="end">
                                    45%
                                </div>
                            </div>
                            <div class="progress rounded-pill" role="progressbar" aria-label="Basic example" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-primary" style="width: 0"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col" align="start">
                        <div class="d-inline-block">
                            <h1 class="py-0 text-dark">About me</h1>
                            <hr class="border border-3 border-primary opacity-100 rounded-pill mt-0 w-50 mx-auto">
                        </div>
                        <br>
                        <div class="text-secondary">
                        <span class="fs-5">
                            Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt.
                        </span>
                            <br><br>
                            <span class="fs-5">
                            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. porttitor at sem.
                        </span>
                            <br><br>
                            <span class="fs-5">
                            Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            {{--        Services--}}
            <div id="start_services">
                <div class="d-inline-block">
                    <h1 class="py-0 text-dark mb-0">SERVICES</h1>
                    <h5 class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h5>
                    <hr class="border border-3 border-primary opacity-100 rounded-pill mt-0 w-25 mx-auto">
                </div>
                <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 g-4 mb-5">
                    <div class="col">
                        <div class="card bg-light p-4 mb-5 circle-icon card-shadow-hover h-100" align="center">
                            <div class="position-relative rounded-circle mx-auto">
                            <span class="position-absolute top-50 start-50 translate-middle">
                                <i class="fa-solid fa-palette fa-3x icon-inside-card"></i>
                            </span>
                            </div>
                            <h4 class="mt-3 text-dark">WEB DESIGN</h4>
                            <span class="mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia, provident vitae! Magni tempora perferendis eum non provident.
                        </span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light p-4 mb-5 circle-icon card-shadow-hover h-100" align="center">
                            <div class="position-relative rounded-circle mx-auto">
                            <span class="position-absolute top-50 start-50 translate-middle">
                                <i class="fa-solid fa-code fa-3x icon-inside-card"></i>
                            </span>
                            </div>
                            <h4 class="mt-3 text-dark">WEB DEVELOPMENT</h4>
                            <span class="mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia, provident vitae! Magni tempora perferendis eum non provident.
                        </span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light p-4 mb-5 circle-icon card-shadow-hover h-100" align="center">
                            <div class="position-relative rounded-circle mx-auto">
                            <span class="position-absolute top-50 start-50 translate-middle">
                                <i class="fa-solid fa-camera-retro fa-3x icon-inside-card"></i>
                            </span>
                            </div>
                            <h4 class="mt-3 text-dark">PHOTOGRAPHY</h4>
                            <span class="mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia, provident vitae! Magni tempora perferendis eum non provident.
                        </span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light p-4 mb-5 circle-icon card-shadow-hover h-100" align="center">
                            <div class="position-relative rounded-circle mx-auto">
                            <span class="position-absolute top-50 start-50 translate-middle">
                                <i class="fa-solid fa-mobile-screen fa-3x icon-inside-card"></i>
                            </span>
                            </div>
                            <h4 class="mt-3 text-dark">RESPONSIVE DESIGN</h4>
                            <span class="mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia, provident vitae! Magni tempora perferendis eum non provident.
                        </span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light p-4 mb-5 circle-icon card-shadow-hover h-100" align="center">
                            <div class="position-relative rounded-circle mx-auto">
                            <span class="position-absolute top-50 start-50 translate-middle">
                                <i class="fa-solid fa-brush fa-3x icon-inside-card"></i>
                            </span>
                            </div>
                            <h4 class="mt-3 text-dark">GRAPHIC DESIGN</h4>
                            <span class="mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia, provident vitae! Magni tempora perferendis eum non provident.
                        </span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light p-4 mb-5 circle-icon card-shadow-hover h-100" align="center">
                            <div class="position-relative rounded-circle mx-auto">
                            <span class="position-absolute top-50 start-50 translate-middle">
                                <i class="fa-solid fa-ranking-star fa-3x icon-inside-card"></i>
                            </span>
                            </div>
                            <h4 class="mt-3 text-dark">MARKETING SERVICES</h4>
                            <span class="mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia, provident vitae! Magni tempora perferendis eum non provident.
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <div class="position-relative" id="end_services">
        <div class="position-absolute top-50 start-50 translate-middle w-100" style="z-index: 1">
            <div class="row row-cols-md-4 row-cols-md-1 row-cols-1 justify-content-center g-5 mx-auto" id="container-icons-end-services">
                <div class="col" align="center">
                    <div class="position-relative card-end-service rounded-circle">
                        <span class="position-absolute top-50 start-50 translate-middle">
                            <i class="fa-solid fa-check fa-3x text-gray"></i>
                        </span>
                    </div>
                    <h4 class="mt-2 text-gray mb-0" id="count-works">0</h4>
                    <h6 class=" text-gray">WORKS COMPLETED</h6>
                </div>
                <div class="col" align="center">
                    <div class="position-relative card-end-service rounded-circle">
                        <span class="position-absolute top-50 start-50 translate-middle">
                            <i class="fa-regular fa-calendar fa-3x text-gray"></i>
                        </span>
                    </div>
                    <h4 class="mt-2 text-gray mb-0" id="count-years">0</h4>
                    <h6 class=" text-gray">YEARS OF EXPERIENCE</h6>
                </div>
                <div class="col" align="center">
                    <div class="position-relative card-end-service rounded-circle">
                        <span class="position-absolute top-50 start-50 translate-middle">
                            <i class="fa-solid fa-people-group fa-3x text-gray"></i>
                        </span>
                    </div>
                    <h4 class="mt-2 text-gray mb-0" id="count-clients">0</h4>
                    <h6 class=" text-gray">TOTAL CLIENTS</h6>
                </div>
                <div class="col" align="center">
                    <div class="position-relative card-end-service rounded-circle">
                        <span class="position-absolute top-50 start-50 translate-middle">
                            <i class="fa-solid fa-award fa-3x text-gray"></i>
                        </span>
                    </div>
                    <h4 class="mt-2 text-gray mb-0" id="count-award">0</h4>
                    <h6 class=" text-gray">AWARD WON</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <br>
        <div class="max-width-element container-fluid" align="center">
            <div id="protofolio">
                <div align="center">
                    <div class="d-inline-block">
                        <h1 class="py-0 text-dark mb-0">PORTFOLIO</h1>
                        <h5 class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h5>
                        <hr class="border border-3 border-primary opacity-100 rounded-pill mt-0 w-25 mx-auto">
                    </div>
                </div>
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                    <div class="col">
                        <div class="card bg-light mb-5 card-protofolio card-shadow-hover h-100s" align="start">
                            <div>
                                <img src="{{ asset('assets/home/mix_color.jpg') }}">
                            </div>
                            <br>
                            <div class="px-2">
                                <div class="d-flex">
                                    <div class="flex-fill-1">
                                        <h4 class="text-dark">Lorem impsum dolor</h4>
                                        <p>
                                            <span class="text-primary">Web Design</span>
                                            / 18Sep. 2018
                                        </p>
                                    </div>
                                    <div class="flex-fill my-auto" align="center">
                                        <div class="position-relative plus-circle">
                                        <span class="position-absolute top-50 start-50 translate-middle">
                                            <i class="fa-solid fa-plus fa-2x"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light mb-5 card-protofolio card-shadow-hover h-100s" align="start">
                            <div>
                                <img src="{{ asset('assets/home/mix_color.jpg') }}">
                            </div>
                            <br>
                            <div class="px-2">
                                <div class="d-flex">
                                    <div class="flex-fill-1">
                                        <h4 class="text-dark">Lorem impsum dolor</h4>
                                        <p>
                                            <span class="text-primary">Web Design</span>
                                            / 18Sep. 2018
                                        </p>
                                    </div>
                                    <div class="flex-fill my-auto" align="center">
                                        <div class="position-relative plus-circle">
                                        <span class="position-absolute top-50 start-50 translate-middle">
                                            <i class="fa-solid fa-plus fa-2x"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light mb-5 card-protofolio card-shadow-hover h-100s" align="start">
                            <div>
                                <img src="{{ asset('assets/home/mix_color.jpg') }}">
                            </div>
                            <br>
                            <div class="px-2">
                                <div class="d-flex">
                                    <div class="flex-fill-1">
                                        <h4 class="text-dark">Lorem impsum dolor</h4>
                                        <p>
                                            <span class="text-primary">Web Design</span>
                                            / 18Sep. 2018
                                        </p>
                                    </div>
                                    <div class="flex-fill my-auto" align="center">
                                        <div class="position-relative plus-circle">
                                        <span class="position-absolute top-50 start-50 translate-middle">
                                            <i class="fa-solid fa-plus fa-2x"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light mb-5 card-protofolio card-shadow-hover h-100s" align="start">
                            <div>
                                <img src="{{ asset('assets/home/mix_color.jpg') }}">
                            </div>
                            <br>
                            <div class="px-2">
                                <div class="d-flex">
                                    <div class="flex-fill-1">
                                        <h4 class="text-dark">Lorem impsum dolor</h4>
                                        <p>
                                            <span class="text-primary">Web Design</span>
                                            / 18Sep. 2018
                                        </p>
                                    </div>
                                    <div class="flex-fill my-auto" align="center">
                                        <div class="position-relative plus-circle">
                                        <span class="position-absolute top-50 start-50 translate-middle">
                                            <i class="fa-solid fa-plus fa-2x"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light mb-5 card-protofolio card-shadow-hover h-100s" align="start">
                            <div>
                                <img src="{{ asset('assets/home/mix_color.jpg') }}">
                            </div>
                            <br>
                            <div class="px-2">
                                <div class="d-flex">
                                    <div class="flex-fill-1">
                                        <h4 class="text-dark">Lorem impsum dolor</h4>
                                        <p>
                                            <span class="text-primary">Web Design</span>
                                            / 18Sep. 2018
                                        </p>
                                    </div>
                                    <div class="flex-fill my-auto" align="center">
                                        <div class="position-relative plus-circle">
                                        <span class="position-absolute top-50 start-50 translate-middle">
                                            <i class="fa-solid fa-plus fa-2x"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light mb-5 card-protofolio card-shadow-hover h-100s" align="start">
                            <div>
                                <img src="{{ asset('assets/home/mix_color.jpg') }}">
                            </div>
                            <br>
                            <div class="px-2">
                                <div class="d-flex">
                                    <div class="flex-fill-1">
                                        <h4 class="text-dark">Lorem impsum dolor</h4>
                                        <p>
                                            <span class="text-primary">Web Design</span>
                                            / 18Sep. 2018
                                        </p>
                                    </div>
                                    <div class="flex-fill my-auto" align="center">
                                        <div class="position-relative plus-circle">
                                        <span class="position-absolute top-50 start-50 translate-middle">
                                            <i class="fa-solid fa-plus fa-2x"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative" id="quates">
        <div class="max-width-element position-absolute top-50 start-50 translate-middle w-100" style="z-index: 1">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" align="center">
                <div class="carousel-inner">
                    <div class="carousel-item w-100 active" style="max-height: 400px">
                        <img class="rounded-circle" src="{{ asset('assets/home/mona.jpg') }}">
                        <h2 class="text-white mt-2">Marta Socrate</h2>
                        <h5 class="text-white opacity-75">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                        </h5>
                        <br>
                        <div class="bg-white position-relative rounded-circle quate-circle">
                            <div class="position-absolute top-50 start-50 translate-middle text-primary">
                                <i class="fa-solid fa-quote-left fa-2x"></i>
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <div class="carousel-item w-100" style="max-height: 400px">
                        <img class="rounded-circle" src="{{ asset('assets/home/photo.jpg') }}">
                        <h2 class="text-white mt-2">Xavi Alonso</h2>
                        <h5 class="text-white opacity-75">
                            printing is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        </h5>
                        <br>
                        <div class="bg-white position-relative rounded-circle quate-circle">
                            <div class="position-absolute top-50 start-50 translate-middle text-primary">
                                <i class="fa-solid fa-quote-left fa-2x"></i>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active bg-btn-indicators"></button>
                    <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" class="bg-btn-indicators"></button>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon rounded-circle p-5" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon rounded-circle p-5" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    {{--        Blog--}}
    <div class="bg-white">
        <div class="max-width-element container-fluid" align="center">
            <br><br>
            <div id="BLOG">
                <div class="d-inline-block">
                    <h1 class="py-0 text-dark mb-0">BLOG</h1>
                    <h5 class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h5>
                    <hr class="border border-3 border-primary opacity-100 rounded-pill mt-0 w-25 mx-auto">
                </div>
                <div class="d-flex justify-content-center" style="flex-wrap: wrap">
                    <div class="flex-fill-1 me-3">
                        <div class="card bg-light card-blog mb-5 card-shadow-hover" align="center">
                            <img src="{{ asset('assets/home/posts/1.jpg') }}">
                            <div class="card-body" align="start">
                                <h5>See more ideas about Travel</h5>
                                <a>
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                                </a>
                            </div>
                            <div class="card-footer bg-secondary bg-opacity-10">
                                <div class="row justify-content-between">
                                    <div class="col-8 my-auto" align="start">
                                        <div class="d-flex">
                                            <div class="flex-fill-1">
                                                <img src="{{ asset('assets/home/photo.jpg') }}" class="rounded-circle" width="40">
                                            </div>
                                            <div class="flex-fill-1 my-auto ms-2">
                                                <a class="text-dark text-decoration-none">Morgan Freeman</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 my-auto" align="end">
                                        <div class="d-flex">
                                            <div class="flex-fill-1">
                                                <i class="fa-solid fa-clock fa-1xl icon-inside-card"></i>
                                            </div>
                                            <div class="flex-fill-1 my-auto ms-2 my-auto">
                                                <h6 class="my-auto">10 min</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-fill-1 me-3">
                        <div class="card bg-light card-blog mb-5 card-shadow-hover" align="center">
                            <img src="{{ asset('assets/home/posts/2.jpg') }}">
                            <div class="card-body" align="start">
                                <h5>See more ideas about Travel</h5>
                                <a>
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                                </a>
                            </div>
                            <div class="card-footer bg-secondary bg-opacity-10">
                                <div class="row justify-content-between">
                                    <div class="col-8 my-auto" align="start">
                                        <div class="d-flex">
                                            <div class="flex-fill-1">
                                                <img src="{{ asset('assets/home/photo.jpg') }}" class="rounded-circle" width="40">
                                            </div>
                                            <div class="flex-fill-1 my-auto ms-2">
                                                <a class="text-dark text-decoration-none">Morgan Freeman</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 my-auto" align="end">
                                        <div class="d-flex">
                                            <div class="flex-fill-1">
                                                <i class="fa-solid fa-clock fa-1xl icon-inside-card"></i>
                                            </div>
                                            <div class="flex-fill-1 my-auto ms-2 my-auto">
                                                <h6 class="my-auto">10 min</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-fill-1">
                        <div class="card bg-light card-blog mb-5 card-shadow-hover" align="center">
                            <img src="{{ asset('assets/home/posts/3.jpg') }}">
                            <div class="card-body" align="start">
                                <h5>See more ideas about Travel</h5>
                                <a>
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                                </a>
                            </div>
                            <div class="card-footer bg-secondary bg-opacity-10">
                                <div class="row justify-content-between">
                                    <div class="col-8 my-auto" align="start">
                                        <div class="d-flex">
                                            <div class="flex-fill-1">
                                                <img src="{{ asset('assets/home/mona.jpg') }}" class="rounded-circle" width="40">
                                            </div>
                                            <div class="flex-fill-1 my-auto ms-2">
                                                <a class="text-dark text-decoration-none">Marta Socrate</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 my-auto" align="end">
                                        <div class="d-flex">
                                            <div class="flex-fill-1">
                                                <i class="fa-solid fa-clock fa-1xl icon-inside-card"></i>
                                            </div>
                                            <div class="flex-fill-1 my-auto ms-2 my-auto">
                                                <h6 class="my-auto">10 min</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <br>
    <script src="{{ asset('styles/js/count_from_zero_to_number.js') }}"></script>
    <script src="{{ asset('styles/js/BotTyping.js') }}"></script>
    <script src="{{ asset('styles/js/callback_progress.js') }}"></script>
@endsection
