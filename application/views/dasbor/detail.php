<div class="container">
    
    <h1><?php echo $title ?></h1>
    

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
		</tbody>
	</table>
<div class="site-blocks-table">
    <table class="table table-bordered" width="100%">
    	<thead>
    		<tr class="bg-success">
    			<th>No</th>
    			<th>Kode</th>
    			<th>Nama Produk</th>
    			<th>Jumlah</th>
    			<th>Harga</th>
    			<th>Sub Total</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php $i=1; foreach($transaksi as $transaksi) { ?>
    		<tr>
    			<td><?php echo $i ?></td>
    			<td><?php echo $transaksi->kode_produk ?></td>
    			<td><?php echo $transaksi->nama_produk ?></td>
    			<td><?php echo number_format($transaksi->jumlah) ?></td>
    			<td><?php echo number_format($transaksi->harga) ?></td>
    			<td><?php echo number_format($transaksi->total_harga) ?></td>
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




