<!-- Start page content -->  
       <br>
       <div class="container">   

          <div class="col-12 col-lg-12">
              <div class="row">
                 <?php
		$no = 1;
		foreach($kursus->result() as $u){
		?>
                  <table class="table-responsive col-12 col-sm-4 mb-4" data-wow-delay=".3s"  style="text-align: center; font-size: 15px">
                  <tr>
                      <th>Lokasi</th>
                      <td><?= $u->lokasi ?></td>
                    
                  </tr>
                  <tr>
                      <th>Periode</th>
                      <td><?= $u->periode ?></td>
                     
                  </tr>
                  <tr>
                      <th>Kelas</th>
                      <td><?= $u->kelas ?></td>
                      
                  </tr>
                  <tr>
                      <th>Waktu Pelaksanaan </th>
                      <td><?= $u->waktu ?></td>
                      
                  </tr>
                  <tr>
                      <th>Biaya Anggota </th>
                      <td><?= $u->anggota ?></td>
                  </tr>
                  <tr>
                      <th>Biaya Umum </th>
                      <td><?= $u->umum ?></td>
                  </tr>
                  <tr>
                      <th>Kapasitas </th>
                      <td><?= $u->kuota ?></td>
                  </tr>
                  <tr>
                      <th></th>
                      <td><a href="<?php echo site_url('utama/registerkursus/');?>"  class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded position-relative z-index">Daftar</a></td>
                  </tr>
                </table>

        
              <div class="col-12 col-sm-8 mb-3 wow fadeIn" data-wow-delay=".3s">
                  <div class="text-center mb-5 wow fadeInDown" data-wow-delay=".3s">
                    <br>
                    <h3 class="fables-about-top-head fables-second-text-color font-25 semi-font d-inline-block bg-white position-relative">
                        <span class="mx-4"><?= $u->nama_kegiatan ?></span>
                    </h3>
                    <br>
                    <br>
                    <p class="fables-forth-text-color font-16 my-4" style="text-align: justify;">
               <?=$u->deskripsi ?>
                    </p>
                    
                </div>
               <?php }?> 
          </div>
          
        
          </div>
     </div>  
</div>
</div>
      
<!-- /End page content -->