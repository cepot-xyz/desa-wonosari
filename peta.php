<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta - Desa Wonosari</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .map-section {
            padding: var(--spacing-xl) var(--spacing-md);
        }
        
        .map-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }
        
        .map-wrapper {
            border-radius: 10px;
            padding: var(--spacing-lg);
        }
        
        .map-wrapper svg {
            width: 90%;
            height: auto;
            margin: 0 auto;
            display: block;
        }
        
        @media (max-width: 768px) {
            .map-wrapper {
                padding: var(--spacing-md);
            }
        }
    </style>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/Kendal Lite.png" sizes="any">
</head>
<body>
    <?php
    require_once 'components/navbar.php';
    renderNavbar();
    ?>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h2>Peta Desa Wonosari</h2>
                    <p>Visualisasi Wilayah dan Batasan Administratif Desa</p>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="map-section">
            <div class="map-container">
                <div class="map-wrapper">
                    <?php include 'assets/map.svg'; ?>
                </div>
            </div>
        </section>
    </main>

    <?php
    require_once 'components/footer.php';
    renderFooter();
    ?>
<script src="script.js"></script>
</body>
</html>
