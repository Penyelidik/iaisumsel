
 <!-- Page Heading -->
         
          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3><strong> <?= $title ?>  </strong></h3>
         <?= $this->session->flashdata('message'); ?>
        
        <div class="row mt">
          <div class="col-sm-12" style="overflow-x : auto;">
            <table style="margin:20px auto;" border="1" class="table table-bordered">
		<tr style="text-align:center">
    <th>No</th>
			<th>Nama </th>
			
      
      
      <th>Asal Instansi</th>
      <th>Email</th>
      <th>Handphone</th>
      <th>Aksi</th>
		</tr>
		<?php
		$no = 1;
		foreach($member->result() as $u){
		?>
		<tr>
			<td><?= $no++?> </td>
			<td><?php echo $u->nama ?></td>
        <td><?php echo  $u->nama_institusi  ?></td>
    <td><?php echo  $u->email  ?></td>
            
        
    <td><?php echo  $u->handphone  ?></td>
    
        
          <td>
          <a type="button" class="btn btn-danger" href="<?= base_url('Admin/hapus_member_kursus/')?><?= $u->id ?>/<?= $nomor['id_kegiatan']?>" onclick="return confirm('Anda yakin?')">Hapus</a></td>
		</td>
		<?php } ?>
        </table>
          </div>
          
        </div>
      </section>
      <!-- /wrapper -->
</section>
        </div>
        <!-- /.container-fluid -->
<center>
    <a target="_blank" href="<?= base_url('Admin/export_excel/')?><?= $idkursus ?>">EXPORT KE EXCEL</a>
  </center>
 
      </div>
      <!-- End of Main Content -->

  