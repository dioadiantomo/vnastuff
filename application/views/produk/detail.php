<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><strong class="text-black"><?php echo $title ?></strong></div>
    </div>
  </div>
</div>  

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php echo base_url('assets/upload/image/'.$produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h2 class="text-black"><?php echo $title ?></h2>

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

        <p><?php echo $produk->keterangan ?></p>
        <p><strong class="text-primary h4">Rp. <?php echo number_format($produk->harga,'0',',','.') ?></strong></p>
        
         <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" name="qty" id="qty" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

        <p> <button type="submit" value="submit" class="buy-now btn btn-sm btn-primary">Masukan Keranjang</button></p>

      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

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
<?php foreach($produk_related as $produk_related) { ?>
<div class="item">
<!-- form untuk belanja -->
<?php 
echo form_open(base_url('belanja/add'));
 // elemen yang dibawa
 echo form_hidden('id', $produk_related->id_produk);
 echo form_hidden('qty', 1);
 echo form_hidden('price', $produk_related->harga);
 echo form_hidden('name', $produk_related->nama_produk);
 // elemen redirect
 echo form_hidden('redirect_page', str_replace('index.php/','',current_url())); 

?>

<div class="block-4 text-center" style="min-height: 400px;">
    <center>
    <figure class="block-4-image" style="max-width: 50%;max-height: 50%;">
        <img src="<?php echo base_url('assets/upload/image/'.$produk_related->gambar) ?>" class="<?php echo $produk_related->nama_produk ?>">
    </figure>
</center>
    <div class="block-4-text p-4">
    <h3><a href="<?php echo base_url('produk/detail/'.$produk_related->slug_produk) ?>">
        
    <?php echo $produk_related->nama_produk ?></a></h3>
    <p class="mb-0">Start From</p>
    <p class="text-primary font-weight-bold">
        Rp. <?php echo number_format($produk_related->harga,'0',',','.') ?></p>
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