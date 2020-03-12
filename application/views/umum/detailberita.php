<!-- Start page content --> 
  <div class="col-12 col-lg-8">
    <br>
      <div class="mb-4 mb-lg-5 wow fadeIn" data-wow-delay=".3s">
         <div class="row">
            <div class="single-blog">
              <h2 class="font-23 semi-font" style="text-align: center;"><?php echo $berita['berita_judul'] ?></h2> <br> 
              <div>
                    <img src="<?php echo base_url()?>assets/fotoberita/<?= $berita['berita_image'] ?>" alt="" class="w-100">
              </div>
          </div><br>
          
          <div class="fables-forth-text-color fables-blog-date">                                  
              
                  <div class="col-12 col-md-12 col-lg-12 pt-2">
                          <span class="fables-icondata fables-second-text-color mr-1"></span> 
                          <span class="mr-3"><?= date('d F Y h:i:s',$berita['berita_tanggal'])?></span>
                          <span class="fables-icontags fables-second-text-color mr-1"></span> 
                          <span class="mr-3"> <?= $berita['berita_kategori']?> </span>
                  </div>
          </div>
          <div class="col-12 col-md-12 col-lg-12 text-right text-center text-md-right">
            <button class="btn btn-link fables-fifth-border-color fables-forth-hover-backround-color fables-forth-text-color " onclick="window.print();"><span class="fables-iconprint"></span> Cetak Artikel</button>
          </div>
          <p class="fables-forth-text-color font-16 my-4" style="text-align: justify;">
                <?= $berita['berita_isi'] ?>
                    </p>
     </div>
       <hr>
      <p>Bagikan berita ini :</p>
      <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">

<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_google_gmail"></a>
<a class="a2a_button_telegram"></a>
<a class="a2a_button_line"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
      </div>


      </div>

            </div>
 </div>

</div>  
<!-- /End page content -->


</div>
</div>
</div>
</div>