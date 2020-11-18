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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('gudang2/brng_kluar_gd') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('gudang2/tbh_barang_kluar') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="id_kluar">ID*</label>
								<input class="form-control <?php echo form_error('id_kluar') ? 'is-invalid':'' ?>"
								 type="text" name="id_kluar" placeholder="ID Masuk" value="<?= $kodeunik; ?>" readonly/>
								<div class="invalid-feedback">
									<?php echo form_error('id_kluar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tgl_kluar">Tanggal Keluar*</label>
								<input class="form-control <?php echo form_error('tgl_kluar') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_kluar" placeholder="Tanggal Keluar" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_kluar') ?>
								</div>
							</div>

	<div>
        <label>ID Barang</label><br>
        <input list="data_barang" type="text" name="id_bar" id="id_bar" placeholder="id barang" onchange="return autofill();">
    </div>
    <div>
        <label>NAMA Barang</label><br>
        <input type="text" name="nama_bar" id="nama_bar" readonly="">
    </div>
    <div>
        <label>Merk</label><br>
        <textarea name="merk_bar" id="merk_bar" readonly="">

        </textarea>
    </div>
    <div>
        <label>Jenis Barang</label><br>
        <input type="text" name="jenis_bar" id="jenis_bar" readonly="">        
    </div>

    <div>
        <label>Satuan Barang</label><br>
        <input type="text" name="satuan_bar" id="satuan_bar" readonly="">        
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
								<label for="tujuan">Tujuan*</label>
								<input class="form-control <?php echo form_error('tujuan') ? 'is-invalid':'' ?>"
								 type="text" name="tujuan" placeholder="Tujuan" />
								<div class="invalid-feedback">
									<?php echo form_error('tujuan') ?>
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


		
<datalist id="data_barang">
    <?php
    foreach ($record->result() as $zz)
    {
        echo "<option value='$zz->id_bar'>$zz->nama_bar</option>";
    }
    ?>
    
</datalist>   
<script>
    function autofill(){
        var id_bar =document.getElementById('id_bar').value;
        $.ajax({
                       url:"<?php echo base_url();?>barang_kluar/cari",
                       data:'&id_bar='+id_bar,
                       success:function(data){
                           var hasil = JSON.parse(data);  
					
			$.each(hasil, function(key,val){ 
				
			   document.getElementById('id_bar').value=val.id_bar;
                           document.getElementById('nama_bar').value=val.nama_bar;
                           document.getElementById('merk_bar').value=val.merk_bar;
                           document.getElementById('jenis_bar').value=val.jenis_bar;
                           document.getElementById('satuan_bar').value=val.satuan_bar;
                           // document.getElementById('telp').value=val.telp;	                    
					
				});
			}
                   });
                  
    }
</script>
</body>

</html>
