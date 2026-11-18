<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title); ?></title>
    <style>
        :root {
            --primary: #1d4ed8;
            --primary-hover: #1e40af;
            --bg: #f1f5f9;
            --card: #ffffff;
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --border: #e2e8f0;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: var(--bg);
            color: var(--text-dark);
            line-height: 1.5;
            padding: 30px 20px;
        }
        .container { max-width: 960px; margin: 0 auto; }
        header {
            background: var(--card);
            border-radius: 12px;
            padding: 20px 28px;
            margin-bottom: 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            border: 1px solid var(--border);
        }
        .brand {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }
        .brand h1 { font-size: 20px; color: var(--primary); }
        .user-tag { font-size: 14px; color: var(--text-muted); }
        nav {
            display: flex;
            gap: 12px;
            border-top: 1px solid var(--border);
            padding-top: 12px;
        }
        nav a {
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 14px;
            padding: 6px 14px;
            border-radius: 6px;
            transition: all 0.2s;
        }
        nav a.active, nav a:hover {
            color: var(--primary);
            background: #eff6ff;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }
        .stat-card {
            background: var(--card);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid var(--border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .stat-card .label { font-size: 13px; color: var(--text-muted); margin-bottom: 6px; }
        .stat-card .value { font-size: 26px; font-weight: 700; color: var(--primary); }
        .card {
            background: var(--card);
            border-radius: 10px;
            padding: 24px 28px;
            margin-bottom: 24px;
            border: 1px solid var(--border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .card h2 { font-size: 17px; margin-bottom: 16px; color: var(--text-dark); }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: 10px 12px; font-size: 14px; border-bottom: 1px solid var(--border); }
        th { background: #f8fafc; color: var(--text-muted); font-weight: 600; }
        .badge {
            background: #dcfce7;
            color: #166534;
            padding: 2px 8px;
            border-radius: 9999px;
            font-size: 12px;
            font-weight: 600;
        }
        footer { text-align: center; color: var(--text-muted); font-size: 13px; margin-top: 24px; }
    </style>
</head>
<body>

<div class="container">
    <header>
        <div class="brand">
            <h1>SIAKAD - Sistem Informasi Akademik</h1>
            <div class="user-tag"><?= htmlspecialchars($profil['nama']); ?> (<?= htmlspecialchars($profil['nrp']); ?>)</div>
        </div>
        <nav>
            <a href="<?= base_url(); ?>" class="active">Dashboard</a>
            <a href="<?= base_url('mahasiswa'); ?>">Biodata Mahasiswa</a>
            <a href="<?= base_url('krs'); ?>">KRS Semester Ini</a>
            <a href="<?= base_url('nilai'); ?>">Transkrip Nilai</a>
            <a href="<?= base_url('dosen'); ?>">Daftar Dosen</a>
        </nav>
    </header>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="label">Indeks Prestasi Kumulatif (IPK)</div>
            <div class="value"><?= $ringkasan['ipk']; ?></div>
        </div>
        <div class="stat-card">
            <div class="label">SKS Tempuh / Selesai</div>
            <div class="value"><?= $ringkasan['sks_tempuh']; ?> SKS</div>
        </div>
        <div class="stat-card">
            <div class="label">Semester Berjalan</div>
            <div class="value">Semester <?= $profil['semester']; ?></div>
        </div>
        <div class="stat-card">
            <div class="label">Status Registrasi</div>
            <div class="value"><span class="badge"><?= $profil['status_akademik']; ?></span></div>
        </div>
    </div>

    <div class="card">
        <h2>Jadwal Perkuliahan Semester Ini</h2>
        <table>
            <thead>
                <tr>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Hari & Jam</th>
                    <th>Ruang</th>
                    <th>Dosen Pengampu</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($krs as $k): ?>
                <tr>
                    <td><strong><?= htmlspecialchars($k['matkul']); ?></strong> (<?= htmlspecialchars($k['kode']); ?>)</td>
                    <td><?= $k['sks']; ?></td>
                    <td><?= htmlspecialchars($k['hari']); ?>, <?= htmlspecialchars($k['jam']); ?></td>
                    <td><?= htmlspecialchars($k['ruangan']); ?></td>
                    <td><?= htmlspecialchars($k['dosen']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <footer>
        <p>Latihan 2a - PBKK CodeIgniter &copy; 2026</p>
    </footer>
</div>

</body>
</html>

