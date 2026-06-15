<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard Admin - SDN Banyumanik 02</title>
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
                            },
                            sidebar: {
                                bg: '#1e293b',
                                hover: '#334155',
                                active: '#1e40af',
                                text: '#f8fafc',
                                border: '#334155'
                            }
                        },
                        fontFamily: {
                            sans: ['Poppins', 'sans-serif'],
                        },
                        screens: {
                            'xs': '475px',
                        },
                        animation: {
                            'fade-in': 'fadeIn 0.5s ease-in-out forwards',
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
        @yield('library-css')
        @yield('custom-css')
        @yield('library-js')
    </head>

    <body class="font-sans bg-gray-100">
        <!-- Mobile Menu Overlay -->
        <div id="overlay" class="fixed inset-0 bg-black/50 z-40 hidden"></div>

        <!-- Mobile Header -->
        <header class="md:hidden bg-white shadow-md p-4 sticky top-0 z-30 flex items-center justify-between">
            <button id="mobileMenuButton" class="text-gray-700">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <div class="flex items-center space-x-3">
                <div
                    class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold text-lg">
                    SDN
                </div>
                <div>
                    <h1 class="text-sm font-bold">SDN BANYUMANIK 02</h1>
                    <p class="text-xs text-gray-600">Admin Panel</p>
                </div>
            </div>
            <div class="relative">
                <button id="mobileUserButton"
                    class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                    <i class="fas fa-user text-gray-600"></i>
                </button>
                <div id="mobileUserDropdown"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-10 opacity-0 invisible translate-y-2.5 transition-all duration-300 ease-in-out">
                    <a href="#" class="block p-3 border-b border-gray-200 hover:bg-gray-50">
                        <i class="fas fa-user-circle mr-2 text-gray-600"></i>
                        <span>Profil</span>
                    </a>
                    <a href="#" class="block p-3 border-b border-gray-200 hover:bg-gray-50">
                        <i class="fas fa-cog mr-2 text-gray-600"></i>
                        <span>Pengaturan</span>
                    </a>
                    <a href="{{ route('auth.logout') }}" class="block p-3 hover:bg-gray-50 text-red-600">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </header>

        <!-- Sidebar -->
        <aside id="sidebar"
            class="fixed top-0 left-0 h-full bg-sidebar-bg text-sidebar-text w-64 -translate-x-full md:translate-x-0 transition-all duration-300 ease-in-out z-50">
            <div class="flex flex-col h-full">
                <!-- Sidebar Header -->
                <div class="flex items-center justify-between p-4 border-b border-sidebar-border">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-primary font-bold text-lg">
                            SDN
                        </div>
                        <div class="sidebar-text">
                            <h1 class="text-sm font-bold">SDN BANYUMANIK 02</h1>
                            <p class="text-xs text-gray-400">Admin Panel</p>
                        </div>
                    </div>
                    <button id="toggleSidebar" class="text-gray-400 hover:text-white md:block hidden">
                        <i class="fas fa-bars"></i>
                    </button>
                    <button id="closeMobileMenu" class="text-gray-400 hover:text-white md:hidden">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Sidebar Navigation -->
                <nav class="flex-1 overflow-y-auto py-4">
                    <ul class="space-y-1 px-3">
                        <li>
                            <a href="{{ route('dashboard.index') }}"
                                class="flex items-center px-3 py-2 rounded-lg
                                {{ url()->current() === route('dashboard.index')
                                    ? 'bg-sidebar-active text-sidebar-text'
                                    : 'hover:bg-sidebar-hover transition-colors duration-200' }}
                                ">
                                <i class="fas fa-tachometer-alt w-5 text-center"></i>
                                <span class="ml-3 sidebar-text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('news.index') }}" id="newsManagement"
                                class="flex items-center px-3 py-2 rounded-lg
                                {{ url()->current() === route('news.index')
                                    ? 'bg-sidebar-active text-sidebar-text'
                                    : 'hover:bg-sidebar-hover transition-colors duration-200' }}">
                                <i class="fas fa-newspaper w-5 text-center"></i>
                                <span class="ml-3 sidebar-text">Kelola Berita</span>
                            </a>
                            <a href="{{ route('lecture-staff.index') }}" id="LectureAndStaffManagement"
                                class="flex items-center px-3 py-2 rounded-lg
                                {{ url()->current() === route('lecture-staff.index')
                                    ? 'bg-sidebar-active text-sidebar-text'
                                    : 'hover:bg-sidebar-hover transition-colors duration-200' }}">
                                <i class="fas fa-user w-5 text-center"></i>
                                <span class="ml-3 sidebar-text">Kelola Guru dan Staff</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#"
                                class="flex items-center px-3 py-2 rounded-lg hover:bg-sidebar-hover transition-colors duration-200">
                                <i class="fas fa-users w-5 text-center"></i>
                                <span class="ml-3 sidebar-text">Kelola Staff</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-3 py-2 rounded-lg hover:bg-sidebar-hover transition-colors duration-200">
                                <i class="fas fa-image w-5 text-center"></i>
                                <span class="ml-3 sidebar-text">Galeri</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-3 py-2 rounded-lg hover:bg-sidebar-hover transition-colors duration-200">
                                <i class="fas fa-calendar-alt w-5 text-center"></i>
                                <span class="ml-3 sidebar-text">Agenda</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-3 py-2 rounded-lg hover:bg-sidebar-hover transition-colors duration-200">
                                <i class="fas fa-trophy w-5 text-center"></i>
                                <span class="ml-3 sidebar-text">Prestasi</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-3 py-2 rounded-lg hover:bg-sidebar-hover transition-colors duration-200">
                                <i class="fas fa-cog w-5 text-center"></i>
                                <span class="ml-3 sidebar-text">Pengaturan</span>
                            </a>
                        </li> -->
                    </ul>
                </nav>

                <!-- Sidebar Footer -->
                <div class="p-4 border-t border-sidebar-border">
                    <a href="{{ route('auth.logout') }}"
                        class="flex items-center text-gray-400 hover:text-white transition-colors duration-300">
                        <i class="fas fa-sign-out-alt w-5 text-center"></i>
                        <span class="ml-3 sidebar-text">Logout</span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main id="mainContent" class="min-h-screen pt-4 pb-10 px-4 md:ml-64 transition-all duration-300 ease-in-out">
            <!-- Top Header (Desktop) -->
            <header class="bg-white rounded-xl shadow-sm p-4 mb-6 hidden md:flex items-center justify-between">
                <div>
                    <h1 class="text-xl font-bold text-gray-800">Dashboard</h1>
                    <p class="text-sm text-gray-600">Selamat datang, {{ Auth::user()->name }}!</p>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button id="notificationButton"
                            class="relative p-2 text-gray-600 hover:text-primary transition-colors duration-300">
                            <i class="fas fa-bell"></i>
                            <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>
                    </div>

                    <div class="relative">
                        <button id="userDropdownButton" class="flex items-center space-x-3 focus:outline-none">
                            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                <i class="fas fa-user text-gray-600"></i>
                            </div>
                            <div class="hidden md:block text-left">
                                <p class="text-sm font-medium text-gray-800">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-gray-600">{{ Auth::user()->email }}</p>
                            </div>
                            <i class="fas fa-chevron-down text-gray-600 text-xs"></i>
                        </button>
                        <div id="userDropdown"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-10 opacity-0 invisible translate-y-2.5 transition-all duration-300 ease-in-out">
                            <a href="#" class="block p-3 border-b border-gray-200 hover:bg-gray-50">
                                <i class="fas fa-user-circle mr-2 text-gray-600"></i>
                                <span>Profil</span>
                            </a>
                            <a href="{{ route('auth.logout') }}" class="block p-3 hover:bg-gray-50 text-red-600">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Title (Mobile) -->
            <div class="md:hidden mb-6">
                <h1 class="text-xl font-bold text-gray-800">Dashboard</h1>
                <p class="text-sm text-gray-600">Selamat datang, Admin!</p>
            </div>

            @yield('content')

        </main>

        @yield('custom-js')

        <script>
            $(document).ready(function() {
                // Mobile menu toggle
                $("#mobileMenuButton").click(function() {
                    $("#sidebar").removeClass("-translate-x-full").addClass("translate-x-0");
                    $("#overlay").removeClass("hidden");
                    $("body").addClass("overflow-hidden");
                });

                $("#closeMobileMenu, #overlay").click(function() {
                    $("#sidebar").removeClass("translate-x-0").addClass("-translate-x-full");
                    $("#overlay").addClass("hidden");
                    $("body").removeClass("overflow-hidden");
                });

                // Mobile user dropdown
                $("#mobileUserButton").click(function(e) {
                    e.stopPropagation();
                    $("#mobileUserDropdown").toggleClass("opacity-0 invisible").toggleClass(
                        "opacity-100 visible");
                });

                // Toggle sidebar on desktop
                $("#toggleSidebar").click(function() {
                    const sidebar = $("#sidebar");
                    const mainContent = $("#mainContent");
                    const sidebarText = $(".sidebar-text");

                    if (sidebar.hasClass("w-64")) {
                        sidebar.removeClass("w-64").addClass("w-20");
                        mainContent.removeClass("md:ml-64").addClass("md:ml-20");
                        sidebarText.addClass("hidden");
                    } else {
                        sidebar.removeClass("w-20").addClass("w-64");
                        mainContent.removeClass("md:ml-20").addClass("md:ml-64");
                        sidebarText.removeClass("hidden");
                    }
                });

                // Toggle notification dropdown
                $("#notificationButton").click(function(e) {
                    e.stopPropagation();
                    $("#notificationDropdown").toggleClass("opacity-0 invisible").toggleClass(
                        "opacity-100 visible");
                    $("#userDropdown").addClass("opacity-0 invisible").removeClass("opacity-100 visible");
                });

                // Toggle user dropdown
                $("#userDropdownButton").click(function(e) {
                    e.stopPropagation();
                    $("#userDropdown").toggleClass("opacity-0 invisible").toggleClass("opacity-100 visible");
                    $("#notificationDropdown").addClass("opacity-0 invisible").removeClass(
                        "opacity-100 visible");
                });

                // Close dropdowns when clicking elsewhere
                $(document).click(function() {
                    $(".dropdown-menu").addClass("opacity-0 invisible").removeClass("opacity-100 visible");
                });

                // Prevent dropdown from closing when clicking inside it
                $(".dropdown-menu").click(function(e) {
                    e.stopPropagation();
                });

                // Switch between dashboard and news management
                $("#newsManagement").click(function() {
                    $("#dashboardContent").hide();
                    $("#newsManagementContent").show();
                    $(".nav-item").removeClass("bg-sidebar-active");
                    $(this).addClass("bg-sidebar-active");
                });
            });
        </script>
    </body>

</html>
