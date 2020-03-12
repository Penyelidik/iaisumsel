

          <!-- Page Heading -->

          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3><strong> <?= $title ?>  </strong></h3>
         <?= $this->session->flashdata('pesan'); ?>
         <br>
         <div class="row mt">
          <div class="col-lg-12">
            <table style="margin:20px auto;" border="1" class="table table-bordered">
    <h4>Materi Kursus<h4>
		<tr>
			<th>No</th>
			<th>Judul Materi</th>

      <th>Aksi</th>
		</tr>
		<?php
		$no = 1;
		foreach($kursus->result() as $u){
		?>
		<tr>
			<td width="10%"><?php echo $no++ ?></td>
			<td width="80%"><?php echo $u->judul ?></td>


        <td width="10%">
        <a type="button" class="btn btn-danger" href="<?= base_url('Admin/hapus_materi/')?><?= $u->id_materi ?>" onclick="return confirm('Anda yakin?')">Hapus</a>
        </td>
		</tr>
		<?php } ?>
        </table>
          </div>

        </div>

        <div class="row mt">
         <div class="col-lg-12">
           <table style="margin:20px auto;" border="1" class="table table-bordered">
   <h4>Materi Seminar<h4>
   <tr>
     <th>No</th>
     <th>Judul Seminar</th>

     <th>Aksi</th>
   </tr>
   <?php
   $no = 1;
   foreach($seminar->result() as $u){
   ?>
   <tr>
     <td width="10%"><?php echo $no++ ?></td>
     <td width="80%"><?php echo $u->judul ?></td>


       <td width="10%">
       <a type="button" class="btn btn-danger" href="<?= base_url('Admin/hapus_materi/')?><?= $u->id_materi ?>" onclick="return confirm('Anda yakin?')">Hapus</a>
       </td>
   </tr>
   <?php } ?>
       </table>
         </div>

       </div>

       <div class="row mt">
        <div class="col-lg-12">
          <table style="margin:20px auto;" border="1" class="table table-bordered">
  <h4>Materi Sertifikasi<h4>
 <tr>
   <th>No</th>
   <th>Judul Sertifikasi</th>

    <th>Aksi</th>
 </tr>
 <?php
 $no = 1;
 foreach($sertifikasi->result() as $u){
 ?>
 <tr>
   <td width="10%"><?php echo $no++ ?></td>
   <td width="80%"><?php echo $u->judul ?></td>


      <td width="10%">
      <a type="button" class="btn btn-danger" href="<?= base_url('Admin/hapus_materi/')?><?= $u->id_materi ?>" onclick="return confirm('Anda yakin?')">Hapus</a>
      </td>
 </tr>
 <?php } ?>
      </table>
        </div>

      </div>
      </section>
      <!-- /wrapper -->
</section>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
