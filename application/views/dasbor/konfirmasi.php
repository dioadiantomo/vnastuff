<div class="container">
    
    <h1><?php echo $title ?></h1>
    <p>Berikut adalah riwayat belanja anda</p>

<div class="row mb-5">
<div class="col-md-9 order-2">
<div class="row mb-5">
	<?php
    // Kalo ada transaksi di tampilin tabelnya 
    if($header_transaksi) { 
    ?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th width="20%">Kode Transaksi</th>
				<th>: <?php echo $header_transaksi->kode_transaksi ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tanggal</td>
				<td>: <?php echo date('d-m-Y',strtotime($header_transaksi->tanggal_transaksi)) ?></td>
			</tr>
			<tr>
				<td>Jumlah Total</td>
				<td>: <?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
			</tr>
			<tr>
				<td>Status Bayar</td>
				<td>: <?php echo $header_transaksi->status_bayar ?></td>
			</tr>
            <tr>
                <td>Bukti Bayar</td>
                <td>: <?php if($header_transaksi->bukti_bayar !="") { ?>
                    <img src="<?php echo base_url('assets/upload/image/'.$header_transaksi->bukti_bayar) ?>" class="img img-thumbnail" width="200">
                <?php }else{ echo 'Belum ada bukti bayar'; } ?>
                </td>
            </tr>
		</tbody>
	</table>

<?php 
// Error upload
if(isset($error)) {
echo '<p class="alert alert-warning">'.$error.'</p>';
}
// Notif error
echo validation_errors('<p class="alert alert-warning">','</p>');

// Form Open
echo form_open_multipart(base_url('dasbor/konfirmasi/'.$header_transaksi->kode_transaksi));

 ?>
<strong>
 <table class="table">
     <tbody>
         <tr>
             <td>Pembayaran ke Rekening</td>
             <td>
                 <select name="id_rekening" class="form-control">
                    <?php foreach($rekening as $rekening) { ?>
                     <option value="<?php echo $rekening->id_rekening ?>"> <?php if($header_transaksi->id_rekening==$rekening->id_rekening) { echo "selected"; } ?>
                        <?php echo $rekening->nama_bank ?> (NO. Rekening:
                        <?php echo $rekening->nomor_rekening ?> a.n <?php echo $rekening->nama_pemilik ?>)
                    </option>
                     <?php } ?>
                 </select>
             </td>
         </tr>
         <tr>
             <td>Tanggal Bayar</td>
              <td><input type="text" name="tanggal_bayar" class="form-control-lg" placeholder="dd-mm-yyyy" value="<?php if(isset($_POST['tanggal_bayar'])) { echo set_value('tanggal_bayar'); }elseif($header_transaksi->tanggal_bayar!="") { echo $header_transaksi->tanggal_bayar; }else{ echo date('d-m-Y');} ?>"></td>
         </tr>
         <tr>
             <td>Jumlah Bayar</td>
              <td><input type="number" name="jumlah_bayar" class="form-control-lg" placeholder="Jumlah bayar" value="<?php if(isset($_POST['jumlah_bayar'])) { echo set_value('jumlah_bayar'); }elseif($header_transaksi->jumlah_bayar!="") { echo $header_transaksi->jumlah_bayar; }else{ echo $header_transaksi->jumlah_transaksi; } ?>"></td>
         </tr>
         <tr>
             <td>Via Bank</td>
              <td>
                  <input type="text" name="nama_bank" class="form-control" value="<?php echo $header_transaksi->nama_bank ?>" placeholder="Nama Bank">
                  <small>Contoh: BANK MANDIRI</small>
              </td>
         </tr>
         <tr>
             <td>Rekening</td>
              <td>
                <input type="text" name="rekening_pembayaran" class="form-control" value="<?php echo $header_transaksi->rekening_pembayaran ?>" placeholder="Nomor Rekening">
                  <small>Contoh: 727272</small>
              </td>
         </tr>
         <tr>
             <td>Nama Pemilik</td>
              <td>
                    <input type="text" name="rekening_pelanggan" class="form-control" value="<?php echo $header_transaksi->rekening_pelanggan ?>" placeholder="Nama Pemilik Rekening">
                  <small>Contoh: ADIANTOMO</small>
              </td>
         </tr>
            <tr>
                <td>Upload Bukti Pembayaran</td>
              <td>
                    <input type="file" name="bukti_bayar" class="form-control" placeholder="Bukti Pembayaran">
              </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-success btn-lg" type="submit" name="submit"><i class="fa fa-upload"></i> Upload</button>

                        <button class="btn btn-info btn-lg" type="reset" name="reset"><i class="fa fa-times"></i> Reset</button>
                    </div>
                </td>
            </tr>
     </tbody>
 </table>
</strong>
    <?php 
    // Form Close
    echo form_close();

    // kalo gaada
	}else{ 
    	?>
    	<p class="alert alert-success">
    		<i class="fa fa-warning"></i> Belum ada data transaksi</p>
    	</p>
    <?php } ?>
</div>
</div>

<div class="col-md-3 order-1 mb-5 mb-md-0">
<div class="border p-4 rounded mb-4">
<?php include('menu.php') ?>

</div>
</div>   
</div>
</div>




