
 <div class="col-12 col-lg-12 fables-blog-slider owl-carousel owl-theme default-carousel  default-carousel-nav bg-rules" style="padding: 10px 0; padding-top: 0">
     <?php
          foreach($foto->result() as $f){
        ?>
    <div class="image-container shine-effect">

          <img src="<?php echo base_url()?>assets/custom/images/fotoberjalan/<?= $f->foto ?>" alt="" class="w-100">

    </div>
     <?php } ?>
  </div>


<!--UPCOMING EVENT-->

<div class="container-fluid ">
          <div class="row">

              <div class="col-12 col-lg-2 p-0">
                   <div class="text-center fables-main-background-color fables-sqr-rotation fables-second-border-color">
                      <div class="text-rotate">
                        <p style="color:#211275">...........
                           <img  src="<?php echo base_url()?>assets/custom/images/01.png" alt="" class="fables-logo wow fadeInDown " style="width: 140px; height: 200px">
                      </div>
                   </div>
              </div>

              <div class="col-12 col-lg-10 p-0">
                       <div class="container z-index ">
                           <div class="row  my-4 my-lg-5">
                               <div class="col-12 col-lg-10 offset-lg-2">
                                    <div class="fables-blog-slider mt-lg-4 mb-lg-5" >
                                         <div class="owl-carousel owl-theme default-carousel  default-carousel-nav">
                                         <?php
                                            foreach($upcoming->result() as $u){
                                        ?>
                                            <div class="image-container shine-effect">
                                                <a href="<?php echo site_url('utama/upcomingeventnya/');?>"    >
                                                    <img src="<?php echo base_url()?>assets/upcoming/<?= $u->foto ?>" alt="" class=" w-100" >
                                                </a>
                                            </div>
                                            <?php } ?>

                                    </div>

                               </div>
                           </div>
                       </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>



<div class="container">
     <div class="fables-team overflow-hidden">
                <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-4 my-lg-5 wow fadeInLeft">Layanan IAI</h2>
          <div class="container">
        <div class="row my-4 my-md-5 overflow-hidden">
             <div class="col-12 col-sm-6 col-md-4 text-center mb-3 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".4s">
                    <a href="<?php echo site_url('utama/pplnya/');?>"    >
                        <img src="<?php echo base_url()?>assets/custom/images/ppl.png" style="width: 100px; height: 100px; border-radius: 50%">
                        <h2 class="font-16 semi-font fables-second-text-color my-3 ">PPL</h2>
                    </a>
             </div>
             <div class="col-12 col-sm-6 col-md-4 text-center mb-3 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="2s">

             </div>
             <div class="col-12 col-sm-6 col-md-4 text-center mb-3 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="1.6s">
                    <!--a href="<?php echo site_url('utama/konsultasinya/');?>"    >
                        <img src="<?php echo base_url()?>assets/custom/images/konsultasi.png" style="width: 100px; height: 100px; border-radius: 50%">
                        <h2 class="font-16 semi-font fables-second-text-color my-3">Konsultasi & Pendampingan</h2>
                    </a-->
                    <a href="<?php echo site_url('utama/sertifikasinya/');?>"    >
                        <img src="<?php echo base_url()?>assets/custom/images/sertifikasiku.png" style="width: 100px; height: 100px; border-radius: 50%">
                        <h2 class="font-16 semi-font fables-second-text-color my-3">Sertifikasi</h2>
                    </a>
        </div>
        <div class="col-12 col-sm-6 col-md-6 text-center mb-3 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <a href="<?php echo site_url('utama/keanggotaannya/');?>"    >
                        <img src="<?php echo base_url()?>assets/custom/images/keanggotaan.png" style="width: 100px; height: 100px; border-radius: 50%">
                        <h2 class="font-16 semi-font fables-second-text-color my-3">Keanggotaan</h2>
                    </a>
        </div>
        <div class="col-12 col-sm-6 col-md-6 text-center mb-3 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="1.2s">
                    <a href="http://www.iaiglobal.or.id/v03/majalah-akuntan/home">
                        <img src="<?php echo base_url()?>assets/custom/images/majalah.png" style="width: 100px; height: 100px; border-radius: 50%">
                        <h2 class="font-16 semi-font fables-second-text-color my-3">Majalah Online</h2>
                    </a>
        </div>
    </div>

    </div>
<?php
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>
<!-- End Team -->
<div class="container">
     <div class="row my-4 my-lg-5">
                 <div class="col-12">
                  <h2 class="font-35 bold-font fables-second-text-color mb-4 mb-md-5">Berita <span class="fables-main-text-color"> & Kegiatan</span></h2>
                 <div class="owl-carousel owl-theme nav-slider">
<!--Berita-->           <?php
                        foreach($berita->result() as $u){
                        ?>

                       <div class="text-center wow bounceInLeft" data-wow-delay=".4s" data-wow-duration="1.5s">

                          <div class="image-container zoomOut-effect">
                             <a href="<?= base_url('Utama/detail_beritanya/').$u->berita_id?>"    >
                                <img src="<?php echo base_url()?>assets/fotoberita/<?= $u->berita_image ?>" alt="" class="w-100" style="width: 100px; height: 150px">
                            </a>
                          </div>

                            <h2 class="font-15 my-3">
                                <a href="<?= base_url('Utama/detail_beritanya/').$u->berita_id?>" class="fables-main-text-color fables-second-hover-color"><?= $u->berita_judul ?></a>
                            </h2>
                            <div class="py-2 fables-second-text-color float-left w-100 d-md-none d-lg-block">
                                <div class="float-left font-13">
                                    <span class="fables-iconcalender fables-second-text-color"></span> <?= date('d F Y ',$u->berita_tanggal)?>
                                </div>
                                <div class="float-right font-13">
                                    <span class="fables-icontags"></span> <?= $u->berita_kategori ?>
                                </div>
                            </div>

                    </div>
<!--End Berita--><?php } ?>

                </div>
             <a href="<?php echo site_url('utama/beritanya/');?>" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded  mt-4 py-2 px-5 position-relative z-index float-right"    >Selengkapnya</a> </div>

      </div>
</div>
</div>

<div class="row mt-3 mt-lg-5">
    <div class="col-12 col-lg-6 mt-3 mt-lg-0 overflow-hidden">
        <h2 class="fables-second-text-color font-25 font-weight-bold wow fadeInLeft"><span class="fables-main-text-color">Informasi</span></h2><br><br>
        <div class="row">

                      <div class="btn col-12 col-sm-6 my-6 text-center text-md-left wow fadeInRight">
                          <a href="<?php echo site_url('utama/pplnya/');?>"  > <span class="fables-iconlamp-icon fables-second-text-color fa-3x"></span></a>
                          <a href="<?php echo site_url('utama/pplnya/');?>"  >
                          <h2 class="fables-main-text-color font-18 my-2 fables-second-hover-color ">Pendidikan Profesional Lanjut</h2>
                          </a>
                          <p class="fables-forth-text-color font-weight-light">
                             Temukan minat mu disini.
                          </p>
                      </div>
                      <div class="btn col-12 col-sm-6 my-6 text-center text-md-left wow fadeInRight">
                          <a href="<?php echo site_url('utama/jurnalnya/');?>"  ><span class="fables-iconfile fables-second-text-color fa-3x"></span></a>
                          <a href="<?php echo site_url('utama/jurnalnya/');?>"  >
                          <h2 class="fables-main-text-color font-18 my-2 fables-second-hover-color ">E-Journal</h2>
                          </a>
                          <p class="fables-forth-text-color font-weight-light">
                             Temukan dan baca Jurnal kami.
                          </p>
                      </div>
                  </div>
               </div>


    <div class="col-12 col-lg-5 offset-lg-1 p-0 text-right mb-lg-5">
        <div class="col-12 col-lg-8 mt-3 mt-lg-0 overflow-hidden">
            <h2 class="fables-second-text-color font-25 font-weight-bold wow fadeInLeft text-center">Galeri <span class="fables-main-text-color"></span></h2></div><br>
                <div class="choose-img-border-after fables-second-border-color position-relative">
                  <div class="fables-blog-slider mt-lg-4 mb-lg-5" >
                    <div class="owl-carousel owl-theme default-carousel  default-carousel-nav">

                        
    
                                    
                                            
                            <?php
                                foreach($galeri->result() as $u){
                            ?>                
                            <div class="filter-img-block position-relative mb-4 image-container translate-effect-right">
                                <img src="<?php echo base_url()?>assets/galeri/<?= $u->foto ?>" alt="image" class="img-fluid" style="width: 500px; height: 350px">
                                
                                <div class="img-filter-overlay fables-main-gradient flex-center">
                                    
                                </div>
                            </div>
                            <?php } ?>

                    </div>
                </div>
            </div>
        <a href="<?php echo site_url('utama/galerinya/');?>"   class="btn fables-main-background-color white-color white-color-hover px-5 py-2 font-15">Selengkapnya</a></div>
    </div>
</div>
</div>
</div><br><br>




<!-- Start Overlay Caption -->
<div class="fables-testimonial fables-after-overlay bg-rules py-4 py-md-5 mt-lg-5">
           <div class="container">
               <div class="row">
                   <div class="col-12 col-lg-8 offset-lg-2 text-center position-relative z-index wow zoomIn" data-wow-duration="1.5s">
                           <h3 class="white-color mb-3 font-25 font-weight-bold">Informasi Lebih Lanjut</h3>
                           <p class="z-index font-weight-light font-15 text-white fables-third-text-color">
                               Kunjungi Website IAI Global
                           </p><br>
                           <a href="http://www.iaiglobal.or.id/v03/home"     class="white-color white-color-hover mt-4 py-2 px-5 position-relative z-index"><img src="<?php echo base_url()?>assets/custom/images/iaiglobal.jpg" style="width: 200px; height: 130px; border-radius: 10%"></a>
                   </div>
               </div>

           </div>
       </div>
<!-- Start Overlay Caption -->


<!-- Start Products Slider -->


<!-- Start Parteners Slider -->
<div class="fables-light-background-color py-4 mt-4 mt-lg-5">

            <h2 class="fables-second-text-color font-25 font-weight-bold wow fadeInLeft text-center">Afiliasi  <span class="fables-main-text-color">Professional</span></h2> <br>
          <div class="owl-carousel owl-theme px-6 my-0" id="fables-partner-carousel">


                  <div>
                    <a href="http://www.unsri.ac.id/" target="">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner16.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>



                  <!--<div><br><br>
                  <a href="https://www.bnisyariah.co.id/id-id/">
                    <img style="width: 100px; height: 100px" src="<?php echo base_url()?>assets/custom/images/ap/partner2.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                  </a>
                  </div>-->


                  <div>
                    <a href="https://radenfatah.ac.id/">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner12.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                   <div>
                    <a href="http://www.um-palembang.ac.id/">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner5.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                  <div>
                    <a href="https://univpgri-palembang.ac.id/">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner6.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                  <div>
                    <a href="http://akubank.muliadarmapratama.ac.id/">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner1.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                  <div>
                    <a href="http://ukmc.ac.id/">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner13.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                   <div>
                    <a href="http://www.univ-tridinanti.ac.id/">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner15.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                  <div>
                    <a href="http://www.uigm.ac.id/">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner11.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                  <div>
                    <a href="http://www.iba.ac.id/">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner3.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                  <div>
                    <a href="http://www.unitaspalembang.ac.id/id/home">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner14.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                  <div>
                    <a href="http://stie.muliadarmapratama.ac.id/">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner9.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                  <div>
                    <a href="http://www.stier.ac.id/">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner10.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                  <div>
                    <a href="http://www.polsky.ac.id">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner8.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                  <div>
                    <a href="https://pmbonline.darussalam.ac.id/p/index.php">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner7.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                  <div>
                    <a href="http://w3-hst-2.xaverius.or.id/">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner20.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>
                  <div>
                    <a href="http://unpal.ac.id/">
                        <img style="width: 160px; height: 160px" src="<?php echo base_url()?>assets/custom/images/ap/partner21.png" alt="Fables Template" class="w-100 fables-partner-carousel-img ">
                    </a>
                  </div>

            </div>
        </div>
           </div>
       </div>

       <div id="myModal" class="modal fade" role="dialog">
           <div class="modal-dialog">
             <div class="modal-content">
             <div class="modal-body">UPCOMING EVENT
               <div class="col-12 col-lg-12 fables-blog-slider owl-carousel owl-theme default-carousel  default-carousel-nav bg-rules" style="padding: 10px 0; padding-top: 0">
               <?php
                    foreach($fotoku->result() as $f){
                  ?>
              <div class="image-container shine-effect">
                 <a href="<?php echo site_url('utama/kursusnya/');?>"    >
                    <img src="<?php echo base_url()?>assets/custom/images/fotopopup/<?= $f->foto ?>" alt="" class="w-100">
                 </a>
              </div>
               <?php } ?>
               </div>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
               </div>
             </div>
           </div>
         </div>

<!-- End   Parteners Slider -->
