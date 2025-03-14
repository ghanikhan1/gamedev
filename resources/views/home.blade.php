<x-layout>
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
</x-layout>
