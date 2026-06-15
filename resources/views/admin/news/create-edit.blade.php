@extends('layout.admin')

@section('content')
    <!-- Edit News Form -->
    <div class="bg-white rounded-xl shadow-sm p-4 md:p-6 opacity-0 animate-[fadeIn_0.5s_ease-in-out_forwards]">
        <div class="flex flex-col xs:flex-row xs:items-center justify-between mb-6">
            <div class="flex items-center mb-4 xs:mb-0">
                <a href="dashboard.html" class="text-gray-600 hover:text-primary mr-3">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h2 class="text-lg font-bold text-gray-800">{{ $title }}</h2>
            </div>
            <div class="flex flex-col xs:flex-row space-y-2 xs:space-y-0 xs:space-x-3">
                <button
                    class="px-4 py-2 bg-gray-200 text-gray-800 font-medium rounded-lg hover:bg-gray-300 transition-colors duration-300 flex items-center justify-center">
                    <i class="fas fa-eye mr-2"></i>
                    <span>Pratinjau</span>
                </button>
                <button
                    class="px-4 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition-colors duration-300 flex items-center justify-center">
                    <i class="fas fa-check mr-2"></i>
                    <span>Publikasikan</span>
                </button>
            </div>
        </div>

        <form id="newsForm" action="{{ $formUrl }}" method="POST" enctype="multipart/form-data">
            @method($formMethod)
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 mb-6">
                <div class="md:col-span-2">
                    <label for="title" class="block text-gray-700 font-medium mb-2">Judul Berita</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $news->title ?? '') }}"
                        class="w-full px-4 py-2 md:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300"
                        placeholder="Masukkan judul berita">
                </div>
                <div>
                    <label for="slug" class="block text-gray-700 font-medium mb-2">Slug</label>
                    <input type="text" id="slug" name="slug" value="{{ old('slug', $news->slug ?? '') }}"
                        class="w-full px-4 py-2 md:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300"
                        placeholder="kegiatan-literasi-sekolah">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 mb-6">
                <div>
                    <label for="category" class="block text-gray-700 font-medium mb-2">Kategori</label>
                    <input id="category" name="category" value="{{ old('category', $news->category ?? '') }}"
                        class="w-full px-4 py-2 md:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300">
                </div>
                <div>
                    <label for="published_at" class="block text-gray-700 font-medium mb-2">Tanggal Publikasi</label>
                    <input type="date" id="published_at" name="published_at"
                        value="{{ old('published_at', isset($news->published_at) ? date('Y-m-d', strtotime($news->published_at)) : '') }}"
                        class="w-full px-4 py-2 md:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300">
                </div>
                <div>
                    <label for="status" class="block text-gray-700 font-medium mb-2">Status</label>
                    <select id="status" name="status"
                        class="w-full px-4 py-2 md:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300">
                        <option value="draft" {{ old('status', $news->status ?? '') === 'draft' ? 'selected' : '' }}>Draft
                        </option>
                        <option value="published"
                            {{ old('status', $news->status ?? '') === 'published' ? 'selected' : '' }}>Publikasikan</option>
                        <option value="scheduled"
                            {{ old('status', $news->status ?? '') === 'scheduled' ? 'selected' : '' }}>Terjadwal</option>
                    </select>
                </div>
            </div>

            <div class="mb-6">
                <label for="summary" class="block text-gray-700 font-medium mb-2">Ringkasan</label>
                <textarea id="summary" name="summary" rows="2"
                    class="w-full px-4 py-2 md:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300"
                    placeholder="Ringkasan singkat berita...">{{ old('summary', $news->summary ?? '') }}</textarea>
            </div>

            <div class="mb-6">
                <label for="content" class="block text-gray-700 font-medium mb-2">Konten Berita</label>
                <div id="editor" class="w-full min-h-[200px] md:min-h-[300px] bg-white">
                    {!! old('content', $news->content ?? '') !!}
                </div>
                <input type="hidden" name="content" id="contentInput">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 mb-6">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Gambar Utama</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 md:p-6 text-center">
                        <input type="file" id="newsImage" name="main_image" class="hidden">
                        <label for="newsImage" class="cursor-pointer">
                            <div class="flex flex-col items-center justify-center">
                                <img src="{{ isset($news) && $news->main_image ? asset('storage/news/' . $news->main_image) : 'https://hebbkx1anhila5yf.public.blob.vercel-storage.com/FireShot%20Capture%20001%20-%20HOME%20-%20sdnbanyumanik02.dikdas.semarangkota.go.id-JfNpiHGxFqSX42Sb6ZFZ3dpH4P1x7x.png' }}"
                                    alt="Gambar Berita" class="mb-4 max-h-40 rounded">

                                <p class="text-gray-700 font-medium">Klik untuk ganti gambar</p>
                                <p class="text-xs text-gray-500 mt-2">PNG, JPG, atau JPEG (maks. 2MB)</p>
                            </div>
                        </label>
                    </div>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Galeri Gambar (Opsional)</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 md:p-6 text-center">
                        <input type="file" id="newsGallery" name="gallery[]" multiple class="hidden">
                        <label for="newsGallery" class="cursor-pointer">
                            <div class="flex flex-col items-center justify-center">
                                <i class="fas fa-images text-2xl md:text-3xl text-gray-400 mb-2"></i>
                                <p class="text-gray-700 font-medium">Klik untuk upload gambar tambahan</p>
                                <p class="text-sm text-gray-500 mt-1">atau seret dan lepas file di sini</p>
                                <p class="text-xs text-gray-500 mt-2">Maksimal 5 gambar</p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 mb-6">
                <div>
                    <label for="tags" class="block text-gray-700 font-medium mb-2">Tag</label>
                    <input type="text" id="tags" name="tags" value="{{ old('tags', $news->tags ?? '') }}"
                        class="w-full px-4 py-2 md:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300"
                        placeholder="Pisahkan dengan koma">
                    <p class="text-xs text-gray-500 mt-1">Pisahkan tag dengan koma</p>
                </div>
                <div>
                    <label for="author" class="block text-gray-700 font-medium mb-2">Penulis</label>
                    <input type="text" id="author" name="author"
                        value="{{ old('author', $news->user->name ?? '') }}"
                        class="w-full px-4 py-2 md:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300"
                        placeholder="Nama penulis">
                </div>
            </div>

            <div class="border-t border-gray-200 pt-6 mt-6">
                <div class="flex flex-col sm:flex-row sm:justify-between space-y-3 sm:space-y-0">
                    <div class="flex flex-col xs:flex-row space-y-3 xs:space-y-0 xs:space-x-3">
                        <button id="submitForm"
                            class="px-6 py-2 md:py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 transition-colors duration-300">
                            Simpan Perubahan
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection

@section('library-css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection

@section('library-js')
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
@endsection

@section('custom-js')
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

            // Initialize Quill editor with responsive toolbar
            var quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{
                            'header': [1, 2, 3, false]
                        }],
                        ['bold', 'italic', 'underline'],
                        [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }],
                        ['link', 'image'],
                        ['clean']
                    ]
                },
                placeholder: 'Tulis konten berita di sini...'
            });

            // Adjust editor height on mobile
            function adjustEditorHeight() {
                if (window.innerWidth < 768) {
                    $('.ql-editor').css('max-height', '300px');
                } else {
                    $('.ql-editor').css('max-height', 'none');
                }
            }

            adjustEditorHeight();
            $(window).resize(adjustEditorHeight);

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

            // Auto-generate slug from title
            $("#newsTitle").on('keyup', function() {
                const title = $(this).val();
                const slug = title.toLowerCase()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
                $("#newsSlug").val(slug);
            });

            // File input preview
            $("#newsImage").change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $(".border-dashed img").attr('src', e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Gallery images preview
            $("#newsGallery").change(function() {
                const files = this.files;
                const galleryContainer = $(this).closest('.border-dashed');

                // Remove previous previews
                galleryContainer.find('.gallery-preview').remove();

                if (files.length > 0) {
                    const previewContainer = $(
                        '<div class="gallery-preview flex flex-wrap justify-center gap-2 mt-4"></div>');
                    galleryContainer.append(previewContainer);

                    for (let i = 0; i < Math.min(files.length, 5); i++) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            previewContainer.append(
                                `<img src="${e.target.result}" class="h-16 w-16 object-cover rounded" />`
                            );
                        }
                        reader.readAsDataURL(files[i]);
                    }
                }
            });
            $("#submitForm").click(function(e) {
                e.preventDefault();
                var content = quill.root.innerHTML;
                $("#contentInput").val(content);
                $("#newsForm").submit();
            });
        });
    </script>
@endsection
