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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('barang_msuk') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" barang_msuk/edit") ?>" method="post"
							enctype="multipart/form-data" >

<!-- 							<input type="hidden" name="id_bar" value="<?php echo $tbl_brng->id_bar?>" /> -->
							<div class="form-group">
								<label for="id_masuk">ID</label>
								<input style="width: 40%;" readonly class="form-control <?php echo form_error('id_masuk') ? 'is-invalid':'' ?>"
								 type="text" name="id_masuk" placeholder="" value="<?php echo $tbl_brng_msuk->id_masuk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_masuk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tgl_msuk">Tanggal Masuk</label>
								<input style="width: 40%;" class="form-control <?php echo form_error('tgl_msuk') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_msuk" placeholder="Tanggal Masuk" value="<?php echo $tbl_brng_msuk->tgl_msuk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_msuk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_bar">ID</label>
								<input style="width: 40%;" readonly class="form-control <?php echo form_error('id_bar') ? 'is-invalid':'' ?>"
								 type="text" name="id_bar" placeholder="" value="<?php echo $tbl_brng_msuk->id_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_bar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_bar">Nama*</label>
								<input style="width: 40%;" class="form-control <?php echo form_error('nama_bar') ? 'is-invalid':'' ?>"
								 type="text" name="nama_bar" placeholder="" value="<?php echo $tbl_brng_msuk->nama_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_bar') ?>
								</div>
							</div>

<div class="row">
							<div class="form-group col-sm-4">
								<label for="merk_bar">Merk*</label> 
								<input style="width: 70%;" class="form-control <?php echo form_error('merk_bar') ? 'is-invalid':'' ?>"
								 type="text" name="merk_bar" placeholder="Merk" value="<?php echo $tbl_brng_msuk->merk_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('merk_bar') ?>
								</div>
							</div>

							<div class="form-group col-sm-4">
								<label for="jenis_bar">Jenis*</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('jenis_bar') ? 'is-invalid':'' ?>"
								 type="text" name="jenis_bar" placeholder="Jenis" value="<?php echo $tbl_brng_msuk->jenis_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis_bar') ?>
								</div>
							</div>

							<div class="form-group col-sm-4">
								<label for="satuan_bar">Satuan*</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('satuan_bar') ? 'is-invalid':'' ?>"
								 type="text" name="satuan_bar" placeholder="Satuan" value="<?php echo $tbl_brng_msuk->satuan_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('satuan_bar') ?>
								</div>
							</div>
</div>

<div class="row">
							<div class="form-group col-sm-4">
								<label for="qty">QTY</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('qty') ? 'is-invalid':'' ?>"
								 type="number" name="qty" min="0" placeholder="Jumlah Barang" value="<?php echo $tbl_brng_msuk->qty ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('qty') ?>
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
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
