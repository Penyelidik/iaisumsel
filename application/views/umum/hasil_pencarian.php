 <div class="col-12 col-lg-8">
    <br>
            <?php
              function limit_words($string, $word_limit)
              {
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
              }
            ?>
              <h4 class="font-20 semi-font mt-3 mt-sm-0 mb-2"><b><?php echo ($judul);?></b></h4> <hr>
               <!--Judul itu dari kontroller bukan nama kolom, variabel yang menampung nilai dari model daan menampilkannya-->
               <h4 class="font-14 semi-font mt-3 mt-sm-0 mb-2"><?php echo ($paragrafnya);?></h4>
              <?php foreach ($data->result() as $row):?>
                <div class="mb-4 mb-lg-5 wow fadeIn" data-wow-delay=".3s">
                  <div class="row">
                      <div class="col-12 col-sm-5">
                          <div class="image-container zoomIn-effect">
                             <a href="<?php echo site_url('utama/detail_beritanya/' .$row->berita_id . '/');?>"><img src="<?php echo base_url()?>assets/fotoberita/<?=$row->berita_image?>" alt="image alt text"></a>
                          </div>
                      </div>
                      <div class="col-12 col-sm-7">
                          <h2 class="font-18 semi-font mt-3 mt-sm-0 mb-2"><a href="<?php echo site_url('utama/detail_beritanya/'. $row->berita_id );?>" class="fables-main-text-color fables-second-hover-color"><?= $row->berita_judul?></a></h2>
                          <div class="fables-forth-text-color font-14 my-2">                                  
                              <span class="fables-icondata fables-second-text-color mr-1"></span> 
                              <span class="mr-3"> <?= date('d F Y h:i:s',$row->berita_tanggal)?> </span>
                              <span class="fables-icontags fables-second-text-color mr-1"></span> 
                             
                              <span class="mr-3"> <?= $row->berita_kategori ?> </span>
                          </div>
                          <?php $limited_string = limit_words($row->berita_isi, 25); ?>
                          <p class="fables-forth-text-color font-14 mb-3">
                           <?= $limited_string ?> . .   <a href="<?php echo base_url();?>utama/detail_beritanya/<?= $row->berita_id ?>" class="btn fables-second-text-color underline fables-main-hover-text-color p-0 fables-main-hover-color" >Read More</a>
                          </p>
                      </div>
                  </div>
              </div>    
            <?php endforeach;?>
          </div>
        </div>
      </div>
      </div>
    </div>

          
      