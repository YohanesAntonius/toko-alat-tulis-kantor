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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('gudang2/brng_kluar_gd') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" gudang2/barang/brng_kluar") ?>" method="post"
							enctype="multipart/form-data" >

<!-- 							<input type="hidden" name="id_bar" value="<?php echo $tbl_brng->id_bar?>" /> -->
<div class="row">
							<div class="form-group col-sm-6">
								<label for="no_kel">No Keluar*</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('no_kel') ? 'is-invalid':'' ?>"
								 type="text" name="id_bar" placeholder="Isi No Keluar" value="" />
								<div class="invalid-feedback">
									<?php echo form_error('id_bar') ?>
								</div>
							</div>

							<div class="form-group col-sm-6">
								<label for="tgl_kluar">Tanggal Keluar*</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('tgl_kluar') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_kluar" placeholder="" value="" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_kluar') ?>
								</div>
							</div>
</div>							
<div class="row">
							<div class="form-group col-sm-6">
								<label for="id_bar">ID Barang</label>
								<input style="width: 70%;" readonly class="form-control <?php echo form_error('id_bar') ? 'is-invalid':'' ?>"
								 type="text" name="id_bar" placeholder="" value="<?php echo $tbl_brng->id_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_bar') ?>
								</div>
							</div>

							<div class="form-group col-sm-6">
								<label for="nama_bar">Nama Barang</label>
								<input style="width: 70%;" readonly class="form-control <?php echo form_error('nama_bar') ? 'is-invalid':'' ?>"
								 type="text" name="nama_bar" placeholder="Nama Barang" value="<?php echo $tbl_brng->nama_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name_bar') ?>
								</div>
							</div>
</div>
<div class="row">
							<div class="form-group col-sm-4">
								<label for="merk_bar">Merk</label> 
								<input style="width: 70%;" class="form-control <?php echo form_error('merk_bar') ? 'is-invalid':'' ?>"
								 type="text" name="merk_bar" readonly placeholder="Merk" value="<?php echo $tbl_brng->merk_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('merk_bar') ?>
								</div>
							</div>

							<div class="form-group col-sm-4">
								<label for="jenis_bar">Jenis</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('jenis_bar') ? 'is-invalid':'' ?>"
								 type="text" name="jenis_bar" readonly placeholder="Jenis" value="<?php echo $tbl_brng->jenis_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis_bar') ?>
								</div>
							</div>

							<div class="form-group col-sm-4">
								<label for="satuan_bar">Satuan</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('satuan_bar') ? 'is-invalid':'' ?>"
								 type="text" name="satuan_bar" readonly placeholder="Satuan" value="<?php echo $tbl_brng->satuan_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('satuan_bar') ?>
								</div>
							</div>
</div>

<div class="row">
							<div class="form-group col-sm-4">
								<label for="qty_kluar">QTY Keluar</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('qty_kluar') ? 'is-invalid':'' ?>"
								 type="number" name="qty_kluar" min="0" placeholder="Isi QTY" value="" />
								<div class="invalid-feedback">
									<?php echo form_error('qty_bar') ?>
								</div>
							</div>

							<div class="form-group col-sm-4">
								<label for="tujuan">Tujuan</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('tujuan') ? 'is-invalid':'' ?>"
								 type="text" name="tujuan" placeholder="Isi Tujuan" value="" />
								<div class="invalid-feedback">
									<?php echo form_error('tujuan') ?>
								</div>
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
