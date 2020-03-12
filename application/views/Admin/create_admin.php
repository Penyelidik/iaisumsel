

          <!-- Page Heading -->
         
          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3 class="text-center"><strong> <?= $title ?>  </strong></h3>
          <?= $this->session->flashdata('message'); ?>
          <br><br><br>
       <div class="container">
            <div class="row">
                <div class="col">
                
                </div>
                <div class="col-6">
               <form class="user" method="post" action="<?= base_url('Admin/register_admin')?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" placeholder="Full Name" name="nama" value="<?php echo set_value('nama') ?>">
                  <?php echo form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="<?php echo set_value('email') ?>">
                  <?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" placeholder="Password" name="password1">
                    <?php echo form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                
              </form>
                </div>
                <div class="col">
                
                </div>
            </div>
            </div>
           
       
    
          </div>
                 </div>
      </section>
      <!-- /wrapper -->
</section>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      