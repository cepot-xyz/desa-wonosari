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
    <title>APBDES - Desa Wonosari</title>
    
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
            color: #999;
            margin: 0;
        }

        /* Summary Cards */
        .apbn-summary {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--spacing-lg);
            margin-bottom: var(--spacing-xl);
        }

        .apbn-card {
            background: linear-gradient(135deg, var(--color-primary) 0%, #005da6 100%);
            padding: var(--spacing-lg);
            border-radius: 8px;
            color: white;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .apbn-card h3 {
            font-size: 0.85rem;
            color: rgba(255,255,255,0.9);
            margin: 0 0 var(--spacing-md) 0;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .apbn-card .amount {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            margin: 0;
        }

        /* Rincian Sections */
        .apbn-rincian {
            margin-bottom: var(--spacing-xl);
            background: white;
            padding: var(--spacing-lg);
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
        }

        .apbn-rincian-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: var(--spacing-lg);
            padding-bottom: var(--spacing-md);
            border-bottom: 3px solid var(--color-primary);
        }

        .apbn-rincian-title h3 {
            margin: 0;
            color: var(--color-primary);
            font-size: 1.2rem;
            font-weight: 700;
        }

        .apbn-rincian-title i {
            color: var(--color-primary);
            font-size: 1.5rem;
        }

        .apbn-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: var(--spacing-md) 0;
            border-bottom: 1px solid #eee;
            font-size: 0.95rem;
        }

        .apbn-item:last-child {
            border-bottom: none;
        }

        .apbn-item-label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #333;
            flex: 1;
        }

        .apbn-item-label i {
            color: var(--color-primary);
            font-size: 1rem;
        }

        .apbn-item-value {
            color: var(--color-primary);
            font-weight: 600;
            min-width: 160px;
            text-align: right;
        }

        .apbn-subtotal {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: var(--spacing-md) 0;
            margin-top: var(--spacing-md);
            padding-top: var(--spacing-md);
            border-top: 2px solid var(--color-primary);
            font-weight: 700;
            color: var(--color-primary);
        }

        .apbn-subtotal-value {
            min-width: 160px;
            text-align: right;
        }

        .apbn-category-section {
            margin: var(--spacing-lg) 0;
            padding: var(--spacing-md) 0 var(--spacing-md) var(--spacing-lg);
            border-left: 3px solid var(--color-accent);
        }

        .apbn-category-section-title {
            font-weight: 700;
            color: var(--color-primary);
            margin-bottom: var(--spacing-sm);
            font-size: 0.95rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .apbn-header h2 {
                font-size: 1.5rem;
            }

            .apbn-summary {
                grid-template-columns: 1fr;
                gap: var(--spacing-md);
            }

            .apbn-card {
                padding: var(--spacing-md);
            }

            .apbn-card .amount {
                font-size: 1.5rem;
            }

            .apbn-item {
                flex-direction: column;
                align-items: flex-start;
                gap: var(--spacing-sm);
            }

            .apbn-item-value {
                align-self: flex-end;
            }

            .apbn-rincian {
                padding: var(--spacing-md);
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
                    <h2>Anggaran Pendapatan Belanja Desa (APBDES) Tahun 2024</h2>
                </div>

                <!-- Summary Cards -->
                <div class="apbn-summary">
                    <div class="apbn-card">
                        <h3>JUMLAH PENDAPATAN</h3>
                        <p class="amount">Rp 1.952.276.541,00</p>
                    </div>
                    <div class="apbn-card">
                        <h3>JUMLAH BELANJA</h3>
                        <p class="amount">Rp 1.932.468.535,00</p>
                    </div>
                    <div class="apbn-card">
                        <h3>JUMLAH PEMBIAYAAN</h3>
                        <p class="amount">Rp 9.808.006,00</p>
                    </div>
                </div>

                <!-- Rincian Pendapatan -->
                <div class="apbn-rincian">
                    <div class="apbn-rincian-title">
                        <i class="bi bi-wallet2"></i>
                        <h3>Rincian Pendapatan</h3>
                    </div>

                    <div class="apbn-category-section">
                        <div class="apbn-category-section-title">PENDAPATAN ASLI DESA</div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Hasil Usaha</span>
                            </div>
                            <div class="apbn-item-value">Rp. 0,00</div>
                        </div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Hasil Aset</span>
                            </div>
                            <div class="apbn-item-value">Rp. 111.480.000,00</div>
                        </div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Pendapatan Lain-lain</span>
                            </div>
                            <div class="apbn-item-value">Rp. 124.912.000,00</div>
                        </div>
                    </div>

                    <div class="apbn-category-section">
                        <div class="apbn-category-section-title">PENDAPATAN TRANSFER</div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Dana Desa</span>
                            </div>
                            <div class="apbn-item-value">Rp. 997.319.000,00</div>
                        </div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Hasil Pajak</span>
                            </div>
                            <div class="apbn-item-value">Rp. 58.963.541,00</div>
                        </div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Alokasi Dana Desa</span>
                            </div>
                            <div class="apbn-item-value">Rp. 459.602.000,00</div>
                        </div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Bantuan Provinsi</span>
                            </div>
                            <div class="apbn-item-value">Rp. 200.000.000,00</div>
                        </div>
                    </div>

                    <div class="apbn-subtotal">
                        <span><i class="bi bi-calculator"></i> Jumlah Pendapatan</span>
                        <span class="apbn-subtotal-value">Rp. 1.952.276.541,00</span>
                    </div>
                </div>

                <!-- Rincian Belanja Desa -->
                <div class="apbn-rincian">
                    <div class="apbn-rincian-title">
                        <i class="bi bi-credit-card"></i>
                        <h3>Rincian Belanja Desa</h3>
                    </div>

                    <div class="apbn-category-section">
                        <div class="apbn-category-section-title">BELANJA DESA</div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Belanja Penyelenggaraan</span>
                            </div>
                            <div class="apbn-item-value">Rp. 674.656.535,00</div>
                        </div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Pembangunan</span>
                            </div>
                            <div class="apbn-item-value">Rp. 776.935.000,00</div>
                        </div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Belanja Pembinaan</span>
                            </div>
                            <div class="apbn-item-value">Rp. 44.397.000,00</div>
                        </div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Belanja Pemberdayaan</span>
                            </div>
                            <div class="apbn-item-value">Rp. 334.045.000,00</div>
                        </div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Belanja Penanggulangan Bencana</span>
                            </div>
                            <div class="apbn-item-value">Rp. 102.435.000,00</div>
                        </div>
                    </div>

                    <div class="apbn-subtotal">
                        <span><i class="bi bi-calculator"></i> Jumlah Belanja</span>
                        <span class="apbn-subtotal-value">Rp. 1.932.468.535,00</span>
                    </div>

                    <div style="margin-top: var(--spacing-lg); padding-top: var(--spacing-lg); border-top: 1px dashed #ddd;">
                        <div class="apbn-item">
                            <div class="apbn-item-label" style="font-weight: 600;">
                                <i class="bi bi-exclamation-circle-fill"></i>
                                <span>Siltap</span>
                            </div>
                            <div class="apbn-item-value" style="font-weight: 700;">Rp. 578.694.650,00</div>
                        </div>
                    </div>
                </div>

                <!-- Rincian Pembiayaan Desa -->
                <div class="apbn-rincian">
                    <div class="apbn-rincian-title">
                        <i class="bi bi-bank"></i>
                        <h3>Rincian Pembiayaan Desa</h3>
                    </div>

                    <div class="apbn-category-section">
                        <div class="apbn-category-section-title">PEMBIAYAAN DESA</div>
                        <div class="apbn-item">
                            <div class="apbn-item-label">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Penerimaan Pembiayaan</span>
                            </div>
                            <div class="apbn-item-value"></div>
                        </div>
                        <div class="apbn-item" style="padding-left: var(--spacing-lg);">
                            <div class="apbn-item-label">
                                <span>Pengeluaran</span>
                            </div>
                            <div class="apbn-item-value">Rp. 5.191.994,00</div>
                        </div>
                        <div class="apbn-item" style="padding-left: var(--spacing-lg);">
                            <div class="apbn-item-label">
                                <span>Pembiayaan</span>
                            </div>
                            <div class="apbn-item-value">Rp. 25.000.000,00</div>
                        </div>
                    </div>

                    <div class="apbn-subtotal">
                        <span><i class="bi bi-calculator"></i> Jumlah Pembiayaan</span>
                        <span class="apbn-subtotal-value">Rp. 9.808.006,00</span>
                    </div>

                    <div style="margin-top: var(--spacing-lg); padding-top: var(--spacing-lg); border-top: 1px dashed #ddd;">
                        <div class="apbn-item">
                            <div class="apbn-item-label" style="font-weight: 600; color: #999;">
                                <span>SISA ANGGARAN</span>
                            </div>
                            <div class="apbn-item-value" style="font-weight: 700; color: #999;">Rp. 0,00</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; renderFooter(); ?>
</body>
</html>
