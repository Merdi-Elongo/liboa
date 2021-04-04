<x-public-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            News
        </h2>
    </x-slot>

    <div class="banner">
        <img src="{{ asset('img/1.jpg') }}" alt="">
    </div>

    <div class="container">
        <div class="row mt-5">

            @foreach ($posts as $post)
            <div class="col-lg-4 mb-5 col-md-4">
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

            <div class="row">
                {{ $posts->links('vendor.pagination.bootstrap-4') }}
            </div>

        </div>
    </div>

</x-public-layout>
