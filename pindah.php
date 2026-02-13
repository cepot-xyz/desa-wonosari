<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desa Wonosari - Portal Informasi dan Administrasi Pemerintahan Desa">
    <title>Surat Keterangan Pindah - Desa Wonosari</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Favicon & CSS -->
    <link rel="icon" type="image/png" href="assets/Kendal Lite.png" sizes="any">
    <link rel="stylesheet" href="style.css?v=2.2">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <style>
        :root {
            --primary: #1e3a8a;
            --bg: #f8fafc;
            --text: #1e293b;
            --white: #ffffff;
            --border: #e2e8f0;
        }

        * { box-sizing: border-box; font-family: 'Figtree', sans-serif; }
        body { background-color: var(--bg); color: var(--text); line-height: 1.6; margin: 0; padding: 0; }
        
        main { padding-top: 20px; min-height: 80vh; }
        .container-form { max-width: 900px; margin: 0 auto; padding: 20px; }
        
        header.form-header { text-align: center; margin-bottom: 30px; }
        header.form-header h1 { font-weight: 700; color: var(--primary); margin-bottom: 5px; font-size: 1.8rem; }
        p.subtitle-form { color: #64748b; font-size: 0.9rem; }

        .card {
            background: var(--white);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            border: 1px solid var(--border);
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--border);
        }

        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        .form-group { display: flex; flex-direction: column; gap: 5px; }
        .full-width { grid-column: span 2; }
        
        label { font-weight: 600; font-size: 0.85rem; }
        input, select, textarea { padding: 10px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.95rem; }

        .btn-container { margin-top: 20px; display: flex; gap: 10px; }
        button { padding: 12px 20px; border-radius: 8px; border: none; cursor: pointer; font-weight: 600; transition: all 0.2s; }
        .btn-primary { background: var(--primary); color: white; width: 100%; }
        .btn-secondary { background: #e2e8f0; color: #475569; }

        #previewArea { display: none; }

        /* PDF Styles - Dioptimalkan untuk SKP */
        #pdfTemplate {
            display: none; 
            width: 210mm;
            padding: 15mm 20mm;
            background: white;
            color: black;
            font-family: 'Times New Roman', Times, serif !important;
        }

        #pdfTemplate * { font-family: 'Times New Roman', Times, serif !important; margin: 0; padding: 0; line-height: 1.4; }
        
        .pdf-header-kop { text-align: center; border-bottom: 3px double black; padding-bottom: 5px; margin-bottom: 15px; position: relative; }
        .pdf-header-kop h2 { font-size: 14pt; font-weight: bold; text-transform: uppercase; }
        .pdf-header-kop p { font-size: 10pt; font-style: italic; }

        .surat-title { text-align: center; margin-bottom: 20px; }
        .surat-title h3 { text-decoration: underline; font-size: 12pt; font-weight: bold; }
        .surat-title p { font-size: 11pt; margin-top: 2px; }

        .content-section { text-align: justify; font-size: 11pt; }
        .data-table { width: 100%; margin: 10px 0; border-collapse: collapse; }
        .data-table td { padding: 3px 0; vertical-align: top; font-size: 11pt; }
        
        .footer-pdf { margin-top: 40px; display: flex; justify-content: flex-end; }
        .ttd-box { width: 250px; text-align: center; font-size: 11pt; }
        
        .alert { background: #dcfce7; color: #166534; padding: 15px; border-radius: 8px; margin-bottom: 20px; display: none; text-align: center; }
    </style>
</head>
<body>

<?php include 'components/navbar.php'; renderNavbar(); ?>

<main>
    <div class="container-form">
        <header class="form-header">
            <h1><br>Layanan Surat Keterangan Pindah Kependudukan</h1>
        </header>

        <div id="successAlert" class="alert">Draft surat pindah berhasil dibuat!</div>

        <div id="formSection">
            <div class="card">
                <div class="section-title">Data Identitas Asal</div>
                <div class="form-grid">
                    <div class="form-group full-width"><label>Nama Lengkap</label><input type="text" id="nama" placeholder="Sesuai KTP/KK" required></div>
                    <div class="form-group"><label>NIK</label><input type="text" id="nik" maxlength="16" placeholder="16 Digit NIK" required></div>
                    <div class="form-group"><label>Nomor KK</label><input type="text" id="no_kk" maxlength="16" placeholder="16 Digit No. KK" required></div>
                    <div class="form-group"><label>Jenis Kelamin</label>
                        <select id="jk">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group"><label>Tempat, Tgl Lahir</label><input type="text" id="ttl" placeholder="Contoh: Kendal, 12-05-1990" required></div>
                    <div class="form-group"><label>Pekerjaan</label><input type="text" id="pekerjaan" required></div>
                    <div class="form-group full-width"><label>Alamat Asal</label><textarea id="alamat_asal" rows="2" placeholder="Dusun, RT/RW Desa Wonosari..."></textarea></div>
                </div>
            </div>

            <div class="card">
                <div class="section-title">Data Tujuan Pindah</div>
                <div class="form-grid">
                    <div class="form-group full-width"><label>Alamat Tujuan</label><input type="text" id="alamat_tujuan" placeholder="Jl. / Dusun / Nama Komplek" required></div>
                    <div class="form-group"><label>Desa/Kelurahan Tujuan</label><input type="text" id="desa_tujuan" required></div>
                    <div class="form-group"><label>Kecamatan Tujuan</label><input type="text" id="kec_tujuan" required></div>
                    <div class="form-group"><label>Kabupaten/Kota Tujuan</label><input type="text" id="kab_tujuan" required></div>
                    <div class="form-group"><label>Provinsi Tujuan</label><input type="text" id="prov_tujuan" required></div>
                    <div class="form-group"><label>Alasan Pindah</label>
                        <select id="alasan">
                            <option value="Pekerjaan">Pekerjaan</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Kesehatan">Kesehatan</option>
                            <option value="Perumahan">Perumahan</option>
                            <option value="Keluarga">Keluarga (Ikut Suami/Istri/Ortu)</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="btn-container">
                <button type="button" onclick="generatePreview()" class="btn-primary">Buat Draft SKP</button>
            </div>
        </div>

        <div id="previewArea">
            <div class="card">
                <h2 style="margin-top:0; color: var(--primary)">Pratinjau Surat Pindah</h2>
                <p>Data identitas dan tujuan pindah sudah diproses. Silahkan cek sebelum unduh.</p>
                <div class="btn-container">
                    <button onclick="backToForm()" class="btn-secondary">Edit Data</button>
                    <button onclick="downloadPDF()" class="btn-primary">Unduh PDF</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'components/footer.php'; renderFooter(); ?>

<!-- PDF TEMPLATE -->
<div id="pdfTemplate">
    <div class="pdf-header-kop">
        <h2>PEMERINTAH KABUPATEN KENDAL</h2>
        <h2>KECAMATAN PEGANDON</h2>
        <h2>KANTOR KEPALA DESA WONOSARI</h2>
        <p>Alamat: Jl. Desa Wonosari No. 01 Kode Pos 51357</p>
    </div>

    <div class="surat-title">
        <h3>SURAT KETERANGAN PINDAH</h3>
        <p>Nomor : 475 / <span id="pdf_no_urut">...</span> / II / 2024</p>
    </div>

    <div class="content-section">
        <p>Yang bertanda tangan di bawah ini Kepala Desa Wonosari Kecamatan Pegandon Kabupaten Kendal, menerangkan bahwa :</p>
        
        <table class="data-table" style="margin-left: 20px;">
            <tr><td width="160">Nama Lengkap</td><td width="15">:</td><td><strong id="pdf_nama"></strong></td></tr>
            <tr><td>NIK</td><td>:</td><td id="pdf_nik"></td></tr>
            <tr><td>Nomor KK</td><td>:</td><td id="pdf_no_kk"></td></tr>
            <tr><td>Tempat / Tgl. Lahir</td><td>:</td><td id="pdf_ttl"></td></tr>
            <tr><td>Jenis Kelamin</td><td>:</td><td id="pdf_jk"></td></tr>
            <tr><td>Pekerjaan</td><td>:</td><td id="pdf_kerja"></td></tr>
            <tr><td>Alamat Asal</td><td>:</td><td id="pdf_alamat_asal"></td></tr>
        </table>

        <p style="margin-top: 10px;">Akan pindah penduduk ke :</p>
        
        <table class="data-table" style="margin-left: 20px;">
            <tr><td width="160">Alamat Tujuan</td><td width="15">:</td><td id="pdf_tujuan_lengkap"></td></tr>
            <tr><td>Desa / Kelurahan</td><td>:</td><td id="pdf_tujuan_desa"></td></tr>
            <tr><td>Kecamatan</td><td>:</td><td id="pdf_tujuan_kec"></td></tr>
            <tr><td>Kabupaten / Kota</td><td>:</td><td id="pdf_tujuan_kab"></td></tr>
            <tr><td>Provinsi</td><td>:</td><td id="pdf_tujuan_prov"></td></tr>
            <tr><td>Alasan Pindah</td><td>:</td><td id="pdf_alasan"></td></tr>
        </table>

        <p style="margin-top: 15px;">Demikian Surat Keterangan Pindah ini diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya.</p>
    </div>

    <div class="footer-pdf">
        <div class="ttd-box">
            <p>Wonosari, <span id="pdf_tgl_skrg"></span></p>
            <p>Kepala Desa Wonosari</p>
            <br><br><br><br>
            <p><strong>( MUKALIL )</strong></p>
        </div>
    </div>
</div>

<script>
    function formatDate(date) {
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return date.toLocaleDateString('id-ID', options);
    }

    function generatePreview() {
        const data = {
            nama: document.getElementById('nama').value,
            nik: document.getElementById('nik').value,
            no_kk: document.getElementById('no_kk').value,
            ttl: document.getElementById('ttl').value,
            jk: document.getElementById('jk').value,
            kerja: document.getElementById('pekerjaan').value,
            alamat_asal: document.getElementById('alamat_asal').value,
            
            tujuan_lengkap: document.getElementById('alamat_tujuan').value,
            desa: document.getElementById('desa_tujuan').value,
            kec: document.getElementById('kec_tujuan').value,
            kab: document.getElementById('kab_tujuan').value,
            prov: document.getElementById('prov_tujuan').value,
            alasan: document.getElementById('alasan').value
        };

        const setVal = (id, val) => { if(document.getElementById(id)) document.getElementById(id).innerText = val; };
        
        setVal('pdf_nama', data.nama.toUpperCase());
        setVal('pdf_nik', data.nik);
        setVal('pdf_no_kk', data.no_kk);
        setVal('pdf_ttl', data.ttl);
        setVal('pdf_jk', data.jk);
        setVal('pdf_kerja', data.kerja);
        setVal('pdf_alamat_asal', data.alamat_asal);

        setVal('pdf_tujuan_lengkap', data.tujuan_lengkap);
        setVal('pdf_tujuan_desa', data.desa);
        setVal('pdf_tujuan_kec', data.kec);
        setVal('pdf_tujuan_kab', data.kab);
        setVal('pdf_tujuan_prov', data.prov);
        setVal('pdf_alasan', data.alasan);
        
        setVal('pdf_tgl_skrg', formatDate(new Date()));
        setVal('pdf_no_urut', Math.floor(Math.random() * 100).toString().padStart(3, '0'));

        document.getElementById('formSection').style.display = 'none';
        document.getElementById('previewArea').style.display = 'block';
        window.scrollTo(0,0);
    }

    function backToForm() {
        document.getElementById('formSection').style.display = 'block';
        document.getElementById('previewArea').style.display = 'none';
    }

    function downloadPDF() {
        const element = document.getElementById('pdfTemplate');
        element.style.display = 'block';
        
        const opt = {
            margin: 0,
            filename: 'SKP_' + document.getElementById('nama').value + '.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        };

        html2pdf().set(opt).from(element).save().then(() => {
            element.style.display = 'none';
            document.getElementById('successAlert').style.display = 'block';
            setTimeout(() => { document.getElementById('successAlert').style.display = 'none'; }, 5000);
        });
    }
</script>

</body>
</html>