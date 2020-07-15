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

    <p class="alert alert-success">Belum Punya Akun? Silahkan <a href="<?php echo base_url('registrasi') ?>" class="btn btn-info btn-sm">Registrasi</a></p>

    <div class="col-md-8 col-md-offset-2">
      <?php 
      // Display error
      echo validation_errors('<div class="alert alert-warning">','</div>');

      // Notifikasi error login
      if($this->session->flashdata('warning')) {
        echo '<div class="alert alert-warning">';
        echo $this->session->flashdata('warning');
        echo '</div>';
      }

      // Notifikasi sukses logout
      if($this->session->flashdata('sukses')) {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('sukses');
        echo '</div>';
      }
      
      // Form open
      echo form_open(base_url('masuk'), 'class="leave-comment"'); ?>

      <table class="table">
       
        <tbody>
          <tr>
            <td>Email (Username)</td>
            <td><input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>" required></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>" required></td>
          </tr>
          <tr>
            <td></td>
            <td>
              <button class="btn btn-success btn-lg" type="submit">
                <i class="fa fa-save"></i> Login
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
    </form>
  </div>

  
    

        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>