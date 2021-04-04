<x-public-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            A propos de nous
        </h2>
    </x-slot>


    <div class="container mt-10">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="text-lg font-bold">Notre mission</h1>
                <ul class="list-group shadow-lg rounded-none">
                    <li class="list-group-item active">Poursuivre le mieux vivre collectif ;</li>
                    <li class="list-group-item text-dark">Défendre et promouvoir les droits des enfants orphelins ;</li>
                    <li class="list-group-item text-dark">Encadrer les filles mères livrées à la débauche et la mendicité, en les orientant dans des ateliers de formations à métiers divers ;</li>
                    <li class="list-group-item text-dark">Créer différents centres d’apprentissage et d’initiation à l’entrepreneuriat, pour les populations démunies ;</li>
                    <li class="list-group-item text-dark">Créer des écoles de rattrapage au profit de la jeunesse livrée à la délinquance juvénile ;</li>
                    <li class="list-group-item text-dark">Promouvoir les différents talents qui sommeillent dans la jeunesse ;</li>
                    <li class="list-group-item text-dark">Encadrer et assister les personnes en situation difficile en vue de leur insertion sociale</li>
                    <li class="list-group-item text-dark">Aider les catégories sociales défavorisées à regarder l’avenir avec espérance ;</li>
                </ul>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('img/article/1.jpg') }}" alt="welcome" class="w-100 mt-5">
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center p-4 mt-10 bg-blue-900 text-white">
                <h2>Aidez-nous <br><br>afin que nous puissions aider les autres</h2><br>

                <a class="btn bg-blue-600 rounded-none text-white p-3 hover:bg-transparent hover:border-blue-600 hover:text-blue-600" href="{{ route('home.donation') }}">Faire une donation</a>
            </div>
        </div>
    </div>


</x-public-layout>
