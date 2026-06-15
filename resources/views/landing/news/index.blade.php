@extends('layout.landing')

@section('content')
    <!-- Page Header -->
    <section class="pt-32 pb-16 bg-primary/10">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-4 text-primary">Berita Terkini</h1>
                <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
                <p class="text-lg text-gray-700">Informasi dan kegiatan terbaru dari SDN Banyumanik 02</p>
            </div>
        </div>
    </section>

    <!-- News Grid Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Filter Categories (Optional) -->
            @php
                $categories = ['Semua', 'Akademik', 'Ekstrakurikuler', 'Prestasi', 'Pengumuman'];
            @endphp

            <div class="flex flex-wrap justify-center gap-3 mb-12">
                @foreach ($categories as $category)
                    <a href="{{ $category === 'Semua' ? route('landing.news.index') : route('landing.news.index', ['category' => $category]) }}"
                        class="px-4 py-2 rounded-full text-sm font-medium transition duration-300
               {{ request('category') === $category || ($category === 'Semua' && !request('category'))
                   ? 'bg-primary text-white hover:bg-secondary'
                   : 'bg-white text-gray-700 hover:bg-primary hover:text-white' }}">
                        {{ $category }}
                    </a>
                @endforeach
            </div>

            <!-- News Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($news as $item)
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

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="inline-flex rounded-md shadow">
                    {{-- Previous Page Link --}}
                    @if ($news->onFirstPage())
                        <span
                            class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-400 cursor-not-allowed">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    @else
                        <a href="{{ $news->previousPageUrl() }}"
                            class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    @endif

                    {{-- Page Number Links --}}
                    @for ($i = 1; $i <= $news->lastPage(); $i++)
                        @if ($i == $news->currentPage())
                            <span
                                class="px-4 py-2 bg-primary border border-primary text-sm font-medium text-white">{{ $i }}</span>
                        @else
                            <a href="{{ $news->url($i) }}"
                                class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">
                                {{ $i }}
                            </a>
                        @endif
                    @endfor

                    {{-- Next Page Link --}}
                    @if ($news->hasMorePages())
                        <a href="{{ $news->nextPageUrl() }}"
                            class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    @else
                        <span
                            class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-400 cursor-not-allowed">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    @endif
                </nav>
            </div>
        </div>
    </section>
@endsection
