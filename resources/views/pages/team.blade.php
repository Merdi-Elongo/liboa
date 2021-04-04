<x-public-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Team
        </h2>
    </x-slot>

    <div class="banner">
        <img src="{{ asset('img/1.jpg') }}" alt="">
    </div>

    <div class="container">

        <div class="row mt-5">
            <div class="col-lg-4 text-center p-3">
                <div class="fas fa-6x fa-user"></div>
                <div class="name font-bold mt-3">
                    Ezechiel NTAL
                </div>
                <div class="function font-semibold">
                    Sécretaire Général
                </div>
            </div>

            <div class="col-lg-4 text-center p-3">
                <div class="fas fa-6x fa-user"></div>
                <div class="name font-bold mt-3">
                    Jeansinie NKWI
                </div>
                <div class="function font-semibold">
                    Coordonatrice Communale
                </div>
            </div>

            <div class="col-lg-4 text-center p-3">
                <div class="fas fa-6x fa-user"></div>
                <div class="name font-bold mt-3">
                    Hervé MULAMBA
                </div>
                <div class="function font-semibold">
                    Chargé de la Logistique
                </div>
            </div>
        </div>

        <div class="row">

            @foreach ($posts as $post)
            <div class="col-lg-3 mt-20 mb-5 col-md-4">
                <div class="card border-0 bg-transparent">
                    <div class="card-image">
                        <img src="{{ asset('img/article/1.jpg') }}" alt=""/>
                    </div>
                    <span class="font-bold mt-4 text-lg">{{ $post->title }}</span>
                    <span class="text-sm font-italic mb-3">{{ $post->updated_at->diffForHumans() }}</span>
                    {{-- <div class="card-content">
                        <p>{{ Str::substr($post->content, 0, 100) }}</p>
                    </div> --}}
                    <div class="card-action">
                        <a href="{{ route('home.show', ['title' => urlencode($post->title), 'id' => $post->id]) }}" class="btn rounded-full w-1/2 mt-3 hover:w-100 border-blue-500 hover:bg-blue-500 text-blue-500 hover:text-white">Voir plus</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

</x-public-layout>
