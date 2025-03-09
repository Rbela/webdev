<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epoxy Flooring Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    
    <!-- Nav bar -->
    <nav class="bg-gray-800 text-white p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold"><a href="{{ route('home') }}">Epoxidové podlahy – Kvalita & Design</a></h1>
        <div id="menu-btn" class="flex flex-col space-y-1 cursor-pointer">
            <div class="w-8 h-1 bg-black transition-transform duration-300" id="bar1"></div>
            <div class="w-8 h-1 bg-black transition-opacity duration-300" id="bar2"></div>
            <div class="w-8 h-1 bg-black transition-transform duration-300" id="bar3"></div>
        </div>
    </nav>
    
    <!-- Hamburger Menu -->
    <ul id="menu" class="hidden bg-gray-800 text-white text-left p-4 space-y-2 transition-all duration-300 absolute right-4  w-48 rounded-b-lg shadow-lg">
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


    <!-- O nás Section -->
    <section class="p-8 text-center">
        <h2 class="text-3xl font-bold mb-6">O nás</h2>
        <p class="mb-6 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in justo nec lacus volutpat faucibus a et magna. Fusce nec gravida ligula.</p>
    </section>
    
    <!-- Tým Section -->
    <section class="p-8">
        <h2 class="text-3xl font-bold text-center mb-6">Náš tým</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <img src="" alt="Zaměstnanec" class="mx-auto mb-4 rounded-full">
                <h3 class="text-xl font-semibold">Jméno Příjmení</h3>
                <p class="text-gray-600">Pozice ve firmě</p>
                <p class="mt-4 text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <img src="" alt="Zaměstnanec" class="mx-auto mb-4 rounded-full">
                <h3 class="text-xl font-semibold">Jméno Příjmení</h3>
                <p class="text-gray-600">Pozice ve firmě</p>
                <p class="mt-4 text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <img src="" alt="Zaměstnanec" class="mx-auto mb-4 rounded-full">
                <h3 class="text-xl font-semibold">Jméno Příjmení</h3>
                <p class="text-gray-600">Pozice ve firmě</p>
                <p class="mt-4 text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </section>
    
   
    
    <!-- Footer -->
     <footer class="flex bg-blue-900 text-white p-4 text-center fixed bottom-0 w-full">
        <p>&copy; 2025 Epoxy Flooring Services | All Rights Reserved</p>
        <a href="{{ route('contacts.index') }}" class=" pl-8 text-blue-900 ">Admin</a>
    </footer>
    
</body>
</html>