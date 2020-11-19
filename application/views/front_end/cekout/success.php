<div class="container">
	<br><br>
	<?php if ($this->session->flashdata('success')) : ?>
		
	
	<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><?php echo $this->session->flashdata('success'); ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	<?php endif ?>
	<div class="alert alert-info" role="alert">
		  <h4 class="alert-heading">Konfirmasi Pembayaran</h4>
		  <hr>


			<form>
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Kode Transaksi</label>
		    <div class="col-sm-10">
		      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?php echo $konfirmasi->kode_transaksi ?>">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">No Rekening</label>
		    <div class="col-sm-10">
		      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":  <?php echo $data_toko->rekening ?>">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Batas tgl Pembayaran</label>
		    <div class="col-sm-10">
		      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?php echo $konfirmasi->tanggal_batas_bayar ?>">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Yang Harus Dibayar</label>
		    <div class="col-sm-10">
		      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Rp. <?php echo number_format( $konfirmasi->total_bayar, 0,',','.') ?>">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Konfirmasi Pembayaran</label>
		    <div class="col-sm-10">
		      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": WA-<?php echo $data_toko->no_wa;  ?>">
		    </div>
		  </div>
		</form>
		<p class="mb-0"><b>Silahkan Konfirmasi Pembayaran Berupa Bukti Pembayaran Pada Nomer WA Yang Sudah Tertera.!</b></p>
		  <br>
		   
		   	<a href="<?php echo base_url(); ?>front_end/c_cekout/print/<?php echo $konfirmasi->kode_transaksi ?>">
		   <button class="btn btn-success " type="submit"><i class="fa fa-download"></i> Unduh Nota</button>
		   </a>
		  
		

	</div>		
</div>