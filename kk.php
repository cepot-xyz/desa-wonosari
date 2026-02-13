<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desa Wonosari - Portal Informasi dan Administrasi Pemerintahan Desa">
    <meta name="keywords" content="Desa Wonosari, Administrasi, Visi Misi, Sejarah, Peraturan, Peta">
    <meta name="author" content="Pemerintah Desa Wonosari">
    <title>Surat Pengantar KK Digital - Desa Wonosari</title>
    
    <!-- Google Fonts: Figtree -->
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
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

        /* Override style.css untuk merapikan Navbar */
        .navbar {
            padding: 0.8rem 0 !important; /* Mengurangi padding atas-bawah navbar */
        }
        
        .nav-brand h1 {
            font-size: 1.25rem !important; /* Sedikit mengecilkan judul desa di nav */
        }

        main {
            padding-top: 20px; /* Jarak antara navbar dan konten utama */
            min-height: 80vh;
        }

        * { box-sizing: border-box; font-family: 'Figtree', sans-serif; }
        body { background-color: var(--bg); color: var(--text); line-height: 1.6; margin: 0; padding: 0; }
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
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        .member-card {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px dashed #cbd5e1;
            position: relative;
        }

        .form-group { display: flex; flex-direction: column; gap: 5px; }
        label { font-weight: 600; font-size: 0.85rem; }
        input, select { padding: 10px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.95rem; }
        .full-width { grid-column: span 2; }

        .btn-container { margin-top: 20px; display: flex; gap: 10px; }
        button { padding: 12px 20px; border-radius: 8px; border: none; cursor: pointer; font-weight: 600; transition: all 0.2s; }
        .btn-primary { background: var(--primary); color: white; width: 100%; }
        .btn-secondary { background: #e2e8f0; color: #475569; }
        .btn-remove { background: var(--danger); color: white; position: absolute; top: 10px; right: 10px; padding: 5px 12px; font-size: 0.75rem; }

        #previewArea { display: none; }

        /* PDF Styles */
        #pdfTemplate {
            display: none; 
            width: 297mm; 
            padding: 10mm 15mm;
            background: white;
            color: black;
            font-family: 'Times New Roman', Times, serif !important;
        }

        #pdfTemplate * { font-family: 'Times New Roman', Times, serif !important; margin: 0; padding: 0; }
        .kop-surat { text-align: center; border-bottom: 3px double black; margin-bottom: 10px; padding-bottom: 5px; width: 100%; }
        .kop-surat h2 { text-transform: uppercase; font-size: 1.3rem; font-weight: bold; }
        .kop-surat h3 { text-transform: uppercase; font-size: 1.1rem; font-weight: bold; }
        .kop-surat p { font-size: 0.9rem; }

        .judul-dokumen { text-align: center; margin-bottom: 15px; width: 100%; }
        .judul-dokumen h4 { text-decoration: underline; text-transform: uppercase; font-weight: bold; font-size: 1.1rem; }

        .info-table { width: 100%; margin-bottom: 10px; }
        .info-table td { padding: 2px 0; font-size: 1rem; vertical-align: top; }

        .main-table { width: 100%; border-collapse: collapse; margin: 10px 0; table-layout: fixed; }
        .main-table th, .main-table td { 
            border: 1px solid black; 
            padding: 4px 3px; 
            text-align: center; 
            font-size: 0.8rem;
            word-wrap: break-word; 
        }
        .main-table th { background-color: #f2f2f2; font-weight: bold; text-transform: uppercase; font-size: 0.75rem; }

        .ttd-container { display: flex; justify-content: flex-end; margin-top: 25px; text-align: center; width: 100%; }
        .ttd-box { width: 300px; }
        .ttd-space { height: 60px; }

        .alert { background: #dcfce7; color: #166534; padding: 15px; border-radius: 8px; margin-bottom: 20px; display: none; text-align: center; }
    </style>
</head>
<body>

<?php include 'components/navbar.php'; renderNavbar(); ?>

<main>
    <div class="container-form">
        <header class="form-header">
            <h1>Layanan Pembuatan KK</h1>
        </header>

        <div id="successAlert" class="alert">Surat Berhasil Dibuat!</div>

        <div id="formSection">
            <div class="card">
                <div class="section-title">Informasi Utama</div>
                <div class="form-grid">
                    <div class="form-group">
                        <label>Nomor Kartu Keluarga (KK)</label>
                        <input type="text" id="no_kk" required maxlength="16" placeholder="Masukkan 16 Digit No KK">
                    </div>
                    <div class="form-group">
                        <label>Alamat Keluarga (RT/RW, Dusun)</label>
                        <input type="text" id="alamat_keluarga" required placeholder="Masukkan Alamat Anda...">
                    </div>
                </div>
            </div>

            <div id="memberContainer"></div>

            <div class="btn-container" style="margin-bottom: 40px;">
                <button type="button" class="btn-secondary" onclick="addMember()" style="flex: 1;">+ Tambah Anggota Keluarga</button>
                <button type="button" onclick="processData()" class="btn-primary" style="flex: 2;">Pratinjau Surat</button>
            </div>
        </div>

        <div id="previewArea">
            <div class="card">
                <h2 style="margin-top:0; color: var(--primary)">Verifikasi Akhir</h2>
                <div id="summaryData"></div>
                <div class="btn-container">
                    <button onclick="backToForm()" class="btn-secondary">Edit Data</button>
                    <button onclick="downloadPDF()" class="btn-primary">Cetak PDF Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</main>

<div id="pdfTemplate">
    <div class="kop-surat">
        <h2>Pemerintah Kabupaten Kendal</h2>
        <h3>Kecamatan Pegandon - Desa Wonosari</h3>
        <p>Alamat: Kantor Desa Wonosari, Kec. Pegandon, Kab. Kendal, Jawa Tengah 51357</p>
    </div>
    <div class="judul-dokumen">
        <h4>Surat Pengantar</h4>
        <p>No. 140 / <span id="pdf_no_urut"></span> / Sekr / 2026</p>
    </div>
    <p style="margin-bottom: 10px; font-size: 1rem;">Yang bertanda tangan di bawah ini Sekretaris Desa Wonosari Kecamatan Pegandon Kabupaten Kendal, menerangkan dengan sebenarnya bahwa:</p>
    <table class="info-table">
        <tr><td width="18%">Nama Kepala Keluarga</td><td width="2%">:</td><td><strong id="pdf_val_nama_kk"></strong></td></tr>
        <tr><td>Nomor KK</td><td>:</td><td id="pdf_val_kk"></td></tr>
        <tr><td>Alamat</td><td>:</td><td id="pdf_val_alamat"></td></tr>
    </table>
    <table class="main-table">
        <thead>
            <tr>
                <th width="35mm">No</th>
                <th width="150mm">Nama Lengkap</th>
                <th width="120mm">NIK</th>
                <th width="35mm">L/P</th>
                <th width="180mm">Tempat, Tanggal Lahir</th>
                <th width="150mm">Pekerjaan</th>
            </tr>
        </thead>
        <tbody id="pdf_table_body"></tbody>
    </table>
    <div class="ttd-container">
        <div class="ttd-box">
            <p style="font-size: 1rem;">Wonosari, <span id="pdf_current_date"></span></p>
            <p style="font-size: 1rem;">Sekretaris Desa Wonosari,</p>
            <div class="ttd-space"></div>
            <p style="font-size: 1rem;"><strong><u>MUKALIL</u></strong></p>
            <p style="font-size: 0.9rem;">NIP. 19780512 201001 1 002</p>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; renderFooter(); ?>

<script>
    let memberCount = 0;
    window.onload = () => { addMember(); };

    function addMember() {
        memberCount++;
        const container = document.getElementById('memberContainer');
        const memberDiv = document.createElement('div');
        memberDiv.className = 'member-card card';
        memberDiv.id = `member_block_${memberCount}`;
        memberDiv.innerHTML = `
            ${memberCount > 1 ? `<button type="button" class="btn-remove" onclick="removeMember(${memberCount})">Hapus</button>` : ''}
            <div class="form-grid">
                <div class="form-group full-width"><label>Nama Lengkap</label><input type="text" class="m_nama" required></div>
                <div class="form-group"><label>NIK</label><input type="text" class="m_nik" required maxlength="16"></div>
                <div class="form-group"><label>Jenis Kelamin</label><select class="m_jk"><option value="L">Laki-laki</option><option value="P">Perempuan</option></select></div>
                <div class="form-group"><label>Tempat Lahir</label><input type="text" class="m_tempat" required></div>
                <div class="form-group"><label>Tanggal Lahir</label><input type="date" class="m_tgl" required></div>
                <div class="form-group"><label>Nama Ayah</label><input type="text" class="m_ayah" required></div>
                <div class="form-group"><label>Nama Ibu</label><input type="text" class="m_ibu" required></div>
                <div class="form-group full-width"><label>Pekerjaan</label><input type="text" class="m_kerja" required></div>
            </div>`;
        container.appendChild(memberDiv);
    }

    function removeMember(id) { document.getElementById(`member_block_${id}`).remove(); }

    function processData() {
        const noKk = document.getElementById('no_kk').value;
        const alamat = document.getElementById('alamat_keluarga').value;
        if(!noKk || !alamat) { alert("Lengkapi Data Utama!"); return; }
        const members = [];
        document.querySelectorAll('.member-card').forEach(card => {
            members.push({
                nama: card.querySelector('.m_nama').value,
                nik: card.querySelector('.m_nik').value,
                tempat: card.querySelector('.m_tempat').value,
                tgl: card.querySelector('.m_tgl').value,
                jk: card.querySelector('.m_jk').value,
                kerja: card.querySelector('.m_kerja').value
            });
        });
        renderPreview(noKk, alamat, members);
    }

    function renderPreview(noKk, alamat, members) {
        document.getElementById('summaryData').innerHTML = `<p><strong>Kepala Keluarga:</strong> ${members[0].nama}</p><p><strong>No KK:</strong> ${noKk}</p>`;
        document.getElementById('formSection').style.display = 'none';
        document.getElementById('previewArea').style.display = 'block';
        document.getElementById('pdf_val_nama_kk').innerText = members[0].nama;
        document.getElementById('pdf_val_kk').innerText = noKk;
        document.getElementById('pdf_val_alamat').innerText = alamat;
        document.getElementById('pdf_no_urut').innerText = Math.floor(Math.random() * 900) + 100;
        document.getElementById('pdf_current_date').innerText = new Date().toLocaleDateString('id-ID', {day:'numeric', month:'long', year:'numeric'});
        const tableBody = document.getElementById('pdf_table_body');
        tableBody.innerHTML = '';
        members.forEach((m, index) => {
            const date = new Date(m.tgl).toLocaleDateString('id-ID', {day:'numeric', month:'long', year:'numeric'});
            tableBody.innerHTML += `<tr><td>${index+1}</td><td style="text-align:left">${m.nama}</td><td>${m.nik}</td><td>${m.jk}</td><td>${m.tempat}, ${date}</td><td>${m.kerja}</td></tr>`;
        });
    }

    function backToForm() {
        document.getElementById('formSection').style.display = 'block';
        document.getElementById('previewArea').style.display = 'none';
    }

    function downloadPDF() {
        const element = document.getElementById('pdfTemplate');
        element.style.display = 'block';
        html2pdf().set({
            margin: [10, 10, 10, 10],
            filename: `Surat_Pengantar_${Date.now()}.pdf`,
            html2canvas: { scale: 3 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' }
        }).from(element).save().then(() => {
            element.style.display = 'none';
            document.getElementById('successAlert').style.display = 'block';
        });
    }
</script>
</body>
</html>
