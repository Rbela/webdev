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
  

    
    
    <!-- Služby Section -->
    <section id="services" class="p-8 text-center">
        <h2 class="text-3xl font-bold mb-6">Naše služby</h2>
          <div class="mt-8 text-lg">
            <p>Všechny naše epoxidové podlahy jsou snadno udržovatelné, hygienické a mají dlouhou životnost. Nabízíme individuální konzultace, kde vám pomůžeme s výběrem správného řešení pro váš prostor.</p>
            <p class="mt-4">Kontaktujte nás a domluvte si nezávaznou konzultaci. Rádi vám pomůžeme s návrhem a realizací podlahy podle vašich představ.</p>
        </div>
        <p class="mb-6 text-lg">Specializujeme se na výrobu a aplikaci epoxidových podlah, které spojují moderní design, vysokou odolnost a snadnou údržbu. Díky našim profesionálním technologiím nabízíme řešení na míru pro domácnosti, komerční prostory i průmyslové haly. Každý projekt realizujeme s důrazem na preciznost, kvalitu a individuální přístup.</p>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-2xl font-semibold">Epoxidové podlahy pro domácnosti</h3>
                <p class = "text-xl">Chcete přidat moderní a elegantní prvek do vašeho domova? Epoxidové podlahy jsou ideálním řešením pro obývací pokoje, kuchyně i koupelny. Díky své odolnosti proti poškrábání a snadné údržbě jsou vhodné i pro domácnosti s dětmi a domácími mazlíčky. Nabízíme širokou škálu barev a dekorů, které se přizpůsobí vašemu interiéru.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-2xl font-semibold">Epoxidové podlahy pro firmy</h3>
                <p class = "text-xl">Epoxidové podlahy jsou skvělou volbou pro kanceláře, restaurace, hotely nebo prodejny. Poskytují luxusní vzhled, snadnou údržbu a vysokou odolnost vůči opotřebení. Navíc mají vynikající odolnost vůči skvrnám a chemikáliím, což z nich dělá praktické řešení pro frekventované prostory.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-2xl font-semibold">Průmyslové epoxidové podlahy</h3>
                <p class = "text-xl">Pro průmyslové objekty, sklady, výrobní haly a garáže nabízíme epoxidové podlahy s extrémní odolností vůči mechanickému poškození a chemickým látkám. Naše podlahové systémy jsou navrženy tak, aby vydržely vysoké zatížení a poskytovaly bezpečný, neklouzavý povrch i v náročných podmínkách.</p>
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