 <?php
 // AMBIL DATA MENU DARI KONFIGURASI
$nav_produk = $this->konfigurasi_model->nav_produk();
 ?>
 <nav class="site-navigation text-right text-md-center" role="navigation">
                <div class="container">
                    <ul class="site-menu js-clone-nav d-none d-md-block">
                        <!-- HOME -->
                         <li>
                            <a href="<?php echo base_url() ?>">Beranda</a></li>
                         <!-- MENU PRODUK -->
                        <li class="has-children active">
                            <a href="<?php echo base_url('produk') ?>">Produk &amp; Belanja</a>
                            <ul class="dropdown">
                                <?php foreach($nav_produk as $nav_produk) { ?>
                                <li><a href="<?php echo base_url('produk/kategori/'.$nav_produk->slug_kategori) ?>">
                                    <?php echo $nav_produk->merk ?>
                                </a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>