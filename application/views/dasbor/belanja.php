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
<div class="site-blocks-table">
    <table class="table table-bordered">

    	<thead>
    		<tr class="bg-success">
    			<th>No</th>
    			<th>Kode</th>
    			<th>Tanggal</th>
    			<th>Jumlah Total</th>
    			<th>Jumlah Item</th>
    			<th>Status Bayar</th>
    			<th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php $i=1; foreach($header_transaksi as $header_transaksi) { ?>
    		<tr>
    			<td><?php echo $i ?></td>
    			<td><?php echo $header_transaksi->kode_transaksi ?></td>
    			<td><?php echo date('d-m-Y',strtotime($header_transaksi->tanggal_transaksi)) ?></td>
    			<td><?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
    			<td><?php echo $header_transaksi->total_item ?></td>
    			<td><?php echo $header_transaksi->status_bayar ?></td>
    			<td>
                    <div class ="btn-group">
                    <a href="<?php echo base_url('dasbor/detail/'.$header_transaksi->kode_transaksi) ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Detail</a>
                    <a href="<?php echo base_url('dasbor/konfirmasi/'.$header_transaksi->kode_transaksi) ?>" class="btn btn-info btn-sm"><i class="fa fa-upload"></i> Konfirmasi</a>
                    </div>
                </td>
    		</tr>
    		<?php $i++; } ?>
    	</tbody>
    </table>
</div>
    <?php 
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




