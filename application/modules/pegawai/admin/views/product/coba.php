<script src="<?php echo base_url(); ?>assets/ajax.js"></script>
<form autocomplete="off">
<center>
    <h1>Contoh Autocomplete</h1>

<form action="<?php base_url('barang_kluar/add') ?>" method="post" enctype="multipart/form-data" >
    <div>
        <label>No Keluar</label><br>
        <input type="text" name="no_kluar" id="no_kluar">
    </div>

    <div>
        <label>Tgl Keluar</label><br>
        <input type="date" name="tgl_kluar" id="tgl_kluar">
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

    <div>
        <label>qty</label><br>
        <input type="text" name="qty" id="qty">
    </div>

<br>
<input class="btn btn-success" type="submit" name="btn" value="Save" />
</form>
<br>
          <div class="card-header">
            <a href="<?php echo site_url('barang') ?>"> Back</a>
          </div>

    </center>
</form>

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