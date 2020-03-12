

          <!-- Page Heading -->
         
          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3><strong> <?= $title ?>  </strong></h3>
          <?= $this->session->flashdata('message'); ?>
          <?php
		$no = 1;
		foreach($kursus->result() as $u){
		?>
       <?php echo form_open_multipart('Admin/edit_detail_kursus/'. $u->id_kegiatan)?>
        <div class="login-wrap">
        Nama Kegiatan:
          <input type="text" class="form-control"  name="nama_kegiatan" value="<?= $u->nama_kegiatan ?>" required>
          <br>
          Deskripsi:
           <textarea class="form-control" id="ckeditor" name="deskripsi" style="resize:none"></textarea>
           <br>
           Kelas:
          <input type="text" class="form-control"  name="kelas" value="<?= $u->kelas ?>"required>
          <br>
           Tipe:
           <select class="form-control" name="tipe" value="<?= $u->tipe ?>"required>
                            <option value="kursus" selected>Kursus</option>
                            <option value="seminar">Seminar</option>
                           
					          </select>
                              <br>
           Sesi:
          <input type="text" class="form-control" name="sesi" value="<?= $u->sesi ?>"required>
          <br>
           Periode:
          <input type="text" class="form-control" name="periode" value="<?= $u->periode ?>"required>
          <br>
           Waktu:
          <input type="text" class="form-control" name="waktu" value="<?= $u->waktu ?>"required>
          <br>
          Jumlah Peserta:
          <input type="text" class="form-control" name="jumlahku" value="<?= $u->jumlah_peserta ?>"required>
          <br>
           Kuota:
          <input type="text" class="form-control" name="kuota" value="<?= $u->kuota ?>"required>
          <br>
          Lokasi:
          <input type="text" class="form-control" name="lokasi" value="<?= $u->lokasi ?>"required>
          <br>
          Biaya Anggota:
          <input type="text" class="form-control" name="anggota" value="<?= $u->anggota ?>"required>
          <br>
          Biaya Umum:
          <input type="text" class="form-control" name="umum" value="<?= $u->umum ?>"required>
          <br>
          <button class="btn btn-theme btn-primary"  type="submit"><i class="fas fa-share-square">&nbsp;</i>Update Kursus</button>
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

      