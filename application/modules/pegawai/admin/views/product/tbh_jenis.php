<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">


<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'tokoatkbaru';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

/* Your query */
$result = $mysqli->query("SELECT nama_merek,id_merek FROM merk ORDER BY id_merek");
$result1 = $mysqli->query("SELECT nama_jenis,id_jenis FROM jenis ORDER BY id_jenis");
$result2 = $mysqli->query("SELECT nama_satuan,id_satuan FROM satuan ORDER BY id_satuan"); 
?>


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

						<form action="<?php base_url('jenis/add') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="id_jenis">ID*</label>
								<input class="form-control <?php echo form_error('id_jenis') ? 'is-invalid':'' ?>"
								 type="text" name="id_jenis" placeholder="ID Jenis" />
								<div class="invalid-feedback">
									<?php echo form_error('id_jenis') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_jenis">Nama Jenis*</label>
								<input class="form-control <?php echo form_error('nama_jenis') ? 'is-invalid':'' ?>"
								 type="text" name="nama_jenis" placeholder="Nama Jenis" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_jenis') ?>
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
