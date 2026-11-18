<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title); ?></title>
    <style>
        :root {
            --primary: #1d4ed8;
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
        header, .card {
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
        .card h2 { font-size: 17px; margin-bottom: 16px; color: var(--text-dark); }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: 12px 14px; font-size: 14px; border-bottom: 1px solid var(--border); }
        th { width: 30%; color: var(--text-muted); font-weight: 600; }
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
            <a href="<?= base_url(); ?>">Dashboard</a>
            <a href="<?= base_url('mahasiswa'); ?>" class="active">Biodata Mahasiswa</a>
            <a href="<?= base_url('krs'); ?>">KRS Semester Ini</a>
            <a href="<?= base_url('nilai'); ?>">Transkrip Nilai</a>
            <a href="<?= base_url('dosen'); ?>">Daftar Dosen</a>
        </nav>
    </header>

    <div class="card">
        <h2>Profil Biodata Mahasiswa</h2>
        <table>
            <tr>
                <th>Nama Lengkap</th>
                <td><strong><?= htmlspecialchars($profil['nama']); ?></strong></td>
            </tr>
            <tr>
                <th>Nomor Registrasi Pokok (NRP)</th>
                <td><?= htmlspecialchars($profil['nrp']); ?></td>
            </tr>
            <tr>
                <th>Departemen</th>
                <td><?= htmlspecialchars($profil['departemen']); ?></td>
            </tr>
            <tr>
                <th>Fakultas</th>
                <td><?= htmlspecialchars($profil['fakultas']); ?></td>
            </tr>
            <tr>
                <th>Tahun Angkatan</th>
                <td><?= htmlspecialchars($profil['angkatan']); ?></td>
            </tr>
            <tr>
                <th>Semester Saat Ini</th>
                <td>Semester <?= $profil['semester']; ?></td>
            </tr>
            <tr>
                <th>Dosen Pembimbing Akademik</th>
                <td><?= htmlspecialchars($profil['dosen_wali']); ?></td>
            </tr>
            <tr>
                <th>Status Perkuliahan</th>
                <td><span class="badge"><?= htmlspecialchars($profil['status_akademik']); ?></span></td>
            </tr>
        </table>
    </div>

    <footer>
        <p>Latihan 2a - PBKK CodeIgniter &copy; 2026</p>
    </footer>
</div>

</body>
</html>

