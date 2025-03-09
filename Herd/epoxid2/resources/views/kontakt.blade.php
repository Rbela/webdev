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

<form action="{{ route('contact.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 my-64 rounded-lg shadow justify-center">
    @csrf
    <input type="text" name="name" placeholder="Vaše jméno" class="w-full p-3 mb-4 border rounded" required>
    <input type="email" name="email" placeholder="Váš Email" class="w-full p-3 mb-4 border rounded" required>
    <input type="tel" name="phone" placeholder="Vaše telefonní číslo" class="w-full p-3 mb-4 border rounded" required>
    <textarea name="message" placeholder="Vaše zpráva" class="w-full p-3 mb-4 border rounded" required></textarea>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-6 py-2 rounded">Odeslat zprávu</button>
</form>

@if (session('success'))
    <div class="bg-green-500 text-white p-3 rounded mt-4">
        {{ session('success') }}
    </div>
@endif


    <!-- Hero Section 
    <section class="relative w-full h-96 bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('https://source.unsplash.com/1600x900/?floor,epoxy');">
        <div class="bg-black bg-opacity-50 p-6 rounded-lg text-center">
            <h2 class="text-4xl font-semibold">Get Your Free Quote Today</h2>
            <button class="mt-4 bg-blue-500 hover:bg-blue-700 px-6 py-2 rounded">Contact Us</button>
        </div>
    </section> -->
    
 
    
    <!-- Contact Section -->
   
    
    <!-- Footer -->
    <footer class="flex bg-blue-900 text-white p-4 text-center fixed bottom-0 w-full">
        <p>&copy; 2025 Epoxy Flooring Services | All Rights Reserved</p>
        <a href="{{ route('contacts.index') }}" class=" pl-8 text-blue-900 ">Admin</a>
    </footer>
    
</body>
</html>