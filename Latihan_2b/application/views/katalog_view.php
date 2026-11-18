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
        .container { max-width: 980px; margin: 0 auto; }
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
            transition: all 0.2s;
        }
        nav a.active, nav a:hover {
            color: var(--primary);
            background: #dcfce7;
        }
        .cart-pill {
            background: var(--primary);
            color: white;
            padding: 6px 14px;
            border-radius: 9999px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
        }
        .hero {
            background: linear-gradient(135deg, #15803d, #16a34a);
            color: white;
            padding: 26px 30px;
            border-radius: 12px;
            margin-bottom: 24px;
        }
        .hero h1 { font-size: 24px; margin-bottom: 6px; }
        .hero p { font-size: 15px; opacity: 0.95; }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        .product-card {
            background: var(--card);
            border-radius: 12px;
            padding: 20px;
            border: 1px solid var(--border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .product-card h3 { font-size: 17px; margin-bottom: 6px; color: var(--text-dark); }
        .product-card .cat { font-size: 12px; color: var(--text-muted); margin-bottom: 10px; }
        .product-card .desc { font-size: 13px; color: var(--text-muted); margin-bottom: 16px; line-height: 1.4; }
        .product-card .price { font-size: 18px; font-weight: 700; color: #b91c1c; margin-bottom: 14px; }
        .card-actions { display: flex; gap: 8px; }
        .btn {
            display: inline-block;
            text-align: center;
            padding: 8px 14px;
            font-size: 13px;
            font-weight: 600;
            border-radius: 6px;
            text-decoration: none;
            flex: 1;
        }
        .btn-outline {
            border: 1px solid var(--border);
            color: var(--text-dark);
            background: #fff;
        }
        .btn-primary {
            background: var(--primary);
            color: white;
            border: 1px solid var(--primary);
        }
        .btn-primary:hover { background: var(--primary-hover); }
        footer { text-align: center; color: var(--text-muted); font-size: 13px; margin-top: 30px; }
    </style>
</head>
<body>

<div class="container">
    <header>
        <div class="logo">Toko Buah Segar</div>
        <nav>
            <a href="<?= base_url(); ?>" class="active">Katalog</a>
            <a href="<?= base_url('keranjang'); ?>" class="cart-pill">Keranjang (<?= $cart_cnt; ?>)</a>
        </nav>
    </header>

    <div class="hero">
        <h1>Katalog Buah Segar Pilihan</h1>
        <p>Belanja buah berkualitas langsung dari perkebunan terbaik dengan harga terjangkau.</p>
    </div>

    <div class="grid">
        <?php foreach ($produk as $p): ?>
        <div class="product-card">
            <div>
                <div class="cat"><?= htmlspecialchars($p['kategori']); ?> &bull; Rating <?= $p['rating']; ?>/5.0</div>
                <h3><?= htmlspecialchars($p['nama']); ?></h3>
                <p class="desc"><?= htmlspecialchars($p['deskripsi']); ?></p>
            </div>
            <div>
                <div class="price">Rp <?= number_format($p['harga'], 0, ',', '.'); ?></div>
                <div class="card-actions">
                    <a href="<?= base_url('detail/' . $p['id']); ?>" class="btn btn-outline">Detail</a>
                    <a href="<?= base_url('keranjang'); ?>" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <p>Latihan 2b - PBKK CodeIgniter &copy; 2026</p>
    </footer>
</div>

</body>
</html>

