<?php
/** Desa Wonosari - Halaman Kependudukan**/
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desa Wonosari - Informasi Data Kependudukan dan Demografi">
    <meta name="keywords" content="Desa Wonosari, Kependudukan, Demografi, Penduduk, Statistik">
    <meta name="author" content="Pemerintah Desa Wonosari">
    <title>Kependudukan - Desa Wonosari</title>
    
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
                    <h2>Kependudukan Desa Wonosari</h2>
                    <p>Data Demografi dan Statistik Penduduk</p>
                </div>
            </div>
        </section>

        <!-- Kependudukan Section -->
        <section id="kependudukan" class="kependudukan-section">
            <div class="container">
                <div class="kependudukan-content">
                    
                    <!-- Data Penduduk Berdasarkan Kelompok Umur -->
                    <div class="kependudukan-card">
                        <h3><i class="bi bi-people"></i> Data Penduduk Berdasarkan Kelompok Umur</h3>
                        <p>
                            Berikut adalah data statistik penduduk Desa Wonosari berdasarkan kelompok umur dan jenis kelamin 
                            pada Semester I Tahun 2022. Data ini menunjukkan distribusi demografi penduduk di Kecamatan Pegandon, 
                            Kabupaten Kendal.
                        </p>
                        
                        <!-- Tabel Kependudukan -->
                        <div class="table-wrapper">
                            <table class="kependudukan-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kelompok Umur</th>
                                        <th colspan="2">Laki-Laki</th>
                                        <th colspan="2">Perempuan</th>
                                        <th colspan="2">Jumlah</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>(jiwa)</th>
                                        <th>%</th>
                                        <th>(jiwa)</th>
                                        <th>%</th>
                                        <th>(jiwa)</th>
                                        <th>%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>0 - 4</td>
                                        <td>139</td>
                                        <td>3.72</td>
                                        <td>119</td>
                                        <td>3.19</td>
                                        <td>258</td>
                                        <td>6.91</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>5 - 9</td>
                                        <td>156</td>
                                        <td>4.18</td>
                                        <td>161</td>
                                        <td>4.31</td>
                                        <td>317</td>
                                        <td>8.49</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>10 - 14</td>
                                        <td>159</td>
                                        <td>4.26</td>
                                        <td>148</td>
                                        <td>3.96</td>
                                        <td>307</td>
                                        <td>8.22</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>15 - 19</td>
                                        <td>131</td>
                                        <td>3.51</td>
                                        <td>123</td>
                                        <td>3.29</td>
                                        <td>254</td>
                                        <td>6.80</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>20 - 24</td>
                                        <td>145</td>
                                        <td>3.88</td>
                                        <td>132</td>
                                        <td>3.53</td>
                                        <td>277</td>
                                        <td>7.41</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>25 - 29</td>
                                        <td>152</td>
                                        <td>4.07</td>
                                        <td>136</td>
                                        <td>3.64</td>
                                        <td>288</td>
                                        <td>7.71</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>30 - 34</td>
                                        <td>171</td>
                                        <td>4.58</td>
                                        <td>141</td>
                                        <td>3.77</td>
                                        <td>312</td>
                                        <td>8.35</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>35 - 39</td>
                                        <td>162</td>
                                        <td>4.34</td>
                                        <td>166</td>
                                        <td>4.44</td>
                                        <td>328</td>
                                        <td>8.78</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>40 - 44</td>
                                        <td>172</td>
                                        <td>4.60</td>
                                        <td>159</td>
                                        <td>4.26</td>
                                        <td>331</td>
                                        <td>8.86</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>45 - 49</td>
                                        <td>128</td>
                                        <td>3.43</td>
                                        <td>113</td>
                                        <td>3.02</td>
                                        <td>241</td>
                                        <td>6.45</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>50 - 54</td>
                                        <td>99</td>
                                        <td>2.65</td>
                                        <td>112</td>
                                        <td>3.00</td>
                                        <td>211</td>
                                        <td>5.65</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>55 - 59</td>
                                        <td>100</td>
                                        <td>2.68</td>
                                        <td>83</td>
                                        <td>2.22</td>
                                        <td>183</td>
                                        <td>4.90</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>60 - 64</td>
                                        <td>89</td>
                                        <td>2.38</td>
                                        <td>85</td>
                                        <td>2.28</td>
                                        <td>174</td>
                                        <td>4.66</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>65 - 69</td>
                                        <td>62</td>
                                        <td>1.66</td>
                                        <td>60</td>
                                        <td>1.61</td>
                                        <td>122</td>
                                        <td>3.27</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>70 - 74</td>
                                        <td>28</td>
                                        <td>0.75</td>
                                        <td>46</td>
                                        <td>1.23</td>
                                        <td>74</td>
                                        <td>1.98</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>≥ 75</td>
                                        <td>31</td>
                                        <td>0.83</td>
                                        <td>28</td>
                                        <td>0.75</td>
                                        <td>59</td>
                                        <td>1.58</td>
                                    </tr>
                                    <tr class="total-row">
                                        <td colspan="2"><strong>JUMLAH</strong></td>
                                        <td><strong>1.924</strong></td>
                                        <td><strong>51.50</strong></td>
                                        <td><strong>1.812</strong></td>
                                        <td><strong>48.50</strong></td>
                                        <td><strong>3.736</strong></td>
                                        <td><strong>100.00</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p style="margin-top: var(--spacing-lg); font-size: 0.85rem; color: #999; text-align: center;">
                            <em>Sumber: Data Demografi Desa Wonosari Semester I Tahun 2022</em>
                        </p>
                    </div>

                    <!-- Informasi Demografi -->
                    <div class="kependudukan-card">
                        <h3><i class="bi bi-info-circle"></i> Informasi Demografi</h3>
                        
                        <div class="demo-grid">
                            <div class="demo-item">
                                <strong>Total Penduduk</strong>
                                <p class="demo-value">3.736 jiwa</p>
                            </div>
                            <div class="demo-item">
                                <strong>Laki-Laki</strong>
                                <p class="demo-value">1.924 jiwa (51.50%)</p>
                            </div>
                            <div class="demo-item">
                                <strong>Perempuan</strong>
                                <p class="demo-value">1.812 jiwa (48.50%)</p>
                            </div>
                            <div class="demo-item">
                                <strong>Kelompok Umur Terbanyak</strong>
                                <p class="demo-value">40 - 44 Tahun (331 jiwa)</p>
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
