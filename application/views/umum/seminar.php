<div class="col-12 col-lg-12">
              <div class="fables-blog-search">
                 
              </div>
            <div class="col-12 col-sm-12  wow fadeIn" data-wow-delay=".3s">
                  <div class="text-center wow fadeInDown" data-wow-delay=".3s">
                    <br>
                    <h3 class="fables-about-top-head fables-second-text-color font-18 semi-font d-inline-block bg-white position-relative">
                        <span class="mx-4">Daftar Seminar IAI Sumsel</span>
                    </h3>
                </div>
          </div>
           <?php
		$no = 1;
		foreach($kursus->result() as $u){
		?>
            <br>
            <div class="table-responsive col-12 col-sm-12 mb-10 wow fadeIn" data-wow-delay=".3s">
              <table class="table-badge col-12 col-sm-12 mb-3 font-15 wow bounceInLeft" data-wow-delay=".3s"  style="text-align: center;" >
                  <tr>
                      <th width="20%">Jenis Kursus</th>
                      <th width="15">Periode</th>
                      <th width="15%">Kelas / Kuota</th>
                      <th width="20%">Waktu</th>
                      <th width ="15%">Lokasi</th>
                      <th width="15%">Informasi</th>
                  </tr>
                  <tr>
                       <td><?= $u->nama_kegiatan?></td>
                      <td><?= $u->periode ?></td>
                      <td><?= $u->kelas?> / <?= $u->kuota ?></td>
                      <td><?= $u->waktu?></td>
                      <td><?= $u->lokasi?></td>
                      <td>
                        <a href="<?php echo site_url('utama/detail_seminarnya/').$u->id_kegiatan;?>" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded position-relative z-index" tagret="_blank">Detail</a>
                        <a href="<?php echo site_url('utama/registerkursus/');?>" tagret="_blank" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded position-relative z-index">Daftar</a>
                      </td>
                  </tr>
              </table> 
            </div>
             <?php } ?>
          </div>
