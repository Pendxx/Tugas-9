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

				<div class="card mb-3">
					<div class="card-header d-flex justify-content-between align-items-center">
						<a href="<?= site_url('admin/products/add') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add New Product</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" width="100%" cellspacing="0">
								<thead class="thead-light">
									<tr>
										<th>Name</th>
										<th>Price</th>
										<th>Photo</th>
										<th>Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($products as $product): ?>
									<tr>
										<td width="150" class="font-weight-bold">
											<?= $product->name ?>
										</td>
										<td>
											Rp <?= number_format($product->price, 0, ',', '.') ?>
										</td>
										<td>
											<img src="<?= base_url('upload/product/'.$product->image) ?>" class="img-thumb" alt="Product Image" />
										</td>
										<td class="small">
											<?= substr($product->description, 0, 120) ?>...
										</td>
										<td width="220">
											<a href="<?= site_url('admin/products/edit/'.$product->product_id) ?>"
											 class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?= site_url('admin/products/delete/'.$product->product_id) ?>')"
											 href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
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

