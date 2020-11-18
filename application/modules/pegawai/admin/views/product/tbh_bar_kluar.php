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

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('barang') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('barang_kluar/add') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="id_kluar">ID*</label>
								<input class="form-control <?php echo form_error('id_kluar') ? 'is-invalid':'' ?>"
								 type="text" name="id_kluar" placeholder="ID Masuk" />
								<div class="invalid-feedback">
									<?php echo form_error('id_kluar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tgl_kluar">Tanggal Keluar*</label>
								<input class="form-control <?php echo form_error('tgl_kluar') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_kluar" placeholder="Tanggal Keluar" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_kluar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_bar">ID Barang*</label>
								<input class="form-control <?php echo form_error('id_bar') ? 'is-invalid':'' ?>"
								 type="text" name="id_bar" placeholder="ID Barang"/>
								<div class="invalid-feedback">
									<?php echo form_error('id_bar') ?>
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
								<label for="tujuan">Tujuan*</label>
								<input class="form-control <?php echo form_error('tujuan') ? 'is-invalid':'' ?>"
								 type="text" name="tujuan" placeholder="Tujuan" />
								<div class="invalid-feedback">
									<?php echo form_error('tujuan') ?>
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
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
