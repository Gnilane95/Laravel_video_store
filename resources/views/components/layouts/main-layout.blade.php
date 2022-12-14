@props(['title'])
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vidéo_store | {{ $title }}</title>
    {{-- import tailwind --}}
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.navbar._nav')
    @include('partials._session')
    {{ $slot }}
</body>
</html>