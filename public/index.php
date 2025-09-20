<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Initiatives Zambia | Building Healthy Communities</title>
    <meta name="description" content="Connecting local innovations to global health & development goals across Zambia">
    
    <!-- Tailwind CSS -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#f97316', // Orange from logo
                            light: '#fdba74',
                            dark: '#ea580c'
                        }
                    }
                }
            }
        }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #059669, #0ea5e9, #f97316);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .glass-card {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .hero-bg {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 25%, #059669 50%, #0ea5e9 75%, #f97316 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }
        
        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .fade-enter { opacity: 0; transform: translateY(20px); }
        .fade-enter-active { opacity: 1; transform: translateY(0); transition: all 1s ease; }
        .fade-leave { opacity: 1; transform: translateY(0); }
        .fade-leave-active { opacity: 0; transform: translateY(20px); transition: all 1s ease; }
        
        .logo-shadow {
            filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.3));
        }
        
        .section-padding {
            padding: 5rem 0;
        }
        
        @media (max-width: 768px) {
            .section-padding {
                padding: 3rem 0;
            }
        }
    </style>
</head>
<body class="bg-white text-gray-800 overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 transition-all duration-500" 
         x-data="{ scrolled: false, mobileMenu: false }" 
         x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 50)"
         :class="scrolled ? 'glass-card shadow-2xl' : 'bg-transparent'">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <a href="/">
                            <img src="/images/sihdz_main.png" alt="Scientific Initiatives Zambia Logo" class="h-28 w-28 logo-shadow">
                        </a>
                    </div>
                    
                    
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#home" class="font-medium hover:scale-105 transition-all duration-300"
                       :class="scrolled ? 'text-gray-700 hover:text-green-600' : 'text-white hover:text-green-300'">Home</a>
                    <a href="#about" class="font-medium hover:scale-105 transition-all duration-300"
                       :class="scrolled ? 'text-gray-700 hover:text-green-600' : 'text-white hover:text-green-300'">About</a>
                    <a href="#focus" class="font-medium hover:scale-105 transition-all duration-300"
                       :class="scrolled ? 'text-gray-700 hover:text-green-600' : 'text-white hover:text-green-300'">Focus</a>
                    <a href="#impact" class="font-medium hover:scale-105 transition-all duration-300"
                       :class="scrolled ? 'text-gray-700 hover:text-green-600' : 'text-white hover:text-green-300'">Impact</a>
                    <a href="#contact" class="bg-gradient-to-r from-green-600 to-blue-500 text-white px-6 py-3 rounded-full font-semibold hover:from-green-700 hover:to-blue-600 transform hover:scale-105 transition-all duration-300">
                        Get Involved
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenu = !mobileMenu" class="lg:hidden p-2"
                        :class="scrolled ? 'text-gray-700' : 'text-white'">
                    <i class="fas text-xl" :class="mobileMenu ? 'fa-times' : 'fa-bars'"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="lg:hidden" x-show="mobileMenu" x-transition>
                <div class="glass-card rounded-xl mt-2 py-6 space-y-2">
                    <a href="#home" class="block px-6 py-3 text-gray-700 hover:text-green-600" @click="mobileMenu = false">Home</a>
                    <a href="#about" class="block px-6 py-3 text-gray-700 hover:text-green-600" @click="mobileMenu = false">About</a>
                    <a href="#focus" class="block px-6 py-3 text-gray-700 hover:text-green-600" @click="mobileMenu = false">Focus</a>
                    <a href="#impact" class="block px-6 py-3 text-gray-700 hover:text-green-600" @click="mobileMenu = false">Impact</a>
                    <div class="px-6 py-3">
                        <a href="#contact" class="w-full bg-gradient-to-r from-green-600 to-blue-500 text-white px-4 py-3 rounded-full text-center block" @click="mobileMenu = false">Get Involved</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen hero-bg flex items-center justify-center relative overflow-hidden"
             x-data="carousel()" x-init="init()">
        
        <div class="container mx-auto px-6 text-center text-white relative z-10">
            <div class="max-w-5xl mx-auto">
  
                <div class="mb-12">
             </div>

                <!-- Dynamic Content -->
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="active === index" x-transition:enter="fade-enter fade-enter-active" x-transition:leave="fade-leave fade-leave-active">
                        <h1 class="text-4xl sm:text-6xl lg:text-8xl font-black mb-8 leading-tight">
                            <span x-text="slide.title" class="gradient-text block"></span>
                            <span x-text="slide.subtitle" class="block mt-2"></span>
                        </h1>
                        <p class="text-xl sm:text-2xl mb-12 max-w-4xl mx-auto opacity-90 font-light" x-text="slide.description"></p>
                    </div>
                </template>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="#about" class="bg-white text-gray-800 px-10 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-2xl">
                        Learn More
                    </a>
                    <a href="#contact" class="glass-card text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white/20 transform hover:scale-105 transition-all duration-300">
                        Get Involved
                    </a>
                </div>
            </div>
        </div>

        <!-- Navigation Dots -->
        <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex space-x-3">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="active = index" class="w-3 h-3 rounded-full transition-all duration-300" :class="active === index ? 'bg-white scale-125' : 'bg-white/50'"></button>
            </template>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl lg:text-6xl font-black mb-6 gradient-text">Who We Are</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        <strong>Scientific Initiatives Zambia</strong> connects local community innovations to global health and development goals
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-6 text-gray-800">Our Mission</h3>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            Building self-resilient, sustainably healthy communities by ensuring easy access to health and developmental opportunities.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            <em>"Improving outcomes through scientific initiatives & innovations to foster sustainably healthy & developed communities in Zambia and beyond."</em>
                        </p>
                    </div>
                    <div class="relative">
                        <div class="bg-gradient-to-br from-green-400 to-blue-500 rounded-2xl p-12 text-white text-center">
                            <i class="fas fa-microscope text-6xl mb-6 opacity-80"></i>
                            <h4 class="text-2xl font-bold mb-4">Our Vision</h4>
                            <p class="text-lg opacity-90">A world where local communities have easy access to health and socioeconomic opportunities</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Focus Areas -->
    <section id="focus" class="section-padding bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-6xl font-black mb-6 gradient-text">Our Focus</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Empowering key communities through targeted programs and innovations
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl text-center card-hover">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-blue-600">Young People</h3>
                    <p class="text-gray-600">Empowering adolescents and youth with skills, opportunities, and leadership development</p>
                </div>

                <div class="bg-gradient-to-br from-pink-50 to-pink-100 p-8 rounded-2xl text-center card-hover">
                    <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-female text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-pink-600">Women</h3>
                    <p class="text-gray-600">Supporting women through health initiatives and economic empowerment programs</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl text-center card-hover">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-green-600">Marginalized Communities</h3>
                    <p class="text-gray-600">Including people with disabilities and elderly in all development initiatives</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values (GRIPICS) - Simplified -->
    <section class="section-padding bg-gradient-to-br from-gray-900 to-green-900 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl lg:text-6xl font-black mb-6">Our Values</h2>
            <h3 class="text-3xl font-bold mb-12 text-green-300">GRIPICS</h3>
            
            <div class="grid md:grid-cols-4 lg:grid-cols-7 gap-6 max-w-6xl mx-auto">
                <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
                    <i class="fas fa-venus-mars text-3xl mb-4 text-pink-300"></i>
                    <h4 class="font-bold text-pink-200">Gender Sensitivity</h4>
                </div>
                <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
                    <i class="fas fa-handshake text-3xl mb-4 text-blue-300"></i>
                    <h4 class="font-bold text-blue-200">Reliability</h4>
                </div>
                <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
                    <i class="fas fa-lightbulb text-3xl mb-4 text-yellow-300"></i>
                    <h4 class="font-bold text-yellow-200">Innovation</h4>
                </div>
                <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
                    <i class="fas fa-users text-3xl mb-4 text-green-300"></i>
                    <h4 class="font-bold text-green-200">Participation</h4>
                </div>
                <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
                    <i class="fas fa-heart text-3xl mb-4 text-red-300"></i>
                    <h4 class="font-bold text-red-200">Inclusivity</h4>
                </div>
                <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
                    <i class="fas fa-palette text-3xl mb-4 text-purple-300"></i>
                    <h4 class="font-bold text-purple-200">Creativity</h4>
                </div>
                <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
                    <i class="fas fa-hands-helping text-3xl mb-4 text-indigo-300"></i>
                    <h4 class="font-bold text-indigo-200">Solidarity</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Stats -->
    <section id="impact" class="section-padding bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl lg:text-6xl font-black mb-16 gradient-text">Our Impact</h2>
            
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="group">
                    <div class="text-5xl lg:text-7xl font-black mb-4 text-green-600 group-hover:scale-110 transition-transform">150+</div>
                    <p class="text-lg font-semibold text-gray-600">Communities</p>
                </div>
                <div class="group">
                    <div class="text-5xl lg:text-7xl font-black mb-4 text-blue-600 group-hover:scale-110 transition-transform">10K+</div>
                    <p class="text-lg font-semibold text-gray-600">Lives Impacted</p>
                </div>
                <div class="group">
                    <div class="text-5xl lg:text-7xl font-black mb-4 text-orange-600 group-hover:scale-110 transition-transform">500+</div>
                    <p class="text-lg font-semibold text-gray-600">Youth Trained</p>
                </div>
                <div class="group">
                    <div class="text-5xl lg:text-7xl font-black mb-4 text-purple-600 group-hover:scale-110 transition-transform">50+</div>
                    <p class="text-lg font-semibold text-gray-600">Innovations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding bg-gradient-to-br from-green-600 to-blue-600 text-white">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl lg:text-6xl font-black mb-8">Get Involved</h2>
                <p class="text-xl mb-12 opacity-90">Join us in building healthier, more resilient communities across Zambia</p>
                
                <div class="flex flex-col sm:flex-row gap-6 justify-center mb-16">
                    <a href="mailto:info@scientificinitiativeszambia.org" class="bg-white text-gray-800 px-10 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-2xl">
                        Contact Us
                    </a>
                    <a href="#" class="glass-card px-10 py-4 rounded-full font-bold text-lg border border-white/30 hover:bg-white/20 transform hover:scale-105 transition-all duration-300">
                        Partner With Us
                    </a>
                </div>

                <!-- Contact Info -->
                <div class="grid md:grid-cols-3 gap-8 max-w-3xl mx-auto">
                    <div>
                        <i class="fas fa-envelope text-3xl mb-4 opacity-80"></i>
                        <p class="font-semibold">Email</p>
                        <p class="text-sm opacity-75">info@siz.org.zm</p>
                    </div>
                    <div>
                        <i class="fas fa-phone text-3xl mb-4 opacity-80"></i>
                        <p class="font-semibold">Phone</p>
                        <p class="text-sm opacity-75">+260 xxx xxx xxx</p>
                    </div>
                    <div>
                        <i class="fas fa-map-marker-alt text-3xl mb-4 opacity-80"></i>
                        <p class="font-semibold">Location</p>
                        <p class="text-sm opacity-75">Lusaka, Zambia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#f97316] text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <div class="flex justify-center items-center mb-6">
                <div>
                    <h3 class="text-lg font-bold">Scientific Initiatives Zambia</h3>
                    <p class="text-sm text-orange-100">Building Healthy Communities</p>
                </div>
            </div>
            
            <div class="flex justify-center space-x-6 mb-6">
                <a href="#" class="w-10 h-10 bg-gradient-to-r from-[#f97316] to-orange-400 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-gradient-to-r from-[#f97316] to-orange-400 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-gradient-to-r from-[#f97316] to-orange-400 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-gradient-to-r from-[#f97316] to-orange-400 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            
            <p class="text-orange-100 text-sm">
                &copy; 2025 Scientific Initiatives Zambia. All Rights Reserved.
            </p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        function carousel() {
            return {
                active: 0,
                slides: [
                    {
                        title: 'Scientific Initiatives',
                        subtitle: 'Zambia',
                        description: 'Connecting local community innovations to global health & development goals'
                    },
                    {
                        title: 'Building Communities',
                        subtitle: 'That Thrive',
                        description: 'Improving outcomes through scientific initiatives & innovations across Zambia and beyond'
                    },
                    {
                        title: 'Empowering',
                        subtitle: 'Future Leaders',
                        description: 'Supporting youth, women, and marginalized communities through targeted programs'
                    }
                ],
                init() {
                    setInterval(() => {
                        this.next();
                    }, 5000);
                },
                next() {
                    this.active = (this.active + 1) % this.slides.length;
                }
            }
        }

        // Smooth scrolling
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a[href^="#"]');
            
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    
                    if (targetSection) {
                        const offsetTop = targetSection.offsetTop - 80;
                        
                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            const animatedElements = document.querySelectorAll('.card-hover');
            
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>