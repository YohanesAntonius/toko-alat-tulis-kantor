<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("gudang2/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("gudang2/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("gudang2/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("gudang2/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('gudang2/lsbarang') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('gudang2/tbhbarang') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="id_bar">ID*</label>
								<input class="form-control <?php echo form_error('id_bar') ? 'is-invalid':'' ?>"
								 type="text" name="id_bar" placeholder="ID Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('id_bar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_bar">Nama Barang*</label>
								<input class="form-control <?php echo form_error('nama_bar') ? 'is-invalid':'' ?>"
								 type="text" name="nama_bar" placeholder="Nama Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_bar') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="merk_bar">Merk*</label>
								<input class="form-control <?php echo form_error('merk_bar') ? 'is-invalid':'' ?>"
								 type="text" name="merk_bar" placeholder="Merk Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('merk_bar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis_bar">Jenis*</label>
								<input class="form-control <?php echo form_error('jenis_bar') ? 'is-invalid':'' ?>"
								 type="text" name="jenis_bar" placeholder="Jenis Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis_bar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="satuan_bar">Satuan*</label>
								<input class="form-control <?php echo form_error('satuan_bar') ? 'is-invalid':'' ?>"
								 type="text" name="satuan_bar" placeholder="Satuan" />
								<div class="invalid-feedback">
									<?php echo form_error('satuan_bar') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="qty">QTY*</label>
								<input class="form-control <?php echo form_error('qty') ? 'is-invalid':'' ?>"
								 type="number" name="qty" min="0" placeholder="Qty" />
								<div class="invalid-feedback">
									<?php echo form_error('qty') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga_bar">Harga*</label>
								<input class="form-control <?php echo form_error('harga_bar') ? 'is-invalid':'' ?>"
								 type="number" name="harga_bar" min="0" placeholder="Harga" />
								<div class="invalid-feedback">
									<?php echo form_error('harga_bar') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("gudang2/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("gudang2/_partials/scrolltop.php") ?>

		<?php $this->load->view("gudang2/_partials/js.php") ?>

</body>

</html>
