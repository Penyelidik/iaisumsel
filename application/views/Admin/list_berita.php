

          <!-- Page Heading -->
         
          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3><strong> <?= $title ?>  </strong></h3>
         <?= $this->session->flashdata('pesan'); ?>
         <form method="post" action="<?php echo base_url(); ?>Admin/cari_berita">
                <h6 style="text-align: right;">
                  <input type="text" name="cari-berita" placeholder="Cari berita">
                  <button type="submit"><i class="fa fa-search"></i></button>
                  
                </h6>
                </form>
        <div class="row mt">
          <div class="col-lg-12">
            <table style="margin:20px auto;" border="1" class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Judul Berita</th>
      <th>Tanggal Berita</th>
      <th>Aksi</th>
		</tr>
		<?php
		$no = 1;
		foreach($berita->result() as $u){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->berita_judul ?></td>

    <td><?= date('d F Y H:i:s',$u->berita_tanggal)?></td>
        <td><a type="button" class="btn btn-primary" href="<?= base_url('Admin/edit_berita/')?><?= $u->berita_id ?>" >Edit Isi</a>
        <a type="button" class="btn btn-danger" href="<?= base_url('Admin/hapus_berita/')?><?= $u->berita_id ?>" onclick="return confirm('Anda yakin?')">Hapus</a>
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

      