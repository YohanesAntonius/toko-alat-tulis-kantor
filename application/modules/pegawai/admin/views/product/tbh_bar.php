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

						<form action="<?php base_url('barang/add') ?>" method="post" enctype="multipart/form-data" >

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
								<!-- <input class="form-control <?php echo form_error('merk_bar') ? 'is-invalid':'' ?>"
								 type="text" name="merk_bar" placeholder="Merk Barang" /> -->


								 <br>
								 <select name="merk_bar">
    								<option value="">Pilih Merek</option>
    								<?php
    								while ($row = mysqli_fetch_array($result)) {
        							echo "<option value='" . $row['nama_merek'] . "'>" . $row['nama_merek'] . "</option>";
    								}
    								?>        
								</select>



								<div class="invalid-feedback">
									<?php echo form_error('merk_bar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis_bar">Jenis*</label>
								<!-- <input class="form-control <?php echo form_error('jenis_bar') ? 'is-invalid':'' ?>"
								 type="text" name="jenis_bar" placeholder="Jenis Barang" /> -->

								 <br>
								 <select name="jenis_bar">
    							 	<option value="">Pilih Jenis</option>
    							 	<?php
    							 	while ($row = mysqli_fetch_array($result1)) {
        						 	echo "<option value='" . $row['nama_jenis'] . "'>" . $row['nama_jenis'] . "</option>";
    							 	}
    							 	?>        
								 </select>


								<div class="invalid-feedback">
									<?php echo form_error('jenis_bar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="satuan_bar">Satuan*</label>
								<!-- <input class="form-control <?php echo form_error('satuan_bar') ? 'is-invalid':'' ?>"
								 type="text" name="satuan_bar" placeholder="Satuan" /> -->

								 <br>
								 <select name="satuan_bar">
    							 	<option value="">Pilih Satuan</option>
    							 	<?php
    							 	while ($row = mysqli_fetch_array($result2)) {
        						 	echo "<option value='" . $row['nama_satuan'] . "'>" . $row['nama_satuan'] . "</option>";
    							 	}
    								?>        
								</select>


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
<!-- <br>
<select name="merk">
    <option value="">Pilih Merek</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['id_merek'] . "'>" . $row['nama_merek'] . "</option>";
    }
    ?>        
</select>
<br>
<select name="jenis">
    <option value="">Pilih Jenis</option>
    <?php
    while ($row = mysqli_fetch_array($result1)) {
        echo "<option value='" . $row['id_jenis'] . "'>" . $row['nama_jenis'] . "</option>";
    }
    ?>        
</select>
<br>
<select name="satuan">
    <option value="">Pilih Satuan</option>
    <?php
    while ($row = mysqli_fetch_array($result2)) {
        echo "<option value='" . $row['id_satuan'] . "'>" . $row['nama_satuan'] . "</option>";
    }
    ?>        
</select> -->

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
