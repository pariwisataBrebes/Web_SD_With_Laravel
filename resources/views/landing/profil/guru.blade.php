@extends('layout.landing')

@section('content')
    <!-- Page Header -->
    <section class="pt-32 pb-16 bg-gradient-to-r from-primary/90 to-primary/70">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-4 text-white">Pengajar & Staff</h1>
                <div class="w-20 h-1 bg-accent mx-auto mb-6"></div>
                <p class="text-lg text-white/90">Mengenal lebih dekat para pendidik berkualitas di SDN Banyumanik 02</p>
            </div>
        </div>
    </section>

    <!-- Teachers Grid -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <!-- Teacher Card 1 -->
                @foreach ($lectureAndStaff as $ls)
                    <div class="group">
                        <div
                            class="relative overflow-hidden rounded-xl shadow-md bg-white transition-all duration-300 transform group-hover:-translate-y-2 group-hover:shadow-xl">
                            <div class="aspect-[3/4] overflow-hidden">
                                {{-- <img src="{{ asset('storage/landing/profil/guru/sri-rochani.jpg') }}" --}}
                                <img src="{{ asset('storage/lecture-staff/' . $ls->image) }}" alt="Sri Rochani, S.Pd., M.Si"
                                    class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-110">
                            </div>
                            <div
                                class="absolute top-4 right-4 text-xs font-semibold px-3 py-1 rounded-full shadow-lg
                                @if ($ls->position == 'Kepala Sekolah') bg-primary text-white
                                @elseif ($ls->position == 'Guru Kelas')
                                    bg-secondary text-white
                                @elseif ($ls->position == 'Guru Mapel')
                                    bg-accent text-gray-800
                                @elseif ($ls->position == 'Staff')
                                    bg-gray-700 text-white @endif
                                ">
                                {{ $ls->position }}
                            </div>
                            <div class="p-6 bg-white">
                                <h3 class="font-bold text-xl mb-1 text-gray-800">{{ $ls->name }}</h3>
                                <p class="text-gray-600 text-sm mb-3">{{ $ls->description }}</p>
                                <div class="flex space-x-3 pt-2 border-t border-gray-100">
                                    <a href="#"
                                        class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition duration-300 text-gray-600">
                                        <i class="fab fa-facebook-f text-sm"></i>
                                    </a>
                                    <a href="#"
                                        class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition duration-300 text-gray-600">
                                        <i class="fab fa-instagram text-sm"></i>
                                    </a>
                                    <a href="#"
                                        class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition duration-300 text-gray-600">
                                        <i class="fas fa-envelope text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                <nav class="inline-flex rounded-lg shadow-sm">
                    @if ($lectureAndStaff->onFirstPage())
                        <span
                            class="px-4 py-2 bg-gray-200 border border-gray-300 text-sm font-medium text-gray-500 rounded-l-lg">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    @else
                        <a href="{{ $lectureAndStaff->previousPageUrl() }}"
                            class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50 rounded-l-lg">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    @endif

                    @foreach ($lectureAndStaff->getUrlRange(1, $lectureAndStaff->lastPage()) as $page => $url)
                        @if ($page == $lectureAndStaff->currentPage())
                            <span
                                class="px-4 py-2 bg-primary border border-primary text-sm font-medium text-white">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}"
                                class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">{{ $page }}</a>
                        @endif
                    @endforeach

                    @if ($lectureAndStaff->hasMorePages())
                        <a href="{{ $lectureAndStaff->nextPageUrl() }}"
                            class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50 rounded-r-lg">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    @else
                        <span
                            class="px-4 py-2 bg-gray-200 border border-gray-300 text-sm font-medium text-gray-500 rounded-r-lg">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    @endif
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
                        <i class="fas fa-user-graduate text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-primary mb-2">11+</h3>
                    <p class="text-gray-600">Pengajar & Staff</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-primary mb-2">180+</h3>
                    <p class="text-gray-600">Siswa</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-medal text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-primary mb-2">25+</h3>
                    <p class="text-gray-600">Prestasi</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-calendar-alt text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-primary mb-2">40+</h3>
                    <p class="text-gray-600">Tahun Pengalaman</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    {{-- <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div
                class="max-w-4xl mx-auto bg-gradient-to-r from-primary to-primary/80 rounded-2xl p-8 md:p-12 text-center text-white shadow-xl">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">Bergabung dengan Tim Kami</h2>
                <p class="text-white/90 mb-8 max-w-2xl mx-auto">SDN Banyumanik 02 selalu terbuka untuk pendidik berkualitas
                    yang ingin berkontribusi dalam membentuk generasi penerus bangsa yang cerdas dan berkarakter.</p>
                <a href="#"
                    class="inline-block bg-white text-primary font-medium px-8 py-3 rounded-full hover:bg-gray-100 transition duration-300 shadow-lg">
                    Lihat Lowongan
                </a>
            </div>
        </div>
    </section> --}}
@endsection
