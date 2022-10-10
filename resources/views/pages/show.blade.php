<x-layouts.main-layout title="Accueil">
    <h1 class="text-center text-4xl font-black text-gray-600 my-10">{{ $video->title }}</h1>
    <div class="flex items-center mx-44 space-x-8">
        <img src="{{ $video->url_img }}" alt="{{ $video->title }}">
        <div class="space-y-6">
            <p class="text-xl"><span class="font-bold">Description :</span> {{ $video->description }}</p>
            <p class="text-xl"><span class="font-bold">Nationalité :</span> {{ $video->nationality }}</p>
            <p class="text-xl"><span class="font-bold">Année de création :</span> {{ $video->year_created }}</p>
            <p class="text-xl"><span class="font-bold">Acteurs :</span> {{ $video->actors }}</p>
        </div>
    </div>
    <div class=" flex mx-44 space-x-6 mt-5">
        <x-btn-delete :video="$video" />
        <a href="" class="btn btn-success">Modifier</a>
    </div>
</x-layouts.main-layout>