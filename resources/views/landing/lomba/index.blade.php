@extends('layout.landing')

@section('content')
    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-r from-primary/90 to-primary/70 relative overflow-hidden">
        <div class="absolute inset-0 bg-pattern opacity-10"></div>
        <div class="absolute -right-20 -top-20 w-64 h-64 bg-accent/20 rounded-full blur-3xl"></div>
        <div class="absolute -left-20 bottom-0 w-80 h-80 bg-secondary/20 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-block mb-6">
                    <span class="px-3 py-1 bg-white/20 backdrop-blur-sm text-white text-sm font-medium rounded-full">
                        SDN Banyumanik 02
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-white">Lomba MAPSI 2023</h1>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">Musabaqah Seni dan Olahraga Pendidikan Agama Islam
                    tingkat Sekolah Dasar</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#kategori"
                        class="px-6 py-3 bg-white text-primary font-medium rounded-full hover:bg-gray-100 transition duration-300 shadow-lg">
                        Lihat Kategori
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-10 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="p-6 text-center">
                    <div class="text-3xl font-bold text-primary mb-1">12+</div>
                    <p class="text-gray-600">Kategori Lomba</p>
                </div>
                <div class="p-6 text-center">
                    <div class="text-3xl font-bold text-primary mb-1">150+</div>
                    <p class="text-gray-600">Peserta</p>
                </div>
                <div class="p-6 text-center">
                    <div class="text-3xl font-bold text-primary mb-1">25+</div>
                    <p class="text-gray-600">Sekolah</p>
                </div>
                <div class="p-6 text-center">
                    <div class="text-3xl font-bold text-primary mb-1">30+</div>
                    <p class="text-gray-600">Penghargaan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Tentang MAPSI</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600">MAPSI (Musabaqah Seni dan Olahraga Pendidikan Agama Islam) adalah ajang kompetisi
                    tahunan yang bertujuan untuk mengembangkan bakat dan minat siswa dalam bidang seni dan olahraga yang
                    bernafaskan nilai-nilai Islam. Kompetisi ini juga menjadi sarana untuk memperkuat karakter dan
                    nilai-nilai keagamaan pada siswa.</p>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="kategori" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Kategori Lomba</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Berbagai kategori lomba yang diselenggarakan dalam MAPSI 2023
                    untuk mengembangkan bakat dan kreativitas siswa</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Category 1 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('storage/landing/carousel/1.jpeg') }}" alt="Kaligrafi"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/60 to-transparent opacity-90">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <div
                            class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-white text-xs font-medium inline-block mb-2">
                            Putri</div>
                        <h3 class="text-xl font-bold text-white mb-2">Kaligrafi</h3>
                        <p class="text-white/90 text-sm mb-4">Lomba menulis indah huruf Arab dengan kaidah khat yang benar
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-white hover:text-accent transition duration-300">
                            <span class="mr-2">Lihat Detail</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('storage/landing/carousel/2.png') }}" alt="Azan & Tarhim"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/60 to-transparent opacity-90">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <div
                            class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-white text-xs font-medium inline-block mb-2">
                            Putra</div>
                        <h3 class="text-xl font-bold text-white mb-2">Azan & Tarhim</h3>
                        <p class="text-white/90 text-sm mb-4">Lomba mengumandangkan azan dan tarhim dengan suara merdu</p>
                        <a href="#"
                            class="inline-flex items-center text-white hover:text-accent transition duration-300">
                            <span class="mr-2">Lihat Detail</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('storage/landing/carousel/3.jpeg') }}" alt="Khat"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/60 to-transparent opacity-90">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <div
                            class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-white text-xs font-medium inline-block mb-2">
                            Putri</div>
                        <h3 class="text-xl font-bold text-white mb-2">Khat</h3>
                        <p class="text-white/90 text-sm mb-4">Lomba menulis kaligrafi dengan gaya khat tertentu</p>
                        <a href="#"
                            class="inline-flex items-center text-white hover:text-accent transition duration-300">
                            <span class="mr-2">Lihat Detail</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Category 4 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('storage/landing/carousel/4.jpeg') }}" alt="Khitobah"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/60 to-transparent opacity-90">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <div
                            class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-white text-xs font-medium inline-block mb-2">
                            Putri</div>
                        <h3 class="text-xl font-bold text-white mb-2">Khitobah</h3>
                        <p class="text-white/90 text-sm mb-4">Lomba pidato atau ceramah keagamaan dengan tema tertentu</p>
                        <a href="#"
                            class="inline-flex items-center text-white hover:text-accent transition duration-300">
                            <span class="mr-2">Lihat Detail</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Category 5 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('storage/landing/carousel/5.jpeg') }}" alt="LCC"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/60 to-transparent opacity-90">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <div
                            class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-white text-xs font-medium inline-block mb-2">
                            Kelompok</div>
                        <h3 class="text-xl font-bold text-white mb-2">LCC</h3>
                        <p class="text-white/90 text-sm mb-4">Lomba cerdas cermat tentang pengetahuan agama Islam</p>
                        <a href="#"
                            class="inline-flex items-center text-white hover:text-accent transition duration-300">
                            <span class="mr-2">Lihat Detail</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Category 6 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('storage/landing/sejarah/foto-guru.jpeg') }}" alt="Agama Hindu"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/60 to-transparent opacity-90">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <div
                            class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-white text-xs font-medium inline-block mb-2">
                            Bercerita</div>
                        <h3 class="text-xl font-bold text-white mb-2">Agama Hindu</h3>
                        <p class="text-white/90 text-sm mb-4">Lomba bercerita tentang kisah-kisah dalam agama Hindu</p>
                        <a href="#"
                            class="inline-flex items-center text-white hover:text-accent transition duration-300">
                            <span class="mr-2">Lihat Detail</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-block px-6 py-3 bg-primary text-white font-medium rounded-full hover:bg-primary/90 transition duration-300 shadow-md">
                    Lihat Semua Kategori
                </a>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Jadwal Kegiatan</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Rangkaian kegiatan MAPSI 2023 dari pendaftaran hingga pengumuman
                    pemenang</p>
            </div>

            <div class="max-w-4xl mx-auto">
                <!-- Timeline Item 1 -->
                <div class="flex flex-col md:flex-row mb-8">
                    <div class="md:w-1/3 mb-4 md:mb-0">
                        <div class="bg-primary text-white py-3 px-4 rounded-lg inline-block">
                            <i class="fas fa-calendar-alt mr-2"></i> 1 - 15 Agustus 2023
                        </div>
                    </div>
                    <div class="md:w-2/3 md:pl-8 relative">
                        <div class="hidden md:block absolute left-0 top-0 bottom-0 w-0.5 bg-primary/20"></div>
                        <div class="hidden md:block absolute left-0 top-6 w-3 h-3 rounded-full bg-primary"></div>
                        <div class="bg-white p-6 rounded-xl shadow-md md:ml-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Pendaftaran</h3>
                            <p class="text-gray-600">Pendaftaran peserta lomba MAPSI 2023 dibuka untuk seluruh Sekolah
                                Dasar di Kota Semarang</p>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="flex flex-col md:flex-row mb-8">
                    <div class="md:w-1/3 mb-4 md:mb-0">
                        <div class="bg-primary text-white py-3 px-4 rounded-lg inline-block">
                            <i class="fas fa-calendar-alt mr-2"></i> 20 Agustus 2023
                        </div>
                    </div>
                    <div class="md:w-2/3 md:pl-8 relative">
                        <div class="hidden md:block absolute left-0 top-0 bottom-0 w-0.5 bg-primary/20"></div>
                        <div class="hidden md:block absolute left-0 top-6 w-3 h-3 rounded-full bg-primary"></div>
                        <div class="bg-white p-6 rounded-xl shadow-md md:ml-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Technical Meeting</h3>
                            <p class="text-gray-600">Pertemuan teknis untuk membahas peraturan dan teknis pelaksanaan lomba
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="flex flex-col md:flex-row mb-8">
                    <div class="md:w-1/3 mb-4 md:mb-0">
                        <div class="bg-primary text-white py-3 px-4 rounded-lg inline-block">
                            <i class="fas fa-calendar-alt mr-2"></i> 1 - 3 September 2023
                        </div>
                    </div>
                    <div class="md:w-2/3 md:pl-8 relative">
                        <div class="hidden md:block absolute left-0 top-0 bottom-0 w-0.5 bg-primary/20"></div>
                        <div class="hidden md:block absolute left-0 top-6 w-3 h-3 rounded-full bg-primary"></div>
                        <div class="bg-white p-6 rounded-xl shadow-md md:ml-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Pelaksanaan Lomba</h3>
                            <p class="text-gray-600">Pelaksanaan berbagai kategori lomba MAPSI 2023 di SDN Banyumanik 02
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 mb-4 md:mb-0">
                        <div class="bg-primary text-white py-3 px-4 rounded-lg inline-block">
                            <i class="fas fa-calendar-alt mr-2"></i> 10 September 2023
                        </div>
                    </div>
                    <div class="md:w-2/3 md:pl-8 relative">
                        <div class="hidden md:block absolute left-0 top-0 bottom-0 w-0.5 bg-primary/20"></div>
                        <div class="hidden md:block absolute left-0 top-6 w-3 h-3 rounded-full bg-primary"></div>
                        <div class="bg-white p-6 rounded-xl shadow-md md:ml-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Pengumuman Pemenang</h3>
                            <p class="text-gray-600">Pengumuman dan penyerahan hadiah kepada para pemenang lomba MAPSI 2023
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Pertanyaan Umum</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Jawaban untuk pertanyaan yang sering diajukan tentang MAPSI 2023
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="mb-6">
                    <div
                        class="bg-gray-50 p-4 rounded-t-xl font-medium text-gray-800 flex justify-between items-center cursor-pointer">
                        <span>Apa itu MAPSI?</span>
                        <i class="fas fa-chevron-down text-primary"></i>
                    </div>
                    <div class="bg-white p-6 rounded-b-xl shadow-sm border-t border-gray-100">
                        <p class="text-gray-600">MAPSI (Musabaqah Seni dan Olahraga Pendidikan Agama Islam) adalah ajang
                            kompetisi tahunan yang bertujuan untuk mengembangkan bakat dan minat siswa dalam bidang seni dan
                            olahraga yang bernafaskan nilai-nilai Islam.</p>
                    </div>
                </div>

                <div class="mb-6">
                    <div
                        class="bg-gray-50 p-4 rounded-t-xl font-medium text-gray-800 flex justify-between items-center cursor-pointer">
                        <span>Siapa yang boleh mengikuti MAPSI?</span>
                        <i class="fas fa-chevron-down text-primary"></i>
                    </div>
                    <div class="bg-white p-6 rounded-b-xl shadow-sm border-t border-gray-100">
                        <p class="text-gray-600">MAPSI terbuka untuk seluruh siswa Sekolah Dasar di Kota Semarang. Setiap
                            sekolah dapat mengirimkan perwakilannya untuk berbagai kategori lomba yang tersedia.</p>
                    </div>
                </div>

                <div class="mb-6">
                    <div
                        class="bg-gray-50 p-4 rounded-t-xl font-medium text-gray-800 flex justify-between items-center cursor-pointer">
                        <span>Bagaimana cara mendaftar?</span>
                        <i class="fas fa-chevron-down text-primary"></i>
                    </div>
                    <div class="bg-white p-6 rounded-b-xl shadow-sm border-t border-gray-100">
                        <p class="text-gray-600">Pendaftaran dapat dilakukan secara online melalui website ini atau secara
                            offline dengan mengunjungi sekretariat panitia di SDN Banyumanik 02. Formulir pendaftaran dan
                            persyaratan dapat diunduh di halaman Pendaftaran.</p>
                    </div>
                </div>

                <div class="mb-6">
                    <div
                        class="bg-gray-50 p-4 rounded-t-xl font-medium text-gray-800 flex justify-between items-center cursor-pointer">
                        <span>Apakah ada biaya pendaftaran?</span>
                        <i class="fas fa-chevron-down text-primary"></i>
                    </div>
                    <div class="bg-white p-6 rounded-b-xl shadow-sm border-t border-gray-100">
                        <p class="text-gray-600">Ya, ada biaya pendaftaran untuk setiap kategori lomba. Biaya tersebut
                            digunakan untuk keperluan administrasi, sertifikat, dan hadiah bagi para pemenang. Rincian biaya
                            dapat dilihat di halaman Pendaftaran.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
