<div class="site-section block-3 site-blocks-2 bg-light">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Produk Terbaru</h2>
        </div>
    </div>
<div class="row">

<div class="col-md-12">
<div class="nonloop-block-3 owl-carousel">
<?php foreach($produk as $produk) { ?>
<div class="item">
<!-- form untuk belanja -->
<?php 
echo form_open(base_url('belanja/add'));
 // elemen yang dibawa
 echo form_hidden('id', $produk->id_produk);
 echo form_hidden('qty', 1);
 echo form_hidden('price', $produk->harga);
 echo form_hidden('name', $produk->nama_produk);
 // elemen redirect
 echo form_hidden('redirect_page', str_replace('index.php/','',current_url())); 

?>

<div class="block-4 text-center" style="min-height: 400px;">
    <center>
    <figure class="block-4-image" style="max-width: 50%;max-height: 50%;">
        <img src="<?php echo base_url('assets/upload/image/'.$produk->gambar) ?>" class="<?php echo $produk->nama_produk ?>">
    </figure>
</center>
    <div class="block-4-text p-4">
    <h3><a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>">
        
    <?php echo $produk->nama_produk ?></a></h3>
    <p class="mb-0">Start From</p>
    <p class="text-primary font-weight-bold">
        Rp. <?php echo number_format($produk->harga,'0',',','.') ?></p>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                       <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</div>