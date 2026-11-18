<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title); ?></title>
    <style>
        :root {
            --primary: #dd4814;
            --primary-dark: #b8360b;
            --bg: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: var(--bg);
            color: var(--text-main);
            line-height: 1.6;
            padding: 40px 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        header {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 24px 30px;
            margin-bottom: 24px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border);
        }
        .nav-bar {
            display: flex;
            gap: 20px;
            border-bottom: 2px solid var(--border);
            padding-bottom: 14px;
            margin-bottom: 20px;
        }
        .nav-bar a {
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 15px;
            padding: 6px 12px;
            border-radius: 6px;
            transition: all 0.2s ease;
        }
        .nav-bar a.active, .nav-bar a:hover {
            color: var(--primary);
            background: rgba(221, 72, 20, 0.08);
        }
        .hero-banner {
            background: linear-gradient(135deg, #dd4814, #ea580c);
            color: white;
            padding: 20px 24px;
            border-radius: 8px;
            margin-bottom: 24px;
            box-shadow: 0 4px 12px rgba(221, 72, 20, 0.25);
        }
        .hero-banner h1 {
            font-size: 24px;
            margin-bottom: 6px;
        }
        .hero-banner p {
            font-size: 16px;
            opacity: 0.95;
        }
        .card {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 28px 30px;
            margin-bottom: 24px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border);
        }
        .card h2 {
            font-size: 20px;
            margin-bottom: 16px;
            color: var(--text-main);
            border-left: 4px solid var(--primary);
            padding-left: 12px;
        }
        table.biodata-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table.biodata-table tr {
            border-bottom: 1px solid var(--border);
        }
        table.biodata-table tr:last-child {
            border-bottom: none;
        }
        table.biodata-table th {
            text-align: left;
            padding: 12px 14px;
            width: 32%;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 14px;
        }
        table.biodata-table td {
            padding: 12px 14px;
            font-size: 15px;
            color: var(--text-main);
        }
        .badge {
            display: inline-block;
            background: #dcfce7;
            color: #15803d;
            font-size: 13px;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 9999px;
        }
        .mvc-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
            margin-top: 14px;
        }
        .mvc-box {
            background: #f1f5f9;
            border-radius: 8px;
            padding: 16px;
            border-top: 3px solid var(--primary);
        }
        .mvc-box h3 {
            font-size: 16px;
            color: var(--primary-dark);
            margin-bottom: 8px;
        }
        .mvc-box p {
            font-size: 13px;
            color: var(--text-muted);
        }
        footer {
            text-align: center;
            font-size: 13px;
            color: var(--text-muted);
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <div class="nav-bar">
            <a href="<?= base_url(); ?>" class="active">Home (Biodata)</a>
            <a href="<?= base_url('about'); ?>">About</a>
            <a href="<?= base_url('contact'); ?>">Contact</a>
        </div>

        <div class="hero-banner">
            <h1><?= htmlspecialchars($greeting); ?></h1>
            <p>Implementasi Pola MVC Framework CodeIgniter 3</p>
        </div>
    </header>

    <div class="card">
        <h2>Data Mahasiswa (Model)</h2>
        <table class="biodata-table">
            <tr>
                <th>Nama Lengkap</th>
                <td><strong><?= htmlspecialchars($mahasiswa['nama']); ?></strong></td>
            </tr>
            <tr>
                <th>NRP</th>
                <td><?= htmlspecialchars($mahasiswa['nrp']); ?></td>
            </tr>
            <tr>
                <th>Departemen</th>
                <td><?= htmlspecialchars($mahasiswa['departemen']); ?></td>
            </tr>
            <tr>
                <th>Fakultas / Kampus</th>
                <td><?= htmlspecialchars($mahasiswa['fakultas']); ?> - <?= htmlspecialchars($mahasiswa['institusi']); ?></td>
            </tr>
            <tr>
                <th>Mata Kuliah</th>
                <td><?= htmlspecialchars($mahasiswa['mata_kuliah']); ?></td>
            </tr>
            <tr>
                <th>Modul Praktikum</th>
                <td><?= htmlspecialchars($mahasiswa['modul']); ?></td>
            </tr>
            <tr>
                <th>Dosen Pengampu</th>
                <td><?= htmlspecialchars($mahasiswa['dosen']); ?></td>
            </tr>
            <tr>
                <th>Status Mahasiswa</th>
                <td><span class="badge"><?= htmlspecialchars($mahasiswa['status']); ?></span></td>
            </tr>
        </table>
    </div>

    <div class="card">
        <h2>Pola MVC</h2>
        <div class="mvc-grid">
            <div class="mvc-box">
                <h3>Model</h3>
                <p><code>Biodata_model.php</code> menyediakan data profil mahasiswa dan deskripsi sistem.</p>
            </div>
            <div class="mvc-box">
                <h3>Controller</h3>
                <p><code>Biodata.php</code> memproses request, memanggil model, dan merutekan ke view.</p>
            </div>
            <div class="mvc-box">
                <h3>View</h3>
                <p><code>biodata_view.php</code> menyajikan UI bersih dan responsif kepada pengguna di browser.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>Praktikum PBKK &copy; 2026 - CodeIgniter <?= CI_VERSION; ?></p>
    </footer>
</div>

</body>
</html>

