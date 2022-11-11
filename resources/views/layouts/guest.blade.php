<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<title>Be our guest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- FLOWBITE -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://fonts.cdnfonts.com/css/welth-catritz-free-personal-use" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">      
                
</head>

<body>

    <div class="flex flex-col min-h-screen bg-fixed bg-cover justify-between" style="background-image:
linear-gradient(180deg, rgba(109, 207, 246, 0.5) 0%, rgba(246, 150, 121, 0.5) 36.98%, rgba(255, 247, 153, 0.5) 66.15%, rgba(130, 202, 156, 0.2) 97.4%),
    url('https://images.unsplash.com/photo-1525373612132-b3e820b87cea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80');
">
        <header>@include('layouts.guest-navigation')</header>
        <main>
            {{ $slot }}
        </main>
        @include('layouts.guest-footer')
    </div>
<!-- Flowbite -->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

<!-- Carousel-->
<script>
    let defaultTransform = 0;
function goNext() {
    defaultTransform = defaultTransform - 398;
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
function goPrev() {
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 398;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);

</script>
</body>

</html>