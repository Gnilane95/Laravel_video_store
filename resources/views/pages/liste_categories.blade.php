<x-layouts.main-layout title="Catégories">
    <div class="container">
        <h1 class="font-black text-red-800 text-4xl underline underline-offset-2 pt-5 text-center">Gestion les catégories</h1>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mt-10">
                <input type="text" name="name" placeholder="Catégorie" class="my-3 block">
                <x-error-msg name="name" />
                <button type="submit" class="btn btn-primary ">Enregistrer</button>
            </div>
        </form>
        <div class="bg-gray-100 p-5 mt-5">
            @forelse ($categories as $category)
                <div class="pb-5">
                    <p class="font-bold uppercase pb-2">
                        {{ $category->name }}
                    </p>
                    <div>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary btn-sm mr-3">Modifier</a>
                        <x-link-delete routeName="category.delete" :itemId="$category->id" linkName="Supprimer" />
                    </div>
                </div>
            @empty
                <p class="pt-10">Pas de catégories enregistrées actuellement</p>
            @endforelse
        </div>
    </div>
</x-layouts.main-layout>