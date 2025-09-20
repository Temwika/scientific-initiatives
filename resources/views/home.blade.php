<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Initiatives Zambia</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js for interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <header class="bg-green-600 shadow-lg">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo and Name -->
            <div class="flex items-center space-x-3">
                <img src="images/sihdz-logo.jpg" 
                     alt="SiHDZ Logo" 
                     class="h-20 w-20 rounded-full shadow-md"
                     onerror="this.onerror=null; this.src='https://via.placeholder.com/80';">
                <h1 class="text-white font-bold text-2xl">SiHDZ</h1>
            </div>

            <!-- Navigation -->
            <nav class="space-x-6">
                <a href="#" class="text-white hover:text-orange-300 font-medium">Home</a>
                <a href="#" class="text-white hover:text-orange-300 font-medium">About</a>
                <a href="#" class="text-white hover:text-orange-300 font-medium">Projects</a>
                <a href="#" class="text-white hover:text-orange-300 font-medium">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section with Slideshow -->
    <section class="relative w-full overflow-hidden" x-data="carousel()" x-init="init()">
        <!-- Slides -->
        <template x-for="(image, index) in images" :key="index">
            <div x-show="active === index" 
                 class="absolute inset-0 transition-opacity duration-1000">
                <img :src="image" class="w-full h-[500px] object-cover" alt="Slide Image"
                     onerror="this.onerror=null; this.src='https://via.placeholder.com/800x500';">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-center px-4">
                    <h2 class="text-4xl font-extrabold mb-2">Scientific Initiatives for a Healthy & Developed Zambia</h2>
                    <p class="text-lg mb-4">Connecting Local Community Ideas, Initiatives & Innovations to the Global Health & Development Agenda.</p>
                    <a href="#" class="bg-red-600 hover:bg-orange-400 px-6 py-3 rounded-lg font-semibold text-lg shadow-md transition">Learn More</a>
                </div>
            </div>
        </template>

        <!-- Navigation Dots -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <template x-for="(image, index) in images" :key="index">
                <span @click="active = index" 
                      :class="{'bg-white': active === index, 'bg-gray-500': active !== index}" 
                      class="w-3 h-3 rounded-full cursor-pointer"></span>
            </template>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700 text-white text-center py-4 mt-12">
        <p>&copy; 2025 Scientific Initiatives Zambia. All Rights Reserved.</p>
    </footer>

    <!-- Alpine.js Carousel Script -->
    <script>
    function carousel() {
        return {
            active: 0,
            images: [
                'images/clean.jpg',
                'images/pads.jpg',
                'images/skills.jpg'
            ],
            init() {
                setInterval(() => {
                    this.active = (this.active + 1) % this.images.length;
                }, 5000); // Change slide every 5 seconds
            }
        }
    }
    </script>

</body>
</html>
