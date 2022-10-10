<x-layouts.main-layout title="Accueil">
    <div class="grid grid-cols-5 gap-5 my-20 mx-4">
        @forelse ($videos as $video)
            <a href="videos/{{ $video->id }}">
                <x-cards.card-video :url_img="$video->url_img" :title="$video->title" :description="$video->description" />
            </a>
        @empty
            <p>Pas de films disponibles</p>
        @endforelse
    </div>
</x-layouts.main-layout>