<?php
/** Desa Wonosari - Halaman APBN dan Infografis**/
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="APBN dan Infografis Keuangan - Desa Wonosari">
    <meta name="keywords" content="APBN, Keuangan, Desa Wonosari">
    <meta name="author" content="Pemerintah Desa Wonosari">
    <title>APBN - Desa Wonosari</title>
    
    <!-- Google Fonts: Figtree -->
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/Kendal Lite.png" sizes="any">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css?v=2.1">
    
    <!-- Custom Script -->
    <script src="script.js"></script>
    
    <style>
        .apbn-section {
            padding: var(--spacing-xl) 0;
            background-color: var(--color-white);
        }

        .apbn-header {
            text-align: center;
            margin-bottom: var(--spacing-xl);
            padding-top: 80px;
        }

        .apbn-header h2 {
            font-size: 2rem;
            color: var(--color-primary);
            margin-bottom: var(--spacing-sm);
            font-weight: 700;
        }

        .apbn-header p {
            font-size: 1rem;
            color: #666;
            margin: 0;
        }

        .apbn-table {
            background-color: var(--color-white);
            border-collapse: collapse;
            width: 100%;
            margin-bottom: var(--spacing-lg);
            border: 1px solid #ddd;
        }

        .apbn-table th,
        .apbn-table td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .apbn-table th {
            background-color: var(--color-primary);
            color: var(--color-white);
            font-weight: 700;
            font-size: 0.95rem;
        }

        .apbn-table tr:hover {
            background-color: #f9f9f9;
        }

        .apbn-table tr:last-child td {
            border-bottom: 2px solid var(--color-primary);
        }

        .apbn-category {
            font-weight: 700;
            color: var(--color-primary);
            background-color: var(--color-accent);
            padding: 12px 16px !important;
        }

        .apbn-category-title {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .apbn-category-title::before {
            content: '';
            display: none;
        }

        /* Level 1 Indentation */
        .apbn-level-1 {
            padding-left: 32px !important;
            font-weight: 500;
            background-color: #f5f5f5;
        }

        /* Level 2 Indentation */
        .apbn-level-2 {
            padding-left: 64px !important;
            font-weight: 400;
            color: #555;
        }

        /* Level 3 Indentation */
        .apbn-level-3 {
            padding-left: 96px !important;
            font-weight: 400;
            color: #666;
        }

        .apbn-value {
            text-align: right;
            font-weight: 500;
            color: var(--color-primary);
            font-family: var(--font-main);
            min-width: 150px;
        }

        .apbn-total {
            font-weight: 700;
            background-color: var(--color-primary);
            color: var(--color-white);
        }

        .apbn-total td {
            border: none;
            padding: 14px 16px;
        }

        .apbn-total .apbn-value {
            color: var(--color-white);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .apbn-header h2 {
                font-size: 1.5rem;
            }

            .apbn-table th,
            .apbn-table td {
                padding: 10px 12px;
                font-size: 0.9rem;
            }

            .apbn-value {
                font-size: 0.85rem;
                min-width: 120px;
            }

            .apbn-level-1 {
                padding-left: 24px !important;
            }

            .apbn-level-2 {
                padding-left: 48px !important;
            }

            .apbn-level-3 {
                padding-left: 72px !important;
            }
        }
    </style>
</head>
<body>
    <?php include 'components/navbar.php'; renderNavbar(); ?>

    <!-- APBN Section -->
    <main>
        <section class="apbn-section">
            <div class="container">
                <div class="apbn-header">
                    <h2>Infografis APBN Keuangan Desa Wonosari</h2>
                    <p>Tahun 2023</p>
                </div>

                <!-- APBN Table -->
                <table class="apbn-table">
                    <thead>
                        <tr>
                            <th>Bidang Pengeluaran</th>
                            <th class="apbn-value">Jumlah (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- PENYELENGGARAAN PEMERINTAHAN DESA -->
                        <tr class="apbn-category">
                            <td class="apbn-category-title">BIDANG PENYELENGGARAAN PEMERINTAHAN DESA</td>
                            <td class="apbn-value apbn-category">Rp. 752.798.391,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">1. Penyediaan Penghasilan Tetap dan Tunjangan Kepala Desa</td>
                            <td class="apbn-value">Rp. 43.200.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">2. Penyediaan Penghasilan Tetap dan Tunjangan Perangkat Desa</td>
                            <td class="apbn-value">Rp. 354.876.480,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">3. Penyediaan Jaminan Sosial Kepala Desa dan Perangkat Desa</td>
                            <td class="apbn-value">Rp. 24.864.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">4. Penyediaan Operasional Pemerintah Desa</td>
                            <td class="apbn-value">Rp. 46.995.932,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">5. Penyediaan Tunjangan BPD</td>
                            <td class="apbn-value">Rp. 43.200.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">6. Penyediaan Operasional BPD</td>
                            <td class="apbn-value">Rp. 4.470.592,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">7. Penyediaan Insentif Operasional Perangkat Desa</td>
                            <td class="apbn-value">Rp. 30.624.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">8. Penyediaan Operasional Pemerintahan Desa yang berhumbean per Dana Desa</td>
                            <td class="apbn-value">Rp. 29.556.450,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">9. Penyediaan Tambahan Tunjangan Kepala Desa (Hasil Pengelolaan Tanah Bengkok)</td>
                            <td class="apbn-value">Rp. 38.478.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">10. Penyediaan Tambahan Tunjangan Perangkat Desa (Hasil Pengelolaan Tanah Bengkok)</td>
                            <td class="apbn-value">Rp. 73.002.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">11. Penyediaan Sarana Permaintahan Desa (Rehab Kantor Sekdes dan Pengadaan Backdrop)</td>
                            <td class="apbn-value">Rp. 25.111.937,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">12. Penyediaan Administrasi Kepemilikan, Pencatatan Sertifikat dan Kecakapan</td>
                            <td class="apbn-value">Rp. 23.633.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">13. Penyelenggaraan pada Praja Pemerintahan, Perencanaan, Keuangan dan Pelaporan</td>
                            <td class="apbn-value">Rp. 14.784.000,00</td>
                        </tr>

                        <!-- PELAKSANAAN PEMBANGUNAN DESA -->
                        <tr class="apbn-category">
                            <td class="apbn-category-title">BIDANG PELAKSANAAN PEMBANGUNAN DESA</td>
                            <td class="apbn-value apbn-category">Rp. 1.550.315.700,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">a) Bidang Kesehatan</td>
                            <td class="apbn-value">Rp. 160.065.500,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-2">b) Bidang Pekerjaan Umum dan Penataan Ruang</td>
                            <td class="apbn-value">Rp. 1.390.250.200,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-3">1. Pembangunan Sarana Dusun Wilijen</td>
                            <td class="apbn-value">Rp. 200.000.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-3">2. Pembangunan Rabat Beton Jalan Dusun Mijen RT 1-5/I</td>
                            <td class="apbn-value">Rp. 204.101.200,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-3">3. Pembangunan Rabat Beton Jalan Dusun Krajan RT 02-03 RW 02</td>
                            <td class="apbn-value">Rp. 175.271.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-3">4. Pembangunan Rabat Beton Jalan Dusun Tanjung RT 01/05</td>
                            <td class="apbn-value">Rp. 62.125.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-3">5. Pembangunan Rabat Beton Jalan Dusun Pidik RT 01-02/06</td>
                            <td class="apbn-value">Rp. 86.453.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-3">6. Pembangunan Jalan Aspal RT Jalan RT 03 Desa Wonosari</td>
                            <td class="apbn-value">Rp. 85.000.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-3">7. Pembangunan Jembatan Dusun Mijen RT 03 RW 01</td>
                            <td class="apbn-value">Rp. 94.881.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-3">8. Pembangunan Talud Senderan Dusun Tanjung Tengahasi RT 03 RW 02</td>
                            <td class="apbn-value">Rp. 200.000.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-3">9. Pembangunan Talud Senderan Dusun Tanjung RT 03/05</td>
                            <td class="apbn-value">Rp. 200.000.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-3">10. Pembangunan Gedung Serba Guna</td>
                            <td class="apbn-value">Rp. 27.792.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-3">11. Pembangunan Gedung Serba Guna</td>
                            <td class="apbn-value">Rp. 59.627.000,00</td>
                        </tr>

                        <!-- PEMBINAAN KEMASYARAKATAN -->
                        <tr class="apbn-category">
                            <td class="apbn-category-title">BIDANG PEMBINAAN KEMASYARAKATAN</td>
                            <td class="apbn-value apbn-category">Rp. 32.145.863,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">1. Koordinasi Pembinaan Keamanan Ketertiban Perlindungan Masyarakat</td>
                            <td class="apbn-value">Rp. 5.313.330,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">2. Peningkatan Sarana Prasarana Kepemudaan dan Olah Raga</td>
                            <td class="apbn-value">Rp. 7.950.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">3. Pembinaan LPMD</td>
                            <td class="apbn-value">Rp. 1.800.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">4. Pembinaan PKK</td>
                            <td class="apbn-value">Rp. 12.312.533,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">5. Pembinaan dan Operasional KPMD</td>
                            <td class="apbn-value">Rp. 5.000.000,00</td>
                        </tr>

                        <!-- PEMBERDAYAAN MASYARAKAT -->
                        <tr class="apbn-category">
                            <td class="apbn-category-title">BIDANG PEMBERDAYAAN MASYARAKAT</td>
                            <td class="apbn-value apbn-category">Rp. 220.561.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">1. Pembangunan Lumbung Pangan Tahap 2-2</td>
                            <td class="apbn-value">Rp. 43.500.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">2. Pembangunan Jalan Pertanian Dusun Krajan II RT 03/02</td>
                            <td class="apbn-value">Rp. 53.475.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">3. Pembangunan Jalan Pertanian Dusun Pidik RT 02/04</td>
                            <td class="apbn-value">Rp. 106.086.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">4. Bimtek Siskuedes Kepala Desa TA 2024</td>
                            <td class="apbn-value">Rp. 3.500.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">5. Bimtek Siskuedes Kaur Keuangan, Kaur Perencanaan</td>
                            <td class="apbn-value">Rp. 10.500.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">6. Bimtek Siskuedes BPD Tahun Anggaran 2024</td>
                            <td class="apbn-value">Rp. 3.500.000,00</td>
                        </tr>

                        <!-- PENANGGULANGAN BENCANA, DARURAT DAN MENDESAK DESA -->
                        <tr class="apbn-category">
                            <td class="apbn-category-title">BIDANG PENANGGULANGAN BENCANA, DARURAT DAN MENDESAK DESA</td>
                            <td class="apbn-value apbn-category">Rp. 233.954.550,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">1. Kegiatan Penanggulangan Bencana COVID-19</td>
                            <td class="apbn-value">Rp. 4.520.000,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">2. Kegiatan Penanggulangan Bencana Tanggap Darurat</td>
                            <td class="apbn-value">Rp. 6.234.550,00</td>
                        </tr>
                        <tr>
                            <td class="apbn-level-1">3. Penangganan Keadaan Mendesak (BLT-DD)</td>
                            <td class="apbn-value">Rp. 223.200.000,00</td>
                        </tr>

                        <!-- TOTAL ROW -->
                        <tr class="apbn-total">
                            <td><strong>TOTAL ANGGARAN PENDAPATAN DAN BELANJA DESA</strong></td>
                            <td class="apbn-value"><strong>Rp. 3.190.175.504,00</strong></td>
                        </tr>
                    </tbody>
                </table>

                <div style="margin-top: var(--spacing-lg); padding: var(--spacing-lg); background-color: var(--color-accent); border-radius: 8px;">
                    <p style="margin: 0; color: var(--color-text); text-align: justify;">
                        <strong>Catatan:</strong> Data di atas masih tahun 2023, nanti minta data 2025 di Bu Endang
                    </p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; renderFooter(); ?>
</body>
</html>
