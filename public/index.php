<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Initiatives Zambia | Transforming Lives Through Science & Innovation</title>
    <meta name="description" content="We're building a future where science and innovation drive sustainable health and development for all communities in Zambia.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#f97316',
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #f97316 0%, #fdba74 50%, #fed7aa 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #f97316, #ea580c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .section-gradient {
            background: linear-gradient(180deg, #fff7ed 0%, #ffffff 100%);
        }
    </style>
</head>
<body class="bg-white font-sans text-gray-800 antialiased">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/95 backdrop-blur-sm border-b border-orange-100 transition-all duration-300"
     x-data="{ mobileMenu: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo (moved left, made bigger and more visible) -->
            <div class="flex items-center space-x-4">
                <img src="/images/sihdz_main.png" alt="SIHDZ Logo" class="h-28 w-auto object-contain drop-shadow-2xl transition-transform duration-300 hover:scale-105">
                <div class="text-3xl font-extrabold text-gray-900 ml-2 leading-tight">
                    Scientific Initiatives<br>
                    <span class="text-primary text-xl font-bold">Zambia</span>
                </div>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#about" class="text-gray-700 hover:text-primary font-medium transition-colors">About</a>
                <a href="#focus-areas" class="text-gray-700 hover:text-primary font-medium transition-colors">Our Work</a>
                <a href="#impact" class="text-gray-700 hover:text-primary font-medium transition-colors">Impact</a>
                <a href="#resources" class="text-gray-700 hover:text-primary font-medium transition-colors">Resources</a>
                <a href="#partner" class="bg-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-orange-600 transition-colors">Partner with us</a>
            </div>

            <!-- Mobile menu button -->
            <button @click="mobileMenu = !mobileMenu" class="md:hidden text-gray-700 ml-4">
                <i :class="mobileMenu ? 'fa fa-times' : 'fa fa-bars'" class="text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div class="md:hidden" x-show="mobileMenu" x-transition>
        <div class="bg-white border-t border-orange-100 py-4 px-4 space-y-3">
            <a href="#about" class="block text-gray-700 hover:text-primary font-medium" @click="mobileMenu = false">About</a>
            <a href="#focus-areas" class="block text-gray-700 hover:text-primary font-medium" @click="mobileMenu = false">Our Work</a>
            <a href="#impact" class="block text-gray-700 hover:text-primary font-medium" @click="mobileMenu = false">Impact</a>
            <a href="#resources" class="block text-gray-700 hover:text-primary font-medium" @click="mobileMenu = false">Resources</a>
            <a href="#partner" class="block bg-primary text-white px-6 py-2 rounded-full font-semibold text-center" @click="mobileMenu = false">Partner with us</a>
        </div>
    </div>
</nav>

    <!-- Hero Section -->
    <section class="relative pt-20 pb-16 section-gradient">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 mb-8 leading-tight">
                    We're building a future where <span class="gradient-text">science and innovation</span> drive sustainable health and development for all.
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 mb-12 max-w-3xl mx-auto font-light leading-relaxed">
                    We work at the intersection of community health and scientific innovation to co-create equitable solutions that transform lives across Zambia.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#partner" class="bg-primary text-white px-8 py-4 rounded-full font-semibold hover:bg-orange-600 transition-colors">
                        Partner with us
                    </a>
                    <a href="#about" class="border border-primary text-primary px-8 py-4 rounded-full font-semibold hover:bg-primary hover:text-white transition-colors">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Statement -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-2xl md:text-3xl font-light text-gray-600 mb-6 leading-relaxed">
                        As communities face growing health and development challenges, gaps in access to scientific solutions are widening for those already underserved.
                    </h2>
                    <p class="text-xl text-gray-700 leading-relaxed">
                        Science has the potential to drive more equitable health access and community development, but the current ecosystem often leaves rural and vulnerable communities behind.
                    </p>
                </div>
                <div class="relative">
                    <div class="gradient-bg rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4">We're putting whole-community health at the center of scientific growth</h3>
                        <p class="text-lg opacity-90">
                            We work to embed equity as a fundamental principle in the design, development, implementation, and evaluation of health and development solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Banner -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-lg text-gray-600 mb-8">
                We've spent years supporting communities in making smarter, more strategic investments that improve health outcomes and foster sustainable development.
            </p>
            <div class="inline-block">
                <img src="/images/gradient-lines.png" alt="Gradient decoration" class="h-12 opacity-50">
            </div>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="py-16 gradient-bg text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Together, we can drive better health outcomes for everyone
            </h2>
        </div>
    </section>

    <!-- Focus Areas -->
    <section id="focus-areas" class="py-20 section-gradient">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our focus areas</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We work on interconnected issues across health and development systems to support lasting change:
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow border border-orange-50">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-graduation-cap text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Youth Empowerment</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Skills training, leadership development, and educational opportunities that prepare young people to drive community change.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow border border-orange-50">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-heartbeat text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Women's Health</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Comprehensive health and economic empowerment programs designed by and for women and mothers.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow border border-orange-50">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-hands-helping text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Inclusive Communities</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Ensuring people with disabilities and elderly community members are included in all health and development initiatives.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow border border-orange-50">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-microscope text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Scientific Innovation</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Community-driven research and evidence-based solutions tailored to local health challenges.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow border border-orange-50">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-leaf text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sustainable Development</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Environmental health initiatives that protect communities while promoting economic growth.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow border border-orange-50">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-network-wired text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Community Partnerships</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Building strong networks between communities, government, and international partners for lasting impact.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section id="impact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Proven impact across communities and regions
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Years of mission-driven leadership at the intersection of health and community development
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-8 mb-16">
                <div class="text-center">
                    <div class="text-5xl font-bold gradient-text mb-2">150</div>
                    <div class="text-gray-600 font-medium">communities we've supported with health and development strategies</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold gradient-text mb-2">10K+</div>
                    <div class="text-gray-600 font-medium">people whose lives have been directly impacted by our programs</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold gradient-text mb-2">500+</div>
                    <div class="text-gray-600 font-medium">youth trained in leadership and scientific innovation</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold gradient-text mb-2">85%</div>
                    <div class="text-gray-600 font-medium">of funds directed to community programs and initiatives</div>
                </div>
            </div>

            <!-- Stories -->
            <div class="grid md:grid-cols-2 gap-12 mt-16">
                <div class="bg-gray-50 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Grace's Transformation</h3>
                    <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                        "Before SIZ came to our community, my youngest daughter was severely malnourished. Through their nutrition program and health education, she's now thriving in school and I've started a small business to support our family."
                    </p>
                    <div class="text-primary font-semibold">3 children now healthy • Family economically stable</div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">James's Leadership Journey</h3>
                    <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                        "The leadership training I received changed everything. I went from struggling to find work to starting my own community health initiative that now reaches hundreds of families in our district."
                    </p>
                    <div class="text-primary font-semibold">200+ families reached • Peer education network established</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Section -->
    <section id="partner" class="py-20 section-gradient">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Partner with us</h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    We work alongside global funders, governments, implementers, and innovators to turn strategy into action—and ensure scientific innovation leads to better health outcomes for all. Our partnerships are grounded in equity, evidence, and collaboration—because real systems change doesn't happen alone.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-12 shadow-sm border border-orange-50 text-center">
                <p class="text-xl text-gray-700 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Whether you're developing a community health strategy, launching a development initiative, or scaling inclusive health tools, we bring the expertise, values, and efficiency to maximize your impact.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" class="bg-primary text-white px-8 py-4 rounded-full font-semibold hover:bg-orange-600 transition-colors">
                        Start a partnership
                    </a>
                    <a href="#about" class="border border-primary text-primary px-8 py-4 rounded-full font-semibold hover:bg-primary hover:text-white transition-colors">
                        Learn about our work
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section id="resources" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Resources, tools, and latest research
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                    Explore our library of practical, evidence-based resources designed to help partners, implementers, and decision-makers strengthen health systems through thoughtful community-centered approaches.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-primary rounded-2xl mb-6 flex items-center justify-center">
                        <i class="fas fa-chart-line text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Community Health Impact Monitor</h3>
                    <p class="text-gray-700 mb-4">Comprehensive tracking and evaluation tools for community health initiatives.</p>
                    <a href="#" class="text-primary font-semibold hover:text-orange-600 transition-colors">
                        Explore tool <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-primary rounded-2xl mb-6 flex items-center justify-center">
                        <i class="fas fa-users text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Youth Leadership Development Guide</h3>
                    <p class="text-gray-700 mb-4">Framework for building sustainable youth leadership programs in rural communities.</p>
                    <a href="#" class="text-primary font-semibold hover:text-orange-600 transition-colors">
                        Download guide <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-primary rounded-2xl mb-6 flex items-center justify-center">
                        <i class="fas fa-microscope text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Scientific Innovation Toolkit</h3>
                    <p class="text-gray-700 mb-4">Resources for implementing evidence-based health solutions in community settings.</p>
                    <a href="#" class="text-primary font-semibold hover:text-orange-600 transition-colors">
                        Access toolkit <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="about" class="py-20 section-gradient">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Meet the experts behind our work
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    We're a passionate team of scientists, community health experts, researchers, and systems thinkers united by one goal: making scientific innovation work for better health and development for everyone in Zambia and beyond.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-12 shadow-sm border border-orange-50">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="/images/sihdz_main.png" alt="Scientific Initiatives Zambia Team" class="w-full h-64 object-contain bg-gray-50 rounded-xl p-8">
                    </div>
                    <div>
                        <p class="text-xl text-gray-700 mb-8 leading-relaxed">
                            Led by a team of pioneering researchers and community health advocates, our organization combines deep scientific expertise with a commitment to participatory, people-centered approaches.
                        </p>
                        <div class="bg-primary/10 rounded-xl p-6">
                            <p class="text-lg font-medium text-primary italic">
                                "Improving outcomes through scientific initiatives & innovations to foster sustainably healthy & developed communities in Zambia and beyond."
                            </p>
                        </div>
                        <p class="text-lg text-gray-600 mt-6">
                            We work across communities, sectors, and partnerships to deliver smart, scalable strategies that advance health equity and sustainable development.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <img src="/images/sihdz_main.png" alt="SIHDZ Logo" class="h-12 w-auto object-contain">
                        <div class="text-lg font-bold">Scientific Initiatives<br><span class="text-primary text-sm">Zambia</span></div>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Transforming lives through science, innovation, and community partnerships across Zambia.
                    </p>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Quick Links</h4>
                    <div class="space-y-2">
                        <a href="#about" class="block text-gray-300 hover:text-primary transition-colors">About Us</a>
                        <a href="#focus-areas" class="block text-gray-300 hover:text-primary transition-colors">Our Work</a>
                        <a href="#impact" class="block text-gray-300 hover:text-primary transition-colors">Impact</a>
                        <a href="#resources" class="block text-gray-300 hover:text-primary transition-colors">Resources</a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Connect With Us</h4>
                    <div class="flex space-x-4 mb-6">
                        <a href="#" class="w-10 h-10 bg-primary rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <a href="#partner" class="inline-block bg-primary text-white px-6 py-3 rounded-full font-semibold hover:bg-orange-600 transition-colors">
                        Partner with us
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center">
                <p class="text-gray-400">&copy; 2025 Scientific Initiatives Zambia. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>