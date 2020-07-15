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

    <p class="alert alert-success">Registrasi Sukses. <a href="<?php echo base_url('masuk') ?>" class="btn btn-info btn-sm">Login</a>
      Bisa Melakukan Checkout <a href="<?php echo base_url('belanja/checkout') ?>" class="btn btn-warning btn-sm"><i class ="fa fa-shopping-cart"></i> Checkout</a></p>

    

      </div>
    </form>
  </div>

  
    

        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>