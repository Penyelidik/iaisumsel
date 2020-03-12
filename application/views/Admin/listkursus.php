

          <!-- Page Heading -->
         
          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3><strong> <?= $title ?>  </strong></h3>
         <?= $this->session->flashdata('message'); ?>
        
        <div class="row mt">
          <div class="col-lg-12" style="overflow-x: auto;">
            <table style="margin:20px auto;" border="1" class="table table-bordered">
		<tr style="text-align:center">
    <th width="5%">ID Kursus</th>
			<th width="20%">Nama Kegiatan</th>
			<th width="5%">Kelas</th>
      <th width="5%">Tipe Kegiatan</th>
      <th width="10%">Waktu</th>
      <th width="10%">Jumlah Peserta</th>
      <th width="10%">Kuota</th>
      <th width="10%">Biaya Anggota</th>
      <th width="10%">Biaya Umum</th>
      <th width ="15%">Aksi</th>
      
		</tr>
		<?php
		$no = 1;
		foreach($kursus->result() as $u){
		?>
		<tr>
			<td><?= $u->id_kegiatan?> </td>
			<td><a href="<?= base_url('Admin/anggota_kursus/').$u->id_kegiatan?>"><?php echo $u->nama_kegiatan ?></a></td>

    <td><?php echo  $u->kelas  ?></td>
        <td><?php echo $u->tipe;?></td>
        
          <td><?php echo $u->waktu; ?></td>
        <td><?php echo $u->jumlah_peserta;?></td>  
        <td><?php echo $u->kuota?></td>
        <td><?php echo $u->anggota?></td>
        <td><?php echo $u->umum?></td>
        
          <td><a type="button" class="btn btn-primary" href="<?= base_url('Admin/edit_kursus/')?><?= $u->id_kegiatan ?>" >Edit</a>
          <a type="button" class="btn btn-danger" href="<?= base_url('Admin/hapus_kursus/')?><?= $u->id_kegiatan ?>" onclick="return confirm('Anda yakin?')">Hapus</a></td>
		</td>
		<?php } ?>
        </table>
          </div>
           <a target="_blank" href="<?= base_url('Admin/exportm_excel/')?>">EXPORT SEMUA DATA MEMBER </a>
        </div>
      </section>
      <!-- /wrapper -->
</section>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      