<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Initiatives Zambia | Building Stronger, Healthier Communities</title>
    <meta name="description" content="Transforming lives through science and innovation. Join us in building healthier, more resilient communities across Zambia.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#f97316', // SIHDZ Orange
                        secondary: '#0ea5e9',
                        accent: '#f59e0b',
                        success: '#10b981',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        .gradient-text {
            background: linear-gradient(90deg, #f97316, #fdba74, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero-overlay {
            background: linear-gradient(90deg, rgba(249,115,22,0.7) 0%, rgba(253,186,116,0.5) 100%);
        }
    </style>
</head>
<body class="bg-[#fff7ed] font-sans text-gray-800 overflow-x-hidden">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur shadow-lg transition-all duration-500"
         x-data="{ scrolled: false, mobileMenu: false }"
         x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 50)">
        <div class="container mx-auto px-6 flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-4">
                <img src="/images/sihdz_main.png" alt="SIHDZ Logo" class="h-16 w-36 object-contain drop-shadow-xl">
                <span class="font-extrabold text-2xl md:text-3xl gradient-text drop-shadow-lg">Scientific Initiatives Zambia</span>
            </a>
            <!-- Desktop Nav -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="#about" class="font-semibold hover:text-primary transition">About</a>
                <a href="#impact" class="font-semibold hover:text-primary transition">Our Work</a>
                <a href="#stories" class="font-semibold hover:text-primary transition">Stories</a>
                <a href="#get-involved" class="font-semibold hover:text-primary transition">Get Involved</a>
                <a href="#donate" class="bg-primary text-white px-6 py-2 rounded-full font-bold hover:bg-orange-600 transition shadow-lg">Donate</a>
            </div>
            <!-- Mobile Nav Button -->
            <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-primary text-2xl">
                <i :class="mobileMenu ? 'fa fa-times' : 'fa fa-bars'"></i>
            </button>
        </div>
        <!-- Mobile Nav -->
        <div class="lg:hidden" x-show="mobileMenu" x-transition>
            <div class="bg-white rounded-xl mt-2 py-6 px-6 shadow space-y-3">
                <a href="#about" class="block font-semibold text-primary" @click="mobileMenu = false">About</a>
                <a href="#impact" class="block font-semibold text-primary" @click="mobileMenu = false">Our Work</a>
                <a href="#stories" class="block font-semibold text-primary" @click="mobileMenu = false">Stories</a>
                <a href="#get-involved" class="block font-semibold text-primary" @click="mobileMenu = false">Get Involved</a>
                <a href="#donate" class="block bg-primary text-white px-4 py-2 rounded-full font-bold text-center mt-2" @click="mobileMenu = false">Donate</a>
            </div>
        </div>
    </nav>

    <!-- Hero / Carousel with Image Background -->
    <section class="relative min-h-screen flex items-center justify-center pt-32 bg-[#fff7ed]">
        <img src="/images/hero_children.jpg" alt="Children smiling" class="absolute inset-0 w-full h-full object-cover object-center z-0 opacity-70">
        <div class="absolute inset-0 hero-overlay z-10"></div>
        <div class="container mx-auto px-6 text-center relative z-20 flex flex-col items-center">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight gradient-text drop-shadow-lg">
                Every Child Deserves <br>
                <span class="block text-white drop-shadow-2xl">A Healthy Future</span>
            </h1>
            <p class="text-xl md:text-2xl mb-10 max-w-2xl mx-auto font-light text-white/90">
                We're transforming lives across Zambia through science, innovation, and community partnerships.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12">
                <a href="#donate" class="bg-primary text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-orange-600 transition shadow-xl">
                    <i class="fas fa-heart mr-2"></i> Donate Now
                </a>
                <a href="#about" class="bg-white/20 text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white/30 transition">
                    <i class="fas fa-play mr-2"></i> Watch Our Story
                </a>
            </div>
            <!-- Carousel/Slider (Images) -->
            <div x-data="{
                slides: [
                    { image: '/images/slide1.jpg', caption: 'Empowering Youth Across Zambia' },
                    { image: '/images/slide2.jpg', caption: 'Supporting Women\'s Health' },
                    { image: '/images/slide3.jpg', caption: 'Building Inclusive Communities' }
                ],
                active: 0,
                next() { this.active = (this.active + 1) % this.slides.length },
                prev() { this.active = (this.active - 1 + this.slides.length) % this.slides.length },
                init() { setInterval(() => this.next(), 4000); }
            }" x-init="init()" class="relative w-full max-w-3xl mx-auto mt-8">
                <template x-for="(slide, idx) in slides" :key="idx">
                    <div x-show="active === idx" x-transition class="absolute inset-0 flex flex-col items-center justify-center">
                        <img :src="slide.image" alt="" class="w-full h-64 object-cover rounded-2xl shadow-xl border-4 border-white/60">
                        <div class="bg-primary/90 text-white px-6 py-3 rounded-full mt-4 text-lg font-semibold shadow-lg" x-text="slide.caption"></div>
                    </div>
                </template>
                <div class="absolute left-4 top-1/2 -translate-y-1/2 z-20">
                    <button @click="prev" class="bg-white/70 hover:bg-primary text-primary hover:text-white rounded-full p-2 shadow"><i class="fa fa-chevron-left"></i></button>
                </div>
                <div class="absolute right-4 top-1/2 -translate-y-1/2 z-20">
                    <button @click="next" class="bg-white/70 hover:bg-primary text-primary hover:text-white rounded-full p-2 shadow"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Stats -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-extrabold text-primary mb-2">150</div>
                <div class="text-base font-semibold text-gray-700">Communities Reached</div>
            </div>
            <div>
                <div class="text-4xl font-extrabold text-primary mb-2">10K+</div>
                <div class="text-base font-semibold text-gray-700">Lives Impacted</div>
            </div>
            <div>
                <div class="text-4xl font-extrabold text-primary mb-2">500+</div>
                <div class="text-base font-semibold text-gray-700">Youth Trained</div>
            </div>
            <div>
                <div class="text-4xl font-extrabold text-primary mb-2">85%</div>
                <div class="text-base font-semibold text-gray-700">Funds to Programs</div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-20 bg-gradient-to-br from-orange-50 via-white to-orange-100">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <img src="/images/sihdz_main.png" alt="Community Impact" class="h-64 w-full object-contain rounded-2xl shadow-2xl bg-white p-4">
            </div>
            <div class="md:w-1/2 text-left">
                <div class="inline-block bg-primary/10 text-primary px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    WHO WE ARE
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6 text-gray-800">
                    Transforming Lives Through <span class="gradient-text">Science & Innovation</span>
                </h2>
                <p class="text-xl text-gray-600 mb-6">
                    Scientific Initiatives Zambia bridges the gap between local community needs and global health solutions, creating sustainable pathways to healthier, more resilient communities.
                </p>
                <blockquote class="bg-gradient-to-r from-primary to-secondary p-6 rounded-xl text-white font-medium italic">
                    "Improving outcomes through scientific initiatives & innovations to foster sustainably healthy & developed communities in Zambia and beyond."
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Impact / Programs -->
    <section id="impact" class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center">
            <div class="inline-block bg-secondary/10 text-secondary px-4 py-2 rounded-full text-sm font-semibold mb-4">
                OUR WORK
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6 text-gray-800">
                Empowering <span class="gradient-text">Key Communities</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-12">
                Through targeted programs and innovations, we're creating lasting change for the most vulnerable populations.
            </p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-orange-50 rounded-xl p-8 shadow hover:shadow-xl transition">
                    <i class="fas fa-graduation-cap text-3xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-primary">Youth Empowerment</h3>
                    <p class="text-gray-600 mb-4">Skills training, leadership development, and educational opportunities for youth.</p>
                    <div class="text-2xl font-extrabold text-primary">500+</div>
                </div>
                <div class="bg-orange-50 rounded-xl p-8 shadow hover:shadow-xl transition">
                    <i class="fas fa-heartbeat text-3xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-primary">Women's Health</h3>
                    <p class="text-gray-600 mb-4">Comprehensive health and economic empowerment for women and mothers.</p>
                    <div class="text-2xl font-extrabold text-primary">2,500+</div>
                </div>
                <div class="bg-orange-50 rounded-xl p-8 shadow hover:shadow-xl transition">
                    <i class="fas fa-hands-helping text-3xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-primary">Inclusive Communities</h3>
                    <p class="text-gray-600 mb-4">Ensuring people with disabilities and elderly are included in all initiatives.</p>
                    <div class="text-2xl font-extrabold text-primary">150+</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stories -->
    <section id="stories" class="py-20 bg-gradient-to-br from-orange-50 via-white to-orange-100">
        <div class="container mx-auto px-6 text-center">
            <div class="inline-block bg-accent/10 text-amber-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                REAL STORIES
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6 text-gray-800">
                Lives <span class="gradient-text">Transformed</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-12">
                Every number represents a life changed. Here are some of the stories behind our impact.
            </p>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl p-8 shadow text-left">
                    <h3 class="text-xl font-bold text-primary mb-2">Grace's Story</h3>
                    <p class="text-gray-700 mb-4">"Before SIZ came to our community, my youngest daughter was severely malnourished. Through their nutrition program and health education, she's now thriving in school."</p>
                    <div class="text-sm text-gray-500">3 children now healthy, family economically stable</div>
                </div>
                <div class="bg-white rounded-xl p-8 shadow text-left">
                    <h3 class="text-xl font-bold text-primary mb-2">James's Journey</h3>
                    <p class="text-gray-700 mb-4">"The leadership training I received changed everything. I went from struggling to find work to starting my own community health initiative."</p>
                    <div class="text-sm text-gray-500">200+ families reached through peer education</div>
                </div>
            </div>
            <div class="mt-10">
                <a href="#more-stories" class="text-primary font-semibold hover:text-orange-600 transition">Read More Stories <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="get-involved" class="py-20 bg-gradient-to-br from-[#fdba74] via-[#f97316] to-orange-400 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-8">Join Us in Building a <span class="text-yellow-300">Better Future</span></h2>
            <p class="text-xl mb-10 opacity-90">Every child deserves a chance to thrive. Your support creates lasting change in communities across Zambia.</p>
            <div class="flex flex-col md:flex-row gap-8 justify-center mb-12">
                <a href="#donate" class="bg-white text-primary px-8 py-4 rounded-full font-bold hover:bg-orange-100 transition">Give Now</a>
                <a href="#volunteer" class="bg-white/20 px-8 py-4 rounded-full font-bold hover:bg-white/30 transition">Volunteer</a>
                <a href="#partner" class="bg-white/20 px-8 py-4 rounded-full font-bold hover:bg-white/30 transition">Partner</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <div class="flex items-center space-x-3 mb-4 md:mb-0">
                    <img src="/images/sihdz_main.png" alt="SIHDZ Logo" class="h-12 w-28 object-contain drop-shadow-lg">
                    <span class="font-bold text-lg">Scientific Initiatives Zambia</span>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-orange-200"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-orange-200"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-orange-200"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="hover:text-orange-200"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <p class="text-orange-100 text-sm">&copy; 2025 Scientific Initiatives Zambia. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>