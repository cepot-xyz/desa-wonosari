<?php
/** Desa Wonosari - Halaman Sosial Budaya**/
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desa Wonosari - Informasi Sosial Budaya dan Organisasi Masyarakat">
    <meta name="keywords" content="Desa Wonosari, Sosial Budaya, Organisasi Masyarakat, Kemiskinan, Ormas">
    <meta name="author" content="Pemerintah Desa Wonosari">
    <title>Sosial Budaya - Desa Wonosari</title>
    
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
                    <h2>Sosial Budaya Desa Wonosari</h2>
                    <p>Informasi Kondisi Sosial, Budaya dan Organisasi Masyarakat</p>
                </div>
            </div>
        </section>

        <!-- Sosial Budaya Section -->
        <section id="sosial-budaya" class="sosial-budaya-section">
            <div class="container">
                <div class="sosial-budaya-content">
                    
                    <!-- Mata Pencaharian -->
                    <div class="sosial-budaya-card">
                        <h3><i class="bi bi-briefcase"></i> Mata Pencaharian Penduduk</h3>
                        <p>
                            Mayoritas mata pencaharian penduduk Desa Wonosari bergerak di bidang pertanian/perkebunan 
                            dan buruh bangunan. Kedua sektor ini menjadi tulang punggung ekonomi masyarakat lokal dan 
                            memberikan kontribusi signifikan terhadap perekonomian desa.
                        </p>
                    </div>

                    <!-- Permasalahan dan Peluang Kerja -->
                    <div class="sosial-budaya-card">
                        <h3><i class="bi bi-exclamation-circle"></i> Permasalahan Lapangan Pekerjaan</h3>
                        <p>
                            Permasalahan yang sering muncul berkaitan dengan mata pencaharian penduduk adalah terbatasnya 
                            lapangan pekerjaan yang sesuai dengan tingkat perkembangan penduduk. Hal lain yang perlu diperhatikan 
                            dalam pembangunan desa adalah melakukan usaha perluasan kesempatan kerja dengan melakukan penguatan 
                            modal dan fasilitasi sebagai modal untuk pengembangan usaha khususnya di ekonomi produktif.
                        </p>
                        
                        <!-- Strategi Pengembangan -->
                        <div class="strategy-grid">
                            <div class="strategy-item">
                                <div class="strategy-icon">
                                    <i class="bi bi-cash-coin"></i>
                                </div>
                                <div class="strategy-detail">
                                    <strong>Penguatan Modal</strong>
                                    <p>Penyediaan modal usaha untuk pengembangan ekonomi produktif</p>
                                </div>
                            </div>
                            <div class="strategy-item">
                                <div class="strategy-icon">
                                    <i class="bi bi-hand-thumbs-up"></i>
                                </div>
                                <div class="strategy-detail">
                                    <strong>Fasilitasi Usaha</strong>
                                    <p>Dukungan dan pendampingan dalam pengembangan usaha komunitas</p>
                                </div>
                            </div>
                            <div class="strategy-item">
                                <div class="strategy-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="strategy-detail">
                                    <strong>Perluasan Peluang Kerja</strong>
                                    <p>Menciptakan lebih banyak lapangan pekerjaan baru di komunitas</p>
                                </div>
                            </div>
                            <div class="strategy-item">
                                <div class="strategy-icon">
                                    <i class="bi bi-graph-up"></i>
                                </div>
                                <div class="strategy-detail">
                                    <strong>Peningkatan Taraf Ekonomi</strong>
                                    <p>Meningkatkan pendapatan dan kesejahteraan masyarakat secara berkelanjutan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tingkat Kemiskinan -->
                    <div class="sosial-budaya-card">
                        <h3><i class="bi bi-graph-down"></i> Pengurangan Tingkat Kemiskinan</h3>
                        <p>
                            Tingkat angka kemiskinan Desa Wonosari yang berangsur-angsur turun sehingga menjadikan 
                            Desa Wonosari memperoleh predikat desa berkembang. Dalam menurunkan kemiskinan, harus tetap 
                            mencari peluang lain yang dapat menunjang peningkatan taraf ekonomi masyarakat melalui berbagai 
                            program pembangunan yang terukur dan berkelanjutan.
                        </p>
                    </div>

                    <!-- Organisasi Masyarakat -->
                    <div class="sosial-budaya-card">
                        <h3><i class="bi bi-people-fill"></i> Organisasi Masyarakat (Ormas)</h3>
                        <p>
                            Banyaknya kegiatan Ormas di Desa Wonosari merupakan aset desa yang bermanfaat untuk dijadikan 
                            media penyampaian informasi dalam setiap proses pembangunan desa kepada masyarakat. Berbagai ormas 
                            aktif berkontribusi dalam pembangunan sosial dan ekonomi masyarakat.
                        </p>
                        
                        <!-- Daftar Ormas -->
                        <div class="ormas-list">
                            <div class="ormas-item">
                                <span class="ormas-badge">1</span>
                                <div class="ormas-info">
                                    <strong>Pemerintahan Dusun</strong>
                                    <p>Struktur pemerintahan tingkat dusun sebagai unit administratif terkecil</p>
                                </div>
                            </div>
                            <div class="ormas-item">
                                <span class="ormas-badge">2</span>
                                <div class="ormas-info">
                                    <strong>LPM (Lembaga Pemberdayaan Masyarakat)</strong>
                                    <p>Lembaga yang bergerak dalam pemberdayaan dan pengembangan masyarakat</p>
                                </div>
                            </div>
                            <div class="ormas-item">
                                <span class="ormas-badge">3</span>
                                <div class="ormas-info">
                                    <strong>PKK (Pemberdayaan Kesejahteraan Keluarga)</strong>
                                    <p>Program pemberdayaan keluarga terutama melibatkan ibu rumah tangga</p>
                                </div>
                            </div>
                            <div class="ormas-item">
                                <span class="ormas-badge">4</span>
                                <div class="ormas-info">
                                    <strong>Karang Taruna</strong>
                                    <p>Organisasi pemuda yang fokus pada pengembangan keterampilan dan kreativitas</p>
                                </div>
                            </div>
                            <div class="ormas-item">
                                <span class="ormas-badge">5</span>
                                <div class="ormas-info">
                                    <strong>Pokja Desa Sehat</strong>
                                    <p>Kelompok kerja untuk mewujudkan desa yang sehat dan bersih</p>
                                </div>
                            </div>
                            <div class="ormas-item">
                                <span class="ormas-badge">6</span>
                                <div class="ormas-info">
                                    <strong>Posyandu (Pos Pelayanan Terpadu)</strong>
                                    <p>Pusat layanan kesehatan ibu, bayi, dan anak di tingkat masyarakat</p>
                                </div>
                            </div>
                            <div class="ormas-item">
                                <span class="ormas-badge">7</span>
                                <div class="ormas-info">
                                    <strong>Kelompok Tani</strong>
                                    <p>Organisasi petani untuk peningkatan produksi dan teknologi pertanian</p>
                                </div>
                            </div>
                            <div class="ormas-item">
                                <span class="ormas-badge">8</span>
                                <div class="ormas-info">
                                    <strong>Kelompok Ternak</strong>
                                    <p>Organisasi peternak untuk pengembangan usaha peternakan yang produktif</p>
                                </div>
                            </div>
                            <div class="ormas-item">
                                <span class="ormas-badge">9</span>
                                <div class="ormas-info">
                                    <strong>Ormas Keagamaan</strong>
                                    <p>Organisasi sosial berbasis nilai-nilai keagamaan dan spiritual</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pembangunan Desa -->
                    <div class="sosial-budaya-card">
                        <h3><i class="bi bi-building"></i> Pembangunan Desa Berkelanjutan</h3>
                        <p>
                            Terkait dengan hal tersebut, sampai saat ini prasarana dan sarana desa merupakan salah satu 
                            pendukung pembangunan Desa. Pembangunan masyarakat desa diharapkan bersumber pada diri sendiri 
                            (kemandirian) dan perkembangan pembangunan harus berdampak pada perubahan sosial, ekonomi dan 
                            budaya yang seimbang agar dapat meningkatkan kualitas hidup masyarakat desa menjadi lebih baik.
                        </p>
                        
                        <!-- Pilar Pembangunan -->
                        <div class="development-grid">
                            <div class="development-item">
                                <strong>Kemandirian</strong>
                                <p>Pembangunan yang bersumber dari diri masyarakat sendiri</p>
                            </div>
                            <div class="development-item">
                                <strong>Perubahan Sosial</strong>
                                <p>Peningkatan kesadaran dan partisipasi masyarakat dalam pembangunan</p>
                            </div>
                            <div class="development-item">
                                <strong>Peningkatan Ekonomi</strong>
                                <p>Pertumbuhan ekonomi yang inklusif dan berkelanjutan</p>
                            </div>
                            <div class="development-item">
                                <strong>Pelestarian Budaya</strong>
                                <p>Menjaga dan mengembangkan nilai-nilai budaya lokal yang positif</p>
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
