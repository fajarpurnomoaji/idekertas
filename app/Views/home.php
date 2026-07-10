<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IdeKertas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://jsdelivr.net" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #04254E !important;" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/assets/logo/Logo-landscape.webp" alt="Logo" width="130" height="45" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item ms-lg-3 my-2 my-lg-0">
                        <div class="position-relative d-inline-block" style="cursor: pointer;" onclick="bukaModalKeranjang()">
                            <i class="fa-solid fa-cart-shopping fs-4 pe-lg-2" style="color: #FFD860;"></i>
                            <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="display: none; font-size: 0.65rem;">
                                0
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="height: 450px;">
                <img src="<?= base_url('assets/foto1.webp') ?>" class="w-100 h-100 object-fit-cover">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item" style="height: 450px;">
                <img src="<?= base_url('assets/foto2.webp') ?>" class="w-100 h-100 object-fit-cover">
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item" style="height: 450px;">
                <img src="<?= base_url('assets/foto3.webp') ?>" class="w-100 h-100 object-fit-cover">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel End -->

    <!-- About -->
    <div class="container-fluid text-center p-5" style="background-color: #C1D7E2 !important; scroll-margin-top: 70px;" id="about">
        <div class="row align-items-start">
            <div class="col">
                <h2 class="fw-bolder">TENTANG KAMI</h2>
            </div>
        </div>
        <div class="row p-1">
            <div class="col">
                <p>
                    <b>IdeKertas</b> adalah penyedia dan distributor solusi kertas terintegrasi yang berkomitmen untuk memenuhi segala kebutuhan material cetak, kemasan, hingga kreasi tanpa batas. Berdiri dengan visi menjadi mitra terpercaya bagi pelaku bisnis, korporasi, industri kreatif, dan percetakan, kami menghadirkan variasi produk kertas berkualitas tinggi (premium grade) yang bersumber dari produsen bersertifikasi.
                </p>
            </div>
        </div>
    </div>
    <!-- About end -->

    <!-- OUR FEATURED PRODUCT -->
    <div class="container-fluid text-center align-items-center py-5 px-8">
        <div class="row">
            <div class="col mb-2">
                <h2 class="fw-bolder">PRODUK UNGGULAN KAMI</h2>
            </div>
        </div>
        <div class="row g-4 justify-content-center row-cols-1 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
            <div class="col">
                <div class="card">
                    <img src="<?= base_url('assets/kertas-stiker-doff.webp') ?>" class="card-img-top w-100 object-fit-cover" style="height: 200px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?= base_url('assets/foto3.webp') ?>" class="card-img-top w-100 object-fit-cover" style="height: 200px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?= base_url('assets/foto3.webp') ?>" class="card-img-top w-100 object-fit-cover" style="height: 200px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR FEATURED PRODUCT End -->

    <!-- Keunggulan Kami -->
    <div class="container-fluid text-center align-items-center p-5" style="background-color: #C1D7E2 ;">
        <div class="row">
            <div class="col mb-3">
                <H2 class="fw-bolder">SERVICE</H2>
            </div>
        </div>
        <div class="row row-cols-lg-3 row-cols-md-3 row-cols-sm-3 row-cols-xs-1">
            <div class="col d-flex flex-column">
                <i class="fa-solid fa-box-open fs-1 mb-2"></i>
                <p>Setiap produk melewati proses seleksi ketat dan kontrol kualitas yang mendalam demi memastikan kepuasan serta daya tahan jangka panjang bagi Anda.</p>
            </div>
            <div class="col d-flex flex-column border-start-0 border-end-0 border-lg-end border-lg-start border-dark">
                <i class="fa-solid fa-truck-fast fs-1 mb-2"></i>
                <p>Tim kami siap menanggapi setiap pertanyaan dengan sigap, dan semua pesanan Anda langsung diproses serta dikirim pada hari yang sama agar tiba tepat waktu.</p>
            </div>
            <div class="col d-flex flex-column">
                <i class="fa-solid fa-thumbs-up fs-1 mb-2"></i>
                <p>Didukung oleh tim yang profesional dan hangat, kami berkomitmen memberikan pelayanan terbaik.</p>
            </div>
        </div>
    </div>
    <!-- Keunggulan Kami End -->

    <!-- Product -->
    <div class="container-fluid text-center align-items-center py-5" id="product" style="scroll-margin-top: 70px;">
        <div class="row">
            <div class="col mb-2">
                <h2 class="fw-bolder">DAFTAR PRODUK</h2>
            </div>
        </div>
        <div class="row g-4 justify-content-center row-cols-1 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
            <div class="col">
                <div class="card h-100 d-flex flex-column">
                    <img src="<?= base_url('assets/Kertas-stiker-doff.webp') ?>" class="card-img-top w-100 object-fit-cover" style="height: 200px;" alt="...">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title fw-bold">Kertas Stiker Doff</h5>
                        <p class="card-text"> Kertas sticker yang dilapisi dengan laminasi doff atau laminasi dingin</p>
                        <div class="mt-auto">
                            <p class="text-body-secondary text-start" style="font-size: 12px;">Kertas Sticker HVS <br>Merk : Lintec, Type : Doff / Doft</p>
                            <div class="card-text fs-5 fw-bold text-dark text-center mb-3">
                                Rp61.000
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn" onclick="tambahKeKeranjang('Kertas Stiker Doff', 61000)" style="background-color: #FCC231;" type="button">Masukan Keranjang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex flex-column">
                    <img src="<?= base_url('assets/kertas-brief-card.webp') ?>" class="card-img-top w-100 object-fit-cover" style="height: 200px;" alt="...">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title fw-bold">Kertas BriefCard</h5>
                        <p class="card-text">Kertas BC 160 gsm ini hadir dengan warna putih yang elegan dan tekstur doff yang lembut.</p>
                        <div class="mt-auto">
                            <p class="text-body-secondary text-start" style="font-size: 12px;">Kertas Manila <br>Merk : PINDO DELI, Texture : Kasar</p>
                            <div class="card-text fs-5 fw-bold text-dark text-center mb-3">
                                Rp43.700
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn" onclick="tambahKeKeranjang('Kertas BriefCard', 43700)" style="background-color: #FCC231;" type="button">Masukan Keranjang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex flex-column">
                    <img src="<?= base_url('assets/kertas-tik.webp') ?>" class="card-img-top w-100 object-fit-cover" style="height: 200px;" alt="...">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title fw-bold">Kertas Karton TIK</h5>
                        <p class="card-text">Kertas BC 160 gsm ini hadir dengan warna putih yang elegan dan tekstur doff yang lembut.</p>
                        <div class="mt-auto">
                            <p class="text-body-secondary text-start" style="font-size: 12px;">Kertas TIK <br>Merk : PINDO DELI, Jenis : Doff</p>
                            <div class="card-text fs-5 fw-bold text-dark text-center mb-3">
                                Rp71.000
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn" onclick="tambahKeKeranjang('Kertas TIK', 71000)" style="background-color: #FCC231;" type="button">Masukan Keranjang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex flex-column">
                    <img src="<?= base_url('assets/kertas-art-carton.webp') ?>" class="card-img-top w-100 object-fit-cover" style="height: 200px;" alt="...">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title fw-bold">Kertas Art Carton</h5>
                        <p class="card-text">Kertas BC 160 gsm ini hadir dengan warna putih yang elegan dan tekstur doff yang lembut.</p>
                        <div class="mt-auto">
                            <p class="text-body-secondary text-start" style="font-size: 12px;">Permukaan Glosy <br>Merk : PINDO DELI, Texture : Kasar</p>
                            <div class="card-text fs-5 fw-bold text-dark text-center mb-3">
                                Rp19.200
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn" onclick="tambahKeKeranjang('Kertas Art Carton', 19200)" style="background-color: #FCC231;" type="button">Masukan Keranjang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex flex-column">
                    <img src="<?= base_url('assets/foto3.webp') ?>" class="card-img-top w-100 object-fit-cover" style="height: 200px;" alt="...">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title fw-bold">Kertas BriefCard (BC)</h5>
                        <p class="card-text">Kertas BC 160 gsm ini hadir dengan warna putih yang elegan dan tekstur doff yang lembut.</p>
                        <div class="mt-auto">
                            <p class="text-body-secondary text-start" style="font-size: 12px;">Kertas Manila <br>Merk : PINDO DELI, Texture : Kasar</p>
                            <div class="card-text fs-5 fw-bold text-dark text-center mb-3">
                                Rp43.700
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn" onclick="tambahKeKeranjang('Kertas BriefCard', 43700)" style="background-color: #FCC231;" type="button">Masukan Keranjang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product end -->

    <!-- Partner -->
    <div class="container text-center align-items-center py-5">
        <div class="row py-3">
            <div class="col">
                <h2 class="fw-bolder">PARTNERING WITH THE BEST</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="<?= base_url('assets/logo/partner/Idekawan-logo.webp') ?>" class="img-fluid" style="max-width: 150px;" alt="idekawan">
            </div>
            <div class="col">
                <img src="<?= base_url('assets/logo/partner/Idekawan-logo.webp') ?>" class="img-fluid" style="max-width: 150px;" alt="idekawan">
            </div>
            <div class="col">
                <img src="<?= base_url('assets/logo/partner/Idekawan-logo.webp') ?>" class="img-fluid" style="max-width: 150px;" alt="idekawan">
            </div>
        </div>
    </div>
    <!-- Partner End -->

    <!-- Contact Us -->
    <div class="container-fluid py-5" style="background-color: #C1D7E2 !important; scroll-margin-top: 70px;" id="contact">
        <div class="row p-1 justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="card">
                    <div class="card-body p-4 shadow">

                        <div class="row g-4 align-items-stretch">

                            <!-- SISI KIRI: Form Kontak -->
                            <div class="col-12 col-md-7">
                                <h3 class="card-title mb-4 fw-bolder">KONTAK KAMI</h3>
                                <div class="card-text">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="fw-bold">
                                                <h5>Alamat Toko:</h5>
                                            </div>
                                            <div class="text-start">Jl. Gandaria Tengah 3, RT.004/RW.022, Tlk. Pucung, Kec. Bekasi Utara, Kota Bks, Jawa Barat 17121</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="fw-bold">
                                                <h5>No.Telepon:</h5>
                                            </div>
                                            <div><i class="fa-solid fa-phone"></i> : 0895-3433-30739</div>
                                            <div><i class="fa-solid fa-mobile-screen"></i> : +62 895-3325-6642</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5>Partnership: </h5>
                                </div>
                                <a href="https://forms.gle/Wn92GEsBx88FqX8cA" class="btn btn-warning w-100 fw-bold">ISI FORM</a>
                            </div>

                            <!-- SISI KANAN: Peta / Map -->
                            <div class="col-12 col-md-5 d-flex">
                                <div class="w-100 rounded overflow-hidden border">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d701.1710053038641!2d107.02923182313273!3d-6.207913006482951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69894f8f3a69bb%3A0xad8eef963fc37d48!2sHOPE%20PAPER!5e0!3m2!1sid!2sid!4v1783466519034!5m2!1sid!2sid" width="100%" height="100%" style="border:0; min-height:250px;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us End -->

    <!-- Footer -->
    <div class="container-fluid text-center py-3" style="background-color: #04254E !important;">
        <div class="row mx-3 g-3 text-light row-cols-lg-4 row-cols-sm-2 row-cols-1">
            <div class="col order-4 order-lg-first">
                Copyright 2026 &copy; Idekertas
            </div>
            <div class="col order-3">
                Terms of Service
            </div>
            <div class="col order-2">
                Privacy Policy
            </div>
            <div class="col order-1 order-lg-last">
                <i class="fa-brands fa-facebook fs-3 m-1"></i>
                <i class="fa-brands fa-instagram fs-3 m-1"></i>
                <i class="fa-brands fa-square-youtube fs-3 m-1"></i>
                <i class="fa-brands fa-linkedin fs-3 m-1"></i>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- modal -->
    <div class="modal fade" id="modalKeranjang" tabindex="-1" aria-labelledby="modalKeranjangLabel" aria-hidden="true" data-bs-theme="light">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="modalKeranjangLabel">Keranjang Belanja</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Tempat list produk yang dibeli akan muncul -->
                    <div id="cart-items-list"></div>
                    <hr>
                    <div class="d-flex justify-content-between fw-bold fs-5">
                        <span>Total Bayar:</span>
                        <span id="cart-total-price">Rp 0</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="kosongkanKeranjang()">Kosongkan</button>
                    <button type="button" class="btn btn-success w-100 mt-2" onclick="kirimKeWhatsApp()">
                        <i class="fa-brands fa-whatsapp me-2"></i>Beli Via WhatsApp
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->

    <!-- Chat WA -->
    <a href="https://wa.me/62895343212232?text=Halo saya dari website, ingin mengajukan pertanyaan."
        target="_blank"
        class="position-fixed bottom-0 end-0 m-4 p-3 bg-success rounded-circle shadow-lg text-white d-flex align-items-center justify-content-center"
        style="z-index: 9999; width: 60px; height: 60px; transition: transform 0.2s;"
        onmouseover="this.style.transform='scale(1.1)'"
        onmouseout="this.style.transform='scale(1)'">
        <i class="fa-brands fa-whatsapp fs-2"></i>
    </a>
    <!-- Chat WA end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>
        // GANTI DENGAN NOMOR WHATSAPP ANDA (Gunakan kode negara, contoh 62812345678)
        const NOMOR_WHATSAPP = "62895343330111";

        // Ambil data keranjang lama dari LocalStorage jika ada, atau buat baru jika kosong
        let keranjang = JSON.parse(localStorage.getItem('web_cart')) || [];

        // Jalankan fungsi update tampilan saat halaman pertama kali dimuat
        updateTampilanKeranjang();

        // 1. Fungsi Tambah Produk
        function tambahKeKeranjang(nama, harga) {
            // Cek apakah produk tersebut sudah ada di keranjang
            let produkAda = keranjang.find(item => item.nama === nama);

            if (produkAda) {
                produkAda.jumlah += 1; // Jika ada, tambah jumlahnya saja
            } else {
                keranjang.push({
                    nama: nama,
                    harga: harga,
                    jumlah: 1
                }); // Jika belum ada, masukkan data baru
            }

            simpanDanUpdate();
            alert(`${nama} berhasil ditambahkan ke keranjang!`);
        }

        // 2. Fungsi Simpan Data dan Update Tampilan
        function simpanDanUpdate() {
            localStorage.setItem('web_cart', JSON.stringify(keranjang));
            updateTampilanKeranjang();
        }

        function updateTampilanKeranjang() {
            const countBadge = document.getElementById('cart-count');
            const listContainer = document.getElementById('cart-items-list');
            const totalContainer = document.getElementById('cart-total-price');

            // Hitung total item belanjaan
            let totalItem = keranjang.reduce((sum, item) => sum + item.jumlah, 0);

            // Update badge angka di navbar
            if (totalItem > 0) {
                countBadge.innerText = totalItem;
                countBadge.style.display = 'block';
            } else {
                countBadge.style.display = 'none';
            }

            // Tampilkan daftar belanja di dalam Modal
            if (keranjang.length === 0) {
                listContainer.innerHTML = `<p class="text-muted text-centermy-3">Keranjang Anda masih kosong.</p>`;
                totalContainer.innerText = "Rp 0";
                return;
            }

            let htmlKonten = "";
            let totalHargaSemua = 0;

            keranjang.forEach((item, index) => {
                let totalHargaProduk = item.harga * item.jumlah;
                totalHargaSemua += totalHargaProduk;

                htmlKonten += `
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <div>
                      <h6 class="mb-0 fw-bold">${item.nama}</h6>
                      <small class="text-muted">Rp ${item.harga.toLocaleString('id-ID')} x ${item.jumlah}</small>
                  </div>
                  <div class="fw-bold text-primary">
                      Rp ${totalHargaProduk.toLocaleString('id-ID')}
                  </div>
              </div>
          `;
            });

            listContainer.innerHTML = htmlKonten;
            totalContainer.innerText = "Rp " + totalHargaSemua.toLocaleString('id-ID');
        }

        // 3. Fungsi membuka modal keranjang saat ikon diklik
        function bukaModalKeranjang() {
            let myModal = new bootstrap.Modal(document.getElementById('modalKeranjang'));
            updateTampilanKeranjang();
            myModal.show();
        }

        // 4. Fungsi Mengosongkan Keranjang
        function kosongkanKeranjang() {
            if (confirm("Apakah Anda yakin ingin mengosongkan keranjang?")) {
                keranjang = [];
                simpanDanUpdate();
            }
        }

        // 5. LOGIKA UTAMA: Kirim Data ke WhatsApp
        function kirimKeWhatsApp() {
            if (keranjang.length === 0) {
                alert("Keranjang Anda masih kosong!");
                return;
            }

            // Menyusun format teks pesan WhatsApp
            let pesan = `Halo, saya ingin memesan produk berikut:\n\n`;
            let totalHargaSemua = 0;

            keranjang.forEach((item, index) => {
                let totalHargaProduk = item.harga * item.jumlah;
                totalHargaSemua += totalHargaProduk;
                pesan += `${index + 1}. *${item.nama}*\n   Jumlah: ${item.jumlah}x\n   Subtotal: Rp ${totalHargaProduk.toLocaleString('id-ID')}\n\n`;
            });

            pesan += `*Total Keseluruhan: Rp ${totalHargaSemua.toLocaleString('id-ID')}*\n\nMohon segera diproses ya, terima kasih!`;

            // Melakukan encode teks agar aman dibaca oleh URL browser
            let urlWhatsApp = `https://wa.me/${NOMOR_WHATSAPP}?text=${encodeURIComponent(pesan)}`;

            // Buka tab baru menuju WhatsApp beserta isi teks pesan otomatisnya
            window.open(urlWhatsApp, '_blank');
        }
    </script>

</body>

</html>