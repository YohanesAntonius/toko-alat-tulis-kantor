<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
<!-- 	<?php echo date('l, d-m-Y');?> -->
	<center>
		<h2>DATA KELUAR BARANG ATK</h2>
							<table border="1">
								<thead>
									<tr>
										<th>No</th>
										<th>ID Keluar</th>
										<th>Tanggal Keluar</th>
										<th>ID Barang</th>										
										<th>Nama</th>
										<th>Merk</th>
										<th>Jenis</th>
										<th>Satuan</th>
										<th>QTY</th>
										<th>Tujuan</th>														
									</tr>
								</thead>
								<tbody>

									<?php 
									$no = 1;
									foreach ($tbl_brng_kluar as $tbl_brng): ?>
									<tr>
										<td>
											<?php echo $no++ ?>
										</td>
										<td>
											<?php echo $tbl_brng->id_kluar ?>
										</td>
										<td>
											<?php echo $tbl_brng->tgl_kluar ?>
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
										<td>
											<?php echo $tbl_brng->tujuan ?>
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
