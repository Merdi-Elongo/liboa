<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}">
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation-home')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script>

            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items:1,
                loop:true,
                autoplay:true,
                autoplayTimeout:1000,
            });
        </script>

<footer class="p-4 bg-blue-500 text-white mt-5">

    <div class="container">

        <div class="row">

            {{-- <div class="col-lg-2 border-2 p-0">
                <x-application-logo class="w-1/2 absolute top p-0" />
            </div> --}}

            <div class="col-lg-10">
                <!-- component -->
                <div class="container bg-grey-lighter p-8">
                    <div class="sm:flex mb-4">
                        <div class="sm:w-1/3 h-auto">
                            <div class="mb-2 font-bold text-uppercase">Navigation</div>
                            <ul class="list-reset leading-normal">
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.index') }}">Accueil</a></li>
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.news') }}">Actualités</a></li>
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.gallery') }}">Galeries</a></li>
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.adhesion') }}">Adhésion</a></li>
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.team') }}">Notre equipe</a></li>
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.contact') }}">Contact</a></li>
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.about') }}">A propos</a></li>
                            </ul>
                        </div>
                        <div class="sm:w-1/3 h-auto">
                            <div class="mb-2 font-bold text-uppercase">Navigation</div>
                            <ul class="list-reset leading-normal">
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.index') }}">Accueil</a></li>
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.news') }}">Actualités</a></li>
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.gallery') }}">Galeries</a></li>
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.adhesion') }}">Adhésion</a></li>
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.team') }}">Notre equipe</a></li>
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.contact') }}">Contact</a></li>
                                <li class="text-grey-darker mb-2"><a href="{{ route('home.about') }}">A propos</a></li>
                            </ul>
                        </div>
                        <div class="sm:w-1/3 h-auto sm:mt-0 mt-8">
                            <div class="mb-2 font-bold text-uppercase">Conatact</div>
                            <ul class="list-reset leading-normal">
                                <li class="hover:text-blue text-grey-darker">phone : +243 82 206 22 56</li>
                                <li class="hover:text-blue text-grey-darker">phone : contact@fondation-libota.org</li>
                            </ul>

                            <div class="mb-2 mt-4 font-bold text-uppercase">Location</div>
                            <ul class="list-reset leading-normal">
                                <li class="hover:text-blue-light text-grey-darker">
                                    Avenue CADECO N°3 Appartement 10, Kinshasa-Gombe.
                                </li>
                            </ul>

                        </div>
                        {{-- <div class="sm:w-1/3 h-auto sm:mt-0 mt-8">
                                    <div class="text-green-dark mb-2">Green-dark</div>
                            <ul class="list-reset leading-normal">
                                <li class="hover:text-green-dark text-grey-darker">One</li>
                                <li class="hover:text-green-dark text-grey-darker">Two</li>
                                <li class="hover:text-green-dark text-grey-darker">Three</li>
                            </ul>

                            <div class="text-green-light mb-2 mt-4">Green-light</div>
                            <ul class="list-reset leading-normal">
                                <li class="hover:text-green-light text-grey-darker">One</li>
                                <li class="hover:text-green-light text-grey-darker">Two</li>
                                <li class="hover:text-green-light text-grey-darker">Three</li>
                            </ul>


                        </div> --}}

                    </div>
                </div>
            </div>

        </div>

    </div>

</footer>

<div class="p-4 bg-blue-500 text-white">
    <center>Copyright 2021 &copy by <a href="#">Anywhere</a></center>
</div>
    </body>
</html>

