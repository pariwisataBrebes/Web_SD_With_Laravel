@extends('layout.landing')

@section('content')
    <!-- Page Header -->
    <section class="pt-32 pb-16 bg-gradient-to-r from-primary/90 to-primary/70">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-4 text-white">Daftar Siswa</h1>
                <div class="w-20 h-1 bg-accent mx-auto mb-6"></div>
                <p class="text-lg text-white/90">Mengenal lebih dekat para siswa berprestasi di SDN Banyumanik 02</p>
            </div>
        </div>
    </section>

    <!-- Filter & Search Section -->
    {{-- <section class="py-8 bg-white border-b">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex flex-wrap gap-2">
                    <button
                        class="px-4 py-2 bg-primary text-white rounded-full text-sm font-medium hover:bg-secondary transition duration-300">
                        Semua Kelas
                    </button>
                    <button
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition duration-300">
                        Kelas 1
                    </button>
                    <button
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition duration-300">
                        Kelas 2
                    </button>
                    <button
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition duration-300">
                        Kelas 3
                    </button>
                    <button
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition duration-300">
                        Kelas 4
                    </button>
                    <button
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition duration-300">
                        Kelas 5
                    </button>
                    <button
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition duration-300">
                        Kelas 6
                    </button>
                </div>
                <div class="relative w-full md:w-64 mt-4 md:mt-0">
                    <input type="text" placeholder="Cari nama siswa..."
                        class="w-full px-4 py-2 pr-10 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                    <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Students Grid -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 md:gap-6">

                <!-- Student Card 1 -->
                <div class="group">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pt-6 px-6 pb-4 text-center">
                            <div class="inline-block bg-primary/10 p-3 rounded-full mb-3">
                                <img src="{{ asset('storage/landing/profil/siswa/student.png') }}" alt="Krishna Soni"
                                    class="w-20 h-20 object-cover">
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-primary text-white text-xs px-2 py-1 rounded-full">Kelas 6</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Krishna Soni</h3>
                            <p class="text-gray-500 text-sm">Ketua Kelas</p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 flex justify-center border-t border-gray-100">
                            <a href="#"
                                class="text-primary text-sm font-medium hover:text-secondary transition duration-300">
                                Lihat Profil <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Card 2 -->
                <div class="group">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pt-6 px-6 pb-4 text-center">
                            <div class="inline-block bg-primary/10 p-3 rounded-full mb-3">
                                <img src="{{ asset('storage/landing/profil/siswa/student.png') }}" alt="Agus"
                                    class="w-20 h-20 object-cover">
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-primary text-white text-xs px-2 py-1 rounded-full">Kelas 6</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Agus</h3>
                            <p class="text-gray-500 text-sm">Wakil Ketua</p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 flex justify-center border-t border-gray-100">
                            <a href="#"
                                class="text-primary text-sm font-medium hover:text-secondary transition duration-300">
                                Lihat Profil <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Card 3 -->
                <div class="group">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pt-6 px-6 pb-4 text-center">
                            <div class="inline-block bg-primary/10 p-3 rounded-full mb-3">
                                <img src="{{ asset('storage/landing/profil/siswa/student.png') }}" alt="Bagus"
                                    class="w-20 h-20 object-cover">
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-secondary text-white text-xs px-2 py-1 rounded-full">Kelas 5</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Bagus</h3>
                            <p class="text-gray-500 text-sm">Sekretaris</p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 flex justify-center border-t border-gray-100">
                            <a href="#"
                                class="text-primary text-sm font-medium hover:text-secondary transition duration-300">
                                Lihat Profil <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Card 4 -->
                <div class="group">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pt-6 px-6 pb-4 text-center">
                            <div class="inline-block bg-primary/10 p-3 rounded-full mb-3">
                                <img src="{{ asset('storage/landing/profil/siswa/student.png') }}" alt="Catur"
                                    class="w-20 h-20 object-cover">
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-secondary text-white text-xs px-2 py-1 rounded-full">Kelas 5</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Catur</h3>
                            <p class="text-gray-500 text-sm">Bendahara</p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 flex justify-center border-t border-gray-100">
                            <a href="#"
                                class="text-primary text-sm font-medium hover:text-secondary transition duration-300">
                                Lihat Profil <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Card 5 -->
                <div class="group">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pt-6 px-6 pb-4 text-center">
                            <div class="inline-block bg-primary/10 p-3 rounded-full mb-3">
                                <img src="{{ asset('storage/landing/profil/siswa/student.png') }}" alt="Doni"
                                    class="w-20 h-20 object-cover">
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-accent text-gray-800 text-xs px-2 py-1 rounded-full">Kelas 4</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Doni</h3>
                            <p class="text-gray-500 text-sm">Anggota OSIS</p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 flex justify-center border-t border-gray-100">
                            <a href="#"
                                class="text-primary text-sm font-medium hover:text-secondary transition duration-300">
                                Lihat Profil <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Card 6 -->
                <div class="group">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pt-6 px-6 pb-4 text-center">
                            <div class="inline-block bg-primary/10 p-3 rounded-full mb-3">
                                <img src="{{ asset('storage/landing/profil/siswa/student.png') }}" alt="Krishna Soni"
                                    class="w-20 h-20 object-cover">
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-accent text-gray-800 text-xs px-2 py-1 rounded-full">Kelas 4</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Krishna Soni</h3>
                            <p class="text-gray-500 text-sm">Anggota OSIS</p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 flex justify-center border-t border-gray-100">
                            <a href="#"
                                class="text-primary text-sm font-medium hover:text-secondary transition duration-300">
                                Lihat Profil <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Card 7 -->
                <div class="group">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pt-6 px-6 pb-4 text-center">
                            <div class="inline-block bg-primary/10 p-3 rounded-full mb-3">
                                <img src="{{ asset('storage/landing/profil/siswa/student.png') }}" alt="Agus"
                                    class="w-20 h-20 object-cover">
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full">Kelas 3</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Agus</h3>
                            <p class="text-gray-500 text-sm">Ketua Kelas</p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 flex justify-center border-t border-gray-100">
                            <a href="#"
                                class="text-primary text-sm font-medium hover:text-secondary transition duration-300">
                                Lihat Profil <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Card 8 -->
                <div class="group">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pt-6 px-6 pb-4 text-center">
                            <div class="inline-block bg-primary/10 p-3 rounded-full mb-3">
                                <img src="{{ asset('storage/landing/profil/siswa/student.png') }}" alt="Bagus"
                                    class="w-20 h-20 object-cover">
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full">Kelas 3</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Bagus</h3>
                            <p class="text-gray-500 text-sm">Wakil Ketua</p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 flex justify-center border-t border-gray-100">
                            <a href="#"
                                class="text-primary text-sm font-medium hover:text-secondary transition duration-300">
                                Lihat Profil <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Card 9 -->
                <div class="group">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pt-6 px-6 pb-4 text-center">
                            <div class="inline-block bg-primary/10 p-3 rounded-full mb-3">
                                <img src="{{ asset('storage/landing/profil/siswa/student.png') }}" alt="Catur"
                                    class="w-20 h-20 object-cover">
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded-full">Kelas 2</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Catur</h3>
                            <p class="text-gray-500 text-sm">Ketua Kelas</p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 flex justify-center border-t border-gray-100">
                            <a href="#"
                                class="text-primary text-sm font-medium hover:text-secondary transition duration-300">
                                Lihat Profil <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Card 10 -->
                <div class="group">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pt-6 px-6 pb-4 text-center">
                            <div class="inline-block bg-primary/10 p-3 rounded-full mb-3">
                                <img src="{{ asset('storage/landing/profil/siswa/student.png') }}" alt="Doni"
                                    class="w-20 h-20 object-cover">
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded-full">Kelas 2</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Doni</h3>
                            <p class="text-gray-500 text-sm">Wakil Ketua</p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 flex justify-center border-t border-gray-100">
                            <a href="#"
                                class="text-primary text-sm font-medium hover:text-secondary transition duration-300">
                                Lihat Profil <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Card 11 -->
                <div class="group">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pt-6 px-6 pb-4 text-center">
                            <div class="inline-block bg-primary/10 p-3 rounded-full mb-3">
                                <img src="{{ asset('storage/landing/profil/siswa/student.png') }}" alt="Krishna Soni"
                                    class="w-20 h-20 object-cover">
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-purple-500 text-white text-xs px-2 py-1 rounded-full">Kelas 1</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Krishna Soni</h3>
                            <p class="text-gray-500 text-sm">Siswa Baru</p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 flex justify-center border-t border-gray-100">
                            <a href="#"
                                class="text-primary text-sm font-medium hover:text-secondary transition duration-300">
                                Lihat Profil <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Card 12 -->
                <div class="group">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pt-6 px-6 pb-4 text-center">
                            <div class="inline-block bg-primary/10 p-3 rounded-full mb-3">
                                <img src="{{ asset('storage/landing/profil/siswa/student.png') }}" alt="Agus"
                                    class="w-20 h-20 object-cover">
                            </div>
                            <div class="absolute top-3 right-3">
                                <span class="bg-purple-500 text-white text-xs px-2 py-1 rounded-full">Kelas 1</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1">Agus</h3>
                            <p class="text-gray-500 text-sm">Siswa Baru</p>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 flex justify-center border-t border-gray-100">
                            <a href="#"
                                class="text-primary text-sm font-medium hover:text-secondary transition duration-300">
                                Lihat Profil <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                <nav class="inline-flex rounded-lg shadow-sm">
                    <a href="#"
                        class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50 rounded-l-lg">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#"
                        class="px-4 py-2 bg-primary border border-primary text-sm font-medium text-white">1</a>
                    <a href="#"
                        class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                    <a href="#"
                        class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                    <a href="#"
                        class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50 rounded-r-lg">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </nav>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-primary/5">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-primary mb-2">180+</h3>
                    <p class="text-gray-600">Total Siswa</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-male text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-primary mb-2">95+</h3>
                    <p class="text-gray-600">Siswa Laki-laki</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-female text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-primary mb-2">85+</h3>
                    <p class="text-gray-600">Siswa Perempuan</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-medal text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-primary mb-2">42+</h3>
                    <p class="text-gray-600">Prestasi Siswa</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div
                class="max-w-4xl mx-auto bg-gradient-to-r from-primary to-primary/80 rounded-2xl p-8 md:p-12 text-center text-white shadow-xl">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">Daftarkan Putra-Putri Anda</h2>
                <p class="text-white/90 mb-8 max-w-2xl mx-auto">SDN Banyumanik 02 membuka pendaftaran siswa baru untuk
                    tahun ajaran 2023/2024. Segera daftarkan putra-putri Anda untuk mendapatkan pendidikan berkualitas.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#"
                        class="inline-block bg-white text-primary font-medium px-8 py-3 rounded-full hover:bg-gray-100 transition duration-300 shadow-lg">
                        Informasi PPDB
                    </a>
                    <a href="#"
                        class="inline-block bg-transparent border-2 border-white text-white font-medium px-8 py-3 rounded-full hover:bg-white/10 transition duration-300">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
