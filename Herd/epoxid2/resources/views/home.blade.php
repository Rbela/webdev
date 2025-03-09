<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epoxidové podlahy – Kvalita & Design</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    
    <!-- Nav bar -->
    <nav class="bg-gray-800 text-white p-4 flex justify-between items-center fixed top-0 w-full z-50">
        <h1 class="text-2xl font-bold"><a href="{{ route('home') }}">Epoxidové podlahy – Kvalita & Design</a></h1>
        <div id="menu-btn" class="flex flex-col space-y-1 cursor-pointer">
            <div class="w-8 h-1 bg-white transition-transform duration-300" id="bar1"></div>
            <div class="w-8 h-1 bg-white transition-opacity duration-300" id="bar2"></div>
            <div class="w-8 h-1 bg-white transition-transform duration-300" id="bar3"></div>
        </div>
    </nav>
    
    <!-- Hamburger Menu -->
    <ul id="menu" class="hidden bg-gray-800 text-white text-left p-4 space-y-2 transition-all duration-300 absolute right-4 top-16 w-48 rounded-b-lg shadow-lg z-50">
        <li><a href="{{ route('sluzby') }}" class="block hover:bg-gray-700 p-2 rounded">Služby</a></li>
        <li><a href="{{ route('galerie') }}" class="block hover:bg-gray-700 p-2 rounded">Galerie</a></li>
        <li><a href="{{ route('kontakt') }}" class="block hover:bg-gray-700 p-2 rounded">Kontakt</a></li>
        <li><a href="{{ route('onas') }}" class="block hover:bg-gray-700 p-2 rounded">O nás</a></li>
    </ul>
    
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
    
    <!-- Video Background with Overlay -->
    <div class="relative w-full h-screen overflow-hidden">
        <video id="video1" class="absolute w-full h-full object-cover opacity-100 transition-opacity duration-1000" autoplay muted loop>
            <source src="{{ asset('videos/epo1.mp4.mp4') }}" type="video/mp4">
        </video>
        <video id="video2" class="absolute w-full h-full object-cover opacity-0 transition-opacity duration-1000" autoplay muted loop>
            <source src="{{ asset('videos/epo2.mp4.mp4') }}" type="video/mp4">
        </video>
        
        <!-- Overlay Text -->
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white text-center px-6">
            <h2 class="text-4xl font-bold mb-4">Profesionální Epoxidové Podlahy</h2>
            <p class="text-lg mb-6 max-w-2xl">Odolné, estetické a snadno udržovatelné podlahy pro váš domov, podnik nebo průmyslový prostor.</p>
            <div class="space-x-4">
                <a href="{{ route('sluzby') }}" class="bg-blue-600 hover:bg-blue-700 px-6 py-2 rounded-lg text-white">Naše služby</a>
                <a href="{{ route('kontakt') }}" class="bg-gray-600 hover:bg-gray-700 px-6 py-2 rounded-lg text-white">Kontaktujte nás</a>
            </div>
        </div>
    </div>
    
    <script>
        const video1 = document.getElementById("video1");
        const video2 = document.getElementById("video2");

        function swapVideos() {
            if (video1.classList.contains("opacity-100")) {
                video1.classList.replace("opacity-100", "opacity-0");
                video2.classList.replace("opacity-0", "opacity-100");
            } else {
                video2.classList.replace("opacity-100", "opacity-0");
                video1.classList.replace("opacity-0", "opacity-100");
            }
        }

        setInterval(swapVideos, 10000);
    </script>
    
    <!-- Footer -->
    <footer class="flex bg-blue-900 text-white p-4 text-center fixed bottom-0 w-full">
        <p>&copy; 2025 Epoxy Flooring Services | Všechna práva vyhrazena</p>
        <a href="{{ route('contacts.index') }}" class="pl-8 text-blue-900">Admin</a>
    </footer>
</body>
</html>
