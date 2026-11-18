<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title); ?></title>
    <style>
        :root {
            --primary: #15803d;
            --primary-hover: #166534;
            --bg: #f8fafc;
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
        .container { max-width: 800px; margin: 0 auto; }
        header {
            background: var(--card);
            border-radius: 12px;
            padding: 20px 28px;
            margin-bottom: 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
            border: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo { font-size: 20px; font-weight: 700; color: var(--primary); }
        nav { display: flex; gap: 14px; align-items: center; }
        nav a {
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 14px;
            padding: 6px 14px;
            border-radius: 6px;
        }
        nav a:hover { color: var(--primary); background: #dcfce7; }
        .cart-pill {
            background: var(--primary);
            color: white;
            padding: 6px 14px;
            border-radius: 9999px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
        }
        .card {
            background: var(--card);
            border-radius: 12px;
            padding: 30px;
            border: 1px solid var(--border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .cat { font-size: 13px; color: var(--text-muted); margin-bottom: 8px; }
        h1 { font-size: 24px; color: var(--text-dark); margin-bottom: 12px; }
        .price { font-size: 26px; font-weight: 700; color: #b91c1c; margin-bottom: 20px; }
        .desc-box { background: #f8fafc; padding: 18px; border-radius: 8px; margin-bottom: 24px; font-size: 15px; border-left: 4px solid var(--primary); }
        .meta-table { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
        .meta-table th, .meta-table td { padding: 8px 0; font-size: 14px; border-bottom: 1px solid var(--border); }
        .meta-table th { width: 30%; color: var(--text-muted); text-align: left; }
        .actions { display: flex; gap: 12px; }
        .btn {
            display: inline-block;
            text-align: center;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            border-radius: 6px;
            text-decoration: none;
        }
        .btn-outline { border: 1px solid var(--border); color: var(--text-dark); background: #fff; }
        .btn-primary { background: var(--primary); color: white; border: 1px solid var(--primary); }
        .btn-primary:hover { background: var(--primary-hover); }
        footer { text-align: center; color: var(--text-muted); font-size: 13px; margin-top: 30px; }
    </style>
</head>
<body>

<div class="container">
    <header>
        <div class="logo">Toko Buah Segar</div>
        <nav>
            <a href="<?= base_url(); ?>">Katalog</a>
            <a href="<?= base_url('keranjang'); ?>" class="cart-pill">Keranjang (<?= $cart_cnt; ?>)</a>
        </nav>
    </header>

    <div class="card">
        <div class="cat"><?= htmlspecialchars($p['kategori']); ?> &bull; Penilaian Pelanggan: <?= $p['rating']; ?>/5.0</div>
        <h1><?= htmlspecialchars($p['nama']); ?></h1>
        <div class="price">Rp <?= number_format($p['harga'], 0, ',', '.'); ?></div>

        <div class="desc-box">
            <p><?= htmlspecialchars($p['deskripsi']); ?></p>
        </div>

        <table class="meta-table">
            <tr>
                <th>Status Ketersediaan</th>
                <td><strong style="color: #16a34a;">Tersedia (Stok <?= $p['stok']; ?> unit)</strong></td>
            </tr>
            <tr>
                <th>Pengiriman</th>
                <td>Tersedia pengiriman instan (Same Day) & Reguler</td>
            </tr>
            <tr>
                <th>Jaminan Mutu</th>
                <td>Garansi kesegaran 100% atau uang kembali</td>
            </tr>
        </table>

        <div class="actions">
            <a href="<?= base_url(); ?>" class="btn btn-outline">&larr; Kembali ke Katalog</a>
            <a href="<?= base_url('keranjang'); ?>" class="btn btn-primary">+ Tambah ke Keranjang Belanja</a>
        </div>
    </div>

    <footer>
        <p>Latihan 2b - PBKK CodeIgniter &copy; 2026</p>
    </footer>
</div>

</body>
</html>

