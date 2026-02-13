<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desa Wonosari - Portal Informasi dan Administrasi Pemerintahan Desa">
    <title>Permohonan Akte Kelahiran - Desa Wonosari</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/Kendal Lite.png" sizes="any">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css?v=2.2">
    
    <!-- Library html2pdf.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <style>
        :root {
            --primary: #1e3a8a;
            --bg: #f8fafc;
            --text: #1e293b;
            --white: #ffffff;
            --border: #e2e8f0;
            --danger: #ef4444;
            --success: #22c55e;
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

        /* PDF Styles - Diperkecil agar tidak jebol */
        #pdfTemplate {
            display: none; 
            width: 210mm;
            padding: 15mm 20mm; /* Mengurangi padding luar */
            background: white;
            color: black;
            font-family: 'Times New Roman', Times, serif !important;
        }

        #pdfTemplate * { font-family: 'Times New Roman', Times, serif !important; margin: 0; padding: 0; line-height: 1.3; } /* Merapatkan line-height */
        
        .pdf-header { display: flex; justify-content: space-between; margin-bottom: 15px; }
        .perihal-box { width: 55%; font-size: 11pt; }
        .tgl-box { text-align: left; width: 40%; font-size: 11pt; }

        .content-section { margin-top: 10px; text-align: justify; font-size: 11pt; } /* Font utama 11pt */
        .indent { margin-left: 25px; }
        
        .data-table { width: 100%; margin: 2px 0 8px 0; border-collapse: collapse; }
        .data-table td { padding: 1px 0; vertical-align: top; font-size: 11pt; }
        
        .footer-pdf { margin-top: 30px; display: flex; justify-content: space-around; }
        .ttd-box { width: 200px; text-align: center; font-size: 11pt; }
        
        .alert { background: #dcfce7; color: #166534; padding: 15px; border-radius: 8px; margin-bottom: 20px; display: none; text-align: center; }
        
        ul.reasons { list-style-type: none; padding-left: 0; margin-top: 5px; }
        ul.reasons li { margin-bottom: 5px; position: relative; padding-left: 20px; }
        ul.reasons li::before { content: "-"; position: absolute; left: 0; }
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
            <h1><br>Layanan Akta Kelahiran</h1>
        </header>

        <div id="successAlert" class="alert">Draft surat berhasil dibuat!</div>

        <div id="formSection">
            <!-- DATA AYAH (PEMOHON 1) -->
            <div class="card">
                <div class="section-title">Data Ayah (Pemohon I)</div>
                <div class="form-grid">
                    <div class="form-group full-width"><label>Nama Lengkap</label><input type="text" id="p1_nama" placeholder="Contoh: AMIN TOHARI" required></div>
                    <div class="form-group"><label>Tempat Lahir</label><input type="text" id="p1_tempat" required></div>
                    <div class="form-group"><label>Tanggal Lahir</label><input type="date" id="p1_tgl" required></div>
                    <div class="form-group"><label>Pekerjaan</label><input type="text" id="p1_kerja" required></div>
                    <div class="form-group"><label>Agama</label>
                        <select id="p1_agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>
                    <div class="form-group full-width"><label>Alamat Lengkap</label><textarea id="p1_alamat" rows="2" placeholder="RT.014 / RW.005 Dsn Winong Ds. Sumurup..."></textarea></div>
                </div>
            </div>

            <!-- DATA IBU (PEMOHON 2) -->
            <div class="card">
                <div class="section-title">Data Ibu (Pemohon II)</div>
                <div class="form-grid">
                    <div class="form-group full-width"><label>Nama Lengkap</label><input type="text" id="p2_nama" placeholder="Contoh: SITI KOMARIYAH" required></div>
                    <div class="form-group"><label>Tempat Lahir</label><input type="text" id="p2_tempat" required></div>
                    <div class="form-group"><label>Tanggal Lahir</label><input type="date" id="p2_tgl" required></div>
                    <div class="form-group"><label>Pekerjaan</label><input type="text" id="p2_kerja" required></div>
                    <div class="form-group"><label>Agama</label>
                        <select id="p2_agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- DATA ANAK & PERNIKAHAN -->
            <div class="card">
                <div class="section-title">Data Anak & Informasi Pendukung</div>
                <div class="form-grid">
                    <div class="form-group full-width"><label>Nama Anak</label><input type="text" id="anak_nama" placeholder="Nama Lengkap Anak" required></div>
                    <div class="form-group"><label>Jenis Kelamin Anak</label>
                        <select id="anak_jk">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group"><label>Tanggal Lahir Anak</label><input type="date" id="anak_tgl" required></div>
                    <div class="form-group"><label>Tanggal Pernikahan Orang Tua</label><input type="date" id="tgl_nikah" required></div>
                    <div class="form-group"><label>Nomor Akta Nikah</label><input type="text" id="no_nikah" placeholder="Contoh: 113 / 04 / VII / 2002" required></div>
                    <div class="form-group full-width"><label>KUA Penerbit Akta Nikah</label><input type="text" id="kua_asal" placeholder="Contoh: KUA Bendungan" required></div>
                </div>
            </div>

            <div class="btn-container">
                <button type="button" onclick="generatePreview()" class="btn-primary">Buat Draft Surat</button>
            </div>
        </div>

        <div id="previewArea">
            <div class="card">
                <h2 style="margin-top:0; color: var(--primary)">Pratinjau Berhasil</h2>
                <p>Silahkan periksa kembali data sebelum mencetak PDF.</p>
                <div class="btn-container">
                    <button onclick="backToForm()" class="btn-secondary">Edit Data</button>
                    <button onclick="downloadPDF()" class="btn-primary">Unduh PDF</button>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- PDF TEMPLATE -->
<div id="pdfTemplate">
    <div class="pdf-header">
        <div class="perihal-box">
            <p><strong><u>ANAK-ANAK</u></strong></p>
            <br>
            <table>
                <tr><td width="50">Perihal</td><td>:</td><td><strong>Permohonan Penetapan</strong></td></tr>
                <tr><td></td><td></td><td><strong><u>Akte Kelahiran Terlambat</u></strong></td></tr>
            </table>
        </div>
        <div class="tgl-box">
            <p>Kendal, <span id="pdf_tgl_skrg"></span></p>
            <br>
            <p>Kepada :</p>
            <p>Yth. BAPAK KETUA PENGADILAN NEGERI</p>
            <p>KENDAL</p>
            <p>di -</p>
            <p><strong><u>K E N D A L</u></strong></p>
        </div>
    </div>

    <div class="content-section">
        <p>Dengan hormat,</p>
        <p>Yang bertanda tangan di bawah ini :</p>
        
        <table class="data-table indent">
            <tr><td width="25">1.</td><td width="130">Nama</td><td width="15">:</td><td><strong id="pdf_p1_nama"></strong></td></tr>
            <tr><td></td><td>Tempat / tgl lahir</td><td>:</td><td id="pdf_p1_ttl"></td></tr>
            <tr><td></td><td>Jenis Kelamin</td><td>:</td><td>Laki-laki</td></tr>
            <tr><td></td><td>Kebangsaan</td><td>:</td><td>Indonesia</td></tr>
            <tr><td></td><td>Tempat tinggal</td><td>:</td><td id="pdf_p1_alamat"></td></tr>
            <tr><td></td><td>Agama</td><td>:</td><td id="pdf_p1_agama"></td></tr>
            <tr><td></td><td>Pekerjaan</td><td>:</td><td id="pdf_p1_kerja"></td></tr>
        </table>

        <table class="data-table indent">
            <tr><td width="25">2.</td><td width="130">Nama</td><td width="15">:</td><td><strong id="pdf_p2_nama"></strong></td></tr>
            <tr><td></td><td>Tempat / tgl lahir</td><td>:</td><td id="pdf_p2_ttl"></td></tr>
            <tr><td></td><td>Jenis Kelamin</td><td>:</td><td>Perempuan</td></tr>
            <tr><td></td><td>Kebangsaan</td><td>:</td><td>Indonesia</td></tr>
            <tr><td></td><td>Tempat tinggal</td><td>:</td><td>Sama dengan Pemohon I</td></tr>
            <tr><td></td><td>Agama</td><td>:</td><td id="pdf_p2_agama"></td></tr>
            <tr><td></td><td>Pekerjaan</td><td>:</td><td id="pdf_p2_kerja"></td></tr>
        </table>

        <p>Selanjutnya disebut sebagai <strong>PARA PEMOHON ;</strong></p>
        <p style="margin-top:8px;">Dengan ini Para Pemohon mengajukan permohonan Akte Kelahiran karena terlambat dengan alasan :</p>
        
        <ul class="reasons indent">
            <li>Bahwa para pemohon telah menikah pada tanggal <strong id="pdf_tgl_nikah"></strong> (Akta Nikah No: <span id="pdf_no_nikah"></span>, <span id="pdf_kua"></span>);</li>
            <li>Bahwa dari pernikahan tersebut lahir anak bernama <strong id="pdf_anak_nama"></strong> (JK: <span id="pdf_anak_jk"></span>) pada tanggal <strong id="pdf_anak_tgl"></strong> di Desa Wonosari;</li>
            <li>Bahwa akte kelahiran sangat dibutuhkan untuk persyaratan administrasi pendaftaran sekolah;</li>
            <li>Bahwa karena kesibukan dan ketidaktahuan prosedur, kelahiran anak belum didaftarkan tepat waktu.</li>
        </ul>

        <p style="margin-top:8px;">Berdasarkan alasan tersebut, Para Pemohon mohon Bapak Ketua Pengadilan Negeri Kendal menetapkan :</p>
        
        <ol class="indent" style="margin-top:5px;">
            <li>Mengabulkan permohonan Para Pemohon;</li>
            <li>Menetapkan lahirnya anak bernama <strong id="pdf_anak_nama2"></strong> pada <strong id="pdf_anak_tgl2"></strong> dari pasangan <strong id="pdf_p1_nama2"></strong> dan <strong id="pdf_p2_nama2"></strong>;</li>
            <li>Memerintahkan Dinas Dukcapil Kendal untuk menerbitkan Akta Kelahiran anak tersebut.</li>
        </ol>

        <p style="margin-top:10px;">Demikian permohonan ini kami sampaikan, terima kasih.</p>
    </div>

    <div class="footer-pdf">
        <div class="ttd-box">
            <p>Pemohon I</p>
            <br><br><br>
            <p>( <span id="pdf_p1_nama3"></span> )</p>
        </div>
        <div class="ttd-box">
            <p>Pemohon II</p>
            <br><br><br>
            <p>( <span id="pdf_p2_nama3"></span> )</p>
        </div>
    </div>
</div>

<script>
    function formatDate(dateString) {
        if(!dateString) return "";
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return new Date(dateString).toLocaleDateString('id-ID', options);
    }

    function generatePreview() {
        const data = {
            p1_nama: document.getElementById('p1_nama').value,
            p1_ttl: document.getElementById('p1_tempat').value + ", " + formatDate(document.getElementById('p1_tgl').value),
            p1_alamat: document.getElementById('p1_alamat').value,
            p1_agama: document.getElementById('p1_agama').value,
            p1_kerja: document.getElementById('p1_kerja').value,
            p2_nama: document.getElementById('p2_nama').value,
            p2_ttl: document.getElementById('p2_tempat').value + ", " + formatDate(document.getElementById('p2_tgl').value),
            p2_agama: document.getElementById('p2_agama').value,
            p2_kerja: document.getElementById('p2_kerja').value,
            anak_nama: document.getElementById('anak_nama').value,
            anak_jk: document.getElementById('anak_jk').value,
            anak_tgl: formatDate(document.getElementById('anak_tgl').value),
            tgl_nikah: formatDate(document.getElementById('tgl_nikah').value),
            no_nikah: document.getElementById('no_nikah').value,
            kua: document.getElementById('kua_asal').value
        };

        // Mapping Data ke PDF
        const setVal = (id, val) => { if(document.getElementById(id)) document.getElementById(id).innerText = val; };
        
        setVal('pdf_p1_nama', data.p1_nama.toUpperCase());
        setVal('pdf_p1_nama2', data.p1_nama.toUpperCase());
        setVal('pdf_p1_nama3', data.p1_nama.toUpperCase());
        setVal('pdf_p1_ttl', data.p1_ttl);
        setVal('pdf_p1_alamat', data.p1_alamat);
        setVal('pdf_p1_agama', data.p1_agama);
        setVal('pdf_p1_kerja', data.p1_kerja);

        setVal('pdf_p2_nama', data.p2_nama.toUpperCase());
        setVal('pdf_p2_nama2', data.p2_nama.toUpperCase());
        setVal('pdf_p2_nama3', data.p2_nama.toUpperCase());
        setVal('pdf_p2_ttl', data.p2_ttl);
        setVal('pdf_p2_agama', data.p2_agama);
        setVal('pdf_p2_kerja', data.p2_kerja);

        setVal('pdf_anak_nama', data.anak_nama.toUpperCase());
        setVal('pdf_anak_nama2', data.anak_nama.toUpperCase());
        setVal('pdf_anak_jk', data.anak_jk);
        setVal('pdf_anak_tgl', data.anak_tgl);
        setVal('pdf_anak_tgl2', data.anak_tgl);

        setVal('pdf_tgl_nikah', data.tgl_nikah);
        setVal('pdf_no_nikah', data.no_nikah);
        setVal('pdf_kua', data.kua);
        setVal('pdf_tgl_skrg', formatDate(new Date()));

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
            filename: 'Akta_Kelahiran_' + document.getElementById('anak_nama').value + '.pdf',
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