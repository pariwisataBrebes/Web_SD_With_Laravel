@extends('layout.admin')

@section('content')
    <!-- Dashboard Content -->
    <div id="dashboardContent">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 xs:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-6">
            <div
                class="bg-white rounded-xl shadow-sm p-4 md:p-6 hover:translate-y-[-5px] hover:shadow-lg transition-all duration-300 opacity-0 animate-[fadeIn_0.5s_ease-in-out_0.1s_forwards]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Total Berita</p>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800">24</h3>
                        <p class="text-xs text-green-600 mt-2">
                            <i class="fas fa-arrow-up mr-1"></i>
                            <span>12% dari bulan lalu</span>
                        </p>
                    </div>
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 rounded-full flex items-center justify-center text-primary">
                        <i class="fas fa-newspaper text-lg md:text-xl"></i>
                    </div>
                </div>
            </div>

            <div
                class="bg-white rounded-xl shadow-sm p-4 md:p-6 hover:translate-y-[-5px] hover:shadow-lg transition-all duration-300 opacity-0 animate-[fadeIn_0.5s_ease-in-out_0.2s_forwards]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Total Pengunjung</p>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800">1,254</h3>
                        <p class="text-xs text-green-600 mt-2">
                            <i class="fas fa-arrow-up mr-1"></i>
                            <span>18% dari bulan lalu</span>
                        </p>
                    </div>
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                        <i class="fas fa-users text-lg md:text-xl"></i>
                    </div>
                </div>
            </div>

            <div
                class="bg-white rounded-xl shadow-sm p-4 md:p-6 hover:translate-y-[-5px] hover:shadow-lg transition-all duration-300 opacity-0 animate-[fadeIn_0.5s_ease-in-out_0.3s_forwards]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Berita Populer</p>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800">8</h3>
                        <p class="text-xs text-green-600 mt-2">
                            <i class="fas fa-arrow-up mr-1"></i>
                            <span>5% dari bulan lalu</span>
                        </p>
                    </div>
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 bg-purple-100 rounded-full flex items-center justify-center text-purple-600">
                        <i class="fas fa-star text-lg md:text-xl"></i>
                    </div>
                </div>
            </div>

            <div
                class="bg-white rounded-xl shadow-sm p-4 md:p-6 hover:translate-y-[-5px] hover:shadow-lg transition-all duration-300 opacity-0 animate-[fadeIn_0.5s_ease-in-out_0.4s_forwards]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Komentar</p>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800">42</h3>
                        <p class="text-xs text-red-600 mt-2">
                            <i class="fas fa-arrow-down mr-1"></i>
                            <span>3% dari bulan lalu</span>
                        </p>
                    </div>
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 bg-orange-100 rounded-full flex items-center justify-center text-orange-600">
                        <i class="fas fa-comments text-lg md:text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent News -->
        <div class="bg-white rounded-xl shadow-sm p-4 md:p-6 mb-6 opacity-0 animate-[fadeIn_0.5s_ease-in-out_forwards]">
            <div class="flex flex-col xs:flex-row xs:items-center justify-between mb-4 md:mb-6">
                <h2 class="text-lg font-bold text-gray-800 mb-2 xs:mb-0">Berita Terbaru</h2>
                <button id="viewAllNews" class="text-sm text-primary hover:text-secondary transition-colors duration-300">
                    Lihat Semua
                    <i class="fas fa-arrow-right ml-1"></i>
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-left text-gray-600 text-sm border-b border-gray-200">
                            <th class="pb-3 font-medium">Judul</th>
                            <th class="pb-3 font-medium">Kategori</th>
                            <th class="pb-3 font-medium">Tanggal</th>
                            <th class="pb-3 font-medium">Status</th>
                            <th class="pb-3 font-medium">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-100 hover:bg-gray-50">
                            <td class="py-3">
                                <div class="flex items-center">
                                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/FireShot%20Capture%20001%20-%20HOME%20-%20sdnbanyumanik02.dikdas.semarangkota.go.id-JfNpiHGxFqSX42Sb6ZFZ3dpH4P1x7x.png"
                                        alt="Berita" class="w-10 h-10 rounded object-cover mr-3">
                                    <span class="font-medium text-gray-800">Kegiatan Literasi Sekolah</span>
                                </div>
                            </td>
                            <td class="py-3">
                                <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Kegiatan</span>
                            </td>
                            <td class="py-3 text-gray-600 text-sm">10 Apr 2025</td>
                            <td class="py-3">
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Dipublikasi</span>
                            </td>
                            <td class="py-3">
                                <div class="flex space-x-2">
                                    <button class="text-gray-600 hover:text-primary transition-colors duration-300">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-gray-600 hover:text-red-600 transition-colors duration-300">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-100 hover:bg-gray-50">
                            <td class="py-3">
                                <div class="flex items-center">
                                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/FireShot%20Capture%20001%20-%20HOME%20-%20sdnbanyumanik02.dikdas.semarangkota.go.id-JfNpiHGxFqSX42Sb6ZFZ3dpH4P1x7x.png"
                                        alt="Berita" class="w-10 h-10 rounded object-cover mr-3">
                                    <span class="font-medium text-gray-800">Prestasi Siswa dalam Olimpiade
                                        Matematika</span>
                                </div>
                            </td>
                            <td class="py-3">
                                <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Prestasi</span>
                            </td>
                            <td class="py-3 text-gray-600 text-sm">5 Apr 2025</td>
                            <td class="py-3">
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Dipublikasi</span>
                            </td>
                            <td class="py-3">
                                <div class="flex space-x-2">
                                    <button class="text-gray-600 hover:text-primary transition-colors duration-300">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-gray-600 hover:text-red-600 transition-colors duration-300">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-100 hover:bg-gray-50">
                            <td class="py-3">
                                <div class="flex items-center">
                                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/FireShot%20Capture%20001%20-%20HOME%20-%20sdnbanyumanik02.dikdas.semarangkota.go.id-JfNpiHGxFqSX42Sb6ZFZ3dpH4P1x7x.png"
                                        alt="Berita" class="w-10 h-10 rounded object-cover mr-3">
                                    <span class="font-medium text-gray-800">Kegiatan Ekstrakurikuler</span>
                                </div>
                            </td>
                            <td class="py-3">
                                <span
                                    class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Ekstrakurikuler</span>
                            </td>
                            <td class="py-3 text-gray-600 text-sm">1 Apr 2025</td>
                            <td class="py-3">
                                <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">Draft</span>
                            </td>
                            <td class="py-3">
                                <div class="flex space-x-2">
                                    <button class="text-gray-600 hover:text-primary transition-colors duration-300">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-gray-600 hover:text-red-600 transition-colors duration-300">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Quick Stats and Activity -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 opacity-0 animate-[fadeIn_0.5s_ease-in-out_forwards]">
            <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-4 md:p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-4 md:mb-6">Statistik Pengunjung</h2>
                <div class="h-48 md:h-64 flex items-center justify-center">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/FireShot%20Capture%20001%20-%20HOME%20-%20sdnbanyumanik02.dikdas.semarangkota.go.id-JfNpiHGxFqSX42Sb6ZFZ3dpH4P1x7x.png"
                        alt="Chart Placeholder" class="max-h-full">
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-4 md:p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-4 md:mb-6">Aktivitas Terbaru</h2>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div
                            class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-primary mr-3 flex-shrink-0">
                            <i class="fas fa-plus text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Admin menambahkan berita baru</p>
                            <p class="text-xs text-gray-600">2 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center text-green-600 mr-3 flex-shrink-0">
                            <i class="fas fa-edit text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Admin mengedit profil sekolah</p>
                            <p class="text-xs text-gray-600">Kemarin, 15:30</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center text-red-600 mr-3 flex-shrink-0">
                            <i class="fas fa-trash-alt text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Admin menghapus berita lama</p>
                            <p class="text-xs text-gray-600">Kemarin, 10:15</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mr-3 flex-shrink-0">
                            <i class="fas fa-image text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Admin menambahkan foto baru</p>
                            <p class="text-xs text-gray-600">2 hari yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('custom-js')
    <script>
        $(document).ready(function() {
            // View all news button
            $("#viewAllNews").click(function() {
                $("#dashboardContent").hide();
                $("#newsManagementContent").show();
                $(".nav-item").removeClass("bg-sidebar-active");
                $("#newsManagement").addClass("bg-sidebar-active");
            });

            // Add news button
            $("#addNewsButton").click(function() {
                $("#addNewsForm").show();
                $("#newsManagementContent > div:first-child").hide();
            });

            // Close add news form
            $("#closeAddNewsForm, #cancelAddNews").click(function() {
                $("#addNewsForm").hide();
                $("#newsManagementContent > div:first-child").show();
            });

            // File input preview
            $("#newsImage").change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = $("<img>").attr({
                            src: e.target.result,
                            class: "mt-4 mx-auto max-h-40 rounded"
                        });
                        $(".border-dashed").append(img);
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Simulate form submission
            $("form").submit(function(e) {
                e.preventDefault();
                alert("Berita berhasil disimpan!");
                $("#addNewsForm").hide();
                $("#newsManagementContent > div:first-child").show();
            });
        });
    </script>
@endsection
