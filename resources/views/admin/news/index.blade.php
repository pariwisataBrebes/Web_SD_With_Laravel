@extends('layout.admin')

@section('content')
    <!-- News Management Content (Hidden by default) -->
    <div id="newsManagementContent" class="opacity-0 animate-[fadeIn_0.5s_ease-in-out_forwards]">
        <div class="bg-white rounded-xl shadow-sm p-4 md:p-6 mb-6">
            <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
                <h2 class="text-lg font-bold text-gray-800 mb-4 md:mb-0">Kelola Berita</h2>
                <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-3">
                    <div class="relative">
                        <input type="text" id="customSearch" placeholder="Cari berita..."
                            class="w-full pl-10 pr-4 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                    </div>
                    <button id="addNewsButton" onclick="location.href='{{ route('news.create') }}'"
                        class="bg-primary text-white font-medium px-4 py-2 rounded-lg hover:bg-primary/90 transition-colors duration-300 flex items-center justify-center">
                        <i class="fas fa-plus mr-2"></i>
                        <span>Tambah Berita</span>
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table id="newsTable" class="w-full">
                    <thead>
                        <tr class="text-left text-gray-600 text-sm border-b border-gray-200">
                            <th class="pb-3 font-medium">
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary">
                                </div>
                            </th>
                            <th class="pb-3 font-medium">Judul</th>
                            <th class="pb-3 font-medium">Kategori</th>
                            <th class="pb-3 font-medium hidden md:table-cell">Penulis</th>
                            <th class="pb-3 font-medium hidden sm:table-cell">Tanggal</th>
                            <th class="pb-3 font-medium">Status</th>
                            <th class="pb-3 font-medium">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- data table --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.news.modal')
@endsection


@section('library-js')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
@endsection

@section('custom-js')
    <script>
        function showNotification(message, type = 'success') {
            alert(message); // Ganti dengan toast atau notif UI kamu
        }

        const dataTable = $('#newsTable').DataTable({
            dom: 'rt<"flex items-center justify-between mt-4"lip>', // Custom dom
            processing: true,
            serverSide: true,
            ajax: "{{ route('news.all') }}",
            columns: [{
                    data: 'checkbox',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'judul',
                    name: 'title'
                },
                {
                    data: 'kategori',
                    name: 'category'
                },
                {
                    data: 'penulis',
                    name: 'user.name',
                    className: 'hidden md:table-cell'
                },
                {
                    data: 'tanggal',
                    name: 'published_at',
                    className: 'hidden sm:table-cell'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'aksi',
                    orderable: false,
                    searchable: false
                }
            ],
            language: {
                lengthMenu: "_MENU_",
                search: "",
                searchPlaceholder: "Cari berita..."
            }
        });
        $('#customSearch').on('keyup', function() {
            $('#newsTable').DataTable().search(this.value).draw();
        });

        $('#newsTable').on('click', '.delete-news', function() {
            const row = dataTable.row($(this).closest('tr')).data();
            if (row) {
                const formData = new FormData();
                formData.append("_method", "DELETE");

                // Tambahkan token CSRF dari meta tag
                const csrfToken = $('meta[name="csrf-token"]').attr('content');
                formData.append("_token", csrfToken);

                $('#delete-news-name').text(row.title);
                $('#delete-modal').removeClass('hidden');

                $('#confirm-delete').off('click').on('click', function() {
                    const $btn = $(this);
                    $btn.prop('disabled', true).text('Menghapus...');

                    $.ajax({
                        url: `/admin/news/destroy/${row.id}`,
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function() {
                            dataTable.ajax.reload();
                            showNotification('Berita berhasil dihapus!');
                            $('#delete-modal').addClass('hidden');
                        },
                        error: function(xhr) {
                            let message = 'Terjadi kesalahan saat menghapus berita.';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                message = xhr.responseJSON.message;
                            }
                            showNotification(message, 'error');
                        },
                        complete: function() {
                            $btn.prop('disabled', false).text('Ya, Hapus');
                        }
                    });
                });
            }
        });


        $('#close-delete-modal, #cancel-delete').click(function() {
            $('#delete-modal').addClass('hidden');
        });
    </script>
@endsection
