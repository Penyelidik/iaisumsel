

          <!-- Page Heading -->
         
          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3><strong> <?= $title ?>  </strong></h3>
         <?= $this->session->flashdata('message'); ?>
           <?= $this->session->flashdata('message1'); ?>
         <form method="post" action="<?php echo base_url(); ?>Admin/cari_email_verif">
                <h6 style="text-align: right;">
                  <input type="text" name="cari-email" placeholder="Cari Email">
                  <button type="submit"><i class="fa fa-search"></i></button>
                  
                </h6>
                </form>
        <div class="row mt">
          <div class="col-lg-12" style="overflow-x : auto;">
            <table style="margin:20px auto;" border="1" class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama</th>
      <th>Email</th>
      <th>Course</th>
      <th>Tanggal Pengajuan</th>
      <th>Bukti Pembayaran/Identitas</th>
      <th>Aktivasi</th>
      
		</tr>
		<?php
		$no = 1;
		foreach($member->result() as $u){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>

    <td><?php echo  $u->email  ?></td>
        <td><a href="<?= base_url('Admin/anggota_kursus/').$u->course?>"><?php echo $u->nama_kegiatan; ?></a>
          <hr><?php echo $u->biaya;?></td>
        <td><?php echo date('d F Y',$u->date_created) ?></td>
        <td><a href="<?= base_url('assets/bukti/')?><?= $u->bukti_pembayaran ?>" target="_blank">Lihat Bukti</a>/<a href="<?= base_url('assets/ktp/')?><?= $u->id_card ?>" target="_blank">Lihat Identitas</a></td>
        <td><a type="button" class="btn btn-primary" href="<?= base_url('Admin/aktifkan_user/')?><?= $u->id ?>/<?php echo $u->course; ?>" onclick="return confirm('Anda yakin?')">Aktifkan&nbsp;</a>
       <br> <a type="button" class="btn btn-danger" href="<?= base_url('Admin/hapus_user/'). $u->id ?> " onclick="return confirm('Anda yakin?')">Hapus&nbsp;&nbsp;&nbsp;&nbsp;</a>
       <br><a type="button" class="btn btn-success" href="<?= base_url('Admin/hubungi_user/'). $u->id ?> " onclick="return confirm('Anda yakin?')">Hubungi</a></td>
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

      