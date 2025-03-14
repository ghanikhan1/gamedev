<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Developer Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">

</head>
<body>

<header class="header">
    <div class="logo">My Portfolio</div>
    <nav class="nav">
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>
    <!-- Dark Mode Toggle -->
    <button id="darkModeToggle" class="btn btn--outline">🌙 Toggle Dark Mode</button>
</header>


<section class="hero bg-blue-500 text-white text-center py-16">
    <h1 class="text-4xl font-bold">Hi, I'm Usman</h1>
    <p class="mt-2">Front-end Developer | Laravel & Tailwind Enthusiast</p>
    <a href="#projects" class="btn btn--primary">View My Work</a>
</section>

<section id="projects" class="py-12">
    <h2 class="text-center text-2xl font-semibold">Projects</h2>
    <div class="grid md:grid-cols-2 gap-6 mt-6">
        <div class="card">
            <h3 class="text-lg font-bold">Project 1</h3>
            <p>A great website I built.</p>
        </div>
        <div class="card">
            <h3 class="text-lg font-bold">Project 2</h3>
            <p>Another cool project.</p>
        </div>
    </div>
</section>

<section class="py-12">
    <h2 class="text-center text-2xl font-semibold">FAQs</h2>
    <div class="max-w-lg mx-auto mt-6">
        <div x-data="{ open: false }" class="border p-4 rounded shadow">
            <button @click="open = !open" class="font-bold text-lg">What do you do?</button>
            <p x-show="open" x-transition class="mt-2 text-gray-600">I build high-quality websites with Laravel and TailwindCSS!</p>
        </div>
    </div>
</section>



<footer class="text-center py-6">
    <p>&copy; 2025 My Portfolio</p>
</footer>

<!-- Load Alpine.js separately to prevent import errors -->
<script src="{{ asset('js/alpine.min.js') }}" defer></script>
<script src="{{ asset('js/app.min.js') }}"></script>
</body>
</html>
