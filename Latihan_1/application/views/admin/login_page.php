<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Toko Buah SB Admin</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body { background: linear-gradient(135deg, #15803d, #166534); min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .card-login { max-width: 420px; width: 100%; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
    </style>
</head>

<body>

<div class="container">
    <div class="card card-login mx-auto">
        <div class="card-header text-center bg-white border-0 pt-4 pb-2">
            <h4 class="font-weight-bold text-success mb-1">Toko Buah Admin</h4>
            <small class="text-muted">Masuk ke sistem manajemen Toko Buah (Latihan 1)</small>
        </div>
        <div class="card-body px-4 pb-4">
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger py-2 small" role="alert">
                    <?= $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>

            <form action="<?= site_url('login') ?>" method="POST">
                <div class="form-group">
                    <label class="small font-weight-bold">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan username" value="admin" required />
                </div>
                <div class="form-group">
                    <label class="small font-weight-bold">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan password" value="admin123" required />
                </div>
                <div class="small text-muted mb-3">
                    Default login: <strong>admin</strong> / <strong>admin123</strong>
                </div>
                <input type="submit" class="btn btn-success btn-block font-weight-bold py-2" value="Login ke Dashboard" />
            </form>

            <div class="text-center mt-3 pt-3 border-top">
                <a class="small text-muted" href="<?= site_url('about') ?>">Lihat Info 7 Modul PBKK-2 &rarr;</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>

