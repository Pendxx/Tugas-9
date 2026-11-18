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
        .container { max-width: 860px; margin: 0 auto; }
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
            padding: 24px 28px;
            border: 1px solid var(--border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        h1 { font-size: 20px; margin-bottom: 18px; color: var(--text-dark); }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { text-align: left; padding: 12px 14px; font-size: 14px; border-bottom: 1px solid var(--border); }
        th { background: #f8fafc; color: var(--text-muted); font-weight: 600; }
        tfoot td { font-weight: 700; font-size: 16px; }
        .actions { display: flex; justify-content: space-between; align-items: center; margin-top: 14px; }
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
        <h1>Daftar Pesanan di Keranjang Belanja</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $it): ?>
                <tr>
                    <td><strong><?= htmlspecialchars($it['nama']); ?></strong></td>
                    <td>Rp <?= number_format($it['harga'], 0, ',', '.'); ?></td>
                    <td><?= $it['qty']; ?></td>
                    <td>Rp <?= number_format($it['subtotal'], 0, ',', '.'); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" style="text-align: right;">Total Biaya Produk:</td>
                    <td style="color: #b91c1c;">Rp <?= number_format($total, 0, ',', '.'); ?></td>
                </tr>
            </tfoot>
        </table>

        <div class="actions">
            <a href="<?= base_url(); ?>" class="btn btn-outline">&larr; Lanjut Belanja</a>
            <a href="<?= base_url('checkout'); ?>" class="btn btn-primary">Lanjut ke Pembayaran &rarr;</a>
        </div>
    </div>

    <footer>
        <p>Latihan 2b - PBKK CodeIgniter &copy; 2026</p>
    </footer>
</div>

</body>
</html>

