<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Epoxidové podlahy – Kvalita & Design' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <nav class="bg-gray-800 text-white p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold"><a href="{{ route('home') }}">Epoxidové podlahy – Kvalita & Design</a></h1>
        <div id="menu-btn" class="flex flex-col space-y-1 cursor-pointer">
            <div class="w-8 h-1 bg-black transition-transform duration-300" id="bar1"></div>
            <div class="w-8 h-1 bg-black transition-opacity duration-300" id="bar2"></div>
            <div class="w-8 h-1 bg-black transition-transform duration-300" id="bar3"></div>
        </div>
    </nav>

    <!-- Hamburger Menu -->
    <ul id="menu" class="hidden bg-gray-800 text-white text-left p-4 space-y-2 transition-all duration-300 absolute right-4 w-48 rounded-b-lg shadow-lg z-[9999]">
        <li><a href="{{ route('sluzby') }}" class="block hover:bg-gray-700 p-2 rounded">Služby</a></li>
        <li><a href="{{ route('galerie') }}" class="block hover:bg-gray-700 p-2 rounded">Galerie</a></li>
        <li><a href="{{ route('kontakt') }}" class="block hover:bg-gray-700 p-2 rounded">Kontakt</a></li>
    </ul>

    <!-- Hlavní obsah stránky 
    <main class="py-8">
        {{ $slot }}
    </main>-->

    <!-- Footer -->
    <footer class="bg-blue-900 text-white p-4 text-center fixed bottom-0 w-full">
        <p>&copy; 2025 Epoxy Flooring Services | All Rights Reserved</p>
    </footer>

    <!-- Skript pro menu -->
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            let menu = document.getElementById('menu');
            let bar1 = document.getElementById('bar1');
            let bar2 = document.getElementById('bar2');
            let bar3 = document.getElementById('bar3');
            
            menu.classList.toggle('hidden');
            bar1.classList.toggle('rotate-45');
            bar1.classList.toggle('translate-y-2');
            bar2.classList.toggle('opacity-0');
            bar3.classList.toggle('-rotate-45');
            bar3.classList.toggle('-translate-y-2');
        });
    </script>
</body>
</html>