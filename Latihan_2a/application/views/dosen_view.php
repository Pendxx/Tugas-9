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
            <a href="<?= base_url(); ?>">Dashboard</a>
            <a href="<?= base_url('mahasiswa'); ?>">Biodata Mahasiswa</a>
            <a href="<?= base_url('krs'); ?>">KRS Semester Ini</a>
            <a href="<?= base_url('nilai'); ?>">Transkrip Nilai</a>
            <a href="<?= base_url('dosen'); ?>" class="active">Daftar Dosen</a>
        </nav>
    </header>

    <div class="card">
        <h2>Daftar Dosen Pengajar Departemen</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dosen & Gelar</th>
                    <th>NIP</th>
                    <th>Bidang Keahlian</th>
                    <th>Email Kampus</th>
                    <th>Ruangan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($dosen as $d): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><strong><?= htmlspecialchars($d['nama']); ?></strong></td>
                    <td><?= htmlspecialchars($d['nip']); ?></td>
                    <td><?= htmlspecialchars($d['keahlian']); ?></td>
                    <td><a href="mailto:<?= htmlspecialchars($d['email']); ?>" style="color: var(--primary); text-decoration: none;"><?= htmlspecialchars($d['email']); ?></a></td>
                    <td><?= htmlspecialchars($d['ruangan']); ?></td>
                    <td><span class="badge"><?= htmlspecialchars($d['status']); ?></span></td>
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

