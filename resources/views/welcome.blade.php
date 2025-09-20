<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Initiatives Zambia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <header class="bg-green-600 shadow-lg">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo and Name -->
            <div class="flex items-center space-x-3">
                <!-- Correct Laravel asset path -->
                <img src="{{ asset('images/sihdz-logo.jpg') }}" 
                     alt="SiHDZ Logo" 
                     class="h-20 w-20 rounded-full shadow-md">
                <h1 class="text-white font-bold text-2xl">SiHDZ</h1>
            </div>

            <!-- Navigation -->
            <nav class="space-x-6">
                <a href="{{ url('/') }}" class="text-white hover:text-orange-300 font-medium">Home</a>
                <a href="{{ url('/about') }}" class="text-white hover:text-orange-300 font-medium">About</a>
                <a href="{{ url('/projects') }}" class="text-white hover:text-orange-300 font-medium">Projects</a>
                <a href="{{ url('/contact') }}" class="text-white hover:text-orange-300 font-medium">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-600 to-orange-500 text-white text-center py-20">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-4xl font-extrabold mb-4">Scientific Initiatives for a Healthy & Developed Zambia</h2>
            <p class="text-lg mb-6">Connecting Local Community Ideas, Initiatives & Innovations to the Global Health & Development Agenda.</p>
            <a href="{{ url('/about') }}" class="bg-red-600 hover:bg-orange-400 px-6 py-3 rounded-lg font-semibold text-lg shadow-md transition">Learn More</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700 text-white text-center py-4 mt-12">
        <p>&copy; {{ date('Y') }} Scientific Initiatives Zambia. All Rights Reserved.</p>
    </footer>

</body>
</html>
