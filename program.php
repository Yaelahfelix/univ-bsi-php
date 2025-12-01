<?php
// ===================== DATA =====================
$favoritePrograms = [
  [
    'title' => 'Informatika',
    'desc'  => 'Ngoding full-stack, AI dasar, dan DevOps praktis bareng dosen praktisi.',
    'tags'  => ['Full-Stack','AI','DevOps'],
    'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1200&auto=format&fit=crop',
  ],
  [
    'title' => 'Sistem Informasi',
    'desc'  => 'Analisis bisnis-IT, ERP, dan data untuk optimalisasi proses.',
    'tags'  => ['Bisnis-IT','ERP','Data'],
    'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1200&auto=format&fit=crop',
  ],
  [
    'title' => 'Desain Komunikasi Visual',
    'desc'  => 'Branding, UI/UX, dan motion untuk industri kreatif.',
    'tags'  => ['UI/UX','Branding','Motion'],
    'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1200&auto=format&fit=crop',
  ],
];

$levels = [
  ['name' => 'd3', 'title' => 'Diploma (D3)'],
  ['name' => 's1', 'title' => 'Sarjana (S1)'],
  ['name' => 's2', 'title' => 'Magister (S2)'],
];

$programsByLevel = [
  'd3' => [
    [
      'code' => 'd3-si',
      'name' => 'D3 Sistem Informasi',
      'duration' => '3 Tahun',
      'degree' => 'Ahli Madya (A.Md.)',
      'summary' => 'Fokus analisis proses & implementasi ERP untuk bisnis.',
      'tags' => ['ERP','Bisnis-IT','Database'],
      'banner' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1200&auto=format&fit=crop',
    ],
    [
      'code' => 'd3-ti',
      'name' => 'D3 Teknologi Informasi',
      'duration' => '3 Tahun',
      'degree' => 'Ahli Madya (A.Md.)',
      'summary' => 'Dasar pemrograman, jaringan, dan administrasi sistem.',
      'tags' => ['Networking','SysAdmin','Pemrograman'],
      'banner' => 'https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=1200&auto=format&fit=crop',
    ],
  ],
  's1' => [
    [
      'code' => 'if',
      'name' => 'S1 Informatika',
      'duration' => '4 Tahun',
      'degree' => 'S.Kom.',
      'summary' => 'Full-stack, AI dasar, dan praktik DevOps bareng dosen praktisi.',
      'tags' => ['Full-Stack','AI','DevOps'],
      'banner' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1200&auto=format&fit=crop',
    ],
    [
      'code' => 'si',
      'name' => 'S1 Sistem Informasi',
      'duration' => '4 Tahun',
      'degree' => 'S.Kom.',
      'summary' => 'Bridging bisnis dan teknologi untuk optimasi proses.',
      'tags' => ['Bisnis-IT','ERP','Data'],
      'banner' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1200&auto=format&fit=crop',
    ],
    [
      'code' => 'ti',
      'name' => 'S1 Teknologi Informasi',
      'duration' => '4 Tahun',
      'degree' => 'S.Kom.',
      'summary' => 'Arsitektur sistem, jaringan, keamanan, dan komputasi awan.',
      'tags' => ['Cloud','Security','Networking'],
      'banner' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981d?q=80&w=1200&auto=format&fit=crop',
    ],
    [
      'code' => 'ik',
      'name' => 'S1 Ilmu Komunikasi',
      'duration' => '4 Tahun',
      'degree' => 'S.Ikom.',
      'summary' => 'Strategi komunikasi, public relations, media digital & content.',
      'tags' => ['PR','Content','Media'],
      'banner' => 'https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=1200&auto=format&fit=crop',
    ],
    [
      'code' => 'mnj',
      'name' => 'S1 Manajemen',
      'duration' => '4 Tahun',
      'degree' => 'S.M.',
      'summary' => 'Manajemen pemasaran, SDM, operasi, dan kewirausahaan.',
      'tags' => ['Marketing','HR','Operation'],
      'banner' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=1200&auto=format&fit=crop',
    ],
    [
      'code' => 'akt',
      'name' => 'S1 Akuntansi',
      'duration' => '4 Tahun',
      'degree' => 'S.Ak.',
      'summary' => 'Akuntansi keuangan, audit, perpajakan, dan sistem informasi akuntansi.',
      'tags' => ['Keuangan','Audit','Pajak'],
      'banner' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=1200&auto=format&fit=crop',
    ],
    [
      'code' => 'ti-ind',
      'name' => 'S1 Teknik Industri',
      'duration' => '4 Tahun',
      'degree' => 'S.T.',
      'summary' => 'Optimasi proses, supply chain, ergonomi, dan manajemen kualitas.',
      'tags' => ['Supply Chain','Lean','Quality'],
      'banner' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1200&auto=format&fit=crop',
    ],
    [
      'code' => 'dkv',
      'name' => 'S1 Desain Komunikasi Visual',
      'duration' => '4 Tahun',
      'degree' => 'S.Ds.',
      'summary' => 'Branding, UI/UX, dan motion untuk industri kreatif.',
      'tags' => ['UI/UX','Branding','Motion'],
      'banner' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1200&auto=format&fit=crop',
    ],
  ],
  's2' => [
    [
      'code' => 'mi',
      'name' => 'S2 Magister Informatika',
      'duration' => '2 Tahun',
      'degree' => 'M.Kom.',
      'summary' => 'Riset terapan AI/ML dan arsitektur sistem skala besar.',
      'tags' => ['AI/ML','Big Data','Cloud'],
      'banner' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1200&auto=format&fit=crop',
    ],
  ],
];

$highlights = [
  [
    'code' => 'if',
    'title' => 'Informatika',
    'tags' => ['Full-Stack','AI','DevOps'],
    'courses' => ['Algoritma & Struktur Data', 'Web Full-Stack', 'Machine Learning Dasar', 'CI/CD & Cloud'],
  ],
  [
    'code' => 'si',
    'title' => 'Sistem Informasi',
    'tags' => ['ERP','Analis Proses','Data'],
    'courses' => ['Analisis & Perancangan SI', 'ERP & Business Process', 'Data Warehouse', 'Manajemen Proyek TI'],
  ],
  [
    'code' => 'dkv',
    'title' => 'Desain Komunikasi Visual',
    'tags' => ['UI/UX','Branding','Motion'],
    'courses' => ['Tipografi & Layout', 'Desain UI/UX', 'Brand Strategy', 'Motion Graphics'],
  ],
];

$careers = [
  [
    'title' => 'Informatika',
    'desc'  => 'Fokus pengembangan perangkat lunak dan infrastrukur modern.',
    'roles' => ['Software Engineer','Data Engineer','DevOps Engineer','QA Engineer'],
  ],
  [
    'title' => 'Sistem Informasi',
    'desc'  => 'Penghubung kebutuhan bisnis dan solusi teknologi.',
    'roles' => ['System Analyst','ERP Consultant','Product Owner','Data Analyst'],
  ],
  [
    'title' => 'Desain Komunikasi Visual',
    'desc'  => 'Desain pengalaman yang bernilai untuk brand & produk.',
    'roles' => ['UI/UX Designer','Visual Designer','Motion Designer','Art Director'],
  ],
];

$partnerLogos = [
  'https://dummyimage.com/300x120/ededed/0d0d0d&text=Partner+A',
  'https://dummyimage.com/300x120/ededed/0d0d0d&text=Partner+B',
  'https://dummyimage.com/300x120/ededed/0d0d0d&text=Partner+C',
  'https://dummyimage.com/300x120/ededed/0d0d0d&text=Partner+D',
  'https://dummyimage.com/300x120/ededed/0d0d0d&text=Partner+E',
  'https://dummyimage.com/300x120/ededed/0d0d0d&text=Partner+F',
];

$alumni = [
  ['name' => 'Rizal Pratama', 'role' => 'Software Engineer', 'company' => 'Startup Fintech', 'avatar' => 'https://i.pravatar.cc/100?img=12', 'quote' => 'Belajar full-stack & DevOps bikin transisi ke dunia kerja jadi mulus.'],
  ['name' => 'Nadia Putri', 'role' => 'UI/UX Designer', 'company' => 'Studio Kreatif', 'avatar' => 'https://i.pravatar.cc/100?img=5', 'quote' => 'Project real dengan mitra industri nambah portofolio yang kuat.'],
  ['name' => 'Adit W.', 'role' => 'ERP Consultant', 'company' => 'Konsultan TI', 'avatar' => 'https://i.pravatar.cc/100?img=23', 'quote' => 'Fondasi bisnis-IT di SI kepake banget pas handle implementasi ERP.'],
];

$activeLevel = 'd3';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Program Studi di Kampus BSI</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <style>
    :root{--slate-50:#f8fafc;--slate-100:#f1f5f9;--slate-200:#e2e8f0;--slate-600:#475569;--slate-700:#334155;--indigo-600:#4f46e5;--blue-600:#2563eb;--card:#ffffff}
    *{box-sizing:border-box}
    html,body{margin:0;padding:0;font-family:Inter,system-ui,Segoe UI,Roboto,Helvetica,Arial,sans-serif;color:#0f172a;background:#fff}
    .container{max-width:1120px;margin:0 auto;padding:64px 16px}
    h1{font-size:clamp(2rem,5vw,3rem);line-height:1.1;margin:0 0 12px;background:linear-gradient(90deg,#1d4ed8,#4338ca);-webkit-background-clip:text;background-clip:text;color:transparent;font-weight:900}
    h2{font-size:clamp(1.5rem,3.5vw,2rem);margin:0 0 16px}
    p{margin:0}
    .muted{color:var(--slate-600)}
    .section{margin-top:96px}

    /* Grid */
    .grid{display:grid;gap:24px}
    .grid-3{grid-template-columns:repeat(1,minmax(0,1fr))}
    .grid-2{grid-template-columns:repeat(1,minmax(0,1fr))}
    @media(min-width:768px){.grid-3{grid-template-columns:repeat(3,1fr)}.grid-2{grid-template-columns:repeat(2,1fr)}}
    @media(min-width:1024px){.grid-3-lg{grid-template-columns:repeat(3,1fr)}}

    /* Card */
    .card{background:var(--card);border:1px solid var(--slate-200);border-radius:16px;padding:16px;box-shadow:0 0 0 rgba(0,0,0,0);transition:transform .2s,box-shadow .2s}
    .card:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(2,6,23,.08)}
    .card img{width:100%;height:160px;object-fit:cover;border-radius:12px 12px 0 0;margin:-16px -16px 12px -16px}

    .alumni-card {
  display: flex;
  flex-direction: column;
  gap: 10px;
  height: 100%;
  padding: 20px; /* kasih ruang biar gak nempel border */
}

.alumni-head {
  display: flex;
  align-items: center;
  gap: 12px;
}

/* Alumni (fix avatar always round) */
.alumni-card{display:flex;flex-direction:column;gap:10px;height:100%;padding:20px}
.alumni-head{display:flex;align-items:center;gap:12px}

/* Container bulat */
.alumni-avatar{
  width:30px;
  height:30px;
  border-radius:9999px;
  overflow:hidden;        
  flex-shrink:0;
}

.alumni-avatar img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
  border-radius:inherit;  
}

.alumni-info{display:flex;flex-direction:column;justify-content:center;height:30px}
.alumni-name{font-weight:700;line-height:1.1;margin:0}
.alumni-meta{font-size:12px;color:var(--slate-600);margin-top:2px}
.alumni-quote{margin-top:10px;color:var(--slate-700);font-size:.95rem;line-height:1.6}

.alumni-quote {
  margin-top: 6px;
  color: var(--slate-700);
  font-size: .95rem;
  line-height: 1.6;
}


    /* Badges & button */
    .badges{display:flex;flex-wrap:wrap;gap:8px;margin-top:8px}
    .badge{display:inline-block;padding:4px 10px;border-radius:999px;background:var(--slate-100);border:1px solid var(--slate-200);font-size:12px;color:#0f172a}
    .badge.gray{background:#f3f4f6;border-color:#e5e7eb}
    .badge.indigo{background:#eef2ff;border-color:#e0e7ff;color:#3730a3}
    .btn{display:inline-block;padding:10px 16px;border-radius:10px;background:var(--blue-600);color:white;text-decoration:none;font-weight:600;border:1px solid transparent}
    .btn:hover{filter:brightness(.95)}

    /* Tabs */
    .tabs{display:flex;flex-wrap:wrap;gap:8px;margin-top:8px}
    .tab-btn{padding:8px 16px;border-radius:999px;border:1px solid var(--slate-200);background:#fff;color:#334155;cursor:pointer}
    .tab-btn.active{background:var(--blue-600);border-color:var(--blue-600);color:#fff;box-shadow:0 6px 16px rgba(37,99,235,.2)}

    /* Accordion */
    .accordion{border:1px solid var(--slate-200);border-radius:16px;overflow:hidden}
    .acc-item+.acc-item{border-top:1px solid var(--slate-200)}
    .acc-header{padding:16px 20px;display:flex;justify-content:space-between;align-items:center;cursor:pointer}
    .acc-title{font-weight:600}
    .acc-tags{display:none;gap:8px}
    @media(min-width:768px){.acc-tags{display:flex}}
    .acc-content{max-height:0;overflow:hidden;transition:max-height .25s ease;padding:0 20px}
    .acc-content.open{padding:12px 20px 20px 40px}
    .acc-content ul{margin:0;padding-left:18px;color:var(--slate-700)}

    /* Simple utilities */
    .center{text-align:center}
    .mt-4{margin-top:16px}
    .mt-6{margin-top:24px}
    .mt-8{margin-top:32px}
    .pt-6{padding-top:24px}
    .border-t{border-top:1px solid var(--slate-200)}

    /* Partner grid */
    .partner-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}
    @media(min-width:640px){.partner-grid{grid-template-columns:repeat(3,1fr)}}
    @media(min-width:1024px){.partner-grid{grid-template-columns:repeat(6,1fr)}}
    .partner{background:#fff;border:1px solid var(--slate-200);border-radius:12px;padding:12px}
    .partner img{display:block;margin:0 auto;height:40px;object-fit:contain}

    a.underline{color:var(--blue-600)}
    a.underline:hover{text-decoration:none}
  </style>
</head>
<body>
  <main class="container">
    <!-- HERO -->
    <section class="center">
      <h1>Program Studi di Kampus BSI</h1>
      <p class="muted" style="max-width:680px;margin:0 auto">Fokus pada kebutuhan industri masa kini dengan kurikulum up-to-date, dosen praktisi, dan ekosistem karier nyata.</p>
    </section>

    <!-- PROGRAM FAVORIT -->
    <section id="program-favorit" class="section">
      <h2 class="center">Program Studi Favorit</h2>
      <div class="grid grid-3">
        <?php foreach($favoritePrograms as $program): ?>
          <article class="card">
            <img src="<?= htmlspecialchars($program['image']) ?>" alt="">
            <h3 style="font-size:1.125rem;font-weight:700;margin:4px 0 0"><?= htmlspecialchars($program['title']) ?></h3>
            <p class="muted" style="font-size:.95rem;margin-top:6px"><?= htmlspecialchars($program['desc']) ?></p>
            <div class="badges mt-4">
              <?php foreach($program['tags'] as $tag): ?>
                <span class="badge"><?= htmlspecialchars($tag) ?></span>
              <?php endforeach; ?>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- DAFTAR LENGKAP PROGRAM -->
    <section id="daftar-program" class="section">
      <div>
        <h2>Daftar Lengkap Program</h2>
        <p class="muted">Pilih jenjang untuk melihat semua program studi.</p>
      </div>

      <div class="tabs">
        <?php foreach($levels as $l): ?>
          <button class="tab-btn <?= $l['name']===$activeLevel?'active':'' ?>" data-level="<?= $l['name'] ?>"><?= htmlspecialchars($l['title']) ?></button>
        <?php endforeach; ?>
      </div>

      <?php foreach($programsByLevel as $levelName => $programs): ?>
        <div class="grid grid-2 grid-3-lg mt-6 level-pane" data-level-pane="<?= $levelName ?>" style="display:<?= $levelName===$activeLevel?'grid':'none' ?>">
          <?php foreach($programs as $p): ?>
            <article class="card" style="display:flex;flex-direction:column">
              <img src="<?= htmlspecialchars($p['banner']) ?>" alt="">
              <h3 style="font-size:1.05rem;font-weight:600;"><?= htmlspecialchars($p['name']) ?></h3>
              <p class="muted" style="font-size:.95rem;margin-top:4px;"><?= htmlspecialchars($p['summary']) ?></p>
              <div class="badges mt-4">
                <span class="badge gray"><?= htmlspecialchars($p['duration']) ?></span>
                <span class="badge indigo"><?= htmlspecialchars($p['degree']) ?></span>
              </div>
              <div class="badges mt-4">
                <?php foreach($p['tags'] as $t): ?>
                  <span class="badge"><?= htmlspecialchars($t) ?></span>
                <?php endforeach; ?>
              </div>
              <div class="mt-6">
                <a class="btn" href="/program/<?= urlencode($p['code']) ?>">Detail Program</a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </section>

    <!-- KURIKULUM -->
    <section id="kurikulum" class="section">
      <h2>Kurikulum Unggulan</h2>
      <p class="muted">Mata kuliah inti & kompetensi yang ditekankan di tiap program.</p>

      <div class="accordion mt-6" id="acc">
        <?php foreach($highlights as $idx => $p): $panelId = 'acc-'.$idx; ?>
          <div class="acc-item">
            <div class="acc-header" data-acc-toggle="<?= $panelId ?>">
              <span class="acc-title"><?= htmlspecialchars($p['title']) ?></span>
              <div class="acc-tags">
                <?php foreach($p['tags'] as $t): ?>
                  <span class="badge"><?= htmlspecialchars($t) ?></span>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="acc-content" id="<?= $panelId ?>">
              <ul>
                <?php foreach($p['courses'] as $c): ?>
                  <li><?= htmlspecialchars($c) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- KARIER -->
    <section id="karier" class="section">
      <h2>Peluang Karier</h2>
      <p class="muted">Gambaran jalur karier lulusan sesuai kebutuhan industri.</p>

      <div class="grid grid-3 mt-6">
        <?php foreach($careers as $k): ?>
          <article class="card">
            <h3 style="font-size:1.05rem;font-weight:600;"><?= htmlspecialchars($k['title']) ?></h3>
            <p class="muted" style="font-size:.95rem;margin-top:4px;"><?= htmlspecialchars($k['desc']) ?></p>
            <div class="badges mt-4">
              <?php foreach($k['roles'] as $r): ?>
                <span class="badge"><?= htmlspecialchars($r) ?></span>
              <?php endforeach; ?>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- INDUSTRI -->
    <section id="industri" class="section">
      <h2>Kerjasama Industri & Magang</h2>
      <p class="muted">Akses ke 150+ mitra industri untuk magang, proyek real, dan rekrutmen.</p>

      <div class="partner-grid mt-6">
        <?php foreach($partnerLogos as $logo): ?>
          <div class="partner"><img src="<?= htmlspecialchars($logo) ?>" alt="partner"></div>
        <?php endforeach; ?>
      </div>

      <article class="card mt-6">
        <p style="color:var(--slate-700)">Program magang berlangsung 1–2 semester di akhir masa studi, dengan opsi <span style="font-weight:600">penempatan kerja</span> bagi mahasiswa berprestasi.</p>
      </article>
    </section>

    <!-- ALUMNI -->
    <section id="testimoni" class="section">
    <h2>Cerita Alumni</h2>
    <div class="grid grid-3 mt-6">
    <?php foreach($alumni as $a): ?>
        <article class="card alumni-card">
        <div class="alumni-head">

            <img 
            src="<?= htmlspecialchars($a['avatar']) ?>" 
            alt="" 
            style="width:30px;height:30px;border-radius:50%;object-fit:cover"
          >
            <div>
            <p style="font-weight:700;line-height:1.1;margin:0;">
              <?= htmlspecialchars($a['name']) ?>
            </p>
            <p class="muted" style="font-size:12px;margin-top:2px;">
              <?= htmlspecialchars($a['role']) ?> • <?= htmlspecialchars($a['company']) ?>
            </p>
         </div>
        </div>
        <p style="margin-top:10px;color:var(--slate-700);font-size:.95rem;line-height:1.6">
          “<?= htmlspecialchars($a['quote']) ?>”
        </p>
        </article>
    <?php endforeach; ?>
  </div>
</section>


    <section class="center pt-6 border-t section" style="margin-top:64px">
      <p class="muted" style="font-size:.9rem;margin-top:8px">
        Belum yakin? <a class="underline" href="/brosur">Unduh brosur lengkap</a>.
      </p>
    </section>
  </main>

  <script>
    // Tabs
    const tabBtns = document.querySelectorAll('.tab-btn');
    const panes = document.querySelectorAll('[data-level-pane]');
    tabBtns.forEach(btn=>{
      btn.addEventListener('click',()=>{
        const lvl = btn.getAttribute('data-level');
        tabBtns.forEach(b=>b.classList.toggle('active', b===btn));
        panes.forEach(p=>{ p.style.display = (p.getAttribute('data-level-pane')===lvl)?'grid':'none'; });
      });
    });

    // Accordion
    document.querySelectorAll('[data-acc-toggle]').forEach(h=>{
      h.addEventListener('click',()=>{
        const id = h.getAttribute('data-acc-toggle');
        const panel = document.getElementById(id);
        const isOpen = panel.classList.contains('open');
        panel.style.maxHeight = isOpen ? '0px' : (panel.scrollHeight + 20) + 'px';
        panel.classList.toggle('open');
      });
    });
  </script>
</body>
</html>
