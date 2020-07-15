<div class="bg-light py-3">
<div class="container">
    <div class="row">
    <h1><?php echo $title ?></h1>
    </div>
  </div>
</div>  

<div class="row mb-5">
<div class="col-md-9 order-2">
<div class="row mb-5">
<?php 
	// Notif
	if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-warning">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}

      // Display error
      echo validation_errors('<div class="alert alert-warning">','</div>');
      
      // Form open
      echo form_open(base_url('dasbor/profil'), 'class="leave-comment"'); ?>

      <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
             <th><input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" value="<?php echo $pelanggan->nama_pelanggan ?>" required></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $pelanggan->email ?>" readonly></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>">
            	<span class="text-danger">Minimal 6 karakter untuk mengganti password baru</span>
            </td>
          </tr>
          <tr>
            <td>Telepon</td>
            <td><input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $pelanggan->telepon ?>" required></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $pelanggan->alamat ?></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td>
              <button class="btn btn-success btn-lg" type="submit">
                <i class="fa fa-save"></i> Update Profil
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


<div class="col-md-3 order-1 mb-5 mb-md-0">
<div class="border p-4 rounded mb-4">
<?php include('menu.php') ?>

</div>
</div>   
</div>
</div>
</div>




