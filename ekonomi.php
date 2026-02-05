<?php
/** Desa Wonosari - Halaman Ekonomi Desa**/
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desa Wonosari - Informasi Ekonomi Desa dan Sumber Daya Alam">
    <meta name="keywords" content="Desa Wonosari, Ekonomi, Pertanian, Industri Kecil, Usaha">
    <meta name="author" content="Pemerintah Desa Wonosari">
    <title>Ekonomi Desa - Desa Wonosari</title>
    
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
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h2>Ekonomi Desa Wonosari</h2>
                    <p>Informasi Kondisi Ekonomi dan Pengembangan Usaha</p>
                </div>
            </div>
        </section>

        <!-- Ekonomi Section -->
        <section id="ekonomi" class="ekonomi-section">
            <div class="container">
                <div class="ekonomi-content">
                    
                    <!-- Sumber Daya Alam -->
                    <div class="ekonomi-card">
                        <h3><i class="bi bi-gem"></i> Kekayaan Sumber Daya Alam</h3>
                        <p>
                            Kekayaan Sumber Daya Alam yang ada di Desa Wonosari sangat mendukung baik dari segi 
                            pengembangan ekonomi maupun sosial budaya khususnya dari sektor pertanian/perkebunan dan 
                            Pariwisata. Potensi sumber daya alam yang melimpah menjadi fondasi kuat dalam peningkatan 
                            kesejahteraan masyarakat desa.
                        </p>
                    </div>

                    <!-- Mata Pencaharian Utama -->
                    <div class="ekonomi-card">
                        <h3><i class="bi bi-briefcase"></i> Mata Pencaharian Penduduk</h3>
                        <p>
                            Sebagian besar mata pencaharian penduduk Desa Wonosari adalah petani/pekebun, buruh bangunan, 
                            dan buruh harian lepas. Masyarakat aktif memanfaatkan lahan pertanian dan bercocok tanam untuk 
                            memenuhi kebutuhan ekonomi keluarga mereka.
                        </p>
                        
                        <!-- Grid Mata Pencaharian -->
                        <div class="income-grid">
                            <div class="income-item">
                                <div class="income-icon">
                                    <i class="bi bi-flower1"></i>
                                </div>
                                <div class="income-detail">
                                    <strong>Petani/Pekebun</strong>
                                    <p>Sektor pertanian dan perkebunan</p>
                                </div>
                            </div>
                            <div class="income-item">
                                <div class="income-icon">
                                    <i class="bi bi-hammer"></i>
                                </div>
                                <div class="income-detail">
                                    <strong>Buruh Bangunan</strong>
                                    <p>Sektor konstruksi dan bangunan</p>
                                </div>
                            </div>
                            <div class="income-item">
                                <div class="income-icon">
                                    <i class="bi bi-briefcase"></i>
                                </div>
                                <div class="income-detail">
                                    <strong>Buruh Harian Lepas</strong>
                                    <p>Berbagai sektor lapangan kerja</p>
                                </div>
                            </div>
                            <div class="income-item">
                                <div class="income-icon">
                                    <i class="bi bi-shop"></i>
                                </div>
                                <div class="income-detail">
                                    <strong>Peternak</strong>
                                    <p>Usaha peternakan tradisional</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Industri Kecil dan Usaha -->
                    <div class="ekonomi-card">
                        <h3><i class="bi bi-tools"></i> Industri Kecil dan Usaha Lokal</h3>
                        <p>
                            Selain dari sektor pertanian, sebagian penduduk juga mengembangkan sektor industri kecil dan 
                            usaha lokal yang memberikan kontribusi signifikan terhadap perekonomian desa. Usaha-usaha ini 
                            merupakan inisiatif masyarakat dalam meningkatkan pendapatan dan menciptakan lapangan kerja.
                        </p>
                        
                        <!-- Daftar Usaha -->
                        <div class="business-list">
                            <div class="business-item">
                                <span class="business-badge">1</span>
                                <div class="business-info">
                                    <strong>Pembuatan Emping Pisang</strong>
                                    <p>Produk olahan berbasis pisang lokal</p>
                                </div>
                            </div>
                            <div class="business-item">
                                <span class="business-badge">2</span>
                                <div class="business-info">
                                    <strong>Pembuatan Kacang Kletik</strong>
                                    <p>Makanan tradisional yang populer di masyarakat</p>
                                </div>
                            </div>
                            <div class="business-item">
                                <span class="business-badge">3</span>
                                <div class="business-info">
                                    <strong>Usaha Panggang Ayam/Itik</strong>
                                    <p>Usaha kuliner dengan produk unggulan lokal</p>
                                </div>
                            </div>
                            <div class="business-item">
                                <span class="business-badge">4</span>
                                <div class="business-info">
                                    <strong>Usaha Perbengkelan</strong>
                                    <p>Layanan perbaikan dan perawatan kendaraan</p>
                                </div>
                            </div>
                            <div class="business-item">
                                <span class="business-badge">5</span>
                                <div class="business-info">
                                    <strong>Jasa Lainnya</strong>
                                    <p>Berbagai layanan jasa dari masyarakat lokal</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Potensi Pengembangan -->
                    <div class="ekonomi-card">
                        <h3><i class="bi bi-graph-up"></i> Potensi Pengembangan Ekonomi</h3>
                        <p>
                            Desa Wonosari memiliki potensi besar untuk pengembangan ekonomi melalui:
                        </p>
                        
                        <div class="potential-grid">
                            <div class="potential-item">
                                <strong>Pariwisata</strong>
                                <p>Pengembangan sektor pariwisata melalui potensi alam dan budaya lokal</p>
                            </div>
                            <div class="potential-item">
                                <strong>Pertanian Modern</strong>
                                <p>Penerapan teknologi pertanian untuk peningkatan produktivitas</p>
                            </div>
                            <div class="potential-item">
                                <strong>UMKM</strong>
                                <p>Pengembangan Usaha Mikro Kecil Menengah oleh masyarakat</p>
                            </div>
                            <div class="potential-item">
                                <strong>Kolaborasi Antar Usaha</strong>
                                <p>Jaringan dan kerjasama antar pengusaha lokal</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; renderFooter(); ?>

    <!-- Custom JavaScript -->
    <script src="script.js"></script>
</body>
</html>
