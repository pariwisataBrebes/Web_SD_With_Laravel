<!-- Modal for Delete Confirmation -->
<div id="delete-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md mx-4">
        <div class="p-4 border-b flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">Konfirmasi Hapus</h3>
            <button id="close-delete-modal" class="text-gray-400 hover:text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="p-4">
            <p class="text-gray-700">Apakah Anda yakin ingin menghapus Berita dengan judul <span id="delete-news-name"
                    class="font-semibold"></span>?</p>
            <p class="text-gray-500 text-sm mt-2">Tindakan ini tidak dapat dibatalkan.</p>

            <div class="mt-6 flex justify-end space-x-3">
                <button id="cancel-delete"
                    class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                    Batal
                </button>
                <button id="confirm-delete"
                    class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                    Hapus
                </button>
            </div>
        </div>
    </div>
</div>
