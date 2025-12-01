<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $nik = htmlspecialchars($_POST['nik']);
    $email = htmlspecialchars($_POST['email']);
    $telepon = htmlspecialchars($_POST['telepon']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $asal_sekolah = htmlspecialchars($_POST['asal_sekolah']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $agama = htmlspecialchars($_POST['agama']);
} else {
    header("Location: pendaftaran.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Berhasil - Kampus BSI</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #f1f8e9, #e3f2fd);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background-color: #fff;
            border-radius: 14px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            padding: 30px 40px;
            max-width: 700px;
            width: 90%;
            text-align: center;
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(30px);}
            to {opacity: 1; transform: translateY(0);}
        }

        h2 {
            color: #1e88e5;
            margin-bottom: 15px;
        }

        .success {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 10px;
            border-radius: 8px;
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .message {
            color: #444;
            margin-bottom: 25px;
            font-size: 15px;
            line-height: 1.6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        td {
            padding: 8px 10px;
            border-bottom: 1px solid #eee;
        }

        td:first-child {
            font-weight: bold;
            width: 35%;
            color: #333;
            text-align: left;
        }

        td:last-child {
            text-align: left;
        }

        .btn {
            display: inline-block;
            background-color: #1e88e5;
            color: #fff;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #1565c0;
        }

        .footer-text {
            margin-top: 25px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="success">🎉 Selamat, <?= $nama ?>!</div>
    <h2>Pendaftaran Anda Telah Berhasil</h2>

    <div class="message">
        Terima kasih telah mendaftar di <strong>Kampus BSI</strong>.<br>
        Data Anda telah kami terima dan sedang diproses oleh tim administrasi kami.<br>
        Mohon tunggu informasi selanjutnya melalui email <strong><?= $email ?></strong> atau nomor HP <strong><?= $telepon ?></strong>.<br><br>
        Tetap semangat mengejar cita-cita! 💪✨
    </div>

    <table>
        <tr><td>Nama Lengkap</td><td><?= $nama ?></td></tr>
        <tr><td>NIK</td><td><?= $nik ?></td></tr>
        <tr><td>Email</td><td><?= $email ?></td></tr>
        <tr><td>No. Telepon</td><td><?= $telepon ?></td></tr>
        <tr><td>Alamat</td><td><?= nl2br($alamat) ?></td></tr>
        <tr><td>Asal Sekolah</td><td><?= $asal_sekolah ?></td></tr>
        <tr><td>Program Studi</td><td><?= $jurusan ?></td></tr>
        <tr><td>Jenis Kelamin</td><td><?= $jenis_kelamin ?></td></tr>
        <tr><td>Agama</td><td><?= $agama ?></td></tr>
    </table>

    <a href="pendaftaran.php" class="btn">📝 Isi Ulang Form</a>

    <div class="footer-text">
        © <?= date('Y') ?> Kampus BSI | Penerimaan Mahasiswa Baru<br>
        “Satu langkah kecil hari ini adalah awal dari masa depan yang besar.”
    </div>
</div>

</body>
</html>
