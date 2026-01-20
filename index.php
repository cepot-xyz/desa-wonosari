<?php
/** Desa Wonosari - Portal Informasi dan Administrasi**/
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desa Wonosari - Portal Informasi dan Administrasi Pemerintahan Desa">
    <meta name="keywords" content="Desa Wonosari, Administrasi, Kelahiran, Kematian, Pernikahan">
    <meta name="author" content="Pemerintah Desa Wonosari">
    <title>Desa Wonosari - Portal Informasi</title>
    
    <!-- Google Fonts: Figtree -->
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/Kendal Lite.png" sizes="any">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css?v=2.1">
</head>
<body>
    <?php include 'components/navbar.php'; renderNavbar(); ?>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="beranda" class="hero">
            <div class="container">
                <div class="hero-content">
                    <h2>Selamat Datang di Desa Wonosari</h2>
                    <p>Pusat Informasi dan Layanan Administrasi Pemerintahan Desa</p>
                    <div class="hero-buttons">
                        <a href="#kelahiran" class="btn btn-primary">Layanan Kependudukan</a>
                        <a href="#kematian" class="btn btn-secondary">Data & Infografis Desa</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kelahiran Section -->
        <section id="kelahiran" class="service-section">
            <div class="container">
                <div class="section-header">
                    <h2>Layanan Kelahiran</h2>
                    <p class="section-subtitle">Pendaftaran dan Informasi Kelahiran</p>
                </div>
                
                <div class="service-grid">
                    <div class="service-card">
                        <div class="card-icon"><i class="bi bi-clipboard-heart"></i></div>
                        <h3>Pendaftaran Kelahiran</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn-link">Pelajari Lebih Lanjut →</a>
                    </div>
                    
                    <div class="service-card">
                        <div class="card-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h3>Syarat & Ketentuan</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn-link">Pelajari Lebih Lanjut →</a>
                    </div>
                    
                    <div class="service-card">
                        <div class="card-icon"><i class="bi bi-calendar-event"></i></div>
                        <h3>Jadwal Pelayanan</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn-link">Pelajari Lebih Lanjut →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Layanan Kematian -->
        <section id="kematian" class="service-section alt-bg">
            <div class="container">
                <div class="section-header">
                    <h2>Layanan Surat Kematian</h2>
                    <p class="section-subtitle">Pelayanan Surat Kematian</p>
                </div>
                
                <div class="service-grid">
                    <div class="service-card">
                        <div class="card-icon"><i class="bi bi-pencil-square"></i></div>
                        <h3>Layanan Akta Kematian</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn-link">Pelajari Lebih Lanjut →</a>
                    </div>
                    
                    <div class="service-card">
                        <div class="card-icon"><i class="bi bi-check-circle"></i></div>
                        <h3>Lorem Ipsum Dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn-link">Pelajari Lebih Lanjut →</a>
                    </div>
                    
                    <div class="service-card">
                        <div class="card-icon"><i class="bi bi-telephone"></i></div>
                        <h3>Hubungi Kami</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn-link">Pelajari Lebih Lanjut →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pernikahan Section -->
        <section id="pernikahan" class="service-section">
            <div class="container">
                <div class="section-header">
                    <h2>Layanan Pernikahan</h2>
                    <p class="section-subtitle">Pendaftaran dan Informasi Pernikahan</p>
                </div>
                
                <div class="service-grid">
                    <div class="service-card">
                        <div class="card-icon"><i class="bi bi-heart"></i></div>
                        <h3>Pendaftaran Pernikahan</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn-link">Pelajari Lebih Lanjut →</a>
                    </div>
                    
                    <div class="service-card">
                        <div class="card-icon"><i class="bi bi-file-pdf"></i></div>
                        <h3>Dokumen Diperlukan</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn-link">Pelajari Lebih Lanjut →</a>
                    </div>
                    
                    <div class="service-card">
                        <div class="card-icon"><i class="bi bi-calendar2-check"></i></div>
                        <h3>Reservasi Pendaftaran</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn-link">Pelajari Lebih Lanjut →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Menu 4 Section -->
        <section id="menu4" class="service-section alt-bg">
            <div class="container">
                <div class="section-header">
                    <h2>Layanan Umum</h2>
                    <p class="section-subtitle">Berbagai Layanan dari Pemerintah Desa</p>
                </div>
                
                <div class="service-grid">
                    <div class="service-card">
                        <div class="card-icon"><i class="bi bi-house"></i></div>
                        <h3>Surat Keterangan Domisili</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn-link">Pelajari Lebih Lanjut →</a>
                    </div>
                    
                    <div class="service-card">
                        <div class="card-icon"><i class="bi bi-mortarboard"></i></div>
                        <h3>Surat Keterangan Sekolah</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn-link">Pelajari Lebih Lanjut →</a>
                    </div>
                    
                    <div class="service-card">
                        <div class="card-icon"><i class="bi bi-graph-up"></i></div>
                        <h3>Surat Keterangan Penghasilan</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn-link">Pelajari Lebih Lanjut →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Menu 6 Section -->
        <section id="menu6" class="service-section alt-bg">
            <div class="container">
                <div class="section-header">
                    <h2>Hubungi Kami</h2>
                    <p class="section-subtitle">Informasi Kontak Pemerintah Desa Wonosari</p>
                </div>
                
                <div class="contact-grid">
                    <div class="contact-card">
                        <div class="contact-icon"><i class="bi bi-geo-alt"></i></div>
                        <h3>Alamat</h3>
                        <p>Jl. Raya Desa Wonosari<br>Kecamatan [Nama Kecamatan]<br>Kabupaten [Nama Kabupaten]</p>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
                        <h3>Telepon</h3>
                        <p>(0291) XXX-XXXX<br>Lorem ipsum dolor sit amet</p>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon"><i class="bi bi-envelope"></i></div>
                        <h3>Email</h3>
                        <p>info@wonosari.desa.id<br>admin@wonosari.desa.id</p>
                    </div>
                </div>

                <div class="contact-form">
                    <h3>Kirim Pesan</h3>
                    <form id="contactForm">
                        <input type="text" placeholder="Nama Anda" required>
                        <input type="email" placeholder="Email Anda" required>
                        <textarea placeholder="Pesan Anda" rows="5" required></textarea>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; renderFooter(); ?>

    <!-- Custom JavaScript -->
    <script src="script.js?v=2.1"></script>
</body>
</html>
