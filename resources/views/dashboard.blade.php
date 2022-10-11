@php
    $styleLink="font-bold hover:text-red-700 hover:underline underline-offset-4 block pb-5 text-blue-700"
@endphp
<x-layouts.main-layout title="Dashbord">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <h1 class="uppercase text-xl text-red-700 font-black">
            Bienvenue <span class="text-primary-focus underline">{{ Auth::user()->name }}</span> sur ton Dashbord
        </h1>
        <div class="py-12">
            @auth
                <a href="" class="{{ $styleLink }}">Liste des catégories</a>
            @endauth
        </div>
    </div>
</x-layouts.main-layout>
