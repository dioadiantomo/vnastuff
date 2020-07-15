<?php
// Load data konfigurasi website
$site = $this->konfigurasi_model->listing();
$nav_produk_footer = $this->konfigurasi_model->nav_produk();
?>
  <footer class="site-footer border-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Kategori Produk</h3>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <?php foreach($nav_produk_footer as $nav_produk_footer) { ?>
                                    <li><a href="<?php echo base_url('produk/kategori/'.$nav_produk_footer->slug_kategori) ?>"><?php echo $nav_produk_footer->merk ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="block-5 mb-5">
                            <h3 class="footer-heading mb-4">Contact Info</h3>
                            <ul class="list-unstyled">
                                <li class="address"><?php echo $site->alamat ?></li>
                                <li class="phone"><?php echo $site->telepon ?></li>
                                <li class="email"><?php echo $site->email ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>

                </div>
            </div>
        </footer>
    </div>

    <script src="<?php echo base_url() ?>assets/template/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/jquery-ui.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/aos.js"></script>

    <script src="<?php echo base_url() ?>assets/template/js/main.js"></script>

</body>

</html>