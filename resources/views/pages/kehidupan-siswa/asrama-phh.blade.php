@extends('layouts.base')
@section('title', 'Arama PHH')
@section('content')
    {{-- Breadcrumb --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/kehidupan-siswa">Kehidupan Siswa</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Asrama PHH
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3 mb-5">
        <div class="container">
            <h1 class="text-center mb-5 py-2 text-black">
                Asrama Sekolah Pelita Harapan: Boarding School Terbaik di Jakarta
            </h1>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/header-sph-phhDormitory-v1.jpg" alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p class="fw-normal mb-3">Terletak 45 menit dari Jakarta, SPH Sentul City menawarkan
                        fasilitas
                        asrama siswa, Pelita Harapan House (PHH), dengan program full-board satu minggu penuh. Asrama PHH
                        berdiri strategis di dalam lingkungan kampus yang luas, hijau, dan aman, hanya beberapa menit
                        berjalan kaki dari ruang kelas. Kekuatan dan dukungan komunitas asrama memungkinkan siswa menjalani
                        kehidupan yang seimbang dan tumbuh dengan kaya akan berbagai pengalaman.</p>
                    <p class="fw-normal mb-3">Siswa yang tinggal di PHH mendapatkan pengalaman pendidikan yang
                        diperluas dengan tim orang tua asrama (dorm parent) dan pengawas asrama yang luar biasa, yang
                        membantu mereka merasa seperti di rumah dan mendukung mereka dengan pekerjaan rumah dan studi
                        mereka. Kehidupan di asrama mencakup berbagai acara-acara menyenangkan di akhir hari untuk membina
                        persahabatan dan mempromosikan rasa kebersamaan.</p>
                    <p class="fw-normal">Di PHH, fokus kami adalah memperhatikan pengembangan setiap siswa untuk
                        mencapai potensi penuh mereka dalam hal kedewasaan, kemandirian, spiritualitas, karakter,
                        keterampilan sosial, dan pengembangan bakat sambil memastikan kesuksesan akademis.</p>
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    {{-- Fasilitas Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-facilities-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Rumah Kedua untuk Pertumbuhan
                    </h5>
                    <h1 class="fw-normal p-0 m-0 mb-3"><span class="faq-title text-primary">Fasilitas</span></h1>
                    <p class="mb-2" style="line-height: 1.9 !important;">Pelita Harapan House (PHH) adalah rumah
                        kedua bagi siswa kelas 7-12 kami. Asrama kami bukan hanya menjadi tempat tinggal, tetapi juga rumah
                        kedua yang mendukung setiap siswa untuk berprestasi dan membekali mereka dengan keterampilan hidup
                        yang tentunya sangat berguna ketika mereka memasuki bangku universitas dan bahkan seterusnya.
                        Fasilitas kami tidak hanya terbatas pada asrama, karena setiap fasilitas yang berada di lingkungan
                        SPH Sentul City dapat diakses oleh siswa asrama guna menambah pengalaman yang menyeluruh bagi setiap
                        siswa asrama.</p>
                    <p class="mb-2" style="line-height: 1.9 !important;">Fasilitas kami menawarkan kehidupan yang
                        seimbang bagi siswa. Siswa bebas menikmati 9 fasilitas unggulan: Kolam Renang, Lapangan Sepak Bola,
                        Lapangan Basket (indoor & outdoor), Lapangan Badminton, Gimnasium, Ruang Kebugaran, dan
                        Perpustakaan.</p>
                    <p class="mb-2" style="line-height: 1.9 !important;">Staf kami paham bahwa remaja membutuhkan
                        makanan sehat, bergizi, dan lezat untuk mendukung kehidupan mereka yang dinamis. Asrama selalu
                        mneyediakan makanan 3 kali sehari dengan mengakomodir setiap alergi dan kebutuhan diet lainnya.</p>
                    <p class="mb-2" style="line-height: 1.9 !important;">Perpustakaan sekolah yang desain dengan
                        baik memainkan peran penting dalam mendukung keseluruhan proses belajar mengajar. Perpustakaan SPH,
                        yang dibangun sebagai pusat pembelajaran yang kondusif, mendukung siswa dan pengajar untuk
                        memperoleh pengetahuan, berkolaborasi dan menginspirasi pembelajaran.</p>
                    <p class="mb-2" style="line-height: 1.9 !important;">Staf kami paham bahwa remaja membutuhkan
                        makanan sehat, bergizi, dan lezat untuk mendukung kehidupan mereka yang dinamis. Asrama selalu
                        mneyediakan makanan 3 kali sehari dengan mengakomodir setiap alergi dan kebutuhan diet lainnya.</p>
                    <p style="line-height: 1.9 !important;">Tim keamanan kami selalu memastikan
                        keamanan asrama dan kampus 24/7. Mereka memantau semua akses dan hanya mengijinkan tamu yang
                        disetujui untuk masuk ke area asrama.</p>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 650px;"
                        src="https://sph.edu/wp-content/uploads/2022/03/sph-studentLife-phhDormitory-facility-side-v3.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Aktivitas Siswa Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-phhActivities-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Kegiatan di PHH
                    </h5>
                    <h1 class="fw-normal p-0 m-0 mb-3"><span class="faq-title text-primary">Aktivitas Siswa Asrama</span>
                    </h1>
                    <p class="mb-2" style="line-height: 1.9 !important;">PHH adalah fokus dari relasi komunitas
                        kami. Asrama SPH Sentul City menawarkan program Senin-Jumat (Weekday) dan Senin-Minggu (Full-Week)
                        untuk siswa. Program Senin-Minggu memberikan lebih banyak kesempatan bagi siswa untuk mendapatkan
                        berbagai pengalaman. Jadwal akhir pekan yang diperpanjang memberikan lebih banyak kesempatan bagi
                        siswa untuk berpartisipasi dalam kompetisi olahraga, kegiatan di luar ruangan, atau bahkan fieldtrip
                        singkat dengan keluarga asrama mereka.</p>
                    <p class="mb-2" style="line-height: 1.9 !important;">PHH adalah fokus dari relasi komunitas
                        kami. Asrama SPH Sentul City menawarkan program Senin-Jumat (Weekday) dan Senin-Minggu (Full-Week)
                        untuk siswa. Program Senin-Minggu memberikan lebih banyak kesempatan bagi siswa untuk mendapatkan
                        berbagai pengalaman. Jadwal akhir pekan yang diperpanjang memberikan lebih banyak kesempatan bagi
                        siswa untuk berpartisipasi dalam kompetisi olahraga, kegiatan di luar ruangan, atau bahkan fieldtrip
                        singkat dengan keluarga asrama mereka.</p>
                    <p class="mb-2" style="line-height: 1.9 !important;">Untuk kegiatan sehari-hari, seminggu
                        sekali, siswa harus mengikuti kebaktian. Mereka dibagi menjadi kelompok-kelompok kecil dan dipimpin
                        oleh pengawas asrama, di mana mereka dapat berbagi cerita tentang kehidupan mereka bersama. Setiap
                        Rabu adalah Malam Keluarga! Malam di mana semua anggota asrama berkumpul untuk makan malam spesial,
                        permainan menyenangkan, dan persekutuan kelompok.</p>
                    <p class="mb-2" style="line-height: 1.9 !important;">PHH juga menawarkan dukungan bahasa
                        Inggris tambahan untuk siswa. Beberapa siswa mungkin mengalami kesulitan dalam menguasai bahasa
                        Inggris, dan dukungan ini merupakan layanan tambahan yang dapat membantu mereka menyesuaikan diri
                        dengan lingkungan berbahasa Inggris di SPH.</p>
                    <p class="mb-2" style="line-height: 1.9 !important;">Sebagai salah satu boarding school
                        terbaik di area Jabodetabek, Pelita Harapan House (PHH) menawarkan program dan fasilitas berstandar
                        internasional yang mendukung pembelajaran holistik siswa di sekolah. Hal ini tentu membantu mereka
                        mempersiapkan diri untuk tantangan yang lebih kompleks dalam kehidupan mereka di masa depan.</p>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-phhActivities-side-v1.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Image Card Section --}}
    <section class="mt-3 mb-5">
        <div class="container py-4">
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://sph.edu/wp-content/uploads/2022/03/sph-phh-dorm-carousel-01.jpg" alt="Testimonial"
                            class="img-fluid w-100 rounded-4 shadow">
                    </div>
                    <div class="carousel-item">
                        <img src="https://sph.edu/wp-content/uploads/2022/03/sph-phh-dorm-carousel-02.jpg"
                            alt="Testimonial" class="img-fluid w-100 rounded-4 shadow">
                    </div>
                    <div class="carousel-item">
                        <img src="https://sph.edu/wp-content/uploads/2022/03/sph-phh-dorm-carousel-03.jpg"
                            alt="Testimonial" class="img-fluid w-100 rounded-4 shadow">
                    </div>
                    <div class="carousel-item">
                        <img src="https://sph.edu/wp-content/uploads/2022/03/sph-phh-dorm-carousel-04.jpg"
                            alt="Testimonial" class="img-fluid w-100 rounded-4 shadow">
                    </div>
                    <div class="carousel-item">
                        <img src="https://sph.edu/wp-content/uploads/2022/03/sph-phh-dorm-carousel-05.jpg"
                            alt="Testimonial" class="img-fluid w-100 rounded-4 shadow">
                    </div>
                </div>
                <div class="d-flex justify-content-center gap-4 fs-1 mt-3">
                    <div class="bg-transparent border-0" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="prev">
                        <i class="bi bi-chevron-left"></i>
                    </div>
                    <div class="text-center mt-3" id="carouselIndicator">
                    </div>
                    <div class="bg-transparent border-0" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="next">
                        <i class="bi bi-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const parents = document.querySelectorAll(".parent");
            parents.forEach(parent => {
                const overlay = parent.querySelector(".overlay");
                overlay.classList.add("rounded-rt-4");
                const titleBox = parent.querySelector(".title-box");
                function syncSize() {
                    const rect = titleBox.getBoundingClientRect();
                    overlay.style.width = rect.width + "px";
                    overlay.style.height = rect.height + "px";
                }
                syncSize();
                window.addEventListener("resize", syncSize);
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('#testimonialCarousel');
            const indicatorsContainer = document.querySelector('#carouselIndicator');
            const items = carousel.querySelectorAll('.carousel-item');
            items.forEach((item, index) => {
                const span = document.createElement('span');
                span.textContent = ' _ ';
                span.dataset.index = index;
                span.style.cursor = 'pointer';
                span.classList.add('fs-2');
                span.style.opacity = '0.5';
                indicatorsContainer.appendChild(span);
            });
            function updateIndicator(activeIndex) {
                indicatorsContainer.querySelectorAll('span').forEach((span, i) => {
                    if (i === activeIndex) {
                        span.classList.add('fw-bold');
                        span.style.opacity = '1';
                    } else {
                        span.classList.remove('fw-bold');
                        span.style.opacity = '0.5';
                    }
                });
            }
            updateIndicator(0);
            carousel.addEventListener('slide.bs.carousel', function(e) {
                updateIndicator(e.to);
            });
            indicatorsContainer.querySelectorAll('span').forEach(span => {
                span.addEventListener('click', function() {
                    const index = parseInt(this.dataset.index);
                    const bootstrapCarousel = bootstrap.Carousel.getInstance(carousel);
                    bootstrapCarousel.to(index);
                });
            });
        });
    </script>
    {{-- FAQ Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <h2 class="faq-title text-center text-black">FAQ Pelita Harapan House SPH Sentul City</h2>
                        <h3 class="text-primary text-center d-flex align-items-center gap-2 mt-4"
                            style="font-size: 0.9rem;">
                            <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                alt=""> Pertanyaan Yang Sering Diajukan
                        </h3>
                    </div>
                </div>
                <div class="col">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Apa keunggulan Pelita Harapan House (PHH) dibandingkan boarding school lain di Jakarta
                                    dan sekitarnya?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p>Pelita Harapan House (PHH) menawarkan fasilitas dan program yang dirancang khusus dan
                                        berstandar internasional. Dengan tinggal di asrama PHH, siswa dapat fokus pada
                                        pembelajaran, mengembangkan kemandirian, dan membangun relasi sosial yang kuat. PHH
                                        menyediakan lingkungan yang aman dan nyaman untuk belajar dan bertumbuh.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Bagaimana proses pendaftaran untuk tinggal di Pelita Harapan House?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p>Untuk mendaftar, calon siswa dan orang tua dapat melakukan proses pendaftaran ke SPH
                                        Sentul City melalui <a class="text-primary fw-medium"
                                            style="text-decoration: none;" href="#">portal pendaftaran</a> kami.
                                        Untuk informasi lebih lanjut
                                        mengenai
                                        asrama PHH, Anda dapat menghubungi tim Admissions kami via WhatsApp di
                                        <a class="text-primary fw-medium" style="text-decoration: none;"
                                            href="#">+6287778577711</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Apa jenis dukungan akademik yang tersedia bagi siswa di PHH?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p>Asrama PHH menyediakan sesi belajar khusus yang disupervisi setiap hari dan dukungan
                                        tambahan dalam pembelajaran Bahasa Inggris untuk membantu siswa yang mengalami
                                        kesulitan. Selain itu, siswa dapat memanfaatkan berbagai fasilitas kampus untuk
                                        menunjang kegiatan belajar mereka.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Bagaimana dengan kegiatan sosial dan pertumbuhan iman di asrama?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p>Siswa di PHH terlibat dalam berbagai kegiatan sosial dan pertumbuhan iman, termasuk
                                        kebaktian mingguan dan Malam Keluarga setiap Rabu. Kegiatan-kegiatan ini dirancang
                                        untuk memupuk persahabatan, meningkatkan rasa kebersamaan, dan memperkaya pengalaman
                                        serta pertumbuhan iman pribadi setiap siswa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Parenting Quesstion Component --}}
    <x-sections.parenting-question></x-sections.parenting-question>
    {{-- Custom NavBar --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap');
        .navbar-container nav .nav-link,
        .navbar-container nav .navbar-brand {
            color: rgba(0, 0, 0, 0.75) !important;
            /* Teks hitam setelah scroll */
        }
        .navbar-container nav .nav-link:hover {
            color: rgba(0, 0, 0, 1) !important;
        }
        .faq-section .faq-title {
            font-family: 'PT Sans', sans-serif !important;
        }
    </style>
@endsection
