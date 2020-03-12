

          <!-- Page Heading -->
         
          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3><strong> <?= $title ?>  </strong></h3>
        
       <?php echo form_open_multipart('Admin/buat_kursus_baru/')?>
        <div class="login-wrap">
        Nama Kegiatan:
          <input type="text" class="form-control"  name="nama_kegiatan"  required>
          <br>
           Deskripsi:
           <textarea class="form-control" id="ckeditor" name="deskripsi" style="resize:none"></textarea>
           <br>
           Kelas:
          <input type="text" class="form-control"  name="kelas" required>
          <br>
           Tipe:
           <select class="form-control" name="tipe" required>
                            <option value="kursus" selected>Kursus</option>
                            <option value="seminar">Seminar</option>
                           
					          </select>
                              <br>
           Sesi:
          <input type="text" class="form-control" name="sesi" required>
          <br>
           Periode:
          <input type="text" class="form-control" name="periode" required>
          <br>
           Waktu:
          <input type="text" class="form-control" name="waktu" required>
          <br>
           Kuota:
          <input type="text" class="form-control" name="kuota" required>
          <br>
          Lokasi:
          <input type="text" class="form-control" name="lokasi" required>
          <br>
          Biaya Anggota:
          <input type="text" class="form-control" name="anggota" required>
          <br>
          Biaya Umum:
          <input type="text" class="form-control" name="umum" required>
          <br>
          <button class="btn btn-theme btn-primary"  type="submit"><i class="fas fa-share-square">&nbsp;</i>Buat Kursus</button>
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

      