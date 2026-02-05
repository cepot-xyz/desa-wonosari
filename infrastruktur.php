<?php
/** Desa Wonosari - Halaman Infrastruktur Desa**/
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desa Wonosari - Informasi Infrastruktur Desa dan Prasarana Umum">
    <meta name="keywords" content="Desa Wonosari, Infrastruktur, Prasarana, Pendidikan, Kesehatan">
    <meta name="author" content="Pemerintah Desa Wonosari">
    <title>Infrastruktur Desa - Desa Wonosari</title>
    
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
                    <h2>Infrastruktur Desa Wonosari</h2>
                    <p>Informasi Kondisi Infrastruktur dan Prasarana Pendukung</p>
                </div>
            </div>
        </section>

        <!-- Infrastruktur Section -->
        <section id="infrastruktur" class="infrastruktur-section">
            <div class="container">
                <div class="infrastruktur-content">
                    
                    <!-- Pengenalan -->
                    <div class="infrastruktur-card">
                        <h3><i class="bi bi-building"></i> Pengenalan Infrastruktur Desa</h3>
                        <p>
                            Pembangunan masyarakat desa diharapkan bersumber pada diri sendiri (kemandirian) dan 
                            perkembangan pembangunan harus berdampak pada perubahan sosial, ekonomi dan budaya yang 
                            seimbang agar dapat meningkatkan kualitas hidup masyarakat desa menjadi lebih baik. Infrastruktur 
                            yang tersedia menjadi fondasi penting untuk mendukung kehidupan masyarakat di berbagai aspek.
                        </p>
                    </div>

                    <!-- Prasarana Kesehatan -->
                    <div class="infrastruktur-card">
                        <h3><i class="bi bi-hospital"></i> Prasarana Kesehatan</h3>
                        <p>
                            Fasilitas kesehatan di Desa Wonosari tersedia untuk melayani dan menjaga kesehatan masyarakat 
                            secara optimal dengan jangkauan yang mudah diakses oleh seluruh warga desa.
                        </p>
                        
                        <!-- Tabel Prasarana Kesehatan -->
                        <div class="table-wrapper">
                            <table class="infra-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Prasarana</th>
                                        <th>Jumlah</th>
                                        <th>Satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Puskesmas Pembantu</td>
                                        <td>-</td>
                                        <td>unit</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Posyandu</td>
                                        <td>6</td>
                                        <td>Tempat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Poskesdes (Pos Kesehatan Desa)</td>
                                        <td>1</td>
                                        <td>unit</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Bidan Desa</td>
                                        <td>1</td>
                                        <td>orang</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Tenaga Kesehatan Desa Siaga</td>
                                        <td>1</td>
                                        <td>orang</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Prasarana Pendidikan -->
                    <div class="infrastruktur-card">
                        <h3><i class="bi bi-book"></i> Prasarana Pendidikan</h3>
                        <p>
                            Fasilitas pendidikan di Desa Wonosari mencakup berbagai tingkatan dari anak usia dini hingga 
                            pendidikan menengah pertama untuk mendukung aksesibilitas pendidikan bagi seluruh masyarakat desa.
                        </p>
                        
                        <!-- Tabel Prasarana Pendidikan -->
                        <div class="table-wrapper">
                            <table class="infra-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Prasarana</th>
                                        <th>Jumlah</th>
                                        <th>Satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Taman Kanak-kanak / TK / PAUD / Kelompok Bermain</td>
                                        <td>3</td>
                                        <td>unit</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>SD (Sekolah Dasar) Negeri</td>
                                        <td>3</td>
                                        <td>unit</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>SMP (Sekolah Menengah Pertama) Negeri</td>
                                        <td>1</td>
                                        <td>unit</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>MDA / TPQ (Madrasah Diniyah / Taman Pendidikan Quran)</td>
                                        <td>4</td>
                                        <td>unit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Prasarana Umum Lainnya -->
                    <div class="infrastruktur-card">
                        <h3><i class="bi bi-calendar-event"></i> Prasarana Umum Lainnya</h3>
                        <p>
                            Hasil pembangunan lainnya mencakup fasilitas ibadah, olahraga, dan ruang publik yang mendukung 
                            kehidupan sosial masyarakat serta aktivitas keagamaan dan rekreasi.
                        </p>
                        
                        <!-- Tabel Prasarana Umum -->
                        <div class="table-wrapper">
                            <table class="infra-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Prasarana</th>
                                        <th>Jumlah</th>
                                        <th>Satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Masjid</td>
                                        <td>4</td>
                                        <td>unit</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mushola</td>
                                        <td>16</td>
                                        <td>unit</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Majelis Taklim</td>
                                        <td>1</td>
                                        <td>unit</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Lapangan Olahraga (Sepak Bola)</td>
                                        <td>1</td>
                                        <td>unit</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Lapangan Olahraga (Volley)</td>
                                        <td>3</td>
                                        <td>unit</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Lapangan Olahraga (Futsal)</td>
                                        <td>1</td>
                                        <td>unit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Pengelolaan Sarana dan Prasarana -->
                    <div class="infrastruktur-card">
                        <h3><i class="bi bi-gear"></i> Pengelolaan Sarana dan Prasarana</h3>
                        <p>
                            Pengelolaan sarana dan prasarana merupakan tahap keberlanjutan yang dimulai dengan proses 
                            penyiapan masyarakat agar mampu melanjutkan pengelolaan program pembangunan secara mandiri. 
                            Proses penyiapan ini membutuhkan keterlibatan masyarakat, agar masyarakat mampu menghasilkan 
                            keputusan pembangunan yang rasional dan adil serta semakin sadar akan hak dan kewajibannya.
                        </p>
                        <p>
                            Masyarakat diharapkan mampu memenuhi kebutuhannya sendiri dan mampu mengelola berbagai potensi 
                            sumber daya yang ada dalam rangka meningkatkan kesejahteraannya secara berkelanjutan.
                        </p>
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
