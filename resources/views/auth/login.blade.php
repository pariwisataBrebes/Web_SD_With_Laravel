<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Admin - SDN Banyumanik 02</title>
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: {
                                DEFAULT: '#1e40af',
                                50: '#eff6ff',
                                100: '#dbeafe',
                                200: '#bfdbfe',
                                300: '#93c5fd',
                                400: '#60a5fa',
                                500: '#3b82f6',
                                600: '#2563eb',
                                700: '#1d4ed8',
                                800: '#1e40af',
                                900: '#1e3a8a',
                                950: '#172554'
                            },
                            secondary: {
                                DEFAULT: '#e11d48',
                                50: '#fef2f2',
                                100: '#fee2e2',
                                200: '#fecaca',
                                300: '#fca5a5',
                                400: '#f87171',
                                500: '#ef4444',
                                600: '#dc2626',
                                700: '#b91c1c',
                                800: '#991b1b',
                                900: '#7f1d1d',
                                950: '#450a0a'
                            },
                            accent: {
                                DEFAULT: '#fbbf24',
                                50: '#fffbeb',
                                100: '#fef3c7',
                                200: '#fde68a',
                                300: '#fcd34d',
                                400: '#fbbf24',
                                500: '#f59e0b',
                                600: '#d97706',
                                700: '#b45309',
                                800: '#92400e',
                                900: '#78350f',
                                950: '#451a03'
                            }
                        },
                        fontFamily: {
                            sans: ['Poppins', 'sans-serif'],
                        },
                        screens: {
                            'xs': '475px',
                        },
                        keyframes: {
                            fadeIn: {
                                '0%': {
                                    opacity: '0',
                                    transform: 'translateY(10px)'
                                },
                                '100%': {
                                    opacity: '1',
                                    transform: 'translateY(0)'
                                }
                            }
                        },
                        animation: {
                            'fade-in': 'fadeIn 0.8s ease-in-out forwards',
                        }
                    }
                }
            }
        </script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <!-- Font Awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <body class="font-sans bg-gray-100">
        <div class="min-h-screen flex flex-col md:flex-row">
            <!-- Left Side - Image and School Info -->
            <div class="hidden md:flex md:w-1/2 relative bg-cover bg-center"
                style="background-image: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/FireShot%20Capture%20001%20-%20HOME%20-%20sdnbanyumanik02.dikdas.semarangkota.go.id-JfNpiHGxFqSX42Sb6ZFZ3dpH4P1x7x.png')">
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center text-white p-12 bg-primary/80 backdrop-blur-sm">
                    <div
                        class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-primary font-bold text-3xl mb-6">
                        SDN
                    </div>
                    <h1 class="text-3xl font-bold mb-4 text-center">SDN BANYUMANIK 02</h1>
                    <p class="text-lg mb-8 text-center">Sekolah PPK Branding Nusantara</p>
                    <div class="w-16 h-1 bg-white mb-8"></div>
                    <p class="text-center max-w-md">Sistem Informasi Manajemen Sekolah untuk pengelolaan data dan
                        informasi
                        SDN Banyumanik 02</p>
                </div>
            </div>

            <!-- Right Side - Login Form -->
            <div class="md:w-1/2 flex items-center justify-center p-4 md:p-12">
                <div class="w-full max-w-md opacity-0 translate-y-5 animate-fade-in">
                    <div class="text-center mb-8 md:hidden">
                        <div
                            class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white font-bold text-2xl mx-auto mb-4">
                            SDN
                        </div>
                        <h1 class="text-2xl font-bold text-gray-800">SDN BANYUMANIK 02</h1>
                        <p class="text-gray-600">Sekolah PPK Branding Nusantara</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8">
                        <div class="text-center mb-6 sm:mb-8">
                            <h2 class="text-xl sm:text-2xl font-bold text-gray-800">Login Admin</h2>
                            <p class="text-sm sm:text-base text-gray-600">Masukkan kredensial Anda untuk mengakses
                                dashboard
                            </p>
                        </div>

                        <form id="loginForm" action="{{ route('auth.loginProcess') }}" method="POST">
                            @csrf
                            <div class="mb-5 sm:mb-6">
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <input type="text" id="email" name="email"
                                        class="w-full pl-10 pr-4 py-2.5 sm:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300"
                                        placeholder="Masukkan email" required>
                                </div>
                            </div>

                            <div class="mb-5 sm:mb-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="block text-gray-700 font-medium">Password</label>
                                    <a href="#"
                                        class="text-sm text-primary hover:text-secondary transition-colors duration-300">Lupa
                                        password?</a>
                                </div>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input type="password" id="password" name="password"
                                        class="w-full pl-10 pr-10 py-2.5 sm:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300"
                                        placeholder="Masukkan password" required>
                                    <button type="button" id="togglePassword"
                                        class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-600 cursor-pointer"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center mb-5 sm:mb-6">
                                <input type="checkbox" id="remember" name="remember"
                                    class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary">
                                <label for="remember" class="ml-2 text-sm text-gray-700">Ingat saya</label>
                            </div>

                            <button type="submit"
                                class="w-full bg-primary text-white font-medium py-2.5 sm:py-3 px-4 rounded-lg hover:bg-primary/90 transition-colors duration-300 flex items-center justify-center">
                                <span>Masuk</span>
                                <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </form>

                        <div class="mt-6 sm:mt-8 text-center">
                            <a href="{{ route('landing.index') }}"
                                class="text-primary hover:text-secondary transition-colors duration-300">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Kembali ke Website
                            </a>
                        </div>
                    </div>

                    <div class="mt-6 text-center text-gray-600 text-sm">
                        &copy; 2025 SDN Banyumanik 02. All rights reserved.
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                // Toggle password visibility
                $("#togglePassword").click(function() {
                    const passwordField = $("#password");
                    const passwordFieldType = passwordField.attr("type");
                    const icon = $(this).find("i");

                    if (passwordFieldType === "password") {
                        passwordField.attr("type", "text");
                        icon.removeClass("fa-eye").addClass("fa-eye-slash");
                    } else {
                        passwordField.attr("type", "password");
                        icon.removeClass("fa-eye-slash").addClass("fa-eye");
                    }
                });
            });
        </script>
    </body>

</html>
