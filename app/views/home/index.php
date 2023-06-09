<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduWeb</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <nav>
        <div class="nav-judul"><h1>EduWeb</h1></div>
        <div class="nav-center-items">
            <ul>
                <li>Comedy</li>
                <li>Course</li>
                <li>Article</li>
                <li>Testimonial</li>
            </ul>
        </div>
        <div class="nav-right-items">
            <ul>
                <li>
                    <div class="drop-down">
                        <p>ID</p> <img src="img/down-arrow.png" alt="">
                    </div>
                </li>
                <li><a href="<?=BASEURL?>/Logout"><button>Keluar</button></a></li>
            </ul>
        </div>
    </nav>
    <section class="hero">
        <div class="hero-left-side">
            <div class="judul">
                <p>Improve your skill with us</p>
            </div>
            <div class="content">
                <p>Tonton apa saja secara online dari komputer pribadi atau di perangkat yang terhubung ke Internet dan mendukung aplikasi Lucufix, dan gunakan download untuk menonton saat kamu di perjalanan dan tidak punya koneksi Internet.</p>
            </div>
        </div>
        <div class="hero-right-side">
            <div class="background-img">
                <img src="img/batman.png" alt="">
            </div>
        </div>
    </section>
    <section class="service">
        <div class="title-service"><p>Layanan Terbaik yang Tidak Mengecewakan</p></div>
        <div class="content-service">
            <div class="card">
                <div class="card-img">
                    <i class="fa-solid fa-tv"></i>
                </div>
                <div class="card-title">Tontonan langsung di Tv</div>
                <div class="card-content">Tonton di Smart TV, Playstation, Xbox, Chromecast, Apple TV, pemutar Blu-ray, dan banyak lagi.</div>
            </div>
            <div class="card">
                <div class="card-img">
                    <i class="fa-solid fa-tv"></i>
                </div>
                <div class="card-title">Download untuk offline</div>
                <div class="card-content">Tonton di Smart TV, Playstation, Xbox, Chromecast, Apple TV, pemutar Blu-ray, dan banyak lagi.</div>
            </div>
            <div class="card">
                <div class="card-img">
                    <i class="fas fa-share-alt-square"></i>
                </div>
                <div class="card-title">Akses berbagai perangkat</div>
                <div class="card-content">Tonton di Smart TV, Playstation, Xbox, Chromecast, Apple TV, pemutar Blu-ray, dan banyak lagi.</div>
            </div>
            <div class="card">
                <div class="card-img">
                    <i class="fas fa-robot"></i>
                </div>
                <div class="card-title">Buat profil untuk anak</div>
                <div class="card-content">Tonton di Smart TV, Playstation, Xbox, Chromecast, Apple TV, pemutar Blu-ray, dan banyak lagi.</div>
            </div>
            
        </div>
    </section>
    <section class="section3">
        <div class="section3-left-side">
            <div class="bayangan"></div>
            <div class="img">
                <img src="img/tv2.png" alt="">
            </div>
        </div>
        <div class="section3-right-side">
            <p>Tonton Film, Acara TV Tak Terbatas, dan Lebih Banyak Lagi</p>
        </div>
    </section>
    <section class="section4">
        <div class="section4-title">
            <p>Film dan Acara TV Populer Bulan Ini</p>
        </div>
        <div class="section4-button">
            <button>Lihat Semua</button>
        </div>
        <div class="section4-content">
            <div class="card">
                <div class="card-img">
                    <img src="img/peaky.jpeg" alt="">
                </div>
                <div class="card-title">Peaky Blinders</div>
                <div class="card-content">Crime, Drama</div>
                <div class="rating">
                    <img src="img/star.png" alt="">
                    <p>8.8/10 IMDb</p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="img/spiderman.jpeg" alt="">
                </div>
                <div class="card-title">Spider-Man: No Way Home</div>
                <div class="card-content">Action, Adventure, Fantasy</div>
                <div class="rating">
                    <img src="img/star.png" alt="">
                    <p>8.7/10 IMDb</p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="img/lol.jpeg" alt="">
                </div>
                <div class="card-title">Arcane: League of Legends</div>
                <div class="card-content">Animation, Action, Adventure</div>
                <div class="rating">
                    <img src="img/star.png" alt="">
                    <p>9.2/10 IMDb</p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="img//joker.jpeg" alt="">
                </div>
                <div class="card-title">Joker</div>
                <div class="card-content">Crime, Drama, Thriller</div>
                <div class="rating">
                    <img src="img/star.png" alt="">
                    <p>8.8/10 IMDb</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section6">
        <div class="title">
            <p>Pilih Paket yang Cocok Untukmu</p>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-title">Basic</div>
                <div class="card-price">Rp 120,000<span>/bulan</span></div>
                <div class="card-content">
                    <ul>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p> Ponsel, Tablet, Komputer, TV</p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p> No Adds</p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p> BAtalkan kapan saja</p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p> Kualitas vidio baik<p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p>Resolusi vidio 480p<p>
                            </div>
                        </li>
                        <li class="li-none">
                            <div class="none">
                               <p>Resolusi vidio 720p</p>
                            </div>
                        </li>
                        <li class="li-none">
                            <div class="none">
                               <p>Resolusi vidio 1020p</p>
                            </div>
                        </li>
                        <li class="li-none">
                            <div class="none">
                               <p>Resolusi 4K+HDR</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-button">Pilih Paket</div>
            </div>
            <div class="card pick">
                <div class="card-title">Standart</div>
                <div class="card-price">Rp 153,000<span>/bulan</span></div>
                <div class="card-content">
                    <ul>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p> Ponsel, Tablet, Komputer, TV</p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p> No Adds</p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p> Batalkan kapan saja</p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p>Kualitas bidio lebih baik<p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p>Resolusi 480p<p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p>Resolusi 720p<p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p>Resolusi 1080p<p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p>Kualitas bidio lebih baik<p>
                            </div>
                        </li>
                        <li class="li-none">
                            <div class="none">
                               <p>Resolusi 4K+HDR</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-button pick">Pilih Paket</div>
            </div>
            <div class="card">
                <div class="card-title">Premium</div>
                <div class="card-price">Rp 189,000<span>/bulan</span></div>
                <div class="card-content">
                    <ul>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p> Ponsel, Tablet, Komputer, TV</p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p> No Adds</p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p> Batalkan kapan saja</p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p>Kualitas bidio lebih baik<p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p>Resolusi 480p<p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p>Resolusi 720p<p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p>Resolusi 1080p<p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                               <p>Kualitas bidio lebih baik<p>
                            </div>
                        </li>
                        <li>
                            <div class="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Resolusi 4K+HDR</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-button">Pilih Paket</div>
            </div>
        </div>
    </section>
    <section class="section7">
        <div class="container">
            <div class="circle">
                <img src="img/telegram.png" alt="">
            </div>
            <div class="content">
                <div class="title"><p>Berlangganan Untuk Mendapatkan Informasi Terbaru dan Menjadi Anggota Kami</p></div>
                <div class="input">
                    <input type="email" placeholder="Enter your email">
                    <button type="submit">Berlangganan</button>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="content">
            <div class="brand">
                <h1>LUCUFIX</h1>
                <p>Layanan streaming tanpa iklan dan harga bulanan yang murah</p>
            </div>
            <div class="info">
                <div class="perusahaan">
                    <div class="judul">
                        <p>Perusahaan</p>
                    </div>
                    <div class="content">
                        <p>Tentang Kami</p>
                        <p>Hubungi Kami</p>
                        <p>Karir</p>
                        <p>Blog</p>
                    </div>
                </div>
                <div class="bantuan">
                    <div class="judul">
                        <p>Perusahaan</p>
                    </div>
                    <div class="content">
                        <p>FAQ</p>
                        <p>Pusat Bantuan</p>
                        <p>Akun</p>
                    </div>
                </div>
                <div class="lainnya">
                    <div class="judul">
                        <p>Perusahaan</p>
                    </div>
                    <div class="content">
                        <p>Tukar Kartu Hadiah</p>
                        <p>Lucufix Original</p>
                        <p>Media Center</p>
                    </div>
                </div>
            </div>
            <div class="sosial">
                <div class="judul">
                    <p>Dapatkan Aplikasi Kami</p>
                </div>
                <div class="content-store">
                    <div class="app-store">
                        <div class="app-store-img">
                            <img src="img/apple.png" alt="">
                        </div>
                        <div class="app-store-content">
                            <p>Download on the</p>
                            <h4>App Store</h4>
                        </div>
                    </div>
                    <div class="play-store">
                        <div class="app-store-img">
                            <img src="img/google-play.png" alt="">
                        </div>
                        <div class="app-store-content">
                            <p>Get It On</p>
                            <h4>Google Play</h4>
                        </div>
                    </div>
                </div>
                <div class="content-sosmed">
                    <p>a</p>
                    <p>a</p>
                    <p>a</p>
                </div>
            </div>
        </div>
        <div class="info">

        </div>
    </section>
</body>
</html>