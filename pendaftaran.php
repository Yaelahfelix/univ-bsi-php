<?php
// daftar jurusan dan agama
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
  <title>Formulir Pendaftaran Mahasiswa Baru - Kampus BSI</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #e3f2fd, #fce4ec);
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #1e88e5;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    header h1 {
      margin: 0;
      font-size: 24px;
    }

    .container {
      width: 90%;
      max-width: 700px;
      margin: 40px auto;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      padding: 30px 40px;
      animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    h2 {
      text-align: center;
      color: #1e88e5;
      margin-bottom: 25px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 6px;
      font-weight: bold;
      color: #333;
    }

    input, select, textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 15px;
      font-size: 15px;
      width: 100%;
      box-sizing: border-box;
      transition: 0.2s;
    }

    input:focus, select:focus, textarea:focus {
      border-color: #1e88e5;
      outline: none;
      box-shadow: 0 0 4px #90caf9;
    }

    textarea {
      resize: none;
      height: 80px;
    }

    .btn {
      background-color: #1e88e5;
      color: #fff;
      border: none;
      padding: 12px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      background-color: #1565c0;
    }

    footer {
      text-align: center;
      font-size: 14px;
      color: #777;
      margin-top: 30px;
      padding-bottom: 15px;
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

    <form method="post" action="proses-pendaftaran.php">
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

      <label for="nik">NIK</label>
      <input type="text" id="nik" name="nik" placeholder="Masukkan NIK (Nomor Induk Kependudukan)" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="contoh: nama@email.com" required>

      <label for="telepon">Nomor HP</label>
      <input type="text" id="telepon" name="telepon" placeholder="Masukkan nomor HP aktif" required>

      <label for="alamat">Alamat Lengkap</label>
      <textarea id="alamat" name="alamat" placeholder="Masukkan alamat tempat tinggal" required></textarea>

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
