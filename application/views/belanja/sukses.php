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

    <p class="alert alert-success">
      Terimakasih.Pesanan sedang diproses

      </div>
    </form>
  </div>

  
    

        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>