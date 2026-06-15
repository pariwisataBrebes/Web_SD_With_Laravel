@extends('layout.landing')

@section('content')
    <!-- Page Header with Article Image -->
    <section class="pt-20 relative">
        <div class="w-full h-[300px] md:h-[400px] lg:h-[500px] relative">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent z-10"></div>
            <img src="{{ asset('storage/news/' . $news->main_image) }}" alt="{{ $news->title }}"
                class="w-full h-full object-cover">
            <div class="absolute bottom-0 left-0 right-0 z-20 p-6 md:p-10">
                <div class="container mx-auto">
                    <div class="max-w-4xl">
                        <span class="inline-block bg-primary text-white text-sm font-semibold px-3 py-1 rounded-lg mb-4">
                            {{ $news->category }}
                        </span>
                        <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold text-white mb-4">{{ $news->title }}</h1>
                        <div class="flex items-center text-white/80 text-sm md:text-base">
                            <div class="flex items-center mr-6">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <span>{{ $news->published_at }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="far fa-user mr-2"></i>
                                <span>{{ $news->author }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Main Content -->
                <div class="lg:w-2/3">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="p-6 md:p-8">
                            <!-- Article Summary -->
                            <div
                                class="mb-8 text-lg font-medium text-gray-700 border-l-4 border-primary pl-4 py-2 bg-primary/5 italic">
                                {{ $news->summary }}
                            </div>

                            <!-- Article Content -->
                            <div class="prose max-w-none prose-lg prose-primary">
                                {!! $news->content !!}
                            </div>

                            <!-- Tags -->
                            <div class="mt-8 pt-6 border-t border-gray-200">
                                <div class="flex flex-wrap gap-2">
                                    <span class="text-gray-700 font-medium">Tags:</span>
                                    @foreach (explode(',', $news->tags) as $tag)
                                        <a href="{{ route('landing.news.index', ['tag' => $tag]) }}"
                                            class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full hover:bg-primary hover:text-white transition duration-300">
                                            {{ trim($tag) }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            {{--
                            <!-- Share Buttons -->
                            <div class="mt-8 pt-6 border-t border-gray-200">
                                <h3 class="text-lg font-semibold mb-4">Bagikan Artikel</h3>
                                <div class="flex gap-3">
                                    <a href="#"
                                        class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition duration-300">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-sky-500 text-white rounded-full flex items-center justify-center hover:bg-sky-600 transition duration-300">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center hover:bg-green-700 transition duration-300">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-blue-800 text-white rounded-full flex items-center justify-center hover:bg-blue-900 transition duration-300">
                                        <i class="fab fa-telegram"></i>
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-gray-200 text-gray-700 rounded-full flex items-center justify-center hover:bg-gray-300 transition duration-300">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:w-1/3">
                    <!-- Categories -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold mb-4">Kategori</h3>
                            @php
                                $categories = ['Semua', 'Akademik', 'Ekstrakurikuler', 'Prestasi', 'Pengumuman'];
                            @endphp
                            <ul class="space-y-2">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ $category === 'Semua' ? route('landing.news.index') : route('landing.news.index', ['category' => $category]) }}"
                                            class="flex items-center justify-between py-2 px-3 rounded-lg hover:bg-primary/5 transition duration-300">
                                            <span class="text-gray-700">{{ $category }}</span>
                                            {{-- <span
                                                class="bg-primary/10 text-primary text-xs px-2 py-1 rounded-full">12</span> --}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Recent Posts -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold mb-4">Artikel Terbaru</h3>
                            <div class="space-y-4">
                                @foreach ($recentNews as $item)
                                    <div class="flex gap-3">
                                        <div class="w-20 h-20 rounded-lg overflow-hidden flex-shrink-0">
                                            <img src="{{ asset('storage/news/' . $item->main_image) }}"
                                                alt="{{ $item->title }}" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-800 line-clamp-2 mb-1">
                                                <a href="{{ route('landing.news.show', $item->slug) }}"
                                                    class="hover:text-primary transition duration-300">
                                                    {{ $item->title }}
                                                </a>
                                            </h4>
                                            <div class="text-xs text-gray-500">
                                                <i class="far fa-calendar-alt mr-1"></i>
                                                {{ $item->published_at }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Tags Cloud -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold mb-4">Tags</h3>
                            @php
                                $tags = [
                                    'Pendidikan',
                                    'Kurikulum',
                                    'Olimpiade',
                                    'Prestasi',
                                    'Kegiatan',
                                    'Siswa',
                                    'Guru',
                                    'Sekolah',
                                ];
                            @endphp
                            <div class="flex flex-wrap gap-2">
                                @foreach ($tags as $tag)
                                    <a href="{{ route('landing.news.index', ['tag' => $tag]) }}"
                                        class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full hover:bg-primary hover:text-white transition duration-300">
                                        {{ $tag }}
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Articles -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-2xl md:text-3xl font-bold mb-8 text-center">ARTIKEL TERKAIT</h2>
            <div class="w-20 h-1 bg-secondary mx-auto mb-12"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($relatedNews as $item)
                    <div class="news-card bg-white rounded-xl overflow-hidden shadow-md">
                        <div class="relative overflow-hidden h-48">
                            <img src="{{ asset('storage/news/' . $item->main_image) }}" alt="{{ $item->title }}"
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
        </div>
    </section>
@endsection
