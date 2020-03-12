<!-- Start page content --> 
<div class="container my-4 my-lg-5">

    <div class=" nav-0">
          <div class="">
               
               <div class="row">
               <?php foreach($gambar->result() as $u){?>
                   <div class="col-12 col-sm-6 col-md-4">
                       <div class="filter-img-block position-relative mb-4 image-container translate-effect-right">
                          <a href="<?php echo base_url()?>assets/galeri/<?= $u->foto ?>" target="_blank"> 
                            <img src="<?php echo base_url()?>assets/galeri/<?= $u->foto ?>" alt="" height="300px">
                          </a>
                        </div>
                   </div>
               <?php } ?>
               </div>
         </div>
       </div>
     </div>
