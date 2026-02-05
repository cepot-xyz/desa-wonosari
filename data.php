<?php
/** Desa Wonosari - Halaman Data Ringkasan **/
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desa Wonosari - Data dan Informasi Komprehensif">
    <meta name="keywords" content="Desa Wonosari, Data, Geografis, Sosial Budaya, Ekonomi, Infrastruktur, Kependudukan">
    <meta name="author" content="Pemerintah Desa Wonosari">
    <title>Data - Desa Wonosari</title>
    
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
                    <h2>Data Desa Wonosari</h2>
                    <p>Informasi Komprehensif Tentang Kondisi Geografis, Sosial, Ekonomi, Infrastruktur, dan Kependudukan</p>
                </div>
            </div>
        </section>

        <!-- Geografis Section -->
        <section id="geografis" class="service-section">
            <div class="container">
                <div class="section-header">
                    <h2><i class="bi bi-geo-alt"></i> Geografis Desa</h2>
                    <p class="section-subtitle">Informasi Lokasi, Luas Wilayah, dan Kondisi Geografis</p>
                </div>
                
                <div class="service-grid">
                    <div class="service-card">
                        <h3>Lokasi Geografis</h3>
                        <p>Desa Wonosari merupakan satu dari 12 Desa yang berada di Kecamatan Pegandon Kabupaten Kendal. Desa ini berbatasan dengan Desa Puguh, Winong, dan Dawungsari. Jarak dari Ibu kota Kabupaten Kendal adalah 13,94 km dengan waktu tempuh sekitar 15 menit menggunakan kendaraan bermotor.</p>
                        <a href="geografis.php" class="btn-link">Baca Selengkapnya →</a>
                    </div>
                    
                    <div class="service-card">
                        <h3>Luas Wilayah</h3>
                        <p>Desa Wonosari memiliki luas wilayah 1.689 Ha dengan penggunaan lahan yang terdiri dari area hutan, permukiman, lahan pertanian, dan lahan lainnya. Wilayah ini tersebar di berbagai dusun termasuk Mijen, Krajan, Tanjung, Pidik dan dusun lainnya.</p>
                        <a href="geografis.php" class="btn-link">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sosial Budaya Section -->
        <section id="sosial-budaya" class="service-section alt-bg">
            <div class="container">
                <div class="section-header">
                    <h2><i class="bi bi-people-fill"></i> Sosial Budaya Desa</h2>
                    <p class="section-subtitle">Informasi Mata Pencaharian, Organisasi Masyarakat, dan Kehidupan Sosial</p>
                </div>
                
                <div class="service-grid">
                    <div class="service-card">
                        <h3>Mata Pencaharian Penduduk</h3>
                        <p>Mayoritas mata pencaharian penduduk Desa Wonosari bergerak di bidang pertanian/perkebunan dan buruh bangunan. Kedua sektor ini menjadi tulang punggung ekonomi masyarakat lokal dan memberikan kontribusi signifikan terhadap perekonomian desa dalam meningkatkan kesejahteraan keluarga.</p>
                        <a href="sosial-budaya.php" class="btn-link">Baca Selengkapnya →</a>
                    </div>
                    
                    <div class="service-card">
                        <h3>Organisasi Masyarakat</h3>
                        <p>Desa Wonosari memiliki berbagai organisasi masyarakat yang aktif dalam kegiatan sosial dan kemasyarakatan. Organisasi-organisasi ini berperan dalam pembinaan, pemberdayaan, dan peningkatan kapasitas masyarakat lokal untuk mencapai pembangunan yang berkelanjutan.</p>
                        <a href="sosial-budaya.php" class="btn-link">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ekonomi Section -->
        <section id="ekonomi" class="service-section">
            <div class="container">
                <div class="section-header">
                    <h2><i class="bi bi-graph-up"></i> Ekonomi Desa</h2>
                    <p class="section-subtitle">Informasi Sumber Daya Alam, Mata Pencaharian, dan Potensi Usaha</p>
                </div>
                
                <div class="service-grid">
                    <div class="service-card">
                        <h3>Sumber Daya Alam</h3>
                        <p>Kekayaan Sumber Daya Alam di Desa Wonosari sangat mendukung pengembangan ekonomi dan sosial budaya khususnya dari sektor pertanian/perkebunan dan pariwisata. Potensi sumber daya alam yang melimpah menjadi fondasi kuat dalam peningkatan kesejahteraan masyarakat desa.</p>
                        <a href="ekonomi.php" class="btn-link">Baca Selengkapnya →</a>
                    </div>
                    
                    <div class="service-card">
                        <h3>Pengembangan Usaha</h3>
                        <p>Masyarakat Desa Wonosari aktif mengembangkan berbagai usaha produktif di sektor pertanian, peternakan, dan industri kecil menengah. Pemerintah desa terus memberikan dukungan berupa fasilitasi, pelatihan, dan akses modal untuk mengembangkan usaha ekonomi produktif masyarakat.</p>
                        <a href="ekonomi.php" class="btn-link">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Infrastruktur Section -->
        <section id="infrastruktur" class="service-section alt-bg">
            <div class="container">
                <div class="section-header">
                    <h2><i class="bi bi-building"></i> Infrastruktur Desa</h2>
                    <p class="section-subtitle">Informasi Prasarana Pendidikan, Kesehatan, dan Fasilitas Umum</p>
                </div>
                
                <div class="service-grid">
                    <div class="service-card">
                        <h3>Prasarana Kesehatan</h3>
                        <p>Fasilitas kesehatan di Desa Wonosari tersedia untuk melayani dan menjaga kesehatan masyarakat secara optimal dengan jangkauan yang mudah diakses oleh seluruh warga desa. Terdapat Poskesdes, Posyandu, dan bidan desa yang siap memberikan pelayanan kesehatan kepada masyarakat.</p>
                        <a href="infrastruktur.php" class="btn-link">Baca Selengkapnya →</a>
                    </div>
                    
                    <div class="service-card">
                        <h3>Prasarana Pendidikan</h3>
                        <p>Fasilitas pendidikan di Desa Wonosari mencakup sekolah dasar, sekolah menengah, dan berbagai fasilitas pembelajaran lainnya yang mendukung akses pendidikan bagi seluruh anak-anak desa. Infrastruktur pendidikan yang memadai membantu peningkatan kualitas sumber daya manusia masyarakat desa.</p>
                        <a href="infrastruktur.php" class="btn-link">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kependudukan Section -->
        <section id="kependudukan" class="service-section">
            <div class="container">
                <div class="section-header">
                    <h2><i class="bi bi-diagram-3"></i> Kependudukan Desa</h2>
                    <p class="section-subtitle">Data Demografi, Statistik Penduduk, dan Karakteristik Masyarakat</p>
                </div>
                
                <div class="service-grid">
                    <div class="service-card">
                        <h3>Data Penduduk</h3>
                        <p>Desa Wonosari memiliki jumlah penduduk yang tersebar di berbagai kelompok umur dan jenis kelamin. Data kependudukan ini penting untuk perencanaan pembangunan dan pelayanan publik yang sesuai dengan kebutuhan demografi masyarakat desa yang dinamis.</p>
                        <a href="kependudukan.php" class="btn-link">Baca Selengkapnya →</a>
                    </div>
                    
                    <div class="service-card">
                        <h3>Pendidikan dan Capaian</h3>
                        <p>Tingkat pendidikan penduduk Desa Wonosari beragam mulai dari tingkat dasar hingga tingkat perguruan tinggi. Data ini menunjukkan capaian pembangunan sumber daya manusia dan komitmen masyarakat terhadap peningkatan kualitas hidup melalui pendidikan yang lebih baik.</p>
                        <a href="kependudukan.php" class="btn-link">Baca Selengkapnya →</a>
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
