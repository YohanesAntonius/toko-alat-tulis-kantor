<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("user/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("user/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("user/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("user/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<!-- <div class="card-header">
						<a href="<?php echo site_url('user/tbh_barang_msuk') ?>"><i class="fas fa-plus"></i> Tambah</a>
					</div> -->
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID Masuk</th>									
										<th>Tanggal Masuk</th>
										<th>ID Barang</th>
										<th>Nama</th>
										<th>Merk</th>
										<th>Jenis</th>
										<th>Satuan</th>
										<th>QTY</th>														
										<!-- <th>Action</th> -->
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tbl_brng_msuk as $tbl_brng): ?>
									<tr>
										<td width="150">
											<?php echo $tbl_brng->id_masuk ?>
										</td>
										<td>
											<?php echo $tbl_brng->tgl_msuk ?>
										</td>										
										<td>
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
										<!-- <td width="300"> -->
<!-- 											<a href="<?php echo site_url('barang_msuk/edit/'.$tbl_brng->id_masuk) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a> -->
<!-- 											<a onclick="deleteConfirm('<?php echo site_url('barang_msuk/delete/'.$tbl_brng->id_masuk) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a> -->
<!-- 											 <a href="<?php echo site_url('barang/brng_kluar/'.$tbl_brng->id_bar) ?>" style="color: green;" class="btn btn-small"><i class="fas fa-sign-out-alt"></i> Keluar</a> -->
										<!-- </td> -->
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
			<?php $this->load->view("user/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("user/_partials/scrolltop.php") ?>
	<?php $this->load->view("user/_partials/modal.php") ?>

	<?php $this->load->view("user/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
