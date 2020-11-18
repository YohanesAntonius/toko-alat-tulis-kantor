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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('barang_kluar/add2') ?>"><i class="fas fa-plus"></i> Tambah</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a target="_blank" href="<?php echo site_url('barang_kluar/print') ?>"><i class="fas fa-print"></i> Cetak</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID Keluar</th>									
										<th>Tanggal Keluar</th>
										<th>ID Barang</th>
										<th>Nama</th>
										<th>Merk</th>
										<th>Jenis</th>
										<th>Satuan</th>
										<th>QTY</th>
										<th>Keluar</th>															
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tbl_brng_kluar as $tbl_brng): ?>
									<tr>
										<td width="150">
											<?php echo $tbl_brng->id_kluar ?>
										</td>
										<td width="150">
											<?php echo $tbl_brng->tgl_kluar ?>
										</td>										
										<td width="150">
											<?php echo $tbl_brng->id_bar ?>
										</td>
										<td width="150">
											<?php echo $tbl_brng->nama_bar ?>
										</td>
										<td>
											<?php echo $tbl_brng->merk_bar ?>
										</td>
										<td>
											<?php echo $tbl_brng->jenis_bar ?>
										</td>
										<td>
											<?php echo $tbl_brng->satuan_bar ?>
										</td>
										<td>
											<?php echo $tbl_brng->qty ?>
										</td>
										<td>
											<?php echo $tbl_brng->tujuan ?>
										</td>
										<td width="300">
											<a href="<?php echo site_url('barang_kluar/edit/'.$tbl_brng->id_kluar) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
<!-- 
										<a href="<?php echo site_url('barang_kluar/edit/'.$tbl_brng->id_masuk) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a> -->

											<a onclick="deleteConfirm('<?php echo site_url('barang_kluar/delete/'.$tbl_brng->id_kluar) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
<!-- 											 <a href="<?php echo site_url('barang/brng_kluar/'.$tbl_brng->id_bar) ?>" style="color: green;" class="btn btn-small"><i class="fas fa-sign-out-alt"></i> Keluar</a> -->
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
