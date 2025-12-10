<?php
$jurusan = [
    'Akuntansi',
    'Manajemen',
    'Teknik Industri',
    'Sistem Informasi',
    'Ilmu Komunikasi',
    'Teknologi Informasi'
];

$agama = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style-form.css">
  <title>Formulir Pendaftaran Mahasiswa Baru - Kampus BSI</title>

  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding: 0;
      background: #f5f7fa;

      /* Watermark logo BSI */
      background-image: url('logo-bsi.png');
      background-repeat: no-repeat;
      background-size: 380px;
      background-position: center;
      opacity: 0.98;
    }

/* ===== TAMBAHAN RESPONSIF HEADER ===== */
header {
  text-align: center;
  padding: 25px 15px;
}

header h1 {
  font-size: 26px;
  line-height: 1.2;
  word-wrap: break-word;
}

header p {
  font-size: 14px;
  line-height: 1.2;
  word-wrap: break-word;
  margin-top: 5px;
}

@media (max-width: 768px) {
  header h1 { font-size: 22px; }
  header p { font-size: 12px; }
}

@media (max-width: 480px) {
  header h1 { font-size: 20px; padding: 0 5px; }
  header p { font-size: 11px; }
}

    .container {
      width: 90%;
      max-width: 720px;
      margin: 40px auto;
      background: rgba(255,255,255,0.92);
      backdrop-filter: blur(5px);
      border-radius: 14px;
      padding: 40px 45px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
      animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: 600;
      font-size: 22px;
      color: #0d47a1;
      letter-spacing: 1px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 6px;
      font-weight: 600;
      color: #333;
      font-size: 15px;
    }

    input, select, textarea {
      padding: 11px;
      border: 1px solid #bbb;
      border-radius: 8px;
      font-size: 15px;
      margin-bottom: 18px;
      transition: 0.25s ease;
      background: #fafafa;
    }

    input:focus, select:focus, textarea:focus {
      border-color: #0d47a1;
      background: #fff;
      box-shadow: 0 0 6px rgba(13, 71, 161, 0.3);
      outline: none;
    }

    textarea {
      resize: none;
      height: 90px;
    }

    .btn {
      background: #0d47a1;
      color: #fff;
      padding: 13px;
      border: none;
      border-radius: 10px;
      font-size: 17px;
      cursor: pointer;
      font-weight: 600;
      transition: 0.25s;
    }

    .btn:hover {
      background: #093b87;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    footer {
    text-align: center;
    padding: 20px 0;
    color: #666;
    font-size: 14px;
    margin-top: 30px;
  }

  /* ===== TAMBAHAN RESPONSIF ===== */
  @media (max-width: 768px) {
    .container {
      width: 95%;
      padding: 20px;
    }

    h2 {
      font-size: 20px;
    }

    input, select, textarea, .btn {
      font-size: 14px;
      padding: 10px;
    }

    header h1 {
      font-size: 22px;
    }

    header p {
      font-size: 12px;
    }
  }

  @media (max-width: 480px) {
    h2 {
      font-size: 18px;
    }

    header h1 {
      font-size: 20px;
    }

    header p {
      font-size: 11px;
    }

    .btn {
      font-size: 15px;
      padding: 10px;
    }
  }

  </style>
</head>
<body>

  <header>
    <h1>Formulir Pendaftaran Mahasiswa Baru</h1>
    <p>Kampus BSI - “Kuliah? BSI Aja!”</p>
  </header>

  <div class="container">
    <h2>Isi Data Pendaftaran</h2>

    <form method="post" action="prosespendaftaran.php">
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

      <label for="nik">NIK</label>
      <input type="text" id="nik" name="nik" placeholder="Masukkan nomor NIK" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="contoh: nama@email.com" required>

      <label for="telepon">Nomor HP</label>
      <input type="text" id="telepon" name="telepon" placeholder="Masukkan nomor HP aktif" required>

      <label for="alamat">Alamat Lengkap</label>
      <textarea id="alamat" name="alamat" placeholder="Masukkan alamat lengkap" required></textarea>

      <label for="asal_sekolah">Asal Sekolah</label>
      <input type="text" id="asal_sekolah" name="asal_sekolah" placeholder="Nama SMA/SMK/MA asal" required>

      <label for="jurusan">Program Studi Pilihan</label>
      <select id="jurusan" name="jurusan" required>
        <option value="">-- Pilih Program Studi --</option>
        <?php foreach ($jurusan as $j): ?>
            <option value="<?= htmlspecialchars($j) ?>"><?= htmlspecialchars($j) ?></option>
        <?php endforeach; ?>
      </select>

      <label for="jenis_kelamin">Jenis Kelamin</label>
      <select id="jenis_kelamin" name="jenis_kelamin" required>
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>

      <label for="agama">Agama</label>
      <select id="agama" name="agama" required>
        <option value="">-- Pilih Agama --</option>
        <?php foreach ($agama as $a): ?>
            <option value="<?= htmlspecialchars($a) ?>"><?= htmlspecialchars($a) ?></option>
        <?php endforeach; ?>
      </select>

      <button type="submit" class="btn">Kirim Pendaftaran</button>
    </form>
  </div>

  <footer>
    &copy; <?= date('Y') ?> Kampus BSI | Pendaftaran Mahasiswa Baru
  </footer>

</body>
</html>
