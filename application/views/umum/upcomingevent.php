<!-- Start page content --> 
    <div class="container"> 
        <div class="row my-4 my-md-5 overflow-hidden">
         
              
             <div class="col-12 col-sm-6 col-md-12 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".8s"> 
              <?php
                                            foreach($upcoming->result() as $u){
                                        ?> <br> 
                    <a href="<?= base_url('Utama/registerkursus')?>">
                    <img src="<?php echo base_url()?>assets/upcoming/<?= $u->foto ?>" alt="" class=" w-100" >
                    </a>          
                    <?php }?>
             </div>
                                            
         </div>  
    </div>