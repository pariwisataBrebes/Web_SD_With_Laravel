@extends('layout.landing')

@section('content')
    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-r from-primary/90 to-primary/70 relative overflow-hidden">
        <div class="absolute inset-0 bg-pattern opacity-10"></div>
        <div class="absolute -right-20 -top-20 w-64 h-64 bg-accent/20 rounded-full blur-3xl"></div>
        <div class="absolute -left-20 bottom-0 w-80 h-80 bg-secondary/20 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-white">Kontak Kami</h1>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">Hubungi kami untuk informasi lebih lanjut atau
                    kunjungi sekolah kami secara langsung</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#lokasi"
                        class="px-6 py-3 bg-white text-primary font-medium rounded-full hover:bg-gray-100 transition duration-300 shadow-lg">
                        <i class="fas fa-map-marker-alt mr-2"></i> Lihat Lokasi
                    </a>
                    <a href="#formulir"
                        class="px-6 py-3 bg-transparent border-2 border-white text-white font-medium rounded-full hover:bg-white/10 transition duration-300">
                        <i class="fas fa-envelope mr-2"></i> Kirim Pesan
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Cards -->
    <section class="py-16 bg-white relative z-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Address Card -->
                <div
                    class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <div
                        class="h-24 bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md">
                            <i class="fas fa-map-marker-alt text-2xl text-primary"></i>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold mb-4 text-gray-800">Alamat</h3>
                        <address class="not-italic text-gray-600 leading-relaxed">
                            Jl. Sendang Gede No.02, RT.008, Banyumanik,<br>
                            Kec. Banyumanik, Kota Semarang,<br>
                            Jawa Tengah 50261
                        </address>
                        <a href="https://www.google.com/maps/place/SD+Negeri+Banyumanik+02/@-7.0784694,110.4156887,248m/data=!3m1!1e3!4m14!1m7!3m6!1s0x2e7089379c9808a3:0x290a7bdf8286ac5!2sSD+Negeri+Banyumanik+02!8m2!3d-7.0795508!4d110.4151559!16s%2Fg%2F11c1pdw2kv!3m5!1s0x2e7089379c9808a3:0x290a7bdf8286ac5!8m2!3d-7.0795508!4d110.4151559!16s%2Fg%2F11c1pdw2kv?hl=id&entry=ttu&g_ep=EgoyMDI1MDQwOS4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank"
                            class="inline-block mt-4 text-primary hover:text-primary/80 font-medium transition-colors duration-300">
                            <i class="fas fa-directions mr-1"></i> Petunjuk Arah
                        </a>
                    </div>
                </div>

                <!-- Customer Service Card -->
                <div
                    class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <div
                        class="h-24 bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md">
                            <i class="fas fa-headset text-2xl text-primary"></i>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold mb-4 text-gray-800">Customer Service</h3>
                        <div class="space-y-3 text-gray-600">
                            <div>
                                <i class="fas fa-envelope text-primary mr-2"></i>
                                <a href="mailto:sdbanyumanik.02@gmail.com"
                                    class="hover:text-primary transition-colors duration-300">sdbanyumanik.02@gmail.com</a>
                            </div>
                            <div>
                                <i class="fas fa-phone-alt text-primary mr-2"></i>
                                <a href="tel:+62247462054" class="hover:text-primary transition-colors duration-300">(024)
                                    7462054</a>
                            </div>
                            <div>
                                <i class="fas fa-fax text-primary mr-2"></i>
                                <span>-</span>
                            </div>
                        </div>
                        <a href="https://wa.me/62247462054" target="_blank"
                            class="inline-flex items-center justify-center mt-4 px-4 py-2 bg-green-500 text-white rounded-full hover:bg-green-600 transition-colors duration-300">
                            <i class="fab fa-whatsapp mr-2"></i> Chat WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Working Hours Card -->
                <div
                    class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <div
                        class="h-24 bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md">
                            <i class="fas fa-clock text-2xl text-primary"></i>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold mb-4 text-gray-800">Jam Kerja</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex justify-between items-center">
                                <span>Senin - Kamis:</span>
                                <span class="font-medium">07:00 - 14:00 WIB</span>
                            </li>
                            <li class="flex justify-between items-center">
                                <span>Jumat:</span>
                                <span class="font-medium">07:00 - 11:00 WIB</span>
                            </li>
                            <li class="flex justify-between items-center">
                                <span>Sabtu:</span>
                                <span class="font-medium">07:00 - 12:00 WIB</span>
                            </li>
                            <li class="flex justify-between items-center text-red-500">
                                <span>Minggu:</span>
                                <span class="font-medium">Libur</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section id="lokasi" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Lokasi Kami</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Kunjungi sekolah kami di lokasi yang strategis dan mudah
                    dijangkau</p>
            </div>

            <div class="bg-white p-4 rounded-2xl shadow-lg overflow-hidden">
                <div class="aspect-video w-full rounded-xl overflow-hidden">
                    <!-- Replace the src with the actual Google Maps embed URL for your school -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11909.132508605318!2d110.415156!3d-7.079551!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7089379c9808a3%3A0x290a7bdf8286ac5!2sSD%20Negeri%20Banyumanik%2002!5e1!3m2!1sid!2sid!4v1744662378205!5m2!1sid!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for FAQ Accordion -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqButtons = document.querySelectorAll('.bg-white.rounded-xl button');

            faqButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('.fas.fa-chevron-down');

                    // Toggle content visibility
                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        content.style.maxHeight = content.scrollHeight + 'px';
                        icon.style.transform = 'rotate(180deg)';
                    }
                });
            });
        });
    </script>
@endsection
