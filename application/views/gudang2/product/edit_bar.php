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

						<a href="<?php echo site_url('gudang2/lsbarang') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" gudang2/edtbarang") ?>" method="post"
							enctype="multipart/form-data" >

<!-- 							<input type="hidden" name="id_bar" value="<?php echo $tbl_brng->id_bar?>" /> -->
							<div class="form-group">
								<label for="id_bar">ID</label>
								<input style="width: 40%;" readonly class="form-control <?php echo form_error('id_bar') ? 'is-invalid':'' ?>"
								 type="text" name="id_bar" placeholder="" value="<?php echo $tbl_brng->id_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_bar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_bar">Nama*</label>
								<input style="width: 40%;" class="form-control <?php echo form_error('nama_bar') ? 'is-invalid':'' ?>"
								 type="text" name="nama_bar" placeholder="Nama Barang" value="<?php echo $tbl_brng->nama_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name_bar') ?>
								</div>
							</div>

<div class="row">
							<div class="form-group col-sm-4">
								<label for="merk_bar">Merk*</label> 
								<input style="width: 70%;" class="form-control <?php echo form_error('merk_bar') ? 'is-invalid':'' ?>"
								 type="text" name="merk_bar" placeholder="Merk" value="<?php echo $tbl_brng->merk_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('merk_bar') ?>
								</div>
							</div>

							<div class="form-group col-sm-4">
								<label for="jenis_bar">Jenis*</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('jenis_bar') ? 'is-invalid':'' ?>"
								 type="text" name="jenis_bar" placeholder="Jenis" value="<?php echo $tbl_brng->jenis_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis_bar') ?>
								</div>
							</div>

							<div class="form-group col-sm-4">
								<label for="satuan_bar">Satuan*</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('satuan_bar') ? 'is-invalid':'' ?>"
								 type="text" name="satuan_bar" placeholder="Satuan" value="<?php echo $tbl_brng->satuan_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('satuan_bar') ?>
								</div>
							</div>
</div>

<div class="row">
							<div class="form-group col-sm-4">
								<label for="qty">QTY</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('qty') ? 'is-invalid':'' ?>"
								 type="number" name="qty" min="0" placeholder="Jumlah Barang" value="<?php echo $tbl_brng->qty ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('qty') ?>
								</div>
							</div>

							<div class="form-group col-sm-4">
								<label for="harga_bar">Harga</label>
								<input style="width: 70%;" class="form-control <?php echo form_error('harga_bar') ? 'is-invalid':'' ?>"
								 type="number" name="harga_bar" min="0" placeholder="Harga" value="<?php echo $tbl_brng->harga_bar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga_bar') ?>
								</div>
							</div>
</div>
<!-- 							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<input type="hidden" name="old_image" value="<?php echo $product->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div> -->
<!-- 
							<div class="form-group">
								<label for="name">Keterangan</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Product description..."><?php echo $product->description ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div> -->

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
