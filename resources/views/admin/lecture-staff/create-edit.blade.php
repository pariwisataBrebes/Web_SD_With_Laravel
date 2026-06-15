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
        </div>

        <form id="staffForm" action="{{ $formUrl }}" method="POST" enctype="multipart/form-data">
            @method($formMethod)
            @csrf

            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name', $lectureAndStaff->name ?? '') }}"
                    class="w-full px-4 py-2 md:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300"
                    placeholder="Masukkan nama staf">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                <textarea id="description" name="description" rows="3"
                    class="w-full px-4 py-2 md:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300"
                    placeholder="Masukkan deskripsi staf">{{ old('description', $lectureAndStaff->description ?? '') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="position" class="block text-gray-700 font-medium mb-2">Posisi</label>
                <input type="text" id="position" name="position"
                    value="{{ old('position', $lectureAndStaff->position ?? '') }}"
                    class="w-full px-4 py-2 md:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300"
                    placeholder="Masukkan posisi staf">
                @error('position')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="block text-gray-700 font-medium mb-2">Gambar</label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 md:p-6 text-center">
                    <input type="file" id="image" name="image" class="hidden">
                    <label for="image" class="cursor-pointer">
                        <div class="flex flex-col items-center justify-center">
                            <img src="{{ isset($lectureAndStaff) && $lectureAndStaff->image ? asset('storage/lecture-staff/' . $lectureAndStaff->image) : 'https://via.placeholder.com/150' }}"
                                alt="Gambar Staf" class="mb-4 max-h-40 rounded">
                            <p class="text-gray-700 font-medium">Klik untuk upload gambar</p>
                            <p class="text-xs text-gray-500 mt-2">PNG, JPG, atau JPEG (maks. 2MB)</p>
                        </div>
                    </label>
                </div>
                @error('image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
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
@endsection

@section('library-js')
@endsection

@section('custom-js')
    <script>
        $(document).ready(function() {
            // File input preview for staff image
            $("#image").change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $("label[for='image'] img").attr('src', e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Adjust textarea height on mobile
            function adjustTextareaHeight() {
                if (window.innerWidth < 768) {
                    $('#description').css('max-height', '300px');
                } else {
                    $('#description').css('max-height', 'none');
                }
            }

            adjustTextareaHeight();
            $(window).resize(adjustTextareaHeight);

            // Form submission handler
            $("#submitForm").click(function(e) {
                e.preventDefault();
                $("#staffForm").submit();
            });
        });
    </script>
@endsection
