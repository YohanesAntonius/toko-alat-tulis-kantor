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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('c_gudang/barang') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('c_gudang/barang_msuk/add') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="id_masuk">ID Masuk*</label>
								<input class="form-control <?php echo form_error('id_masuk') ? 'is-invalid':'' ?>"
								 type="text" name="id_masuk" placeholder="ID Masuk" value="<?= $kodeunik; ?>" readonly/>
								<div class="invalid-feedback">
									<?php echo form_error('id_masuk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tgl_msuk">Tanggal Masuk*</label>
								<input class="form-control <?php echo form_error('tgl_msuk') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_msuk" placeholder="Tanggal Masuk" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_msuk') ?>
								</div>
							</div>

<!-- 							<div class="form-group">
								<label for="id_bar">ID Barang*</label>
								<input class="form-control <?php echo form_error('id_bar') ? 'is-invalid':'' ?>"
								 type="text" name="id_bar" placeholder="ID Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('id_kluar') ?>
								</div>
							</div> -->

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

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("gudang/_partials/js.php") ?>

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
