

          <!-- Page Heading -->
         
          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3><strong> <?= $title ?>  </strong></h3>
          <?= $this->session->flashdata('message'); ?>
       <?php echo form_open_multipart('Admin/aksi_upload');?>
        <div class="login-wrap">
        
          <input type="text" class="form-control" placeholder="Judul Berita" name="berita_judul" required>
          <br>
        
          
        Isi Berita
           <textarea class="form-control"  name="berita_isi" style="resize:none" placeholder="Isi Berita"></textarea>       
          <br>
        Kategori
        <select class="form-control" name="berita_kategori">
                            <option value="Laporan" selected>Laporan</option>
                            <option value="Event">Event</option>
                           
					          </select>                                       
          Foto:
          <input type="file" class="form-control" placeholder="Foto" name="berkas" required ><br>
          <button class="btn btn-theme btn-primary"  type="submit"><i class="fas fa-share-square">&nbsp;</i>Post Berita</button>
          <hr>
         
        </div>
        <!-- modal -->
      </form>

      </section>
      <!-- /wrapper -->
</section>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      