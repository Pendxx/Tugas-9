<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body { background: #f8fafc; padding: 40px 20px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
        .container { max-width: 820px; }
        .card { border-radius: 12px; border: 1px solid #e2e8f0; }
    </style>
</head>
<body>

<div class="container">
    <div class="card p-4 shadow-sm mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom">
            <h4 class="text-success font-weight-bold mb-0">Toko Buah - SB Admin</h4>
            <div>
                <a href="<?= site_url('admin') ?>" class="btn btn-outline-success btn-sm font-weight-bold mr-2">Dashboard Admin</a>
                <a href="<?= site_url('contact') ?>" class="btn btn-outline-secondary btn-sm">Contact</a>
            </div>
        </div>

        <h2 class="h5 font-weight-bold text-dark"><?= htmlspecialchars($title); ?></h2>
        <p class="text-muted"><?= htmlspecialchars($deskripsi); ?></p>

        <h6 class="font-weight-bold mt-3">7 Cakupan Sub-Modul Latihan 1:</h6>
        <ul class="list-group list-group-flush mb-3">
            <?php foreach ($features as $f): ?>
                <li class="list-group-item px-0 py-2 text-dark"><i class="text-success font-weight-bold mr-2">✓</i> <?= htmlspecialchars($f); ?></li>
            <?php endforeach; ?>
        </ul>

        <div class="mt-2 pt-3 border-top">
            <a href="<?= site_url('login') ?>" class="btn btn-success">Login ke Dashboard Admin &rarr;</a>
        </div>
    </div>
</div>

</body>
</html>
