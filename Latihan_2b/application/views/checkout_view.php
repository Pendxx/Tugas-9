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
        .checkout-grid {
            display: grid;
            grid-template-columns: 3fr 2fr;
            gap: 24px;
        }
        @media (max-width: 768px) {
            .checkout-grid { grid-template-columns: 1fr; }
        }
        .card {
            background: var(--card);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid var(--border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        h2 { font-size: 18px; margin-bottom: 16px; color: var(--text-dark); }
        .form-group { margin-bottom: 14px; }
        label { display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 6px; }
        input, select, textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--border);
            border-radius: 6px;
            font-size: 14px;
            font-family: inherit;
        }
        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            font-size: 14px;
            border-bottom: 1px solid var(--border);
        }
        .summary-total {
            display: flex;
            justify-content: space-between;
            padding: 14px 0;
            font-size: 18px;
            font-weight: 700;
            color: #b91c1c;
        }
        .btn {
            display: block;
            width: 100%;
            text-align: center;
            padding: 12px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            border: none;
        }
        .btn-primary { background: var(--primary); color: white; }
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

    <div class="checkout-grid">
        <div class="card">
            <h2>Data Pengiriman</h2>
            <form action="#" method="post" onsubmit="alert('Pesanan berhasil dibuat! Terima kasih telah berbelanja.'); return false;">
                <div class="form-group">
                    <label>Nama Penerima</label>
                    <input type="text" value="Nama Mahasiswa" required>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon / WhatsApp</label>
                    <input type="tel" value="081234567890" required>
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <textarea rows="3" required>Jl. Teknik Kimia, Kampus ITS Sukolilo, Surabaya</textarea>
                </div>
                <div class="form-group">
                    <label>Metode Pembayaran</label>
                    <select>
                        <option>QRIS / GoPay / OVO</option>
                        <option>Transfer Bank BCA</option>
                        <option>Transfer Bank Mandiri</option>
                        <option>Cash on Delivery (COD)</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Konfirmasi & Bayar Sekarang</button>
            </form>
        </div>

        <div class="card">
            <h2>Ringkasan Biaya</h2>
            <?php foreach ($items as $it): ?>
            <div class="summary-item">
                <span><?= htmlspecialchars($it['nama']); ?> &times; <?= $it['qty']; ?></span>
                <span>Rp <?= number_format($it['subtotal'], 0, ',', '.'); ?></span>
            </div>
            <?php endforeach; ?>
            <div class="summary-item">
                <span>Ongkos Kirim Flat</span>
                <span>Rp <?= number_format($ongkir, 0, ',', '.'); ?></span>
            </div>
            <div class="summary-total">
                <span>Total Tagihan</span>
                <span>Rp <?= number_format($grand, 0, ',', '.'); ?></span>
            </div>
        </div>
    </div>

    <footer>
        <p>Latihan 2b - PBKK CodeIgniter &copy; 2026</p>
    </footer>
</div>

</body>
</html>

