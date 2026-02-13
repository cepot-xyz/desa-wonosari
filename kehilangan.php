<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desa Wonosari - Portal Informasi dan Administrasi Pemerintahan Desa">
    <title>Surat Keterangan Kehilangan - Desa Wonosari</title>
    
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

        /* PDF Styles */
        #pdfTemplate {
            display: none; 
            width: 210mm;
            padding: 15mm 20mm;
            background: white;
            color: black;
            font-family: 'Times New Roman', Times, serif !important;
        }

        #pdfTemplate * { font-family: 'Times New Roman', Times, serif !important; margin: 0; padding: 0; line-height: 1.5; }
        
        .pdf-header-kop { text-align: center; border-bottom: 3px double black; padding-bottom: 5px; margin-bottom: 15px; }
        .pdf-header-kop h2 { font-size: 14pt; font-weight: bold; text-transform: uppercase; }
        .pdf-header-kop p { font-size: 10pt; font-style: italic; }

        .surat-title { text-align: center; margin-bottom: 25px; }
        .surat-title h3 { text-decoration: underline; font-size: 12pt; font-weight: bold; }
        .surat-title p { font-size: 11pt; margin-top: 2px; }

        .content-section { text-align: justify; font-size: 11pt; }
        .data-table { width: 100%; margin: 10px 0; border-collapse: collapse; }
        .data-table td { padding: 5px 0; vertical-align: top; font-size: 11pt; }
        
        .list-kehilangan { margin-left: 35px; margin-top: 5px; margin-bottom: 10px; }
        .list-kehilangan li { padding-left: 5px; }

        .footer-pdf { margin-top: 50px; display: flex; justify-content: flex-end; }
        .ttd-box { width: 250px; text-align: center; font-size: 11pt; }
        
        .alert { background: #dcfce7; color: #166534; padding: 15px; border-radius: 8px; margin-bottom: 20px; display: none; text-align: center; }
    </style>
</head>
<body>

<?php 
if(file_exists('components/navbar.php')) {
    include 'components/navbar.php'; 
    if(function_exists('renderNavbar')) renderNavbar();
}
?>

<main>
    <div class="container-form">
        <header class="form-header">
            <h1><br>Layanan Surat Kehilangan</h1>
        </header>

        <div id="successAlert" class="alert">Draft surat kehilangan berhasil dibuat!</div>

        <div id="formSection">
            <div class="card">
                <div class="section-title">Data Pelapor</div>
                <div class="form-grid">
                    <div class="form-group full-width"><label>Nama Lengkap</label><input type="text" id="nama" placeholder="Contoh: AHMAD SUBARI" required></div>
                    <div class="form-group"><label>Nomor HP / Telepon</label><input type="text" id="phone" placeholder="Contoh: 081234567890" required></div>
                    <div class="form-group full-width"><label>Alamat Lengkap</label><textarea id="alamat" rows="2" placeholder="RT 01 / RW 02 Desa Wonosari..."></textarea></div>
                </div>
            </div>

            <div class="card">
                <div class="section-title">Rincian Kehilangan</div>
                <div class="form-grid">
                    <div class="form-group full-width">
                        <label>Barang/Dokumen yang Hilang (Satu per baris)</label>
                        <textarea id="barang_hilang" rows="4" placeholder="Contoh:&#10;1 (satu) buah KTP Asli atas nama sendiri&#10;1 (satu) buah Kartu Keluarga Asli"></textarea>
                    </div>
                </div>
            </div>

            <div class="btn-container">
                <button type="button" onclick="generatePreview()" class="btn-primary">Buat Draft Surat</button>
            </div>
        </div>

        <div id="previewArea">
            <div class="card">
                <h2 style="margin-top:0; color: var(--primary)">Pratinjau Surat Kehilangan</h2>
                <p>Data pelapor: Nama, Alamat, dan No. HP.</p>
                <div class="btn-container">
                    <button onclick="backToForm()" class="btn-secondary">Edit Data</button>
                    <button onclick="downloadPDF()" class="btn-primary">Unduh PDF</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php 
if(file_exists('components/footer.php')) {
    include 'components/footer.php'; 
    if(function_exists('renderFooter')) renderFooter();
}
?>

<!-- PDF TEMPLATE -->
<div id="pdfTemplate">
    <div class="pdf-header-kop">
        <h2>PEMERINTAH KABUPATEN KENDAL</h2>
        <h2>KECAMATAN PEGANDON</h2>
        <h2>KANTOR KEPALA DESA WONOSARI</h2>
        <p>Alamat: Jl. Desa Wonosari No. 01 Kode Pos 51357</p>
    </div>

    <div class="surat-title">
        <h3>SURAT KETERANGAN KEHILANGAN</h3>
        <p>Nomor : 470 / <span id="pdf_no_urut">...</span> / II / 2024</p>
    </div>

    <div class="content-section">
        <p>Yang bertanda tangan di bawah ini Kepala Desa Wonosari Kecamatan Pegandon Kabupaten Kendal, menerangkan dengan sebenarnya bahwa :</p>
        
        <table class="data-table" style="margin-left: 20px; margin-top: 10px;">
            <tr><td width="160">Nama Lengkap</td><td width="15">:</td><td><strong id="pdf_nama"></strong></td></tr>
            <tr><td>Alamat Lengkap</td><td>:</td><td id="pdf_alamat"></td></tr>
            <tr><td>No. HP / Telepon</td><td>:</td><td id="pdf_phone"></td></tr>
        </table>

        <p style="margin-top: 15px;">Nama tersebut di atas benar-benar warga Desa Wonosari Kecamatan Pegandon Kabupaten Kendal. Berdasarkan laporan yang bersangkutan pada tanggal <span id="pdf_tgl_lapor"></span>, bahwa telah kehilangan barang/dokumen berupa :</p>
        
        <ol class="list-kehilangan" id="pdf_list_barang">
            <!-- List barang via JS -->
        </ol>

        <p style="margin-top: 15px;">Demikian Surat Keterangan Kehilangan ini dibuat dengan sebenarnya agar dapat dipergunakan sebagaimana mestinya.</p>
    </div>

    <div class="footer-pdf">
        <div class="ttd-box">
            <p>Wonosari, <span id="pdf_tgl_skrg"></span></p>
            <p>Sekretaris Desa Wonosari,</p>
            <br><br><br><br>
            <p><strong><u>MUKALIL</u></strong></p>
            <p>NIP. 19780512 201001 1 002</p>
        </div>
    </div>
</div>

<script>
    function formatDate(date) {
        if (typeof date === 'string') date = new Date(date);
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return date.toLocaleDateString('id-ID', options);
    }

    function generatePreview() {
        const rawBarang = document.getElementById('barang_hilang').value;
        const listBarang = rawBarang.split('\n').filter(item => item.trim() !== "");
        
        const data = {
            nama: document.getElementById('nama').value,
            phone: document.getElementById('phone').value,
            alamat: document.getElementById('alamat').value
        };

        const setVal = (id, val) => { if(document.getElementById(id)) document.getElementById(id).innerText = val; };
        
        setVal('pdf_nama', data.nama.toUpperCase());
        setVal('pdf_phone', data.phone);
        setVal('pdf_alamat', data.alamat);
        
        const listContainer = document.getElementById('pdf_list_barang');
        listContainer.innerHTML = "";
        listBarang.forEach(item => {
            const li = document.createElement('li');
            li.innerText = item;
            listContainer.appendChild(li);
        });

        setVal('pdf_tgl_lapor', formatDate(new Date()));
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
            filename: 'Surat_Kehilangan_' + document.getElementById('nama').value + '.pdf',
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