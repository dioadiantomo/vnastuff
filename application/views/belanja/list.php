<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><strong class="text-black"><?php echo $title ?></strong></div>
    </div>
  </div>
</div>  

<?php if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-warning">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
} ?>
<div class="site-section">
<div class="container">
  <div class="row mb-5">
    <form class="col-md-12" method="post">
      <div class="site-blocks-table">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="product-thumbnail">Gambar</th>
              <th class="product-name">Produk</th>
              <th class="product-price">Harga</th>
              <th class="product-quantity">Jumlah</th>
              <th class="product-total">Sub Total</th>
             <th class="product-remove">Action</th>
            </tr>

            <?php 
            // looping data keranjang
            foreach($keranjang as $keranjang) { 
                // Ambil data produk
                $id_produk = $keranjang['id'];
                $produk    = $this->produk_model->detail($id_produk);

                // Form update keranjang
                echo form_open(base_url('belanja/update_cart/'.$keranjang['rowid']));
              ?>

          </thead>
          <tbody>
            <tr>
              <td class="product-thumbnail">
                <img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" alt="Image" class="<?php echo $keranjang['name'] ?>">
              </td>
              <td class="product-name">
                <h2 class="h5 text-black"><?php echo $keranjang['name'] ?></h2>
              </td>
              <td>Rp. <?php echo number_format($keranjang['price'],'0',',','.') ?> </td>
              <td>
                <div class="input-group mb-3" style="max-width: 120px;">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                  </div>

                  <input type="text" class="form-control text-center" value="<?php echo $keranjang['qty'] ?>" name ="qty" id="qty" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  
                  <div class="input-group-append">
                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                  </div>
                </div>
              </td>

              <td>
              <?php  
              $sub_total = $keranjang['price'] * $keranjang['qty'];
              echo number_format($sub_total,'0',',','.');
              ?>
            </td>

            <td>
              <a href="<?php echo base_url('belanja/update_cart/'.$keranjang['rowid']) ?>" class="btn btn-success btn-sm">
                <i class="fa fa-edit"></i> Update
              </a>

              <a href="<?php echo base_url('belanja/hapus/'.$keranjang['rowid']) ?>" class="btn btn-warning btn-sm">
                <i class="fa fa-trash-o"></i> Hapus
              </a>
            </td>

            </tr>
            <?php 
            // Echo form close
          echo form_close(); 
            // End looping keranjang
          }
          
            ?>
            <tr class="table-row bg-success">
                <td colspan="4" class="column-1">Total Belanja</td>
                <td colspan="2"class="column-2">Rp. <?php echo number_format($this->cart->total(),'0',',','.') ?></td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </form>
  </div>

  
    <a href="<?php echo base_url('belanja/hapus') ?>" class="btn btn-danger btn-lg">
      <i class="fa fa-trash-o"></i> Bersihkan Keranjang
    </a>

  <a href="<?php echo base_url('belanja/checkout') ?>" class="btn btn-success btn-lg">
      <i class="fa fa-shopping-cart"></i> Checkout
    </a>

        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>