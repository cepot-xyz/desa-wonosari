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
                    <a href="index.php" class="nav-link">Profil</a>
                    <div class="dropdown-menu">
                        <a href="visi-misi.php" class="dropdown-item">Visi Misi</a>
                        <a href="sejarah.php" class="dropdown-item">Sejarah</a>
                        <a href="peta.php" class="dropdown-item">Peta</a>
                        <a href="peraturan.php" class="dropdown-item">Peraturan</a>
                    </div>
                </li>
                <li><a href="data.php" class="nav-link">Data</a></li>
                <li class="nav-dropdown">
                    <a href="#" class="nav-link">Layanan Kependudukan</a>
                    <div class="dropdown-menu">
                        <a href="kk.php" class="dropdown-item">Pembuatan KK</a>
                        <a href="kelahiran.php" class="dropdown-item">Akta Kelahiran</a>
                        <a href="kematian.php" class="dropdown-item">Akta Kematian</a>
                        <a href="pindah.php" class="dropdown-item">Pindah Kependudukan</a>
                        <a href="datang.php" class="dropdown-item">Datang Kependudukan</a>
                    </div>
                </li>
                <li class="nav-dropdown">
                    <a href="#" class="nav-link">Surat Menyurat</a>
                    <div class="dropdown-menu">
                        <a href="skck.php" class="dropdown-item">Pengantar SKCK</a>
                        <a href="kehilangan.php" class="dropdown-item">Surat Kehilangan</a>
                        <a href="usaha.php" class="dropdown-item">Keterangan Usaha</a>
                        <a href="sktm.php" class="dropdown-item">Keterangan Miskin</a>
                    </div>
                </li>
                <li><a href="apbdes.php" class="nav-link">APBDES</a></li>
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
            <li class="nav-dropdown">
                <a href="index.php" class="nav-link">Profil</a>
                <div class="dropdown-menu">
                    <a href="visi-misi.php" class="dropdown-item">Visi Misi</a>
                    <a href="sejarah.php" class="dropdown-item">Sejarah</a>
                    <a href="peta.php" class="dropdown-item">Peta</a>
                    <a href="peraturan.php" class="dropdown-item">Peraturan</a>
                </div>
            </li>
            <li><a href="data.php" class="nav-link">Data</a></li>
            <li class="nav-dropdown">
                <a href="#" class="nav-link">Layanan Kependudukan</a>
                <div class="dropdown-menu">
                    <a href="kk.php" class="dropdown-item">Pembuatan KK</a>
                    <a href="kelahiran.php" class="dropdown-item">Akta Kelahiran</a>
                    <a href="kematian.php" class="dropdown-item">Akta Kematian</a>
                    <a href="pindah.php" class="dropdown-item">Pindah Kependudukan</a>
                    <a href="datang.php" class="dropdown-item">Datang Kependudukan</a>
                </div>
            </li>
            <li class="nav-dropdown">
                <a href="#" class="nav-link">Surat Menyurat</a>
                <div class="dropdown-menu">
                    <a href="skck.php" class="dropdown-item">Pengantar SKCK</a>
                    <a href="kehilangan.php" class="dropdown-item">Surat Kehilangan</a>
                    <a href="usaha.php" class="dropdown-item">Keterangan Usaha</a>
                    <a href="sktm.php" class="dropdown-item">Keterangan Miskin</a>
                </div>
            </li>
            <li><a href="apbdes.php" class="nav-link">APBDES</a></li>
        </ul>
    </div>
    <?php
}
?>
