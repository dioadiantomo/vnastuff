 <header class="site-navbar" role="banner">
<div class="site-navbar-top">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                <div class="site-logo">
                    <a href="<?php echo base_url() ?>" class="js-logo-clone">Vna.stuff</a>
                </div>
            </div>

<div class="col-6 col-md-4 order-3 order-md-3 text-right">
    <div class="site-top-icons">
        <ul>
            <li>
            <?php if($this->session->userdata('email')) { ?>
                <a href="<?php echo base_url('dasbor') ?>"><span class="icon icon-person"></span><?php echo $this->session->userdata('nama_pelanggan'); ?></a></li>

            <li> 
             <a href="<?php echo base_url('masuk/logout') ?>">
                 <i class="fa fa-sign-out"></i> Logout
             </a></li>

            <li>
            <?php }else{ ?>
            <a href="<?php echo base_url('registrasi') ?>"><span class="icon icon-person"></span>
            </a></li>

            <?php } ?>
            
            <?php
                // Cek data belanja
                $keranjang = $this->cart->contents();
                ?>
            <li>
                <a href="<?php echo base_url('belanja') ?>" class="site-cart">
                    <span class="icon icon-shopping_cart"></span>
                    <span class="count"><?php echo count($keranjang) ?></span>
                </a> 
            </li>
             <?php
                // kalo gaada
                if(empty($keranjang)) { ?>
                    <?php
                    // kalo ada
                    }else{
                        // Total belanja
                        $total_belanja = 'Rp. '.number_format($this->cart->total(),'0',',','.');
                        // Tampilkan data belanja
                    foreach($keranjang as $keranjang) {
                    $id_produk = $keranjang['id'];
                    // Ambil data produk
                    $produk = $this->produk_model->detail($id_produk); 
                     ?>
                    <?php 
                } //TUtup foreach keranjang
            } // tutup if
        ?>
                        <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

