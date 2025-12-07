<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>New Student Registration & Schedule — Campus</title>
  <meta name="description" content="Register as a new student and check your registration schedule." />
  <style>
    :root{
      --bg:#F7FAFC; --card:#ffffff; --muted:#6B7280; --accent:#0EA5A4; --accent-2:#06B6D4; --glass: rgba(255,255,255,0.6);
      --radius:14px; --shadow: 0 6px 18px rgba(15,23,42,0.08);
      --max-width:1100px;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    *{box-sizing:border-box}
    body{margin:0;background:linear-gradient(180deg,#eef2f7 0%,var(--bg) 60%);color:#0f172a;line-height:1.45}
    .container{width:95%;max-width:var(--max-width);margin:36px auto}

    /* Header */
    header{display:flex;align-items:center;justify-content:space-between;margin-bottom:22px}
    .brand{display:flex;gap:12px;align-items:center}
    .logo{height:56px;width:56px;border-radius:12px;background:linear-gradient(135deg,var(--accent),var(--accent-2));display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:18px}
    .brand h1{margin:0;font-size:18px}
    .nav{display:flex;gap:12px;align-items:center}
    .btn{background:var(--accent);color:white;padding:10px 16px;border-radius:10px;text-decoration:none;font-weight:600}
    .ghost{background:transparent;border:1px solid rgba(15,23,42,0.06);padding:8px 12px;border-radius:10px}

    /* Hero */
    .hero{display:grid;grid-template-columns:1fr 420px;gap:28px;align-items:center;margin-bottom:28px}
    .hero-card{background:var(--card);padding:28px;border-radius:var(--radius);box-shadow:var(--shadow)}
    .hero h2{margin:0 0 10px;font-size:24px}
    .hero p{margin:0;color:var(--muted)}
    .kpis{display:flex;gap:12px;margin-top:18px}
    .kpi{background:linear-gradient(180deg, rgba(14,165,164,0.06), rgba(6,182,212,0.02));padding:10px;border-radius:12px;flex:1}
    .kpi strong{display:block;font-size:18px}

    /* Schedule panel */
    .schedule-panel{background:linear-gradient(180deg, rgba(255,255,255,0.6), rgba(255,255,255,0.4));padding:18px;border-radius:12px}
    .controls{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:12px}
    select,input[type=text]{padding:10px;border-radius:10px;border:1px solid #e6e9ef;background:white}
    .search-row{display:flex;gap:8px}

    /* Table */
    table{width:100%;border-collapse:collapse;background:transparent}
    thead th{text-align:left;padding:12px 10px;color:var(--muted);font-weight:600;font-size:13px}
    tbody td{padding:12px 10px;border-top:1px solid #f1f3f5}
    .tag{display:inline-block;padding:6px 8px;border-radius:999px;font-size:12px;background:#eef6f6;color:#064e4e}
    .action{display:inline-flex;gap:8px;align-items:center}

    /* Steps + FAQ */
    .grid-2{display:grid;grid-template-columns:1fr 1fr;gap:18px;margin-top:20px}
    .step{display:flex;gap:12px;align-items:flex-start}
    .step .num{background:linear-gradient(90deg,var(--accent),var(--accent-2));color:white;padding:10px;border-radius:10px;font-weight:700}
    .faq .q{cursor:pointer;padding:12px;background:linear-gradient(180deg, #fff,#fbfeff);border-radius:10px;margin-bottom:8px;border:1px solid #eef2f6}
    .faq .a{padding:12px 12px 18px;color:var(--muted);display:none}

    footer{margin-top:36px;padding:18px;text-align:center;color:var(--muted)}

    /* Responsive */
    @media (max-width:980px){
      .hero{grid-template-columns:1fr}
      .grid-2{grid-template-columns:1fr}
      .schedule-panel{order:2}
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="brand">
        <div class="logo">UNIV</div>
        <div>
          <h1>Jadwal Registrasi</h1>
          <div style="font-size:12px;color:var(--muted)">Mahasiswa Baru | Angkatan 2026</div>
        </div>
      </div>
      <nav class="nav">
        <a class="ghost" href="#faq">FAQ</a>
        <a class="btn" href="#register">Daftar Sekarang</a>
      </nav>
    </header>

    <section class="hero">
      <div class="hero-card">
        <h2>Selamat Datang calon mahasiswa BSI 👋</h2>
        <p>Silahkan cek jadwal registrasi kamu tapi jangan lupa persiapkan document dan persyaratan yang diperlukan, lalu kamu baru bisa melanjutkan registrasi. Pilih fakultas yang kamu minati dan jadwal yang tersedia ya!</p>
        <div class="kpis">
          <div class="kpi"><strong>3,200+</strong><span style="color:var(--muted);font-size:13px">Orang mendaftar</span></div>
          <div class="kpi"><strong>15</strong><span style="color:var(--muted);font-size:13px">Hari pendaftaran</span></div>
          <div class="kpi"><strong>9am - 4pm</strong><span style="color:var(--muted);font-size:13px">Jadwal Administrasi</span></div>
        </div>

        <div style="margin-top:18px;display:flex;gap:10px;align-items:center">
          <a class="btn" href="#schedule">Lihat jadwal</a>
          <a class="ghost" href="#requirements">Persyaratan</a>
        </div>
      </div>

      <aside class="schedule-panel">
        <h3 style="margin:0 0 10px">Pilih jadwal</h3>
        <div class="controls">
          <select id="facultySelect">
            <option value="all">Semua fakultas</option>
            <option value="Tekdus">Teknik industri</option>
            <option value="SI">Sistem informasi</option>
            <option value="TI">Teknologi informasi</option>
            <option value="Management">Management</option>
          </select>
          <select id="sessionSelect">
            <option value="all">Semua sesi</option>
            <option value="morning">Pagi (08:00 - 11:00)</option>
            <option value="afternoon">Siang (12:00 - 15:00)</option>
          </select>
        </div>
        <div class="search-row" style="margin-bottom:12px">
          <input id="search" type="text" placeholder="Search by name or student id..." />
          <button class="btn" onclick="filterTable()">Search</button>
        </div>

        <div style="overflow:auto;max-height:360px">
          <table id="scheduleTable">
            <thead>
              <tr><th>Mahasiswa/Mahasiswi</th><th>Fakultas</th><th>Tanggal</th><th>Jam</th><th></th></tr>
            </thead>
            <tbody>
              <!-- Example rows; replace with server data -->
              <tr data-faculty="Tekdus" data-session="Pagi"><td>A. Putra (NIM: 20260011)</td><td>Teknik industri</td><td>Jan 10, 2026</td><td>09:00</td><td class="action"><span class="tag">Tatap muka</span></td></tr>
              <tr data-faculty="SI" data-session="Siang"><td>S. Dewi (NIM: 20260012)</td><td>Sistem Informasi</td><td>Jan 11, 2026</td><td>13:30</td><td class="action"><span class="tag">Online</span></td></tr>
              <tr data-faculty="TI" data-session="Pagi"><td>R. Haris (NIM: 20260013)</td><td>Teknologi Informasi</td><td>Jan 12, 2026</td><td>10:00</td><td class="action"><span class="tag">Tatap muka</span></td></tr>
              <tr data-faculty="Management" data-session="Siang"><td>L. Prames (NIM: 20260014)</td><td>Management</td><td>Jan 13, 2026</td><td>14:00</td><td class="action"><span class="tag">Tatap muka</span></td></tr>
            </tbody>
          </table>
        </div>

        <p style="margin-top:10px;font-size:13px;color:var(--muted)">Nama kamu tidak ada? Silahkan Hubungi <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Customer Service</a>.</p>
      </aside>
    </section>

    <section class="grid-2">
      <div class="hero-card">
        <h3>Registration Steps</h3>
        <div style="margin-top:12px">
          <div class="step"><div class="num">1</div><div><strong>Fill the online form</strong><div style="color:var(--muted);font-size:13px">Complete your personal and academic details</div></div></div>
          <div class="step" style="margin-top:10px"><div class="num">2</div><div><strong>Upload documents</strong><div style="color:var(--muted);font-size:13px">Photo, ID, High-school diploma, Payment proof</div></div></div>
          <div class="step" style="margin-top:10px"><div class="num">3</div><div><strong>Attend allocated session</strong><div style="color:var(--muted);font-size:13px">On campus or online verification</div></div></div>
          <div class="step" style="margin-top:10px"><div class="num">4</div><div><strong>Confirm activation</strong><div style="color:var(--muted);font-size:13px">Student account and timetable activation</div></div></div>
        </div>
      </div>

      <div class="hero-card" id="faq">
        <h3>FAQ</h3>
        <div class="faq">
          <div class="q">What documents do I need for registration?</div>
          <div class="a">You will need a passport photo, a copy of your ID, your high school diploma/ transcript, and proof of payment. Originals may be requested during on-site verification.</div>

          <div class="q">Can I change my schedule?</div>
          <div class="a">Schedule changes depend on availability. Contact the registration office with your NIM and preferred dates; changes are accepted within 7 days before your allocated slot.</div>

          <div class="q">How do I attend an online verification?</div>
          <div class="a">Online verification details (link and instructions) will be emailed to your registered email. Ensure a stable internet connection and the required documents scanned.</div>
        </div>
      </div>
    </section>

    <footer>
      © <span id="year"></span> Campus Registration • Support: <a href="mailto:support@campus.edu">support@campus.edu</a>
    </footer>
  </div>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();

    // FAQ accordion
    document.querySelectorAll('.faq .q').forEach(q => {
      q.addEventListener('click', ()=>{
        const a = q.nextElementSibling;
        const open = a.style.display === 'block';
        document.querySelectorAll('.faq .a').forEach(x => x.style.display = 'none');
        a.style.display = open ? 'none' : 'block';
      })
    })

    // Simple filtering (client-side). For production, load data from server and re-render.
    function filterTable(){
      const fac = document.getElementById('facultySelect').value;
      const sess = document.getElementById('sessionSelect').value;
      const q = (document.getElementById('search').value || '').toLowerCase();
      const rows = document.querySelectorAll('#scheduleTable tbody tr');
      rows.forEach(r => {
        const rowFac = r.dataset.faculty || 'all';
        const rowSess = r.dataset.session || 'all';
        const text = r.textContent.toLowerCase();
        const facMatch = fac === 'all' || rowFac === fac;
        const sessMatch = sess === 'all' || rowSess === sess;
        const qMatch = q === '' || text.indexOf(q) !== -1;
        r.style.display = (facMatch && sessMatch && qMatch) ? '' : 'none';
      });
    }

    // Optional: quick filter when selects change
    document.getElementById('facultySelect').addEventListener('change', filterTable);
    document.getElementById('sessionSelect').addEventListener('change', filterTable);
  </script>
</body>
</html>
