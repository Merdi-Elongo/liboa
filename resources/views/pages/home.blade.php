<x-public-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            home
        </h2>

        {{-- <form>
            <input class="border shadow-md rounded-full border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent ">
            <button class="btn rounded-full bg-blue-500 transform hover:scale-110 motion-reduce:transform-none ...">
                Hover me
              </button>
          </form> --}}

    </x-slot>

    <div class="owl-carousel owl-theme">
        <img class="item" src="{{ asset('img/0.jpg') }}" style="width: 100%">
        <img class="item" src="{{ asset('img/1.jpg') }}" style="width: 100%">
        <img class="item" src="{{ asset('img/2.jpg') }}" style="width: 100%">
    </div>


    <div class="container">

        <div class="row mt-5">
            <div class="col-lg-4 mt-5">
                <div class="card border-0 p-3 shadow-md">
                    <div class="card-image mb-4">
                        <center><img src="{{ asset('img/svg/1.svg') }}" alt="" width="50%" style="height: 230px"/></center>
                    </div>
                    <div class="card-content">
                        <h1 class="mb-3 mt-3 text-center text-lg font-semibold text-uppercase text-center padding-xl blue">Assister le plus démunis</h1>
                        <p class="text-center">LA FONDATION LIBOTA est résolument engagée a
                        exprimer sa solidarité a la population congolaise la plus démunis,
                        aux filles mères livrée a la débauche et a la mendicité.</p>

                        <a href="{{ route('home.donation') }}" class="btn rounded-full hover:rounded-xl hover:bg-blue-100 border-blue-500 text-blue-500 hover:text-blue-500 self-center mt-4 p-2 w-100">
                            Faire une donation
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5">
                <div class="card border-0 p-3 shadow-md">
                    <div class="card-image mb-4">
                        <center><img src="{{ asset('img/svg/2.svg') }}" alt="" width="50%" style="height: 230px"/></center>
                    </div>
                    <div class="card-content">
                        <h1 class="mb-3 mt-3 text-center text-lg font-semibold text-uppercase text-center padding-xl blue">Renforcement des capacités</h1>
                        <p class="text-center">Organiser des formations dans différentes domaines sociaux,
                        des challenges pour créer de émulation dans l’expression des
                        talents enfin des les exposer pour briller .</p>

                        <a href="{{ route('home.donation') }}" class="btn rounded-full hover:rounded-xl hover:bg-blue-100 border-blue-500 text-blue-500 hover:text-blue-500 self-center mt-4 p-2 w-100">
                            Faire une donation
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5">
                <div class="card border-0 p-3 shadow-md h-100">
                    <div class="card-image mb-4">
                        <center><img src="{{ asset('img/svg/3.svg') }}" alt="" width="50%" style="height: 230px"/></center>
                    </div>
                    <div class="card-content">
                        <h1 class="mb-4 mt-3 text-center text-lg font-semibold text-uppercase text-center padding-xl blue">Financement de micro projet</h1>
                        <p class="text-center">La mise en place d’une caisse social de solidarité
                        au profit de tous un chacun, boostant les initiatives entrepreneuriales</p>

                        <a href="{{ route('home.donation') }}" class="btn rounded-full hover:rounded-xl hover:bg-blue-100 border-blue-500 text-blue-500 hover:text-blue-500 self-center mt-4 p-2 w-100">
                            Faire une donation
                        </a>

                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-40  bg-white">
            <div class="col-lg-3">
                <img src="{{ asset('img/thumb/eshiba.png') }}" alt="" class="w-100 mt-4">
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="card blue-grey darken-1 border-0 p-3 h-100 bg-blue-900 text-white">
                            <div class="card-content white-text">
                                <p class="card-title">
                                    <h1 class="text-xl font-bold text-uppercase">Adhérer à la Fondation</h1>
                                </p>
                                <p class="mt-16 mb-16">Devenir membre effectif, membre d'honnaire,
                                membre fictif et actif en soutenant nos actions
                                pour Sensibiliser, Identifier, Selectionner et former les genres
                                féminins et autres pour développer leurs communautés. Financement
                                de projet, Assistance sociale, Accompagnement logistique.</p>

                                <a href="{{ route('home.adhesion') }}" class="mt-5 rounded-full btn hover:border-white hover:shadow-xl hover:bg-white border-blue-500 text-blue-500 hover:text-blue-500 mt-4 p-2 w-100">
                                    Dévenire membre
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card blue-grey darken-1 border-0 h-100">
                            <span class="card-title mt-8 font-semibold text-lg bg-blue-300 text-white p-3">Diverses Formations.</span>
                            <div class="card-content white-text">
                                <p>Pour l'apprentisage de métiers, Renforcement de
                                capacités sur la gestion de conflit, le droit de l'enfant,
                                Gestion de projet, Couture, hotéllerie.</p>
                                <div class="row mt-4">
                                    <div class="col-lg-4">
                                        <img src="{{ asset('img/svg/4.svg') }}" alt="" class="w-100"><br>
                                        <center class="text-xl font-bold">30</center>
                                        <center>Orphelinats</center>
                                    </div>
                                    <div class="col-lg-4 mt-2">
                                        <img src="{{ asset('img/svg/1.svg') }}" alt="" class="w-100"><br>
                                        <center class="text-xl font-bold">3,298</center>
                                        <center>Assistance</center>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="{{ asset('img/svg/6.svg') }}" alt="" class="w-100"><br>
                                        <center class="text-xl font-bold">12</center>
                                        <center>Partenaires</center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-40">

            @foreach ($posts as $post)
            <div class="col-lg-4 mb-5 col-md-4">
                <div class="card border-0 bg-transparent">
                    <div class="card-image">
                        <img src="{{ asset('img/article/1.jpg') }}" alt=""/>
                    </div>
                    <span class="font-bold mt-4 text-lg">{{ $post->title }}</span>
                    <span class="text-sm font-italic mb-3">{{ $post->updated_at->diffForHumans() }}</span>
                    <div class="card-content">
                        <p>{{ Str::substr($post->content, 0, 100) }}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('home.show', ['title' => urlencode($post->title), 'id' => $post->id]) }}" class="btn rounded-full w-1/2 mt-3 hover:w-100 hover:bg-transparent hover:border-blue-500 hover:text-blue-500 text-grey-100 bg-blue-500">Voir plus</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>


</x-public-layout>
