<div class="bg-light py-3">
<div class="container">
<div class="row">
<div class="col-md-12 mb-0"><strong class="text-black"><?php echo $title ?></strong></div>
</div>
</div>
</div>

<div class="site-section">
<div class="container">

<div class="row mb-5">
<div class="col-md-9 order-2">


<div class="row mb-5">
<?php foreach($produk as $produk) { ?>
<div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
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
<div class="block-4 text-center border">
    <figure class="block-4-image">
        <a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>"><img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>" class="img-fluid"></a>
    </figure>
    
    <div class="block-4-text p-4">
        <h3><a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>">
        <?php echo $produk->nama_produk ?></a></h3>

        <p class="text-primary font-weight-bold"> Rp. <?php echo number_format($produk->harga,'0',',','.') ?></p>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
<?php } ?>


</div>
<div class="row" data-aos="fade-up">
<?php echo $pagin; ?>
</div>
</div>

<div class="col-md-3 order-1 mb-5 mb-md-0">
<div class="border p-4 rounded mb-4">
<h3 class="mb-3 h6 text-uppercase text-black d-block">Kategori Produk</h3>
<ul class="list-unstyled mb-0">
    <?php foreach($listing_kategori as $listing_kategori) { ?>
<li class="mb-1"><a href="<?php echo base_url('produk/kategori/'.$listing_kategori->slug_kategori) ?>" class="d-flex"><span><?php echo $listing_kategori->merk; ?></span></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>

