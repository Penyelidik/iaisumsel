<!-- Start page content -->
       <br>
       <div class="container">
          <div class="fables-blog-search">
                  
              </div>
              <br>
          <div class="col-12 col-lg-12">
              <div class="row">

                  <table class="table-responsive col-12 col-sm-4 mb-4" data-wow-delay=".3s"  style="text-align: center; font-size: 15px">
                  <tr>
                      <th bgcolor="silver">Kategori Materi</th>
                  </tr>
                  <tr>
                      <td>
                        <a href="<?php echo base_url('utama/materi_kursus/')?>">Kursus</a>
                      </td>
                  </tr>
                  <tr>
                      <td>
                        <a href="<?php echo base_url('utama/materi_seminar/')?>">Seminar</a>
                      </td>
                  </tr>
                  <tr>
                      <td>
                        <a href="<?php echo base_url('utama/materi_sertifikasi/')?>">Sertifikasi</a>
                      </td>
                  </tr>
                </table>


              <div class="col-12 col-sm-8 mb-3 ">
                  <div class="text-center mb-5">

                    <table class="table-badge col-12 col-sm-12 mb-3 font-15"   style="text-align: center;" >
                      <h4>Materi Seminar</h4>
                      <br>
                  <tr>
                      <th>Nama File</th>
                      <!--<th>Preview</th>-->
                      <th>Download</th>
                  </tr>
                  <?php
              		$no = 1;
              		foreach($seminar->result() as $u){
              		?>
                  <tr>
                      <td><?php echo $u->judul ?></td>
                      <!--<td><a href="contactus1.html" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded position-relative z-index">Preview</a></td>-->
                      <td>
                        <a href="<?php echo base_url('assets/materi/').$u->judul;?>" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded position-relative z-index">Download</a>
                      </td>
                  </tr>
                  <?php } ?>
              </table>
                </div>

          </div>


          </div>
     </div>
</div>
</div>

<!-- /End page content -->
