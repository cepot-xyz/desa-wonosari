<?php
/** Desa Wonosari - Portal Informasi dan Administrasi**/
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Berita & Agenda - Desa Wonosari">
    <meta name="keywords" content="Berita, Agenda, Desa Wonosari">
    <meta name="author" content="Pemerintah Desa Wonosari">
    <title>Berita & Agenda - Desa Wonosari</title>
    
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
        <!-- Menu 5 Section -->
        <section id="menu5" class="service-section">
            <div class="container">
                <div class="section-header">
                    <h2>Berita & Agenda</h2>
                    <p class="section-subtitle">Informasi Terkini dari Desa Wonosari</p>
                </div>
                
                <div class="news-grid">
                    <article class="news-card">
                        <div class="news-date">29 Des 2025</div>
                        <h3>Rapat Koordinasi Pembangunan Desa</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <a href="#" class="btn-link">Baca Selengkapnya →</a>
                    </article>
                    
                    <article class="news-card">
                        <div class="news-date">25 Des 2025</div>
                        <h3>Program Kesehatan Masyarakat Desa</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <a href="#" class="btn-link">Baca Selengkapnya →</a>
                    </article>
                    
                    <article class="news-card">
                        <div class="news-date">20 Des 2025</div>
                        <h3>Pengumuman Penting untuk Warga</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <a href="#" class="btn-link">Baca Selengkapnya →</a>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; renderFooter(); ?>

    <!-- Custom JavaScript -->
    <script src="script.js"></script>
</body>
</html>
