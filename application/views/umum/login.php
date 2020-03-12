<!-- Start page content -->   
<div class="container">
     <div class="row my-4 my-lg-5">
          <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
               <img src="<?php echo base_url()?>assets/custom/images/logooo.png" alt="signin" class="img-fluid" style="width: 150px; height: 80px">
               <br><br>
               <form method="post" action="<?= base_url('utama/loginnya')?>">
                  <div class="form-group"> 
                      <div class="input-icon">
                          <span class="fables-iconemail fables-input-icon mt-2 font-13"></span>
                          <input name="email" type="text" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input"  placeholder="Email" value="<?php echo set_value('email') ?>"> 
                          <?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                      </div>
                    
                  </div>
                  <div class="form-group"> 
                      <div class="input-icon">
                         <span class="fables-iconpassword fables-input-icon font-19 mt-1"></span>
                         <input name="password" type="password" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Kata Sandi">
                        <?php echo form_error('password','<small class="text-danger pl-3">','</small>'); ?> 
                      </div>
                    
                  </div> 
                  <button type="submit" class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color font-16 semi-font py-3">Masuk</button>
                   <br>
                     <?= $this->session->flashdata('message'); ?>
                  <!--<a href="#" class="fables-forth-text-color font-16 fables-second-hover-color underline mt-3 mb-4 m-lg-5 d-block">Lupa Kata Sandi ?</a>
                  <p class="fables-forth-text-color">Belum punya akun ?  <a href="http://iailounge.iaiglobal.or.id/" class="font-16 semi-font fables-second-text-color underline fables-main-hover-color ml-2">Daftar</a></p>-->
                </form>
          </div>
     </div>

</div>
      
<!-- /End page content -->