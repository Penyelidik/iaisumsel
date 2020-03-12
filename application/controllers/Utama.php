<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends My_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');

    $this->load->model('model');
    $this->load->library('upload');

	}


	public function index()
	{
		//tes
		$data["title"] = 'Beranda :: IAI Sumatera Selatan';
		$this->db->order_by('berita_tanggal', 'DESC');
		$data["berita"] = $this->db->get('tbl_berita');
		$data["upcoming"] = $this->db->get('upcoming');
		$data["foto"]= $this->db->get('fotoberjalan');
		$data["fotoku"]= $this->db->get('fotopopup');
		
		$this->db->select("*");
		$this->db->from("galeri");
		$this->db->limit(2);
		$this->db->order_by('id', "DESC");
		$data["galeri"]= $this->db->get();
		//$data['isi'] = 'umum/beranda';
		$this->templete($data);
	}
	function loginnya()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run()== FALSE){
		$data["title"] = 'Masuk ke Akun';
		$data['penyambung_kontak'] = 'umum/login';
		$this->templete3($data);
		}
		else{
			$this->_login();
		}
	}
	 private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data_admin = $this->db->get_where('admin',['email' => $email])->row_array();
        if($data_admin)
        {
		if($data_admin['is_active'] == '1'){
          if(password_verify($password, $data_admin['password'])){
              $data_admin= [
				'nama_admin' =>$data_admin['nama'],
				'email' => $data_admin['email']
                 ];
              $this->session->set_userdata($data_admin);
              redirect('Admin');
           }else{
              $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
              Maaf, Password anda salah !
              </div>');
              redirect(base_url('Utama/loginnya/'));
			}
		}else{
			 $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
              Maaf, Akun anda tidak Aktif !
              </div>');
              redirect(base_url('Utama/loginnya/'));
		}
		}
		else{
		    
		  $this->db->select('*');
        $this->db->from('member');
        $this->db->where(array('email' => $email, 'password' => $password));
        $data_member = $this->db->get()->row_array();  
          //$data_member = $this->db->get_where('member',['email' => $email])->row_array();
          if($data_member)
          {
              if($data_member['is_active'] == 1)
              {

                 	if($password == $data_member['password']){

                      $data = [
                        'nama' =>$data_member['nama'],

                      ];
                      $this->session->set_userdata($data);
                      redirect(base_url());
                  }else{
                      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                      Maaf, Password anda salah !
                      </div>');
                      redirect(base_url('Utama/loginnya'));
                    }
              }else
              {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                      Maaf, Akun anda tidak aktif !
                      </div>');
                      redirect(base_url('Utama/loginnya'));
              }
		  }
			else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
              Maaf, Data tidak terdaftar !
              </div>');
              redirect(base_url('Utama/loginnya'));
          }
		}
	}
	function sejarahnya()
	{
		$data["title"] = 'Sejarah IAI';
		$data['penyambung_tentangiai'] = 'umum/sejarahiai';
		$this->templete2($data);
	}
	function profilnya()
	{
		$data["title"] = 'Profil IAI Sumatera Selatan';
		$data['penyambung_tentangiai'] = 'umum/profiliai';
		$this->templete2($data);
	}
	function visimisinya()
	{
		$data["title"] = 'Visi & Misi IAI ';
		$data['penyambung_tentangiai'] = 'umum/visimisiiai';
		$this->templete2($data);
	}
	function strukturnya()
	{
		$data["title"] = 'Struktur Organisasi IAI Sumatera Selatan';
		$data['penyambung_tentangiai'] = 'umum/strukturiai';
		$this->templete2($data);
	}
	function manajemennya()
	{
		$data["title"] = 'Manajemen Eksekutif IAI Sumsel';
		$data['penyambung_tentangiai'] = 'umum/manajemeniai';
		$this->templete2($data);
	}

	function kontaknya()
	{
		$data["title"] = 'Kontak Kami';
		$data['penyambung_kontak'] = 'umum/kontakiai';
		$this->templete3($data);
	}
	function upcomingeventnya()
	{
		$data["title"] = 'Up Coming Event';
		$data['penyambung_kontak'] = 'umum/upcomingevent';
		$data["upcoming"] = $this->db->get('upcoming');
		$this->templete3($data);
	}
		function pplnya()
	{
		$data["title"] = 'Pendidikan Profesional Berkelanjutan';
		$data['penyambung_kontak'] = 'umum/ppl';
		$this->templete3($data);
	}
	function kursusnya()
	{
		$data["title"] = 'Kursus/Pelatihan';
		$data['penyambung4'] = 'umum/kursus';
		$data['kursus'] = $this->db->get_where('kursus' , ['tipe' => 'kursus']);
		$this->templete4($data);
	}
	function seminarnya()
	{
		$data["title"] = 'Seminar/PPL';
		$data['penyambung4'] = 'umum/seminar';
		$data['kursus'] = $this->db->get_where('kursus' , ['tipe' => 'seminar']);
		$this->templete4($data);
	}
	function inhousenya()
	{
		$data["title"] = 'In House Training';
		$data['penyambung4'] = 'umum/inhouse';
		$this->templete4($data);
	}
	function detail_kursusnya($id)
	{
		$data["title"] = 'Detail';
		$data['penyambung5'] = 'umum/detailkursus';
		$data['kursus'] = $this->db->get_where('kursus' , ['id_kegiatan' => $id]);
		$this->templete5($data);
	}
	function detail_seminarnya($id)
	{
		$data["title"] = 'Detail';
		$data['penyambung6'] = 'umum/detailseminar';
		$data['kursus'] = $this->db->get_where('kursus' , ['id_kegiatan' => $id]);
		$this->templete6($data);
	}
	function keanggotaannya()
	{
		$data["title"] = 'Keanggotaan';
		$data['penyambung_kontak'] = 'umum/keanggotaan';
		$this->templete3($data);
	}
	function konsultasinya()
	{
		$data["title"] = 'Konsultasi & Pendampingan';
		$data['penyambung_kontak'] = 'umum/konsultasi';
		$this->templete3($data);
	}
	function galerinya()
	{
		$data["title"] = 'Galeri IAI Sumatera Selatan';
		$data['penyambung_kontak'] = 'umum/galeri';
		$this->db->order_by('tanggal', 'DESC');
		$data["gambar"] = $this->db->get('galeri');
		$this->templete3($data);
	}
	function detail_galerinya()
	{
		$data["title"] = 'Detail Album';
		$data['penyambung9'] = 'umum/detailgaleri';
		$this->templete9($data);
	}
	function sertifikasinya()
	{
		$data["title"] = 'Sertifikasi';
		$data['penyambung_kontak'] = 'umum/sertifikasi';
		$this->templete3($data);
	}
	function beritanya()
	{
		$data["title"] = 'Berita';
		$this->db->order_by('berita_tanggal', 'DESC');
		$data["berita"] = $this->db->get('tbl_berita');
		$data['penyambung7'] = 'umum/berita';
		$this->templete7($data);
	}
	function event_beritanya()
	{
		$data["title"] = 'Event IAI Sumsel';
		$this->db->where('berita_kategori','Event');
		$this->db->order_by('berita_tanggal', 'DESC');
		$data["berita"] = $this->db->get('tbl_berita');
		$data['penyambung8'] = 'umum/berita';
		$this->templete8($data);
	}
	function laporan_beritanya()
	{
		$data["title"] = 'Laporan Utama IAI Sumsel';
		$this->db->where('berita_kategori','Laporan');
		$this->db->order_by('berita_tanggal', 'DESC');
		$data["berita"] = $this->db->get('tbl_berita');
		$data['penyambung8'] = 'umum/berita';
		$this->templete8($data);
	}
	function cariberita()
	{
		$data["title"] = 'Berita';
		$cari = $this->input->post('cari');
		$this->db->like('berita_judul', $cari);
		$this->db->order_by('berita_tanggal', 'DESC');
		$data["berita"] = $this->db->get('tbl_berita');
		$data['penyambung7'] = 'umum/berita';
		$this->templete7($data);
	}
	function cari_berita()
	{
		$query = strip_tags(htmlspecialchars($this->input->get('cari',TRUE),ENT_QUOTES));
		$result = $this->model->pencarianku($query);
		if ($result->num_rows() > 0) {
			$data['data'] = $result;
			$data['judul']= 'Hasil Pencarian Kata '.' "'.$query.'"';
			$data['paragrafnya']= ' ';
		}else{
			$data['data'] = $result;
			$data['judul']= 'Hasil Pencarian Kata '.' "'.$query.'"';
			$data['paragrafnya']= 'Maaf kata yang Anda cari tidak dapat kami temukan';
		}
		$data["title"] = 'Hasil Pencarian Berita';
		$data['penyambung10'] = 'umum/hasil_pencarian';
		//$data['data'] = $result; //untuk nampung isi si model
		$this->templete12($data);
	}


	function detail_beritanya($id)
	{
		$data["title"] = 'Detail Berita';
		$data['berita'] = $this->db->get_where('tbl_berita',['berita_id' => $id])->row_array();
		$data['penyambung10'] = 'umum/detailberita';
		$this->templete12($data);
	}
	function jurnalnya()
	{
		$data["title"] = 'E-Journal IAI Sumatera Selatan';
		$this->db->order_by('date_uploaded', 'DESC');
		$data["jurnal"] = $this->db->get('jurnal');
		$data['penyambung_kontak'] = 'umum/jurnal';
		$this->templete3($data);
	}
	function interestnya()
	{
		$data["title"] = 'Interest Area IAI Sumatera Selatan';
		$data['penyambung_interest'] = 'umum/interest';
		$this->templete10($data);
	}

	function logout()
	{
		 $this->session->sess_destroy();
         redirect(base_url('Utama/loginnya'));
	}
	function registerkursus()
	{
		$this->form_validation->set_rules('email','Email','required|trim|valid_email',[
				'is_unique' => 'This Email Has Already Registered !'
		]);
		if($this->form_validation->run() == false){
		$data["title"] = 'Register Course';
		$data['kegiatan'] = $this->model->get_kegiatan()->result();
		$this->load->view('umum/registerkursus',$data);
		}
		else{
			$this->save_register();
		}
	}
	function get_sub_kegiatan()
	{
		$jenis_kegiatan = $this->input->post('id',TRUE);
    $data = $this->model->get_sub_kegiatan($jenis_kegiatan)->result();
    echo json_encode($data);
	}
	function biaya()
	{
		$data = $this->model->get_kursus()->result();
    echo json_encode($data);
	}

	function save_register()
	{
		$config['upload_path'] = './assets/ktp/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    if($_FILES['file_id']['type'] != 'image/jpeg' && $_FILES['file_id']['type'] != 'image/png' &&  $_FILES['file_id']['type'] != 'image/jpg' && $_FILES['file_id']['type'] != 'text/pdf' ){
        	$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
 			Format file foto ktp tidak didukung !
			</div>');
            redirect(base_url('Utama/registerkursus'));    
        
    }
    else{
        if(!empty($_FILES['file_id']['name']))
        {
            if ($this->upload->do_upload('file_id'))
            {
                $gbr = $this->upload->data();
                $file_id=$gbr['file_name']; //Mengambil file name dari gambar yang diupload
    				}
    				else
    				{
                echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
            }
        }
    		else
    		{
    			echo "Gagal, gambar belum di pilih";
    		}
        	$config['upload_path'] = './assets/bukti/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
    		$this->upload->initialize($config);
    		
    		if($_FILES['file_bukti']['type'] != 'image/jpeg' && $_FILES['file_bukti']['type'] != 'image/png' &&  $_FILES['file_bukti']['type'] != 'image/jpg' && $_FILES['file_bukti']['type'] != 'text/pdf' ){
        	$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
 			Format file foto bukti tidak didukung !
			</div>');
            redirect(base_url('Utama/registerkursus'));    
        
    }
    else{
    		if(!empty($_FILES['file_bukti']['name']))
    		{
    			if ($this->upload->do_upload('file_bukti'))
    			{
    					$gbr = $this->upload->data();
    					$file_bukti=$gbr['file_name']; //Mengambil file name dari gambar yang diupload
    			}
    			else
    			{
    					echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
    			}
    		}
    		else
    		{
    			echo "Gagal, gambar belum di pilih";
    		}
    		$kategori=$this->input->post('kategori');
    		$course=$this->input->post('course');
    		$golongan=$this->input->post('course_member');
    		$price=$this->input->post('price');
    		$nama=$this->input->post('nama');
    		$email=$this->input->post('email');
    		$tempat_lahir=$this->input->post('tempat_lahir');
    		$tanggal_lahir=$this->input->post('tanggal_lahir');
    		$alamat_rumah=$this->input->post('alamat_rumah');
    		$handphone=$this->input->post('handphone');
    		$nama_institusi=$this->input->post('nama_institusi');
    		$alamat_institusi=$this->input->post('alamat_institusi');
    		$date_created = time();
    		$this->model->simpan_registrasi($file_id,$file_bukti,$kategori,$course,$golongan,$price,$nama,$email,$tempat_lahir,$tanggal_lahir,$alamat_rumah,$handphone,$nama_institusi,$alamat_institusi,$date_created );
    
    			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
     			 Selamat, akun anda telah berhasil diajukan. Tunggu email konfirmasi dari admin !
    			</div>');
    		redirect('utama/loginnya');
    }
    }
	}
	function materinya()
	{
		$data["title"] = 'Materi Course IAI Sumatera Selatan';
		$this->db->order_by('tanggal_upload', 'DESC');
		$data['materi'] = $this->db->get("materi");
		$data['penyambungdownload'] = 'umum/materi';
		$this->templete11($data);
	}
	function materi_kursus()
	{
		$data["title"] = 'Materi Course IAI Sumatera Selatan';
		$this->db->order_by('tanggal_upload', 'DESC');
		$data['kursus'] = $this->db->get("materi where kategori='kursus'");
		$data['penyambungdownload'] = 'umum/materi_kursus';
		$this->templete11($data);
	}
	function materi_seminar()
	{
		$data["title"] = 'Materi Course IAI Sumatera Selatan';
		$this->db->order_by('tanggal_upload', 'DESC');
		$data['seminar'] = $this->db->get("materi where kategori='seminar'");
		$data['penyambungdownload'] = 'umum/materi_seminar';
		$this->templete11($data);
	}
	function materi_sertifikasi()
	{
		$data["title"] = 'Materi Course IAI Sumatera Selatan';
		$this->db->order_by('tanggal_upload', 'DESC');
		$data['sertifikasi'] = $this->db->get("materi where kategori='sertifikasi'");
		$data['penyambungdownload'] = 'umum/materi_sertifikasi';
		$this->templete11($data);
	}


}

/* End of file Utama.php */
/* Location: ./application/controllers/Utama.php */
