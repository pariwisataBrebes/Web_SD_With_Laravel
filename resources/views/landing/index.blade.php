@extends('layout.landing')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero-slider pt-16">
        {{-- <div class="hero-slide"
            style="background-image: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/FireShot%20Capture%20001%20-%20HOME%20-%20sdnbanyumanik02.dikdas.semarangkota.go.id-JfNpiHGxFqSX42Sb6ZFZ3dpH4P1x7x.png');">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-secondary/50"></div>
            <div class="container mx-auto px-4 h-full flex items-center">
                <div class="hero-content text-white p-6 md:p-8 rounded-lg max-w-2xl">
                    <h1 class="text-3xl md:text-5xl font-bold mb-4">Sekolah PPK Branding Nusantara</h1>
                    <p class="text-lg md:text-xl mb-6">Membentuk generasi unggul yang berkarakter, cerdas, dan
                        berwawasan global</p>
                    <a href="#berita"
                        class="inline-block bg-white text-primary font-medium px-6 py-3 rounded-full hover:bg-primary hover:text-white transition duration-300">Berita
                        Terkini</a>
                </div>
            </div>
        </div> --}}
        <div class="hero-slide active" style="background-image: url('{{ asset('storage/landing/carousel/1.jpeg') }}');">
            <div class="absolute inset-0 bg-gray-900/50"></div>
        </div>

        <div class="hero-slide" style="background-image: url('{{ asset('storage/landing/carousel/2.png') }}');">
            <div class="absolute inset-0 bg-gray-900/50"></div>

        </div>

        <div class="hero-slide" style="background-image: url('{{ asset('storage/landing/carousel/3.jpeg') }}');">
            <div class="absolute inset-0 bg-gray-900/50"></div>
        </div>

        <div class="hero-slide" style="background-image: url('{{ asset('storage/landing/carousel/4.jpeg') }}');">
            <div class="absolute inset-0 bg-gray-900/50"></div>
        </div>

        <div class="hero-slide" style="background-image: url('{{ asset('storage/landing/carousel/5.jpeg') }}');">
            <div class="absolute inset-0 bg-gray-900/50"></div>
        </div>

        <div class="scroll-indicator text-white">
            <i class="fas fa-chevron-down text-2xl"></i>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Selamat Datang di SDN Banyumanik 02</h2>
                <div class="w-20 h-1 bg-secondary mx-auto mb-8"></div>
                <p class="text-lg text-gray-700 mb-8">Sekolah PPK Branding Nusantara yang berkomitmen untuk memberikan
                    pendidikan berkualitas dan membentuk karakter siswa yang berakhlak mulia.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-book text-2xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Pendidikan Berkualitas</h3>
                        <p class="text-gray-600">Kurikulum yang komprehensif untuk mengembangkan potensi akademik siswa
                        </p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-2xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Pembentukan Karakter</h3>
                        <p class="text-gray-600">Program pendidikan karakter untuk membentuk siswa yang berakhlak mulia
                        </p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-medal text-2xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Prestasi Unggul</h3>
                        <p class="text-gray-600">Berbagai prestasi akademik dan non-akademik di tingkat kota dan
                            provinsi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sambutan Kepala Sekolah -->
    <section id="profil" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/3">
                    <div class="relative">
                        <div class="absolute -top-4 -left-4 w-20 h-20 bg-primary/10 rounded-lg"></div>
                        <img src="{{ asset('storage/landing/kepsek/kepsek.jpg') }}" alt="Kepala Sekolah"
                            class="w-full h-auto rounded-lg shadow-lg relative z-10">
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-secondary/10 rounded-lg"></div>
                    </div>
                </div>
                <div class="md:w-2/3">
                    <h2 class="section-title text-2xl md:text-3xl font-bold mb-6">SAMBUTAN KEPALA SEKOLAH</h2>
                    <p class="text-gray-700 mb-4">
                        Assalamualaikum Wr.Wb.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Puji syukur kepada Allah SWT. Tuhan Yang Maha Esa yang telah memberikan rahmat dan hidayah-Nya
                        kepada kita semua, sehingga kita dapat melaksanakan tugas dan tanggung jawab sebagai pendidik
                        dengan baik hingga saat ini.
                    </p>
                    <p class="text-gray-700 mb-4">
                        SDN Banyumanik 02 berkomitmen untuk memberikan pendidikan yang berkualitas dan membentuk
                        karakter siswa yang berakhlak mulia. Kami berupaya untuk menciptakan suasana belajar yang
                        menyenangkan dan kondusif bagi perkembangan potensi siswa.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Kami mengajak seluruh warga sekolah dan orang tua siswa untuk terus mendukung dan berpartisipasi
                        dalam program-program sekolah demi kemajuan pendidikan anak-anak kita.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Wassalamualaikum Wr.Wb.
                    </p>
                    <div class="mt-6 flex items-center">
                        <div class="w-16 h-1 bg-secondary mr-4"></div>
                        <div>
                            <p class="font-bold text-primary">Endang Sri Wahyuni, S.Pd</p>
                            <p class="text-sm text-gray-600">Kepala Sekolah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sejarah Singkat -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="section-title text-2xl md:text-3xl font-bold mb-8 text-center">SEJARAH SINGKAT SDN
                    BANYUMANIK 02</h2>
                <div class="w-20 h-1 bg-secondary mx-auto mb-8"></div>

                <div class="mb-8">
                    <img src="{{ asset('storage/landing/sejarah/foto-guru.jpeg') }}" alt="Foto Sekolah"
                        class="w-full h-auto rounded-lg shadow-lg mb-6">
                    <p class="text-gray-700 mb-4">
                        SDN Banyumanik 02 adalah salah satu sekolah negeri di Kota Semarang, di mana telah menjalankan
                        kegiatannya sejak tahun 1982 dengan Nomor Statistik Sekolah: 101036303038.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Secara administrasi Sekolah Dasar (SD) Negeri Banyumanik 02 beralamat di Jalan Sendang Gede
                        No.02, RT.008, Banyumanik, Kec. Banyumanik, Kota Semarang, Jawa tengah 50261.
                    </p>
                    <p class="text-gray-700 mb-4">
                        SD Negeri Banyumanik 02 memiliki luas lahan 5.030 MÂ², Dengan batas-batas :
                    </p>
                    <ul class="text-gray-700 mb-4 list-disc ml-6">
                        <li>
                            Utara : Tk & Lapangan desa;
                        </li>
                        <li>
                            Timur : Tanah Warga;
                        </li>
                        <li>
                            Selatan : Rumah Warga;
                        </li>
                        <li>
                            Barat : Rumah Warga
                        </li>
                    </ul>
                    <p class="text-gray-700 mb-4">
                        Jarak tempuh Â± 15-20 menit dr kota Propinsi, SD Negeri Banyumanik 02 terdiri dari 4 (tiga)
                        Bangunan utama, dgn rincian 6 (enam) ruangan Kelas, 1 (satu) ruangan Guru, 1 (satu) ruang Kepala
                        Sekolah, 1 (satu) ruangan Perpustakaan, 1 (satu) ruangan Mushola, 1 (satu) ruangan Ruang UKS , 1
                        (satu) ruangan Kantin dan 1 (Satu) bangunan Gudang dibagian pojok sekolah.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Seiring berjalannya waktu di tahun 2010 SDN Banyumanik 02 berdiri dan di atur oleh Pemerintah
                        Kota Semarang. Dasar perubahan nama SD, SK Walikota
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
                    <div class="bg-primary/5 p-6 rounded-lg border-l-4 border-primary">
                        <h3 class="text-xl font-semibold mb-4 text-primary">Visi</h3>
                        <p class="text-gray-700">"Terwujudnya peserta didik yang beriman, cerdas, terampil, dan
                            berkarakter"</p>
                    </div>
                    <div class="bg-secondary/5 p-6 rounded-lg border-l-4 border-secondary">
                        <h3 class="text-xl font-semibold mb-4 text-secondary">Misi</h3>
                        <ul class="text-gray-700 space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary mt-1 mr-2"></i>
                                <span>Menanamkan keimanan dan ketaqwaan melalui pengamalan ajaran agama</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary mt-1 mr-2"></i>
                                <span>Mengoptimalkan proses pembelajaran dan bimbingan</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary mt-1 mr-2"></i>
                                <span>Mengembangkan bidang ilmu pengetahuan dan teknologi berdasarkan minat, bakat, dan
                                    potensi peserta didik</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary mt-1 mr-2"></i>
                                <span>Membina kemandirian peserta didik melalui kegiatan pembiasaan</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Terkini -->
    <section id="berita" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-2xl md:text-3xl font-bold mb-8 text-center">BERITA TERKINI</h2>
            <div class="w-20 h-1 bg-secondary mx-auto mb-12"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($news as $item)
                    <!-- Berita 1 -->
                    <div class="news-card bg-white rounded-xl overflow-hidden shadow-md">
                        <div class="relative overflow-hidden h-48">
                            <img src="{{ asset('storage/news/' . $item->main_image) }}" alt="Berita 1"
                                class="w-full h-full object-cover transition duration-500 hover:scale-110">
                            <div
                                class="absolute top-0 right-0 bg-primary text-white text-xs font-semibold px-3 py-1 rounded-bl-lg">
                                {{ $item->category }}
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-gray-500 text-sm mb-2">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <span>{{ $item->published_at }}</span>
                            </div>
                            <h3 class="font-bold text-lg mb-2 text-gray-800">{{ $item->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ $item->summary }}</p>
                            <a href="{{ route('landing.news.show', $item->slug) }}"
                                class="inline-flex items-center text-primary font-medium hover:text-secondary transition duration-300">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('landing.news.index') }}"
                    class="inline-block bg-primary text-white font-medium px-6 py-3 rounded-full hover:bg-secondary transition duration-300">
                    Lihat Semua Berita
                </a>
            </div>
        </div>
    </section>

    <!-- Pengajar dan Staff -->
    <section id="staff" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-2xl md:text-3xl font-bold mb-8 text-center">PENGAJAR DAN STAFF</h2>
            <div class="w-20 h-1 bg-secondary mx-auto mb-12"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Staff 1 -->
                <div class="staff-card bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/landing/pengajar-dan-staff/pengajar-dan-staff-1.jpg') }}"
                            alt="Endang Sri Wahyuni, S.Pd" class="w-full h-full object-cover object-top aspect-[3/4]">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-bold text-lg text-gray-800">Endang Sri Wahyuni, S.Pd</h3>
                        <p class="text-gray-600">Kepala Sekolah</p>
                    </div>
                </div>

                <!-- Staff 2 -->
                <div class="staff-card bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/landing/pengajar-dan-staff/pengajar-dan-staff-2.jpg') }}"
                            alt="Supiyah, S.Pd" class="w-full h-full object-cover object-top aspect-[3/4]">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-bold text-lg text-gray-800">Supiyah, S.Pd</h3>
                        <p class="text-gray-600">Guru Kelas I</p>
                    </div>
                </div>

                <!-- Staff 3 -->
                <div class="staff-card bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/landing/pengajar-dan-staff/pengajar-dan-staff-3.jpg') }}"
                            alt="Wulan Arifiani, S.Pd" class="w-full h-full object-cover object-top aspect-[3/4]">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-bold text-lg text-gray-800">Wulan Arifiani, S.Pd</h3>
                        <p class="text-gray-600">Guru Kelas II</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('landing.profil.guru') }}"
                    class="inline-block bg-primary text-white font-medium px-6 py-3 rounded-full hover:bg-secondary transition duration-300">
                    Lihat Semua Pengajar
                </a>
            </div>
        </div>
    </section>

    <!-- Peta Lokasi -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="flex flex-col md:flex-row bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="md:w-1/2">
                        <div class="h-full">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11909.132508605318!2d110.415156!3d-7.079551!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7089379c9808a3%3A0x290a7bdf8286ac5!2sSD%20Negeri%20Banyumanik%2002!5e1!3m2!1sid!2sid!4v1744662378205!5m2!1sid!2sid"
                                width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8">
                        <h2 class="section-title text-2xl font-bold mb-6">LOKASI KAMI</h2>
                        <div class="flex items-start mb-4">
                            <div
                                class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Alamat</h3>
                                <p class="text-gray-600">Jl. Kanfer Raya, Banyumanik, Kota Semarang, Jawa Tengah 50267
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start mb-4">
                            <div
                                class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <i class="fas fa-phone text-primary"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Telepon</h3>
                                <p class="text-gray-600">(024) 7460000</p>
                            </div>
                        </div>
                        <div class="flex items-start mb-4">
                            <div
                                class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Email</h3>
                                <p class="text-gray-600">sdn.banyumanik02@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div
                                class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <i class="fas fa-clock text-primary"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Jam Operasional</h3>
                                <p class="text-gray-600">Senin - Jumat: 07.00 - 14.00 WIB</p>
                                <p class="text-gray-600">Sabtu: 07.00 - 12.00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
