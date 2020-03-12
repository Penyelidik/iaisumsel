

          <!-- Page Heading -->
         
          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3><strong> <?= $title ?>  </strong></h3>
          <?= $this->session->flashdata('message'); ?>
          <?php
		$no = 1;
		foreach($berita->result() as $u){
		?>
       <?php echo form_open_multipart('Admin/edit_berita_isi/'. $u->berita_id)?>
        <div class="login-wrap">
        
          <input type="text" class="form-control" placeholder="Judul Berita" name="berita_judul" value="<?= $u->berita_judul ?>">
          <br>
        
          
        Isi Berita
           <textarea class="form-control"  name="berita_isi" style="resize:none"> <?= $u->berita_isi ?></textarea>       
          <br>
        Kategori
        <select class="form-control" name="berita_kategori" value="<?= $u->berita_kategori ?>">
                            <option value="Laporan" selected>Laporan</option>
                            <option value="Event">Event</option>
                           
					          </select>

                              <br>                                       
          <button class="btn btn-theme btn-primary"  type="submit"><i class="fas fa-share-square">&nbsp;</i>Post Berita</button>
          <hr>
         
        </div>
        <!-- modal -->
      </form>
        <?php } ?>
      </section>
      <!-- /wrapper -->
</section>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      