<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navigace -->
    <nav class="bg-gray-800 text-white p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold"><a href="{{ route('home') }}">Epoxidové podlahy – Admin</a></h1>
        <ul class="flex space-x-4">
            <li><a href="{{ route('kontakt') }}" class="hover:underline">Kontakty</a></li>
            <li><a href="{{ route('home') }}" class="hover:underline">Zpět na web</a></li>
        </ul>
    </nav>
    
    <!-- Hlavní obsah -->
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <!-- Footer -->
   
</html>
