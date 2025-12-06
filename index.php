<?php
// ---------- DATA ----------
$programs = [
    [
        'title' => 'Informatika',
        'img' => 'https://images.unsplash.com/photo-1518779578993-ec3579fee39f?q=80&w=1200&auto=format&fit=crop',
        'desc' => 'Ngoding full-stack, AI dasar, dan DevOps praktis bareng dosen praktisi.',
        'tags' => ['Full-stack', 'AI', 'DevOps'],
        'akreditasi' => 'Baik Sekali',
    ],
    [
        'title' => 'Sistem Informasi',
        'img' => 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?q=80&w=1200&auto=format&fit=crop',
        'desc' => 'Analisis bisnis-IT, ERP, dan data untuk optimalisasi proses.',
        'tags' => ['Bisnis-IT', 'ERP', 'Data'],
        'akreditasi' => 'Baik',
    ],
    [
        'title' => 'Desain Komunikasi Visual',
        'img' => 'https://images.unsplash.com/photo-1456081101716-74e616ab23d8?q=80&w=1200&auto=format&fit=crop',
        'desc' => 'Branding, UI/UX, dan motion grafik untuk industri kreatif.',
        'tags' => ['UI/UX', 'Branding', 'Motion'],
        'akreditasi' => 'Baik Sekali',
    ],
];

$fasilitas = [
    [
        'title' => 'Laboratorium Terapan',
        'desc'  => 'Ruang praktik modern untuk coding, network, & desain.',
        'icon'  => 'lab',
    ],
    [
        'title' => 'Internet Kencang',
        'desc'  => 'Wi-Fi kampus stabil untuk riset & kolaborasi.',
        'icon'  => 'wifi',
    ],
    [
        'title' => 'Perpustakaan Digital',
        'desc'  => 'Akses e-journal & koleksi buku terbaru.',
        'icon'  => 'library',
    ],
    [
        'title' => 'Career Center',
        'desc'  => 'CV clinic, magang, dan job fair rutin.',
        'icon'  => 'career',
    ],
];

$carouselImages = [
    [
        'src' => 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?q=80&w=1200&auto=format&fit=crop',
        'name' => 'Rani — UI/UX Designer',
        'role' => 'Alumni DKV 2022',
        'quote' => 'Proyek real dengan brand lokal bikin portofolio cepat kebentuk. Lulus langsung kerja.',
    ],
    [
        'src' => 'https://images.unsplash.com/photo-1519764622345-23439dd774f0?q=80&w=1200&auto=format&fit=crop',
        'name' => 'Dimas — Software Engineer',
        'role' => 'Alumni Informatika 2021',
        'quote' => 'Kurikulumnya relevan, dosennya praktisi. Referral magang bantu masuk industri.',
    ],
    [
        'src' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop',
        'name' => 'Nadia — Business Analyst',
        'role' => 'Alumni SI 2020',
        'quote' => 'Banyak studi kasus nyata. Skills analitik kepake banget di kantor.',
    ],
];

$faq = [
    [
        'q' => 'Berapa biaya kuliah per semester?',
        'a' => 'Ada skema UKT fleksibel & beasiswa. Rata-rata lebih hemat dibanding kampus swasta sejenis.',
    ],
    [
        'q' => 'Apakah ada kelas malam/karyawan?',
        'a' => 'Ada. Jadwal dibuat adaptif untuk pekerja dengan dukungan materi online.',
    ],
    [
        'q' => 'Magang & penyaluran kerja?',
        'a' => 'Tersedia program magang terstruktur dan career center yang aktif menjembatani ke industri.',
    ],
    [
        'q' => 'Apakah bisa pindahan?',
        'a' => 'Bisa, dengan konversi SKS sesuai ketentuan program studi.',
    ],
];

function icon_svg($name)
{
    $icons = [
        'lab' => '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M10 2a1 1 0 0 0-1 1v3.586L4.293 11.293A1 1 0 0 0 5 13h14a1 1 0 0 0 .707-1.707L15 6.586V3a1 1 0 0 0-1-1h-4Z"/><path d="M4 15a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3H4Z"/></svg>',
        'wifi' => '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 18a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm6.364-2.364a9 9 0 0 0-12.728 0l1.414 1.414a7 7 0 0 1 9.9 0l1.414-1.414ZM21.192 12.95a12 12 0 0 0-18.384 0l1.414 1.415a10 10 0 0 1 15.556 0l1.414-1.415Z"/></svg>',
        'library' => '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4 5a2 2 0 0 1 2-2h3v18H6a2 2 0 0 1-2-2V5Zm7-2h2a2 2 0 0 1 2 2v16h-4V3Zm7 0h1a2 2 0 0 1 2 2v16h-3V3Z"/></svg>',
        'career' => '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M9 12V7h6v5h5v7H4v-7h5Zm2-7h2V3h-2v2Z"/></svg>',
    ];
    return $icons[$name] ?? '';
}
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kampus BSI — Landing</title>
    <style>
        :root {
            --blue-50: #eff6ff;
            --blue-600: #2563eb;
            --blue-700: #1d4ed8;
            --blue-800: #1e40af;
            --indigo-50: #eef2ff;
            --indigo-600: #4f46e5;
            --slate-50: #f8fafc;
            --slate-100: #f1f5f9;
            --slate-500: #64748b;
            --slate-600: #475569;
            --slate-700: #334155;
            --emerald-600: #059669;
            --sky-600: #0284c7;
            --white: #fff;
            --black: #000;
            --radius-xl: 1rem;
            --radius-2xl: 1.25rem;
            --shadow: 0 6px 20px rgba(0, 0, 0, .08);
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, \"Helvetica Neue\", Noto Sans, \"Apple Color Emoji\", \"Segoe UI Emoji\";
            color: var(--slate-700);
            line-height: 1.6
        }

        img {
            max-width: 100%;
            display: block
        }

        a {
            color: inherit;
            text-decoration: none
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px
        }

        .grid {
            display: grid;
            gap: 24px
        }

        .grid-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .grid-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr))
        }

        .grid-4 {
            grid-template-columns: repeat(4, minmax(0, 1fr))
        }

        @media (max-width:1024px) {

            .grid-2,
            .grid-3,
            .grid-4 {
                grid-template-columns: 1fr
            }
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid transparent;
            padding: 10px 16px;
            border-radius: 12px;
            cursor: pointer;
            background: var(--blue-600);
            color: #fff;
            font-weight: 700;
            box-shadow: 0 2px 8px rgba(37, 99, 235, .25)
        }

        .btn:hover {
            filter: brightness(.95)
        }

        .btn--light {
            background: #fff;
            color: var(--slate-700);
            border-color: #e2e8f0
        }

        .btn--outline {
            background: transparent;
            border-color: #fff;
            color: #fff
        }

        .btn--sm {
            padding: 6px 10px;
            border-radius: 10px;
            font-weight: 600
        }

        .btn--xs {
            padding: 4px 8px;
            border-radius: 8px;
            font-size: 12px
        }

        /* Badges */
        .badge {
            display: inline-flex;
            align-items: center;
            padding: 4px 8px;
            border-radius: 999px;
            font-size: 12px;
            background: var(--slate-100);
            color: var(--slate-700);
            border: 1px solid #e2e8f0
        }

        /* Cards */
        .card {
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            overflow: hidden;
            background: #fff;
            transition: box-shadow .2s
        }

        .card:hover {
            box-shadow: var(--shadow)
        }

        .card-body {
            padding: 16px
        }

        .card-footer {
            padding: 12px 16px;
            border-top: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        /* Sections */
        .section {
            padding: 64px 0
        }

        .section--muted {
            background: var(--slate-50)
        }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, var(--blue-50), #fff, var(--indigo-50));
            overflow: hidden
        }

        .hero h1 {
            font-size: 42px;
            line-height: 1.15;
            margin: 0 0 12px;
            font-weight: 900;
            color: var(--blue-800)
        }

        .hero p {
            color: var(--slate-600);
            font-size: 18px
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin-top: 16px
        }

        .stat {
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 14px;
            text-align: center
        }

        .stat .num {
            font-size: 28px;
            color: var(--blue-700);
            font-weight: 800
        }

        .stat .lbl {
            font-size: 12px;
            color: #6b7280
        }

        /* Facilities */
        .facility {
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            background: #fff;
            padding: 20px
        }

        .facility .icon {
            width: 28px;
            height: 28px;
            margin-bottom: 10px;
            color: var(--blue-600)
        }

        /* Carousel */
        .carousel {
            position: relative
        }

        .carousel-track {
            display: flex;
            transition: transform .5s ease
        }

        .carousel-item {
            min-width: 100%;
            display: grid;
            gap: 24px;
            align-items: center
        }

        @media (min-width:768px) {
            .carousel-item {
                grid-template-columns: 1fr 1fr
            }
        }

        .carousel-controls {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            pointer-events: none
        }

        .carousel-btn {
            pointer-events: auto;
            border: none;
            background: rgba(0, 0, 0, .5);
            color: #fff;
            padding: 8px 10px;
            border-radius: 999px;
            cursor: pointer
        }

        .dots {
            display: flex;
            gap: 6px;
            justify-content: center;
            margin-top: 10px
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #cbd5e1;
            cursor: pointer;
            border: 0
        }

        .dot.active {
            background: var(--blue-600)
        }

        /* Accordion */
        .accordion {
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #e5e7eb
        }

        .acc-item+.acc-item {
            border-top: 1px solid #e5e7eb
        }

        .acc-header {
            width: 100%;
            text-align: left;
            padding: 16px 18px;
            background: #fff;
            border: 0;
            cursor: pointer;
            font-weight: 700
        }

        .acc-content {
            padding: 0 18px 16px 18px;
            display: none;
            background: #fff;
            color: var(--slate-600)
        }

        .acc-item.open .acc-content {
            display: block
        }

        /* CTA */
        .cta {
            background: var(--blue-600);
            color: #fff;
            border-radius: 24px;
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 16px
        }

        @media (min-width:768px) {
            .cta {
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                padding: 28px 40px
            }
        }

        /* Footer */
        footer {
            border-top: 1px solid #e5e7eb;
            padding: 40px 0;
            color: var(--slate-600)
        }

        /* Helpers */
        .mb-10 {
            margin-bottom: 24px
        }

        .title {
            text-align: center;
            font-size: 28px;
            font-weight: 800;
            color: #0f172a
        }

        .subtitle {
            text-align: center;
            color: var(--slate-600)
        }
    </style>
</head>

<body>
    <!-- HERO -->
    <section class="hero section">
        <div class="container">
            <div class="grid grid-2" style="align-items:center">
                <div>
                    <h1>Kuliah murah & kekinian? <br> Di <span style="color:var(--indigo-600)">BSI</span> aja!</h1>
                    <p>Kampus praktis untuk karier digital: kurikulum up-to-date, dosen praktisi, UKT ramah kantong, dan jaringan magang luas.</p>
                    <div style="display:flex;flex-wrap:wrap;gap:12px;margin-top:12px">
                       <a class="btn" href="pendaftaran.php">Ayo Gabung</a>
                        <a class="btn btn--light" href="#kontak">Kontak Kami</a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat">
                            <div class="num">98%</div>
                            <div class="lbl">Lulusan Bekerja/Melanjutkan</div>
                        </div>
                        <div class="stat">
                            <div class="num">150+</div>
                            <div class="lbl">Mitra Industri</div>
                        </div>
                        <div class="stat">
                            <div class="num">20K+</div>
                            <div class="lbl">Mahasiswa Aktif</div>
                        </div>
                    </div>
                </div>
                <div style="position:relative">
                    <div style="border:1px solid #e5e7eb;border-radius:24px;box-shadow:var(--shadow);background:#fff;padding:8px">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1400&auto=format&fit=crop" alt="Suasana Kampus" style="border-radius:18px">
                    </div>
                    <div style="position:absolute;bottom:-16px;left:-16px;display:none" class="hero-note">
                        <div style="border:1px solid #e5e7eb;border-radius:16px;background:rgba(255,255,255,.7);backdrop-filter:blur(6px);padding:12px;box-shadow:var(--shadow)">
                            <p style="margin:0;font-weight:700;font-size:14px">Beasiswa Hingga 100%</p>
                            <p style="margin:4px 0 0;color:var(--slate-600);font-size:12px">Cek syarat & ketentuan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROGRAM STUDI -->
    <section id="program" class="section">
        <div class="container">
            <div class="mb-10">
                <h2 class="title">Program Studi Favorit</h2>
                <p class="subtitle">Fokus pada kebutuhan industri masa kini</p>
            </div>
            <div class="grid grid-3">
                <?php foreach ($programs as $p): ?>
                    <article class="card">
                        <img src="<?= htmlspecialchars($p['img']) ?>" alt="<?= htmlspecialchars($p['title']) ?>" style="height:180px;width:100%;object-fit:cover">
                        <div class="card-body">
                            <h3 style="margin:0 0 4px;font-size:20px;font-weight:800;color:#0f172a"><?= htmlspecialchars($p['title']) ?></h3>
                            <p style="margin:6px 0 0;color:var(--slate-600);font-size:14px"><?= htmlspecialchars($p['desc']) ?></p>
                            <div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:12px">
                                <?php foreach ($p['tags'] as $t): ?>
                                    <span class="badge"><?= htmlspecialchars($t) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <span style="font-size:14px;color:#6b7280">Akreditasi: <?= htmlspecialchars($p['akreditasi']) ?></span>
                            <a class="btn btn--light btn--sm" href="detail.php?program=<?= urlencode($p['title']) ?>">Detail</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FASILITAS -->
    <section id="fasilitas" class="section section--muted">
        <div class="container">
            <div class="mb-10">
                <h2 class="title">Fasilitas Modern</h2>
                <p class="subtitle">Belajar nyaman, praktik optimal</p>
            </div>
            <div class="grid grid-4">
                <?php foreach ($fasilitas as $f): ?>
                    <div class="facility">
                        <div class="icon" aria-hidden="true" style="color:var(--blue-600)"><?= icon_svg($f['icon']); ?></div>
                        <h3 style="margin:0 0 4px;font-weight:800;color:#0f172a"><?= htmlspecialchars($f['title']) ?></h3>
                        <p style="margin:6px 0 0;font-size:14px;color:var(--slate-600)"><?= htmlspecialchars($f['desc']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- TESTIMONI (Carousel) -->
    <section id="testimoni" class="section">
        <div class="container">
            <div class="mb-10">
                <h2 class="title">Kata Alumni</h2>
                <p class="subtitle">Cerita nyata dari kampus ke karier</p>
            </div>

            <div class="carousel" id="carousel">
                <div class="carousel-track" id="carousel-track">
                    <?php foreach ($carouselImages as $item): ?>
                        <div class="carousel-item">
                            <img src="<?= htmlspecialchars($item['src']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" style="border-radius:16px;height:290px;width:100%;object-fit:cover" />
                            <div>
                                <p style="margin:0 0 8px;color:var(--slate-700)">“<?= htmlspecialchars($item['quote']) ?>”</p>
                                <p style="margin:0;font-weight:700;color:#0f172a"><?= htmlspecialchars($item['name']) ?></p>
                                <p style="margin:4px 0 0;color:#6b7280;font-size:14px"><?= htmlspecialchars($item['role']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="carousel-controls">
                    <button class="carousel-btn" aria-label="Prev" onclick="carouselPrev()">◀</button>
                    <button class="carousel-btn" aria-label="Next" onclick="carouselNext()">▶</button>
                </div>
                <div class="dots" id="carousel-dots"></div>
            </div>
        </div>
    </section>

    <!-- FAQ (Accordion) -->
    <section id="faq" class="section" style="background:linear-gradient(#fff, var(--slate-50))">
        <div class="container" style="max-width:860px">
            <div class="mb-10">
                <h2 class="title">Pertanyaan Umum</h2>
                <p class="subtitle">Informasi pendaftaran & perkuliahan</p>
            </div>

            <div class="accordion" id="faq-acc">
                <?php foreach ($faq as $i => $q): ?>
                    <div class="acc-item">
                        <button class="acc-header" type="button" onclick="toggleAcc(this)"><?= htmlspecialchars($q['q']) ?></button>
                        <div class="acc-content">
                            <p><?= htmlspecialchars($q['a']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section">
        <div class="container">
            <div class="cta">
                <div>
                    <h3 style="margin:0 0 6px;font-size:22px;font-weight:900">Siap jadi talenta digital masa depan?</h3>
                    <p style="margin:0;color:#dbeafe">Daftar sekarang dan amankan kursi di gelombang beasiswa.</p>
                </div>
                <div style="display:flex;gap:12px">
                    <a class="btn btn--light" href="pendaftaran.php">Daftar Sekarang</a>
                    <a class="btn btn--outline" href="jadwal.php">Jadwal Info Session</a>
                </div>
            </div>
        </div>
    </section>

    <?php
        include 'data/news.php';
    ?>

    <!-- FOOTER -->
    <footer id="kontak">
        <div class="container">
            <div class="grid grid-4">
                <div>
                    <div style="display:flex;align-items:center;gap:8px;font-weight:800;color:#0f172a">Kampus BSI</div>
                    <p style="margin:12px 0 0">Kampus praktis & relevan untuk industri. Kami bantu kamu siap kerja sejak semester awal.</p>
                </div>
                <div>
                    <h4 style="margin:0 0 12px;font-weight:700;color:#0f172a">Tautan</h4>
                    <ul style="list-style:none;padding:0;margin:0;display:grid;gap:8px">
                        <li><a href="#program">Program Studi</a></li>
                        <li><a href="#fasilitas">Fasilitas</a></li>
                        <li><a href="#testimoni">Testimoni</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="margin:0 0 12px;font-weight:700;color:#0f172a">Kontak</h4>
                    <ul style="list-style:none;padding:0;margin:0;display:grid;gap:8px">
                        <li>Email: admisi@kampusbsi.ac.id</li>
                        <li>Telp: (021) 123-4567</li>
                        <li>Alamat: Jl. Kampus No. 1, Bekasi</li>
                    </ul>
                </div>
                <div>
                    <h4 style="margin:0 0 12px;font-weight:700;color:#0f172a">Ikuti Kami</h4>
                    <div style="display:flex;gap:8px">
                        <a class="btn btn--light btn--xs" href="https://www.instagram.com/kuliahbsiaja/?hl=en" target="_blank">IG</a>
                        <a class="btn btn--light btn--xs" href="https://www.youtube.com/@KuliahBSIAja" target="_blank">YT</a>
                        <a class="btn btn--light btn--xs" href="https://www.tiktok.com/@ubsi_official" target="_blank">TT</a>
                    </div>
                </div>
            </div>
            <div style="margin-top:24px;font-size:12px;color:#6b7280">© <?= date('Y') ?> Kampus BSI.</div>
        </div>
    </footer>

    <script>
        // ------- Accordion -------
        function toggleAcc(btn) {
            const item = btn.parentElement;
            const acc = document.getElementById('faq-acc');
            // optional: close others
            Array.from(acc.children).forEach(i => {
                if (i !== item) i.classList.remove('open');
            });
            item.classList.toggle('open');
        }

        // ------- Carousel -------
        const track = document.getElementById('carousel-track');
        const dotsWrap = document.getElementById('carousel-dots');
        const items = Array.from(track.children);
        let idx = 0;
        let timer;

        function renderDots() {
            dotsWrap.innerHTML = '';
            items.forEach((_, i) => {
                const d = document.createElement('button');
                d.className = 'dot' + (i === idx ? ' active' : '');
                d.setAttribute('aria-label', 'Slide ' + (i + 1));
                d.onclick = () => {
                    goTo(i);
                };
                dotsWrap.appendChild(d);
            });
        }

        function goTo(i) {
            idx = (i + items.length) % items.length;
            track.style.transform = `translateX(-${idx*100}%)`;
            renderDots();
            resetAuto();
        }

        function carouselNext() {
            goTo(idx + 1);
        }

        function carouselPrev() {
            goTo(idx - 1);
        }

        function resetAuto() {
            clearInterval(timer);
            timer = setInterval(() => goTo(idx + 1), 5000);
        }
        renderDots();
        resetAuto();

        // minor: show hero note on md+
        if (window.matchMedia('(min-width: 768px)').matches) {
            const note = document.querySelector('.hero-note');
            if (note) note.style.display = 'block';
        }
    </script>
</body>

</html>