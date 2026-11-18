<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid pt-4">

        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

		<div class="row">
            <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-boxes"></i>
                </div>
                <div class="mr-5 font-weight-bold" style="font-size: 1.2rem;"><?= $products_count ?> Total Products</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?= site_url('admin/products') ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
            </div>

            <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-plus-circle"></i>
                </div>
                <div class="mr-5 font-weight-bold" style="font-size: 1.2rem;">Tambah Produk Baru</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?= site_url('admin/products/add') ?>">
                <span class="float-left">Add Product</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
            </div>

            <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
                <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-info-circle"></i>
                </div>
                <div class="mr-5 font-weight-bold" style="font-size: 1.2rem;">Materi & Latihan 1</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?= site_url('about') ?>">
                <span class="float-left">7 Sub-Modul PBKK-2</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
            </div>
		</div>

        <div class="card mb-4 mt-2">
            <div class="card-header bg-white font-weight-bold">
                <i class="fas fa-check-circle text-success"></i> 7 Cakupan Materi Latihan 1 (PBKK-2)
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>2-1:</strong> Instalasi dan Konfigurasi CI (Base URL, Database, Autoload)</li>
                    <li class="list-group-item"><strong>2-2:</strong> Fungsi Router dan Controller (Routing /admin, /about, /contact, /login)</li>
                    <li class="list-group-item"><strong>2-3:</strong> Menggunakan Bootstrap untuk View Aplikasi pada CI</li>
                    <li class="list-group-item"><strong>2-4:</strong> Menggunakan Template Bootstrap SB Admin (Partials: navbar, sidebar, footer, modal)</li>
                    <li class="list-group-item"><strong>2-5:</strong> Mengenal Model dan CRUD (Create, Read, Update, Delete data produk)</li>
                    <li class="list-group-item"><strong>2-6:</strong> Penanganan File Upload (Upload gambar produk dengan CI Upload Library)</li>
                    <li class="list-group-item"><strong>2-7:</strong> Mengatur Akses User (Autentikasi Session, Login, Logout)</li>
                </ul>
            </div>
        </div>

		</div>

		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>

</div>

<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>

