<div class="container py-3">
    <div class="fables-Testimonials my-3">             
       <div class="row">
           <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
               <div class="text-center">
                   <h2 class="fables-second-text-color font-25 bold-font my-3">Daftar E-Journal IAI Sumatera Selatan</h2>
                   
               </div>
           </div>
       </div>
        <div class="row">
        <?php foreach($jurnal->result() as $u){?>
            <div class="col-6">
                 <div class="fables-testimonial-block border fables-third-text-color py-4 px-6 mb-4 rounded position-relative">
                      <div class="row">
                      
                          <div class="col-12 col-sm-8">
                              <div class="fables-testimonial-block-info">
                                <span class="fables-iconfile fables-second-text-color fa-3x"></span>
                                  <h3 class="fables-second-text-color mt-4 mb-2 font-15 semi-font"><?= $u->nama_jurnal ?></h3>
                                  
                              </div>
                             
                              <center><a href="<?php echo base_url('assets/jurnal/').$u->file_name;?>" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded position-relative z-index">Download</a></center>
                              
                          </div>
                         
                      </div>
                 </div> 
                

            </div>
             <?php } ?>
           
            
        </div> 
 
    </div>  
</div> 