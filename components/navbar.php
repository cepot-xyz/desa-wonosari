<?php
/**
 * Navbar Component
 * Handles navigation bar rendering
 */

function renderNavbar() {
    ?>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container">
            <img src="assets/Kendal.png" alt="Logo Kendal" class="nav-logo" height="50">
            <div class="nav-brand">
                <a href="index.php" style="text-decoration: none;color: #fff;" class="brand-link">
                    <div class="brand-text">
                        <h1>Desa Wonosari</h1>
                        <p class="subtitle">Kecamatan Pegandon, Kabupaten Kendal, Jawa Tengah.</p>
                    </div>
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <ul class="nav-menu desktop-menu">
                <li class="nav-dropdown">
                    <a href="#" class="nav-link">Profil</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Profil Desa</a>
                        <a href="#" class="dropdown-item">Visi Misi</a>
                        <a href="#" class="dropdown-item">Sejarah</a>
                        <a href="peta.php" class="dropdown-item">Peta</a>
                        <a href="#" class="dropdown-item">Peraturan</a>
                    </div>
                </li>
                <li class="nav-dropdown">
                    <a href="#" class="nav-link">Data</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Kependidikan</a>
                        <a href="#" class="dropdown-item">Kependudukan</a>
                        <a href="#" class="dropdown-item">Harga Pokok</a>
                        <a href="#" class="dropdown-item">Kemiskinan</a>
                        <a href="#" class="dropdown-item">Perkembangan</a>
                    </div>
                </li>
                <li class="nav-dropdown">
                    <a href="#" class="nav-link">Layanan Kependudukan</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Pembuatan KK</a>
                        <a href="#" class="dropdown-item">Akta Kelahiran</a>
                        <a href="#" class="dropdown-item">Akta Kematian</a>
                        <a href="#" class="dropdown-item">Pindah Kependudukan</a>
                        <a href="#" class="dropdown-item">Datang Kependudukan</a>
                    </div>
                </li>
                <li class="nav-dropdown">
                    <a href="#" class="nav-link">Surat Menyurat</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Pengantar SKCK</a>
                        <a href="#" class="dropdown-item">Surat Kehilangan</a>
                        <a href="#" class="dropdown-item">Keterangan Usaha</a>
                    </div>
                </li>
                <li><a href="apbn.php" class="nav-link">APBN</a></li>
                <li class="nav-dropdown">
                    <a href="kabar.php" class="nav-link">Kabar</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Berita</a>
                        <a href="#" class="dropdown-item">Agenda</a>
                        <a href="#" class="dropdown-item">Kegiatan</a>
                    </div>
                </li>
                <li class="nav-dropdown">
                    <a href="#" class="nav-link">Wisata</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Kolam Renang</a>
                        <a href="#" class="dropdown-item">Mini Soccer</a>
                        <a href="#" class="dropdown-item">Cafe</a>
                    </div>
                </li>
                <li class="nav-dropdown">
                    <a href="#" class="nav-link">Potensi</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Bursa Inovasi</a>
                        <a href="#" class="dropdown-item">Potensi Usaha</a>
                    </div>
                </li>
            </ul>
            
            <!-- Hamburger Menu -->
            <div class="hamburger" id="hamburgerBtn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Mobile Navigation Menu -->
    <div class="mobile-nav" id="mobileNav">
        <ul class="nav-menu mobile-menu">
            <li><a href="index.php" class="nav-link">Beranda</a></li>
            <li class="nav-dropdown">
                <a href="#" class="nav-link dropdown-toggle">Layanan Kependudukan</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Pembuatan Kartu Keluarga</a>
                    <a href="#" class="dropdown-item">Pembuatan Akta Kelahiran</a>
                    <a href="#" class="dropdown-item">Pembuatan Akta Kematian</a>
                    <a href="#" class="dropdown-item">Pelayanan Pindah Kependudukan</a>
                    <a href="#" class="dropdown-item">Pelayanan Datang Kependudukan</a>
                </div>
            </li>
            <li class="nav-dropdown">
                <a href="#" class="nav-link dropdown-toggle">Layanan Surat Menyurat</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Surat Pengantar SKCK</a>
                    <a href="#" class="dropdown-item">Surat Kehilangan</a>
                    <a href="#" class="dropdown-item">Surat Keterangan Usaha</a>
                </div>
            </li>
            <li><a href="apbn.php" class="nav-link">Infografis APBN</a></li>
            <li class="nav-dropdown">
                <a href="kabar.php" class="nav-link dropdown-toggle">Kabar</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Berita</a>
                    <a href="#" class="dropdown-item">Agenda</a>
                    <a href="#" class="dropdown-item">Kegiatan</a>
                </div>
            </li>
            <li class="nav-dropdown">
                <a href="#" class="nav-link dropdown-toggle">Profil</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Profil Desa</a>
                    <a href="#" class="dropdown-item">Visi Misi</a>
                    <a href="#" class="dropdown-item">Sejarah</a>
                    <a href="peta.php" class="dropdown-item">Peta</a>
                    <a href="#" class="dropdown-item">Peraturan</a>
                </div>
            </li>
            <li class="nav-dropdown">
                <a href="#" class="nav-link dropdown-toggle">Data</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Kependidikan</a>
                    <a href="#" class="dropdown-item">Kependudukan</a>
                    <a href="#" class="dropdown-item">Harga Pokok</a>
                    <a href="#" class="dropdown-item">Kemiskinan</a>
                    <a href="#" class="dropdown-item">Perkembangan</a>
                </div>
            </li>
            <li><a href="#wisata" class="nav-link">Wisata</a></li>
            <li class="nav-dropdown">
                <a href="#" class="nav-link dropdown-toggle">Potensi</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Bursa Inovasi</a>
                    <a href="#" class="dropdown-item">Potensi Usaha</a>
                </div>
            </li>
        </ul>
    </div>
    <?php
}
?>
