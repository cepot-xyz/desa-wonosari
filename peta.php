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
        
        .map-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--color-primary);
            margin-bottom: var(--spacing-lg);
        }
        
        .map-wrapper {
            /* background-color: var(--color-light-gray); */
            border-radius: 10px;
            padding: var(--spacing-lg);
            /* box-shadow: 0 2px 8px rgba(0, 31, 63, 0.1); */
        }
        
        .map-wrapper svg {
            width: 90%;
            height: auto;
            margin: 0 auto;
            display: block;
        }
        
        @media (max-width: 768px) {
            .map-title {
                font-size: 1.5rem;
            }
            
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
        <section class="map-section">
            <div class="map-container">
                <h2 class="map-title">Peta Desa Wonosari</h2>
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
</body>
</html>
