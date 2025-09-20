<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Initiatives Zambia</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
    <style>
        .fade-enter { opacity: 0; transform: translateY(20px); transition: all 0.6s ease-out; }
        .fade-enter-active { opacity: 1; transform: translateY(0); }
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); }
    </style>
</head>
<body class="bg-gray-50 text-gray-800" x-data="{ mobileMenu: false }">
    <!-- Navbar -->
    <header class="bg-green-700 shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" alt="Scientific Initiatives Zambia Logo" class="h-12 w-12 rounded-full">
                <span class="text-white font-bold text-lg">Scientific Initiatives Zambia</span>
            </div>
            <nav class="hidden lg:flex space-x-6">
                <a href="#about" class="text-white hover:text-yellow-300 transition">About</a>
                <a href="#programs" class="text-white hover:text-yellow-300 transition">Programs</a>
                <a href="#contact" class="text-white hover:text-yellow-300 transition">Contact</a>
            </nav>
            <button class="lg:hidden text-white" @click="mobileMenu = !mobileMenu">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5M3.75 12h16.5m-16.5 6.75h16.5" />
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div class="lg:hidden" x-show="mobileMenu" x-transition.duration.300ms>
            <div class="glass-card mx-4 mt-2 rounded-xl p-4 space-y-3">
                <a href="#about" class="block text-green-900">About</a>
                <a href="#programs" class="block text-green-900">Programs</a>
                <a href="#contact" class="block text-green-900">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative h-[80vh] flex items-center justify-center bg-cover bg-center text-center text-white" style="background-image: url('{{ asset('images/hero.jpg') }}');">
        <div class="bg-black bg-opacity-50 p-6 rounded-2xl">
            <h1 class="text-4xl md:text-5xl font-bold">Connecting Communities to Global Development</h1>
            <p class="mt-4 text-lg max-w-xl mx-auto">Improving outcomes through scientific initiatives and innovations to foster sustainably healthy and developed communities in Zambia and beyond.</p>
            <a href="#about" class="mt-6 inline-block bg-yellow-400 text-green-900 font-semibold px-6 py-3 rounded-xl shadow hover:bg-yellow-500 transition">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container mx-auto px-4 py-20 fade-enter">
        <h2 class="text-3xl font-bold text-center mb-6">About Us</h2>
        <p class="text-center max-w-3xl mx-auto text-gray-700">We are committed to promoting health, development, and innovation by supporting local initiatives and connecting them to the global agenda. Our mission is to empower communities with sustainable solutions that improve livelihoods.</p>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="bg-gray-100 py-20 fade-enter">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Our Programs</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-card p-6 rounded-2xl shadow">
                    <h3 class="text-xl font-bold mb-3">Health</h3>
                    <p>Supporting initiatives that improve community health, access to healthcare, and health education.</p>
                </div>
                <div class="glass-card p-6 rounded-2xl shadow">
                    <h3 class="text-xl font-bold mb-3">Education</h3>
                    <p>Promoting learning opportunities, mentorship, and innovation-driven education for all age groups.</p>
                </div>
                <div class="glass-card p-6 rounded-2xl shadow">
                    <h3 class="text-xl font-bold mb-3">Entrepreneurship</h3>
                    <p>Empowering youth and women through business training, financial literacy, and access to resources.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container mx-auto px-4 py-20 fade-enter">
        <h2 class="text-3xl font-bold text-center mb-6">Contact Us</h2>
        <p class="text-center mb-6">Email: <a href="mailto:info@scientificinitiativeszambia.org" class="text-green-700 font-semibold">info@scientificinitiativeszambia.org</a></p>
        <p class="text-center">Phone: <span class="font-semibold">+260 977 000 000</span></p>
    </section>

    <!-- Footer -->
    <footer class="bg-green-800 text-white text-center py-6">
        <p>&copy; {{ date('Y') }} Scientific Initiatives Zambia. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.fade-enter');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-enter-active');
                    }
                });
            }, { threshold: 0.1 });

            sections.forEach(section => observer.observe(section));
        });
    </script>
</body>
</html>
