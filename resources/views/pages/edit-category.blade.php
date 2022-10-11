<x-layouts.main-layout title="Edit-category">
    <div class="container">
        <h1 class="font-black text-red-800 text-4xl underline underline-offset-2 text-center pt-5">Modifier une catégorie</h1>
        <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mt-10">
                <input type="text" name="name" class="@error('category border-red-500') @enderror my-3" value="{{ old('name', $category->name) }}">
                <x-error-msg name="name" />
                <button type="submit" class="btn btn-primary block">Modifier</button>
            </div>
        </form>
    </div>
</x-layouts.main-layout>