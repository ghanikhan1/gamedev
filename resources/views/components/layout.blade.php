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

<header>
    <div class="max-w-[1200px] mx-auto w-full bg-red-800">
        <nav class="flex justify-between">
            <div class="logo">GD.</div>
            <ul>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Our Work</a>
                </li>
                <li>
                    <a href="#" class="btn dark">Enroll Now</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

{{ $slot }}

<footer class="text-center py-6">
    <p>&copy; 2025 My Portfolio</p>
</footer>

<!-- Load Alpine.js separately to prevent import errors -->
<script src="{{ asset('js/alpine.min.js') }}" defer></script>
<script src="{{ asset('js/app.min.js') }}"></script>
</body>
</html>
