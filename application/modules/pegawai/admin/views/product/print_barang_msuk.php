<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
<!-- 	<?php echo date('l, d-m-Y');?> -->
	<center>
		<h2>DATA MASUK BARANG ATK</h2>
							<table border="1">
								<thead>
									<tr>
										<th>No</th>
										<th>ID Masuk</th>
										<th>Tanggal Masuk</th>
										<th>ID Barang</th>										
										<th>Nama</th>
										<th>Merk</th>
										<th>Jenis</th>
										<th>Satuan</th>
										<th>QTY</th>														
									</tr>
								</thead>
								<tbody>

									<?php 
									$no = 1;
									foreach ($tbl_brng_msuk as $tbl_brng): ?>
									<tr>
										<td>
											<?php echo $no++ ?>
										</td>
										<td>
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
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
							</center>
			<script type="text/javascript">
				window.print();
			</script>			
</body>

</html>
