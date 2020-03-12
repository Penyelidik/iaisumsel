<?php
	$this->load->view('umum/layout/nav');
	$this->load->view('umum/layout/atas');
	$this->load->view('umum/layout/jejak');
 ?>

 <html>
 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	<script type="text/javascript" src="js/jquery.js"></script>
 	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/dropify/dropify.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/date/jquery-ui.css'?>" type="text/css"/>
	<script src="<?php echo base_url().'assets/date/jquery-1.10.2.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/date/jquery-ui.js'?>" type="text/javascript"></script>
 </head>
 <body>
 	<div class="container">
 		<h1>Halaman Pendaftaran</h1>
 		 <?= $this->session->flashdata('message'); ?>
 		<br/>
		<div class="row">
			<div class="col-sm-8">
				<form action="<?php echo base_url().'utama/registerkursus'?>" method="post" enctype="multipart/form-data">
		    <nav>
		      <div class="nav nav-tabs" id="nav-tab" role="tablist">
		        <a class="nav-item nav-link active" id="nav-kategori-tab" data-toggle="tab" href="#nav-kategori" role="tab" aria-controls="nav-kategori" aria-selected="true">1. PILIH KATEGORI</a>
		        <a class="nav-item nav-link" id="nav-biodata-tab" data-toggle="tab" href="#nav-biodata" role="tab" aria-controls="nav-biodata" aria-selected="false">2. ISI BIODATA</a>
		        <a class="nav-item nav-link" id="nav-bayar-tab" data-toggle="tab" href="#nav-bayar" role="tab" aria-controls="nav-bayar" aria-selected="false">3. UPLOAD BUKTI BAYAR</a>
		      </div>
		    </nav>
				<div class="tab-content ">
		    <div class="tab-content" id="nav-tabContent">
		      <div class="tab-pane fade show active" id="nav-kategori" role="tabpanel" aria-labelledby="nav-kategori-tab">
						<br>

		          <div class="form-group">
		              <label>Pilih Kategori</label>
		              <select class="form-control" name="kategori" id="kategori" required>
		                <option value="">(Pilih Kategori)</option>
		                <?php
		                foreach($kegiatan as $row):?>
		                  <option value="<?php echo $row->jenis_kegiatan;?>"><?php echo $row->jenis_kegiatan;?></option>
		                <?php endforeach;?>
		              </select>
		          </div>

							<div id="biaya">
			          <div class="form-group">
			              <label>Pilih Program</label>
			              <select class="form-control" id="course" name="course" onchange="changePrice()" required>
			                <option value="">(Pilih Program)</option>

			              </select>
			          </div>

			          <div class="form-group">
			              <label>Golongan</label>
										<select class="form-control" id="course_member" name="course_member" onchange="changePrice()" required>
			                <option value="">(Wajib Pilih Golongan)</option>
											<option value="anggota">Anggota/Mahasiswa/Alumni</option>
											<option value="umum">Umum/Non Anggota</option>
			              </select>
			          </div>
							</div>
							<div class="form-group">
									<label>Wajib Upload ID Golongan (Kartu Anggota / KTP/ KTM - Max 2MB) Format JPG | PNG | JPEG  </label>
                  <input type="file" name="file_id" class="dropify" data-height="100">
              </div>
							<div class="form-group">
		              <label>Biaya</label>
									<div class="pull-right">
										<h4 id="labelbiaya"></h4>
										<input type="text" name="price" id="price" value="" class="blue-text form-control" style="visibility: hidden; position:fixed;">
		              </div>
		          </div>
		          <!--<button class="btn btn-success" type="submit">Lanjut</button>-->
							<br><a data-toggle="tab" href="#nav-biodata" onclick="tab2Function()" class=" btn btn-primary">Lanjut</a>
							<br>

		      </div>
			  <br>
		      <div class="tab-pane fade" id="nav-biodata" role="tabpanel" aria-labelledby="nav-biodata-tab">
						<br>
						<div class=" form-group">
							<label for="nama">Nama Lengkap</label>
							<input type="text"name="nama" value="" class=" form-control" placeholder="">
						</div>
						<div class=" form-group">
							<label for="email">Email</label>
							<input type="text"name="email" value="" class=" form-control" placeholder="">
							<?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?>
						</div>
						<div class=" form-group">
							<label for="tempat_lahir">Tempat Lahir</label>
							<input type="text"name="tempat_lahir" value="" class=" form-control" placeholder="">
						</div>
						<div class=" form-group">
							<label for="tanggal_lahir">Tanggal Lahir</label>
							<input type="date"name="tanggal_lahir" value="" class=" form-control" placeholder="">
						</div>
						<div class=" form-group">
							<label for="alamat_rumah">Alamat Rumah</label>
							<textarea name="alamat_rumah" class=" form-control" placeholder=""></textarea>
						</div>
						<div class=" form-group">
							<label for="handphone">No Telp/Handphone</label>
							<input type="text"name="handphone" value="" class=" form-control" placeholder="">
						</div>
						<div class=" form-group">
							<label for="nama_institusi">Nama Institusi/Perusahaan</label>
							<input type="text"name="nama_institusi" value="" class=" form-control" placeholder="">
						</div>
						<div class=" form-group">
							<label for="alamat_institusi">Alamat Institusi/Perusahaan</label>
							<textarea name="alamat_institusi" class=" form-control" placeholder=""></textarea>
						</div>
		        <br><a data-toggle="tab" href="#nav-bayar" onclick="topFunction()" class=" btn btn-primary">Lanjut</a>
						<br>
		      </div>
			  <br>
		      <div class="tab-pane fade" id="nav-bayar" role="tabpanel" aria-labelledby="nav-bayar-tab">
						<br>
						
		        <br>
		        <h4 class="red-text">Upload Bukti Pembayaran pada field dibawah ini:</h4>
						<div class="form-group">
								<label>Wajib Upload ID Golongan (Kartu Anggota / KTP/ KTM - Max 2MB) </label>
                <input type="file" name="file_bukti" class="dropify" data-height="100">
            </div>
						<span class="">
							<button type="submit" class=" btn btn-primary" >Daftar</button>
						</span>
						
		      </div>

		    </div>
			</div>
			</form>
		</div>
			<div class="col-sm-4">
				<nav>
		      <div class="nav nav-tabs" id="nav-tab" role="tablist">
		        <a class="nav-item nav-link active" id="nav-peraturan-tab" data-toggle="tab" href="#nav-peraturan" role="tab" aria-controls="nav-peraturan" aria-selected="true" style="font-size: 15px">Peraturan</a>
		        <a class="nav-item nav-link" id="nav-perbedaan-tab" data-toggle="tab" href="#nav-perbedaan" role="tab" aria-controls="nav-perbedaan" aria-selected="false" style="font-size: 15px">Perbedaan</a>
		        <a class="nav-item nav-link" id="nav-fasilitas-tab" data-toggle="tab" href="#nav-fasilitas" role="tab" aria-controls="nav-fasilitas" aria-selected="false" style="font-size: 15px">Fasilitas</a>
		      </div>
		  </nav>
		 <div class="tab-content ">
		    <div class="tab-content" id="nav-tabContent">
		      <div class="tab-pane fade show active" id="nav-peraturan" role="tabpanel" aria-labelledby="nav-peraturan-tab">
				<br>
				<h5><strong>PERATURAN PENDAFTARAN PESERTA PELATIHAN PAJAK TERAPAN BREVET A & B TERPADU</strong><h3>
					<ul  style="list-style-type:disc;">
			    <li>Pendaftaran via telepon atau tanpa disertai pembayaran dianggap belum mengikat.
			        </li>
			    <li>Pendaftar harus mengisi formulir disertai pembayaran minimal 50%. </li>
			    <li>Pembayaran brevet dapat dibayar 2 (dua) kali. 50% di awal sebelum kelas dimulai dan pelunasan 1 bulan setelah kelas dimulai.
			    <ol>
					<li>
						Apabila melewati 1 bulan, maka akan dikenakan denda sebesar Rp. 200.000,- (Dua Ratus Ribu Rupiah)
					</li>
					<li>
						Apabila melewati 3 bulan, maka peserta tidak dapat melanjutkan kelas
					</li>
				</ol>
				</li>
				<li>Harap membawa foto berwarna ukuran 3x4 sebanyak 1 lembar pada saat pembayaran. </li>
			    <li>Pendaftaran bisa melalui website iaisumsel.or.id atau langsung ke Sekretariat IAI (Jl. Srijaya Negara No.02/27 D-E). Pembayaran dikirim langsung ke sekretariat IAI Sumsel atau transfer rekening IAI Sumsel</li>
			    <li>Kelas dibuka jika peserta mencapai 17 orang dan pendaftaran ditutup apabila kapasitas kelas sebanyak 22 orang sudah terpenuhi.</li>
			    <li>Keikutsertaan peserta disahkan dengan tanda bukti setoran pembayaran</li>
			    <li>Peserta menggunakan pakaian bebas pantas, dan tidak menggunakan sandal</li>
				  <li>Uang pendaftaran tidak dapat diambil atau dinyatakan hangus jika ada pembatalan sepihak.</li>
				    <li>Pembayaran paling lambat Tujuh (7) hari sebelum pelatihan dimulai</li>
					  <li>Pembatalan 7 hari menjelang hari H dikenakan sanksi 50% dari total biaya.</li>
					    <li>Pendaftar yang melakukan pembayaran melalui transfer, diharapkan mengkonfirmasikan dan menyerahkan bukti transfer pada saat pelatihan dimulai</li>
						  <li>Ujian susulan atau perbaikan nilai akan dikenakan biaya satu materi Rp. 20.000,-</li>
						    <li>Apabila peserta melakukan perpindahan kelas akan dikenakan biaya perpindahan dari reguler ke eksekutif sebesar Rp. 300.000,- perpindahan dari eksekutif ke reguler sebesar Rp. 200.000,</li>
							  <li>Contact Person : IAI Mobile 0852 69440695</li><br>
			    </ul>
		      </div>
		      <div class="tab-pane fade" id="nav-perbedaan" role="tabpanel" aria-labelledby="nav-perbedaan-tab">
				<br>
				<h5><strong>PERBEDAAN KAMI DENGAN YANG LAIN</strong><h3>
					<ul  style="list-style-type:disc;">
			    <li>Diperkuat dengan adanya MoU antara Dewan Pengurus Nasional IAI dengan Direktorat Jenderal Pajak No. 09/Mou/IAI/XII/2016 tentang kerjasama sosialisasi, edukasi & Peningkatan peran Profesi Akuntan dalam ikut serta membangun kesadaran & kepatuhan masyarakat dibidang perpajakkan.
			        </li>
			    <li>Memiliki izin dari PTSP No. 0002/1.18.1/31.71.06/1.851.332/2017. <br>Izin PTSP merupakan landasan legal setiap penyelenggarakan kursus </li>
			    <li>Peserta dapat mendiskusikan perlakuan pajak untuk diri/perusahaan.
				</li>
				<li>Mendapatkan Sertifikat kelulusan dari Ikatan Akuntan Indonesia </li>
			    <li>Mendapatkan Sertifikat e-SPT</li>
			    <li>Fasilitas pindah ke penyelenggara IAI Wilayah yang bersedia, apabila peserta berpindah domisili</li>
			   
			    </ul>
		      </div>
		      <div class="tab-pane fade" id="nav-fasilitas" role="tabpanel" aria-labelledby="nav-fasilitas-tab">
				<br>
				<h5><strong>FASILITAS YANG KAMI SEDIAKAN</strong><h3>
					<ul  style="list-style-type:disc;">
			    <li>Area Parkir
			        </li>
			    <li>Ruang Mushola </li>
			    <li>Kelas Full Ac
				</li>
				<li>Free Wifi </li>
			    <li>Sertifikat</li>
			    </ul>
		      </div>
		  </div>
		</div>
		      
			</div>
		</div>
			</div>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/dropify/dropify.min.js'?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#kategori').change(function(){
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('utama/get_sub_kegiatan');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){

                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_kegiatan+'>'+data[i].nama_kegiatan+'&nbsp'+data[i].kelas+'&nbsp'+data[i].waktu+'</option>';
                        }
                        $('#course').html(html);

                    }
                });
                return false;
            });

		});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){

		$('#biaya').change(function(){
							var id=$(this).val();
			$.ajax({
					url : "<?php echo site_url('utama/biaya');?>",
					data : {id: id},
					async : true,
					dataType : 'json',
					success: function(data){

	    var thisCourse = document.getElementById( "course" );
	    var idCourse = thisCourse.options[ thisCourse.selectedIndex ].value;
	    var thisMember = document.getElementById( "course_member" );
	    var idMember = thisMember.options[ thisMember.selectedIndex ].value;

			for(i = 0; i < data.length; i++){
				if (idCourse == data[i].id_kegiatan ){

		      if( idMember == 'anggota' ){
		        document.getElementById( "price" ).value= data[i].anggota;
		        document.getElementById( "labelbiaya" ).innerHTML= 'Rp'+'&nbsp' +data[i].anggota;
		      }
		      else if( idMember == 'umum' ){
		        document.getElementById( "price" ).value= data[i].umum;
		        document.getElementById( "labelbiaya" ).innerHTML= 'Rp'+'&nbsp' +data[i].umum;
		      }
		    }
			}
			$('#price').html(html);

		}
	});
	return false;
	});

	});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.dropify').dropify({
			messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
		});
	});

	function tab2Function()
	{
		document.body.scrollTop = 0; // For Safari
		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		$('#nav-biodata-tab').click();
	}

	function topFunction()
	{
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera

    var categorySelect = $('#kategori').val();
    if(categorySelect == 'kursus'){
      $('#agrementModal').modal('show');
    }
    $('#nav-bayar-tab').click();
  }

	function toggleAgree(element)
	 {
	    $('#agrementModal').modal('hide');
	 }

</script>
 </body>
 </html>

<?php
 	$this->load->view('umum/layout/footerregister');
?>
