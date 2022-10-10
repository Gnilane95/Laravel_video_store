@props([
    'url_img',
    'title',
    'description',
])
<div class="bg-white shadow-lg lg:p-5 md:p-7">
    <img src="{{ $url_img }}" alt="{{ $title }}" class="md:w-full">
    <p>{{ $title }}</p>
    <p class="py-5">{{ $description }}</p>
</div>