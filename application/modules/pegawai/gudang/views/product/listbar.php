<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("gudang/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("gudang/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("gudang/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("gudang/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
 					<div class="card-header">
						<a href="<?php echo site_url('c_gudang/barang_gd/add') ?>"><i class="fas fa-plus"></i> Tambah</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID</th>									
										<th>Nama</th>
										<th>Merk</th>
										<th>Jenis</th>
										<th>Satuan</th>
										<th>QTY</th>
										<th>Harga</th>															
<!-- 										<th>Action</th> -->
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tbl_brng as $tbl_brng): ?>
									<tr>
										<td width="150">
											<?php echo $tbl_brng->id_bar ?>
										</td>
										<td>
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
											<?php echo $tbl_brng->harga_bar ?>
										</td>
<!-- 										<td width="250">
											<a href="<?php echo site_url('barang/edit/'.$tbl_brng->id_bar) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('barang/delete/'.$tbl_brng->id_bar) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td> -->
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
			<?php $this->load->view("gudang/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("gudang/_partials/scrolltop.php") ?>
	<?php $this->load->view("gudang/_partials/modal.php") ?>

	<?php $this->load->view("gudang/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
