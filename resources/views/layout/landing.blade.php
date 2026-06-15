<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SDN Banyumanik 02 - Sekolah PPK Branding Nusantara</title>
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#1e40af',
                            secondary: '#e11d48',
                            accent: '#fbbf24',
                        },
                        fontFamily: {
                            sans: ['Poppins', 'sans-serif'],
                        },
                    }
                }
            }
        </script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- jQuery UI for animations -->
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <!-- Font Awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <style>
            html {
                scroll-behavior: smooth;
            }

            body {
                font-family: 'Poppins', sans-serif;
            }

            .hero-slider {
                position: relative;
                aspect-ratio: 6/3;
                overflow: hidden;
            }

            .hero-slide {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
                transition: opacity 1s ease-in-out;
                background-size: cover;
                background-position: center;
            }

            .hero-slide.active {
                opacity: 1;
            }

            .hero-content {
                background: rgba(0, 0, 0, 0.5);
                backdrop-filter: blur(5px);
            }

            .section-title {
                position: relative;
                display: inline-block;
                padding-bottom: 10px;
            }

            .section-title::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 50px;
                height: 3px;
                background-color: #e11d48;
            }

            .news-card {
                transition: all 0.3s ease;
            }

            .news-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }

            .staff-card {
                transition: all 0.3s ease;
            }

            .staff-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }

            .staff-card img {
                transition: all 0.5s ease;
            }

            .staff-card:hover img {
                transform: scale(1.05);
            }

            .animate-fade-in {
                opacity: 0;
                animation: fadeIn 1s ease-in-out forwards;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-delay-1 {
                animation-delay: 0.2s;
            }

            .animate-delay-2 {
                animation-delay: 0.4s;
            }

            .animate-delay-3 {
                animation-delay: 0.6s;
            }

            .scroll-indicator {
                position: absolute;
                bottom: 30px;
                left: 50%;
                transform: translateX(-50%);
                animation: bounce 2s infinite;
            }

            @keyframes bounce {

                0%,
                20%,
                50%,
                80%,
                100% {
                    transform: translateY(0) translateX(-50%);
                }

                40% {
                    transform: translateY(-20px) translateX(-50%);
                }

                60% {
                    transform: translateY(-10px) translateX(-50%);
                }
            }
        </style>
    </head>

    <body class="bg-gray-50 text-gray-800">
        <!-- Header with Sticky Navigation -->
        <header class="fixed w-full z-50 bg-white shadow-md transition-all duration-300" id="navbar">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between py-3">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('storage/logo.png') }}"
                            class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-xl">
                        <div>
                            <h1 class="text-lg md:text-xl font-bold text-primary">SDN BANYUMANIK 02</h1>
                            <p class="text-xs text-gray-600">Sekolah PPK Branding Nusantara</p>
                        </div>
                    </div>
                    <nav class="hidden md:block">
                        <ul class="flex space-x-8">
                            <li><a href="{{ route('landing.index') }}"
                                    class="text-gray-700 hover:text-secondary font-medium transition duration-300">Beranda</a>
                            </li>
                            <li class="relative group">
                                <a href="#profil"
                                    class="text-gray-700 hover:text-secondary font-medium transition duration-300 flex items-center">
                                    Profil
                                    <i
                                        class="fas fa-chevron-down text-xs ml-1 transition-transform duration-300 group-hover:rotate-180"></i>
                                </a>
                                <!-- Dropdown Menu -->
                                <div
                                    class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top scale-95 group-hover:scale-100">
                                    <a href="{{ route('landing.profil.sekolah') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-primary hover:text-white transition duration-300">
                                        Profil Sekolah
                                    </a>
                                    <a href="{{ route('landing.profil.guru') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-primary hover:text-white transition duration-300">
                                        Profil Guru
                                    </a>
                                    <a href="{{ route('landing.profil.siswa') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-primary hover:text-white transition duration-300">
                                        Profil Siswa
                                    </a>
                                </div>
                            </li>
                            <li><a href="{{ route('landing.news.index') }}"
                                    class="text-gray-700 hover:text-secondary font-medium transition duration-300">Berita</a>
                            </li>
                            <li><a href="{{ route('landing.lomba.index') }}"
                                    class="text-gray-700 hover:text-secondary font-medium transition duration-300">Lomba</a>
                            </li>
                            <li><a href="{{ route('landing.kontak.index') }}"
                                    class="text-gray-700 hover:text-secondary font-medium transition duration-300">Kontak</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="md:hidden">
                        <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                            <i class="fas fa-bars text-2xl"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg absolute w-full">
                <ul class="px-4 py-2">
                    <li><a href="{{ route('landing.index') }}"
                            class="block py-3 px-4 hover:bg-gray-100 rounded-lg text-gray-700 hover:text-secondary transition duration-300">Beranda</a>
                    </li>
                    <li class="py-1">
                        <button id="mobile-profile-dropdown-button"
                            class="flex items-center justify-between w-full py-3 px-4 hover:bg-gray-100 rounded-lg text-gray-700 hover:text-secondary transition duration-300">
                            <span>Profil</span>
                            <i id="mobile-profile-dropdown-icon"
                                class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                        </button>
                        <div id="mobile-profile-dropdown" class="hidden pl-4 pr-2 pb-2">
                            <a href="{{ route('landing.profil.sekolah') }}"
                                class="block py-2 px-4 hover:bg-gray-100 rounded-lg text-gray-700 hover:text-secondary transition duration-300">
                                Profil Sekolah
                            </a>
                            <a href="{{ route('landing.profil.guru') }}"
                                class="block py-2 px-4 hover:bg-gray-100 rounded-lg text-gray-700 hover:text-secondary transition duration-300">
                                Profil Guru
                            </a>
                            <a href="{{ route('landing.profil.siswa') }}"
                                class="block py-2 px-4 hover:bg-gray-100 rounded-lg text-gray-700 hover:text-secondary transition duration-300">
                                Profil Siswa
                            </a>
                        </div>
                    </li>
                    <li><a href="{{ route('landing.news.index') }}"
                            class="block py-3 px-4 hover:bg-gray-100 rounded-lg text-gray-700 hover:text-secondary transition duration-300">Berita</a>
                    </li>
                    <li><a href="{{ route('landing.lomba.index') }}"
                            class="block py-3 px-4 hover:bg-gray-100 rounded-lg text-gray-700 hover:text-secondary transition duration-300">Lomba</a>
                    </li>
                    <li><a href="{{ route('landing.kontak.index') }}"
                            class="block py-3 px-4 hover:bg-gray-100 rounded-lg text-gray-700 hover:text-secondary transition duration-300">Kontak</a>
                    </li>
                </ul>
            </div>
        </header>

        @yield('content')

        <!-- Footer -->
        <footer id="kontak" class="bg-gray-900 text-white pt-16 pb-8">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="md:col-span-1">
                        <div class="flex items-center space-x-3 mb-6">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary font-bold text-xl">
                                SDN
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">SDN BANYUMANIK 02</h3>
                                <p class="text-xs text-gray-400">Sekolah PPK Branding Nusantara</p>
                            </div>
                        </div>
                        <p class="text-gray-400 mb-6">Membentuk generasi unggul yang berkarakter, cerdas, dan berwawasan
                            global.</p>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center hover:bg-primary transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center hover:bg-primary transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center hover:bg-primary transition duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center hover:bg-primary transition duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Tautan Cepat</h3>
                        <ul class="space-y-3">
                            <li><a href="#home"
                                    class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2"></i> Beranda
                                </a></li>
                            <li><a href="#profil"
                                    class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2"></i> Profil
                                </a></li>
                            <li><a href="#berita"
                                    class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2"></i> Berita
                                </a></li>
                            <li><a href="#staff"
                                    class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2"></i> Pengajar
                                </a></li>
                            <li><a href="#kontak"
                                    class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2"></i> Kontak
                                </a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Informasi</h3>
                        <ul class="space-y-3">
                            <li><a href="#"
                                    class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2"></i> Kurikulum
                                </a></li>
                            <li><a href="#"
                                    class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2"></i> Ekstrakurikuler
                                </a></li>
                            <li><a href="#"
                                    class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2"></i> Prestasi
                                </a></li>
                            <li><a href="#"
                                    class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2"></i> Galeri
                                </a></li>
                            <li><a href="#"
                                    class="text-gray-400 hover:text-white transition duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-xs mr-2"></i> PPDB
                                </a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Kontak Kami</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt mt-1 mr-3 text-secondary"></i>
                                <span class="text-gray-400">Jl. Kanfer Raya, Banyumanik, Kota Semarang, Jawa Tengah
                                    50267</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-phone mr-3 text-secondary"></i>
                                <span class="text-gray-400">(024) 7460000</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-envelope mr-3 text-secondary"></i>
                                <span class="text-gray-400">sdn.banyumanik02@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                    <p class="text-gray-500">&copy; 2025 SD Negeri Banyumanik 02. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <!-- Back to Top Button -->
        <button id="back-to-top"
            class="fixed bottom-6 right-6 w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center shadow-lg opacity-0 invisible transition-all duration-300 z-50">
            <i class="fas fa-chevron-up"></i>
        </button>

        <script>
            $(document).ready(function() {
                // Mobile menu toggle
                $("#mobile-menu-button").click(function() {
                    $("#mobile-menu").slideToggle(300);
                });

                // Mobile profile dropdown toggle
                $("#mobile-profile-dropdown-button").click(function() {
                    $("#mobile-profile-dropdown").slideToggle(300);
                    $("#mobile-profile-dropdown-icon").toggleClass("rotate-180");
                });

                // Close mobile profile dropdown when main mobile menu is closed
                $("#mobile-menu-button").click(function() {
                    if (!$("#mobile-menu").is(":visible")) {
                        $("#mobile-profile-dropdown").slideUp(300);
                        $("#mobile-profile-dropdown-icon").removeClass("rotate-180");
                    }
                });

                // Close dropdowns when clicking outside
                $(document).click(function(e) {
                    if (!$(e.target).closest(
                            '#mobile-menu-button, #mobile-menu, #mobile-profile-dropdown-button, #mobile-profile-dropdown'
                        ).length) {
                        $("#mobile-menu").slideUp(300);
                        $("#mobile-profile-dropdown").slideUp(300);
                        $("#mobile-profile-dropdown-icon").removeClass("rotate-180");
                    }
                });

                // Hero slider
                let currentSlide = 0;
                const slides = $(".hero-slide");
                const totalSlides = slides.length;

                function showSlide(index) {
                    slides.removeClass("active");
                    slides.eq(index).addClass("active");
                }

                function nextSlide() {
                    currentSlide = (currentSlide + 1) % totalSlides;
                    showSlide(currentSlide);
                }

                // Auto slide every 5 seconds
                setInterval(nextSlide, 5000);

                // Sticky header
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $("#navbar").addClass("py-2").removeClass("py-3");
                        $("#navbar").addClass("shadow-lg");
                    } else {
                        $("#navbar").removeClass("py-2").addClass("py-3");
                        $("#navbar").removeClass("shadow-lg");
                    }

                    // Back to top button
                    if ($(this).scrollTop() > 300) {
                        $("#back-to-top").removeClass("opacity-0 invisible").addClass("opacity-100 visible");
                    } else {
                        $("#back-to-top").removeClass("opacity-100 visible").addClass("opacity-0 invisible");
                    }
                });

                // Back to top button click
                $("#back-to-top").click(function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 500);
                    return false;
                });

                // Smooth scroll for navigation
                $('a[href^="#"]').on('click', function(e) {
                    e.preventDefault();

                    const target = this.hash;
                    const $target = $(target);

                    $('html, body').animate({
                        'scrollTop': $target.offset().top - 80
                    }, 800, 'swing', function() {
                        if ($("#mobile-menu").is(":visible")) {
                            $("#mobile-menu").slideUp(300);
                        }
                    });
                });

                // Animate elements on scroll
                function animateOnScroll() {
                    $('.animate-on-scroll').each(function() {
                        const position = $(this).offset().top;
                        const scroll = $(window).scrollTop();
                        const windowHeight = $(window).height();

                        if (scroll > position - windowHeight + 100) {
                            $(this).addClass('animate-fade-in');
                        }
                    });
                }

                // Add animate-on-scroll class to elements
                $('section > div > h2, section > div > div').addClass('animate-on-scroll');

                // Run on page load and scroll
                animateOnScroll();
                $(window).scroll(animateOnScroll);

                // News card hover effect with jQuery
                $(".news-card").hover(
                    function() {
                        $(this).find("h3").addClass("text-primary");
                    },
                    function() {
                        $(this).find("h3").removeClass("text-primary");
                    }
                );
            });
        </script>
    </body>

</html>
