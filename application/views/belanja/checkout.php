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

  <?php echo form_open(base_url('belanja/checkout')); 
  $kode_transaksi = date('dmY').strtoupper(random_string('alnum',8));
  ?>
  <input type="hidden" name="id_pelanggan" value="<?php echo $pelanggan->id_pelanggan; ?>">
  <input type="hidden" name="jumlah_transaksi" value="<?php echo $this->cart->total() ?>">
  <input type="hidden" name="tanggal_transaksi" value="<?php echo date('Y-m-d'); ?>">
  
 <table class="table">
        <thead>
          <tr>
            <th>Kode Transaksi</th>
             <th><input type="text" name="kode_transaksi" class="form-control" value="<?php echo $kode_transaksi ?>" readonly required> </th>
          </tr>
          <tr>
            <th>Nama Pembeli</th>
             <th><input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" value="<?php echo $pelanggan->nama_pelanggan ?>" required></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Email Pembeli</td>
            <td><input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $pelanggan->email ?>" required></td>
          </tr>
          <tr>
            <td>Telepon Pemebeli</td>
            <td><input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $pelanggan->telepon ?>" required></td>
          </tr>
          <tr>
            <td>Alamat Pengiriman</td>
            <td><textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $pelanggan->alamat ?></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td>
              <button class="btn btn-success btn-lg" type="submit">
                <i class="fa fa-save"></i> Checkout
              </button>
              <button class="btn btn-default btn-lg" type="reset">
                <i class="fa fa-times"></i> Reset
              </button>
            </td>
          </tr>
        </tbody>
      </table>

  <?php echo form_close(); ?>
    

        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>