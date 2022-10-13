@php
// dd($video);
@endphp
<x-layouts.main-layout title="Show">
    <h1 class="text-center text-4xl font-black text-gray-600 my-10">{{ $video->title }}</h1>
    <div class="flex items-center mx-44 space-x-8">
        <img src="{{asset('storage/'.$video->url_img) }}" alt="{{ $video->title }}" class="max-w-xl">
        <div class="space-y-6">
            <p class="text-xl"><span class="font-bold">Description :</span> {{ $video->description }}</p>
            <p class="text-xl"><span class="font-bold">Nationalité :</span> {{ $video->nationality }}</p>
            <p class="text-xl"><span class="font-bold">Année de création :</span> {{ $video->year_created }}</p>
            <p class="text-xl"><span class="font-bold">Acteurs :</span> {{ $video->actors }}</p>

            {{-- @foreach ($video->nom_actors as $nom_actor)
                <div class="flex space-x-5">
                    <p class="text-xl block">Acteurs :</p>
                    <p>{{ $nom_actor->name }}</p>
                </div>
            @endforeach --}}
            {{-- @forelse ($video->nom_actors as $nom_actor)
                <div class="flex space-x-5">
                    <p class="text-xl block">Acteurs :</p>
                    <p>{{ $nom_actor->name }}</p>
                </div>
            @empty
                <p class="text-xl">Acteurs inconnus</p>
            @endforelse --}}

        </div>
    </div>
    @auth
        <div class=" flex mx-44 space-x-6 mt-5">
            <x-btn-delete :video="$video" />
            <a href="{{ $video->id }}/edit" class="btn btn-success">Modifier</a>
        </div>
        <div class="mx-44 space-x-6 mt-20 bg-gray-400 p-5">
            <h2 class="text-xl font-bold pl-7 pb-3">Ajouter un acteur</h2>
            <form action="{{ route('actor.store', $video->id) }}" method="POST">
                @csrf
                <input type="text" name="name">
                <button class="btn btn-primary rounded-none" type="submit">Ajouter</button>
                <x-error-msg name="name" />
            </form>
        </div>
    @endauth
</x-layouts.main-layout>