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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?= $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= site_url('admin/products/') ?>" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Back to Products</a>
					</div>
					<div class="card-body">

						<form action="<?= site_url('admin/products/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control <?= form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Nama Produk" />
								<div class="invalid-feedback">
									<?= form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Price*</label>
								<input class="form-control <?= form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="price" min="0" placeholder="Harga Produk" />
								<div class="invalid-feedback">
									<?= form_error('price') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="image">Photo</label>
								<input class="form-control-file <?= form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?= form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="description">Description*</label>
								<textarea class="form-control <?= form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Deskripsi produk..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('description') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save Product" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

