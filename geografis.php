<?php
/** Desa Wonosari - Halaman Geografis**/
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desa Wonosari - Informasi Geografis dan Kondisi Wilayah">
    <meta name="keywords" content="Desa Wonosari, Geografis, Wilayah, Administrasi">
    <meta name="author" content="Pemerintah Desa Wonosari">
    <title>Geografis - Desa Wonosari</title>
    
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
                    <h2>Geografis Desa Wonosari</h2>
                    <p>Informasi Kondisi Geografis dan Administrasi Wilayah</p>
                </div>
            </div>
        </section>

        <!-- Geografis Section -->
        <section id="geografis" class="geografis-section">
            <div class="container">
                <div class="geografis-content">
                    
                    <!-- Lokasi Geografis -->
                    <div class="geografis-card">
                        <h3><i class="bi bi-geo-alt"></i> Lokasi Geografis</h3>
                        <p>
                            Desa Wonosari merupakan satu dari 12 Desa yang berada di Kecamatan Pegandon Kabupaten Kendal. 
                            Desa Wonosari berbatasan dengan sebelah barat Desa Puguh Kecamatan Pegandon, sebelah utara Desa 
                            Winong Kecamatan Ngampel dan Desa Dawungsari Kecamatan Pegandon, sebelah timur Desa Winong 
                            Kecamatan Ngampel dan sebelah selatan berbatasan dengan wilayah Kawedanan Selokaton. 
                            Jarak wilayah Desa Wonosari dari Ibu kota Kabupaten Kendal adalah 13,94 km sedangkan jarak Desa 
                            ke Kecamatan Pegandon + 3.39 Km, Lama tempuh ke Kecamatan sekitar 15 Menit dengan kecepatan 
                            rata – rata 60km/jam menggunakan kendaraan bermotor.
                        </p>
                    </div>

                    <!-- Luas Wilayah -->
                    <div class="geografis-card">
                        <h3><i class="bi bi-map"></i> Luas Wilayah</h3>
                        <p>
                            Desa Wonosari memiliki luas wilayah <strong>1.689 Ha</strong> dengan rincian penggunaan lahan 
                            sebagai berikut:
                        </p>
                        
                        <!-- Tabel Luas Wilayah -->
                        <div class="table-wrapper">
                            <table class="geografis-table">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Jenis Kawasan</th>
                                        <th>Luas Lahan</th>
                                        <th>Satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kawasan Hutan</td>
                                        <td>1.456,3</td>
                                        <td>Hektar</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="7">2</td>
                                        <td>Permukiman Warga</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left: 40px;">- Dusun Mijen</td>
                                        <td>10,50</td>
                                        <td>Hektar</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left: 40px;">- Dusun Krajan 1</td>
                                        <td>8,41</td>
                                        <td>Hektar</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left: 40px;">- Dusun Krajan 2</td>
                                        <td>5,90</td>
                                        <td>Hektar</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left: 40px;">- Dusun Tegalsari</td>
                                        <td>13,40</td>
                                        <td>Hektar</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left: 40px;">- Dusun Tanjung</td>
                                        <td>5,70</td>
                                        <td>Hektar</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left: 40px;">- Dusun Pidik</td>
                                        <td>11,10</td>
                                        <td>Hektar</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding-left: 40px;">- exs Dusun Penggung</td>
                                        <td>13,5</td>
                                        <td>Hektar</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ladang Gogo</td>
                                        <td>80,30</td>
                                        <td>Hektar</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Ladang Tegalan</td>
                                        <td>36,77</td>
                                        <td>Hektar</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Lahan Sawah Kering</td>
                                        <td>30,40</td>
                                        <td>Hektar</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Lahan Kebon</td>
                                        <td>16,91</td>
                                        <td>Hektar</td>
                                    </tr>
                                    <tr class="total-row">
                                        <td colspan="2"><strong>Total Luas Wilayah</strong></td>
                                        <td><strong>1.689</strong></td>
                                        <td><strong>Hektar</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Kondisi Geografis -->
                    <div class="geografis-card">
                        <h3><i class="bi bi-compass"></i> Kondisi Geografis</h3>
                        <p>
                            Pusat pemerintahan Desa Wonosari terletak di Dusun Mijen dan untuk menuju Kantor Desa dapat 
                            dijangkau dengan kendaraan atau jalan kaki karena berada di jalan poros Desa.
                        </p>
                        <div class="info-grid">
                            <div class="info-item">
                                <strong>Ketinggian dari Permukaan Air Laut</strong>
                                <p>+ 45 m DPL</p>
                            </div>
                            <div class="info-item">
                                <strong>Curah Hujan</strong>
                                <p>200 – 400 mm/tahun</p>
                            </div>
                        </div>
                    </div>

                    <!-- Pembagian Administratif -->
                    <div class="geografis-card">
                        <h3><i class="bi bi-building"></i> Pembagian Administratif</h3>
                        <p>
                            Secara administratif Desa Wonosari terbagi atas 6 dusun dengan penjelasan sebagai berikut:
                        </p>
                        <div class="administratif-list">
                            <div class="administratif-item">
                                <span class="badge">1</span>
                                <div class="detail">
                                    <strong>Dusun Mijen</strong>
                                    <p>1 RW dan 5 RT</p>
                                </div>
                            </div>
                            <div class="administratif-item">
                                <span class="badge">2</span>
                                <div class="detail">
                                    <strong>Dusun Krajan I</strong>
                                    <p>1 RW dan 3 RT</p>
                                </div>
                            </div>
                            <div class="administratif-item">
                                <span class="badge">3</span>
                                <div class="detail">
                                    <strong>Dusun Krajan II</strong>
                                    <p>1 RW dan 3 RT</p>
                                </div>
                            </div>
                            <div class="administratif-item">
                                <span class="badge">4</span>
                                <div class="detail">
                                    <strong>Dusun Tegalsari</strong>
                                    <p>1 RW dan 7 RT</p>
                                </div>
                            </div>
                            <div class="administratif-item">
                                <span class="badge">5</span>
                                <div class="detail">
                                    <strong>Dusun Tanjung</strong>
                                    <p>1 RW dan 4 RT</p>
                                </div>
                            </div>
                            <div class="administratif-item">
                                <span class="badge">6</span>
                                <div class="detail">
                                    <strong>Dusun Pidik</strong>
                                    <p>1 RW dan 4 RT</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Jarak Dusun -->
                    <div class="geografis-card">
                        <h3><i class="bi bi-pin-map"></i> Jarak Masing-masing Dusun dari Kantor Desa</h3>
                        <p>
                            Jarak geografis masing-masing dusun diukur dari balai Desa Wonosari sangat variatif karena 
                            keadaan geografis desa Wonosari sebagian besar memiliki batas dengan perhutani:
                        </p>
                        
                        <div class="distance-list">
                            <!-- <div class="distance-item">
                                <div class="distance-name">Dusun Mijen</div>
                                <div class="distance-value">0 km</div>
                            </div> -->
                            <div class="distance-item">
                                <div class="distance-name">Dusun Krajan I</div>
                                <div class="distance-value">500 m</div>
                            </div>
                            <div class="distance-item">
                                <div class="distance-name">Dusun Krajan II</div>
                                <div class="distance-value">790 m</div>
                            </div>
                            <div class="distance-item">
                                <div class="distance-name">Dusun Tegalsari</div>
                                <div class="distance-value">2,38 km</div>
                            </div>
                            <div class="distance-item">
                                <div class="distance-name">Dusun Tanjung</div>
                                <div class="distance-value">2,45 km</div>
                            </div>
                            <div class="distance-item">
                                <div class="distance-name">Dusun Pidik</div>
                                <div class="distance-value">3,1 km</div>
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
