<?php
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>
  
  <div class="col-12 col-lg-8">
    <br><br>
    <?php
                        foreach($berita->result() as $u){
                        ?>
                    
              <div class="mb-4 mb-lg-5 wow fadeIn" data-wow-delay=".3s">
                  <div class="row">
                      <div class="col-12 col-sm-5">
                          <div class="image-container zoomIn-effect">
                             <a href="<?php echo site_url('utama/detail_beritanya/' .$u->berita_id . '/');?>"><img src="<?php echo base_url()?>assets/fotoberita/<?=$u->berita_image?>" alt="image alt text"></a>
                          </div>
                      </div>
                      <div class="col-12 col-sm-7">
                     
                          <h2 class="font-18 semi-font mt-3 mt-sm-0 mb-2"><a href="<?php echo site_url('utama/detail_beritanya/'. $u->berita_id );?>" class="fables-main-text-color fables-second-hover-color"><?= $u->berita_judul?></a></h2>
                          <div class="fables-forth-text-color font-14 my-2">                                  
                              <span class="fables-icondata fables-second-text-color mr-1"></span> 
                              <span class="mr-3"> <?= date('d F Y h:i:s',$u->berita_tanggal)?> </span>
                              <span class="fables-icontags fables-second-text-color mr-1"></span> 
                             
                              <span class="mr-3"> <?= $u->berita_kategori ?> </span>
                          </div>
                          <?php $limited_string = limit_words($u->berita_isi, 25); ?>
                          <p class="fables-forth-text-color font-14 mb-3">
                           <?= $limited_string ?> . .   <a href="<?php echo base_url();?>utama/detail_beritanya/<?= $u->berita_id ?>" class="btn fables-second-text-color underline fables-main-hover-text-color p-0 fables-main-hover-color" >Read More</a>
                          </p>
                         
                      </div>
                  </div>
                  
              </div>
              <?php } ?>
              
          </div>
        </div>
     </div>  
</div>
<!-- /End page content -->
        
          </div>
     </div>  
</div>
</div>
      
<!-- /End page content -->