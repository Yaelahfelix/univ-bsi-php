<?php
// ---------------------------
// News data structure
// ---------------------------
$news = [
  [
    'id' => 1,
    'title' => 'Mahasiswi BSI Raih Penghargaan Inovasi Digital 2025',
    'date' => '2025-11-02',
    'image' => 'assets/images/news1.jpg',
    'excerpt' => 'Mahasiswi Universitas BSI berhasil meraih penghargaan bergengsi dalam ajang Inovasi Digital Nasional 2025.',
    'content' => 'Dalam ajang Inovasi Digital Nasional 2025, tim mahasiswa Universitas BSI berhasil mengembangkan aplikasi berbasis AI untuk membantu masyarakat dalam mengelola sampah secara efisien. 
    Aplikasi ini dinilai memiliki potensi besar untuk diterapkan di berbagai kota di Indonesia. 
    Acara penganugerahan ini diselenggarakan di Jakarta Convention Center dan dihadiri oleh berbagai universitas serta lembaga penelitian terkemuka.'
  ],
  [
    'id' => 2,
    'title' => 'Kuliah Umum: Tantangan Dunia Kerja di Era AI',
    'date' => '2025-10-27',
    'image' => 'assets/images/news2.jpg',
    'excerpt' => 'Program Studi Teknologi Informasi BSI menggelar kuliah umum membahas tantangan dunia kerja di era kecerdasan buatan.',
    'content' => 'Dalam kuliah umum yang diadakan di Auditorium Kampus BSI, para pembicara dari industri IT membahas pentingnya kemampuan adaptasi di era kecerdasan buatan. 
    Para mahasiswa diajak memahami tren teknologi terbaru serta cara membangun karier yang relevan dengan kebutuhan masa depan. 
    Acara ini juga menjadi ajang networking bagi mahasiswa dengan profesional dari berbagai perusahaan teknologi.'
  ],
  [
    'id' => 3,
    'title' => 'Kegiatan Donor Darah: BSI Peduli Sesama',
    'date' => '2025-10-15',
    'image' => 'assets/images/news3.jpg',
    'excerpt' => 'Kegiatan sosial bertajuk “BSI Peduli Sesama” sukses diselenggarakan oleh Unit Kegiatan Mahasiswa.',
    'content' => 'Dalam rangka memperingati Hari Kesehatan Nasional, Universitas BSI bekerja sama dengan Palang Merah Indonesia mengadakan kegiatan donor darah. 
    Lebih dari 150 mahasiswa turut berpartisipasi, menunjukkan semangat kepedulian sosial yang tinggi. 
    Kegiatan ini juga menjadi bentuk kontribusi nyata civitas akademika terhadap masyarakat sekitar.'
  ]
];


// Get article ID if set
$selectedId = isset($_GET['id']) ? $_GET['id'] : null;
$article = null;

if ($selectedId) {
  foreach ($news as $item) {
    if ($item['id'] == $selectedId) {
      $article = $item;
      break;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita Kampus</title>
  <link rel="stylesheet" href="assets/images/style-news.css">
</head>
<body>

  <!-- ===== NAVBAR ===== -->
  <header class="navbar">
    <div class="nav-container">
      <a href="index.php" class="logo">Kampus BSI</a>
      <nav>
        <a href="index.php">Beranda</a>
        <a href="#contact">Kontak</a>
      </nav>
    </div>
  </header>

  <!-- ===== HERO SECTION ===== -->
  <section class="hero-banner">
    <div class="hero-content">
      <h1>Berita Kampus</h1>
      <p>Dapatkan informasi dan kabar terbaru dari Kampus BSI</p>
    </div>
  </section>

  <!-- ===== ARTICLE VIEW ===== -->
  <?php if ($article): ?>
    <section class="article-container">
      <div class="article-hero">
        <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>">
      </div>
      <div class="article-content">
        <h2><?= $article['title'] ?></h2>
        <p class="article-date"><?= $article['date'] ?></p>
        <p><?= nl2br($article['content']) ?></p>
        <a href="news.php" class="back-btn">← Kembali ke Berita Kampus</a>
      </div>
    </section>

  <!-- ===== NEWS GRID ===== -->
  <?php else: ?>
    <section class="news-section">
      <?php if (empty($news)): ?>
        <p class="empty-msg">Belum ada berita yang ditambahkan.</p>
      <?php else: ?>
        <div class="featured-article">
          <img src="<?= $news[0]['image'] ?>" alt="<?= $news[0]['title'] ?>">
          <div class="featured-info">
            <h2><?= $news[0]['title'] ?></h2>
            <p><?= $news[0]['excerpt'] ?></p>
            <a href="news.php?id=<?= $news[0]['id'] ?>" class="read-more">Baca Selengkapnya</a>
          </div>
        </div>

        <div class="news-grid">
          <?php foreach (array_slice($news, 1) as $item): ?>
            <div class="news-card">
              <img src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>">
              <div class="news-info">
                <h3><?= $item['title'] ?></h3>
                <p class="date"><?= $item['date'] ?></p>
                <p><?= $item['excerpt'] ?></p>
                <a href="news.php?id=<?= $item['id'] ?>" class="read-more">Baca Selengkapnya</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </section>
  <?php endif; ?>

  <!-- ===== FOOTER ===== -->
  <footer class="footer">
    <p>© <?= date("Y") ?> Kampus BSI. Semua Hak Dilindungi.</p>
  </footer>

</body>
</html>
<style>
    /* ===== General Reset ===== */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: inherit; /* Keep your site’s current font */
  background-color: #f9f9f9;
  color: #333;
  line-height: 1.6;
}

/* ===== Navbar ===== */
.navbar {
  background-color: #fff;
  border-bottom: 1px solid #ddd;
  padding: 15px 0;
  position: sticky;
  top: 0;
  z-index: 100;
}

.nav-container {
  width: 90%;
  max-width: 1100px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.nav-container .logo {
  color: #004aad; /* your accent blue */
  font-weight: bold;
  text-decoration: none;
  font-size: 1.2em;
}

.nav-container nav a {
  color: #333;
  text-decoration: none;
  margin-left: 20px;
  font-weight: 500;
  transition: color 0.3s;
}

.nav-container nav a:hover {
  color: #004aad;
}

/* ===== Hero Section ===== */
.hero-banner {
  background: url('assets/images/featured.jpg') center/cover no-repeat;
  color: #fff;
  text-align: center;
  padding: 120px 20px;
  position: relative;
}

.hero-banner::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(0,0,0,0.4);
}

.hero-content {
  position: relative;
  z-index: 1;
}

.hero-content h1 {
  font-size: 3em;
  margin-bottom: 10px;
}

.hero-content p {
  font-size: 1.2em;
}

/* ===== News Section ===== */
.news-section {
  width: 90%;
  max-width: 1100px;
  margin: 60px auto;
}

.featured-article {
  display: flex;
  flex-wrap: wrap;
  background: #fff;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  border-radius: 8px;
  overflow: hidden;
  margin-bottom: 40px;
}

.featured-article img {
  width: 100%;
  max-height: 400px;
  object-fit: cover;
}

.featured-info {
  padding: 20px;
}

.featured-info h2 {
  color: #004aad;
  margin-bottom: 10px;
}

.read-more {
  color: #004aad;
  text-decoration: none;
  font-weight: bold;
  display: inline-block;
  margin-top: 10px;
  transition: 0.3s;
}

.read-more:hover {
  text-decoration: underline;
}

/* ===== News Grid ===== */
.news-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
}

.news-card {
  background: #fff;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.news-card:hover {
  transform: translateY(-5px);
}

.news-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.news-info {
  padding: 15px;
}

.news-info h3 {
  color: #004aad;
  font-size: 1.2em;
  margin-bottom: 8px;
}

.news-info .date {
  font-size: 0.9em;
  color: #777;
  margin-bottom: 10px;
}

/* ===== Article Page ===== */
.article-container {
  width: 90%;
  max-width: 900px;
  margin: 60px auto;
  background: #fff;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  border-radius: 8px;
  overflow: hidden;
}

.article-hero img {
  width: 100;
  max-height: 100px;
  object-fit: cover;
}

.article-content {
  padding: 25px;
}

.article-content h2 {
  color: #004aad;
  margin-bottom: 10px;
}

.article-date {
  font-size: 0.9em;
  color: #777;
  margin-bottom: 20px;
}

.back-btn {
  display: inline-block;
  margin-top: 20px;
  text-decoration: none;
  color: #004aad;
  font-weight: bold;
}

/* ===== Footer ===== */
.footer {
  background: #004aad;
  color: #fff;
  text-align: center;
  padding: 20px;
  margin-top: 60px;
}

.empty-msg {
  text-align: center;
  font-style: italic;
  color: #666;
  padding: 40px 0;
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
  .hero-content h1 {
    font-size: 2em;
  }
}
</style>