@extends('layout.landing')

@section('content')
    <section class="pt-32 pb-16 bg-gradient-to-r from-primary/90 to-primary/70">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-4 text-white">Profil Sekolah</h1>
                <div class="w-20 h-1 bg-accent mx-auto mb-6"></div>
                <p class="text-lg text-white/90">Tentang SDN Banyumanik 2</p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
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
            <div class="max-w-4xl mx-auto mt-8">
                <img src="{{ asset('storage/landing/profil/sekolah/Prestasi BMK02.jpg') }}" alt="">
            </div>
        </div>
    </section>
@endsection
