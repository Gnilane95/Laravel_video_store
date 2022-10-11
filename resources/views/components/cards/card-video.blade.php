@props([
    'url_img',
    'title',
    'description',
])
<div class="bg-white shadow-lg lg:p-5 md:p-7">
    <img src="{{asset('storage/'.$url_img) }}" alt="{{ $title }}" class="w-full h-48">
    <p class="font-bold text-xl pt-5">{{ $title }}</p>
    <p class="py-5">{{ $description }}</p>
</div>