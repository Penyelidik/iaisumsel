<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('email');
		$this->load->model('model');
     //   $this->load->library('MyPHPMailer'); 
		 if (!$this->session->userdata('nama_admin')) {

			redirect(base_url('Utama'));
		}

	}

	public function index()
	{
		$data['title'] = "List Request Member";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		// $this->db->get_where('member' , ['is_active' => '0']);
		 $this->db->select('*');
		 $this->db->from('member');
		 $this->db->where('is_active','0');
		 $this->db->join('kursus','member.course = kursus.id_kegiatan');
		 $data['member'] = $this->db->get();
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/index' );
		$this->load->view('Admin/Footer',FALSE);

	}
	public function hapus_member_kursus($id,$idkursus){
		$data = array(
        'is_active' => '2'
		);
		$this->db->where('id', $id);
		$this->db->update('member', $data);
		$this->db->set('jumlah_peserta','jumlah_peserta - 1 ',FALSE);
		$this->db->where('id_kegiatan', $idkursus);
		$this->db->update('kursus');
		redirect('Admin/list_kursus');
	}
	public function cari_email_verif()
	{
		$email = $this->input->post('cari-email');
		$data['title'] = "List Request Member";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->db->where('is_active','0');
		$this->db->like('email' , $email);
		 $this->db->join('kursus','member.course = kursus.id_kegiatan');
		$data['member'] = $this->db->get('member');
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/index');
		$this->load->view('Admin/Footer',FALSE);
	}
    public function hubungi_user($id){
        $this->db->select('email');
		$this->db->where('id', $id);
		$email = $this->db->get('member')->row();
		$email =  $email->email;
		$this->send_fail($email);
		redirect('Admin');
    }
	public function aktifkan_user($id,$id_kursus){
		$string = $this->_generateRandomString();
		$this->db->select('email');
		$this->db->where('id', $id);
		$email = $this->db->get('member')->row();
		$email =  $email->email;
		$this->send_email($email,$string);
		$this->db->set('password', $string);
		$this->db->set('is_active', '1', FALSE);
		$this->db->set('date_actived',time());
		$this->db->where('id', $id);
		$this->db->update('member');
		$this->db->set('jumlah_peserta','jumlah_peserta + 1',FALSE);
		$this->db->where('id_kegiatan', $id_kursus);
		$this->db->update('kursus');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
              Akun Berhasil di Aktivasi !
              </div>');
		redirect('Admin');
	}
	public function berita(){
		$data['title'] = "Tulis Berita";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/berita');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function edit_berita($id){
		$data['title'] = "Edit Berita";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['berita'] = $this->db->get_where('tbl_berita' , ['berita_id' =>
		$id]);
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/edit_berita');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function edit_kursus($id){
		$data['title'] = "Edit Kursus";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['kursus'] = $this->db->get_where('kursus' , ['id_kegiatan' =>
		$id]);
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/edit_kursus');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function hapus_berita($id)
	{
		$this->db->where('berita_id', $id);
		$this->db->delete('tbl_berita');
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
              Berita Berhasil Di hapus !
			  </div>');
		redirect(base_url('Admin/list_berita'));
	}
	public function hapus_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('member');
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
              Member Berhasil Di hapus !
			  </div>');
		redirect(base_url('Admin'));
	}
	public function hapus_kursus($id)
	{
		$this->db->where('id_kegiatan', $id);
		$this->db->delete('kursus');
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
              Kursus Berhasil Di hapus !
			  </div>');
		redirect(base_url('Admin/list_kursus'));
	}
	public function hapus_foto($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('galeri');
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
              Foto Berhasil Di hapus !
			  </div>');
		redirect(base_url('Admin/list_galeri'));
	}
	public function hapus_fotogerak($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('fotoberjalan');
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
              Foto Berhasil Di hapus !
			  </div>');
		redirect(base_url('Admin/list_fotogerak'));
	}
	public function hapus_fotopopup($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('fotopopup');
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
              Foto Berhasil Di hapus !
			  </div>');
		redirect(base_url('Admin/list_popup'));
	}
		public function hapus_upcoming($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('upcoming');
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
              Foto Berhasil Di hapus !
			  </div>');
		redirect(base_url('Admin/list_upcoming'));
	}
	public function hapus_jurnal($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('jurnal');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
              Berita Berhasil Di hapus !
			  </div>');
		redirect(base_url('Admin/list_jurnal'));
	}

	public function list_berita(){
		$data['title'] = "List Berita";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['berita'] = $this->db->get('tbl_berita');
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/list_berita');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function export_excel($id){
		$this->db->where('id_kegiatan' , $id);
		$nama_kursus= $this->db->get('kursus');
		foreach($nama_kursus->result() as $u){
		$data['title'] = "List Anggota  $u->nama_kegiatan" ;
		$data['nama'] = $u->nama_kegiatan;
		}
		$kelas= $this->db->get_where('kursus',['id_kegiatan' =>$id ] );
		foreach($kelas->result() as $k){

		$data['kelas'] = $u->kelas;
		}
		$data['member'] = $this->db->get_where('member' , ['course' => $id , 'is_active' => '1']);
		$this->load->view('Admin/excelku',$data);
		//redirect('Admin');

	}
		public function exportm_excel(){
		$data['member']=$this->db->get('member');
		
		$this->load->view('Admin/excelku_galo',$data);
		//redirect('Admin');

	}
	public function anggota_kursus($id){
		$this->db->where('id_kegiatan' , $id);
		$nama_kursus= $this->db->get('kursus');


		foreach($nama_kursus->result() as $u){
		$data['title'] = "List Anggota  $u->nama_kegiatan" ;

		}

		$data['idkursus'] = $id;
		$data['nomor'] = $this->db->get_where('kursus' , ['id_kegiatan' => $id])->row_array();
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['member'] = $this->db->get_where('member' , ['course' => $id , 'is_active' => '1']);
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/list_member_course');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function buat_kursus(){
		$data['title'] = "Buat Kursus	";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/buat_kursus');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function buat_upcoming(){
		$data['title'] = "Buat Upcoming Event	";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/buat_upcoming');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function upload_upcoming(){
		$config['upload_path']          = './assets/upcoming/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){

			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Gambar Gagal di Post !
				</div>');
			redirect('Admin/buat_upcoming');
		}else{
					$nama_file = $this->upload->data();
					$config['image_library']='gd2';
					$config['source_image']='./assets/upcoming/'.$nama_file['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '50%';
                    $config['width']= 960;
                    $config['height']= 319;
					$config['new_image']= './assets/upcoming/'.$nama_file['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

			$data = array('upload_data' => $this->upload->data());

			$namafile= $nama_file['file_name'];
			$data = array(
			'foto' => $namafile,
			'tanggal' => time(),
			);

			$this->db->insert('upcoming', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Gambar Berhasil di Post !
				</div>');
			redirect(base_url('Admin/buat_upcoming'));

		}
	}
	public function buat_kursus_baru(){
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$deskripsi = $this->input->post('deskripsi');
		$kelas = $this->input->post('kelas');
		$tipe = $this->input->post('tipe');
		$sesi = $this->input->post('sesi');
		$periode = $this->input->post('periode');
		$waktu = $this->input->post('waktu');
		$kuota = $this->input->post('kuota');
		$lokasi = $this->input->post('lokasi');
		$anggota = $this->input->post('anggota');
		$umum = $this->input->post('umum');

		$data = array(
		'nama_kegiatan' => $nama_kegiatan,
		'deskripsi' => $deskripsi,
        'kelas' => $kelas,
		'tipe' => $tipe,
		'sesi' => $sesi,
        'periode' => $periode,
		'waktu' => $waktu,
		'jumlah_peserta' => 0,
		'kuota' => $kuota,
        'lokasi' => $lokasi,
        'anggota' => $anggota,
        'umum' => $umum
		);

		$this->db->insert('kursus', $data);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
              Kursus Berhasil ditambahkan !
              </div>');
		redirect(base_url('Admin/list_kursus'));
	}
		public function list_kursus(){
		$data['title'] = "List Kursus";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['kursus'] = $this->db->get('kursus');
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/listkursus');
		$this->load->view('Admin/Footer',FALSE);
	}
		public function list_popup(){
		$data['title'] = "List Foto Pop Up";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['foto'] = $this->db->get('fotopopup');
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/list_popup');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function list_fotogerak(){
		$data['title'] = "List Foto Halaman Utama";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['foto'] = $this->db->get('fotoberjalan');
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/list_fotogerak');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function list_galeri(){
		$data['title'] = "List Galeri";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['foto'] = $this->db->get('galeri');
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/list_galeri');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function list_upcoming(){
		$data['title'] = "List Upcoming";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['upcoming'] = $this->db->get('upcoming');
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/list_upcoming');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function list_jurnal(){
		$data['title'] = "List Jurnal";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->db->order_by('date_uploaded', 'DESC');
		$data['jurnal'] = $this->db->get('jurnal');
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/list_jurnal');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function edit_berita_isi($id){
		$berita_judul = $this->input->post('berita_judul');
		$berita_isi = $this->input->post('berita_isi');
		$berita_kategori = $this->input->post('berita_kategori');
		$data = array(
        'berita_judul' => $berita_judul,
        'berita_isi' => $berita_isi,
        'berita_kategori' => $berita_kategori
		);

		$this->db->where('berita_id', $id);
		$this->db->update('tbl_berita', $data);
		redirect(base_url('Admin/list_berita'));
	}
	public function edit_detail_kursus($id){
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$deskripsi = $this->input->post('deskripsi');
		$kelas = $this->input->post('kelas');
		$tipe = $this->input->post('tipe');
		$sesi = $this->input->post('sesi');
		$periode = $this->input->post('periode');
		$waktu = $this->input->post('waktu');
		$jumlahku = $this->input->post('jumlahku');
		$kuota = $this->input->post('kuota');
		$lokasi = $this->input->post('lokasi');
		$anggota = $this->input->post('anggota');
		$umum = $this->input->post('umum');

		$data = array(
		'nama_kegiatan' => $nama_kegiatan,
		'deskripsi' =>$deskripsi,
        'kelas' => $kelas,
		'tipe' => $tipe,
		'sesi' => $sesi,
        'periode' => $periode,
		'waktu' => $waktu,
		'jumlah_peserta' => $jumlahku,
		'kuota' => $kuota,
        'lokasi' => $lokasi,
        'anggota' => $anggota,
        'umum' => $umum
		);

		$this->db->where('id_kegiatan', $id);
		$this->db->update('kursus', $data);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Data Berhasil Diedit !
				</div>');
		redirect(base_url('Admin/list_kursus'));
	}
    public function aksi_upload(){
		$judul= $this->input->post('berita_judul');
		$isi= $this->input->post('berita_isi');
		$berita_kategori = $this->input->post('berita_kategori');

		$config['upload_path']          = './assets/fotoberita/';
		$config['allowed_types']        = '*';
		$config['file_name']            = $judul;

		$config['remove_spaces'] = TRUE;
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			redirect('Admin/list_berita');
		}else{
			$nama_file = $this->upload->data();
					$config['image_library']='gd2';
					$config['source_image']='./assets/fotoberita/'.$nama_file['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;

					$config['new_image']= './assets/fotoberita/'.$nama_file['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

			$data = array('upload_data' => $this->upload->data());

			$namafile= $nama_file['file_name'];
			$data = array(
			'berita_judul' => $judul,
			'berita_isi' => $isi,
			'berita_image' => $namafile,
			'berita_kategori' => $berita_kategori,
			'berita_tanggal' => time(),
			);

			$this->db->insert('tbl_berita', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Berita Berhasil di Post !
				</div>');
			redirect(base_url('Admin/list_berita'));

		}
	}
	public function register_admin()
	{
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[admin.email]',[
				'is_unique' => 'This Email Has Already Registered !'
		]);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
				'matches' => 'Password dont match!',
				'min_length' => 'Password too short!',
		]);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

		if($this->form_validation->run() == false){
		$data['title'] = "Registrasi Admin";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('Admin/Header',$data);
		$this->load->view('Admin/create_admin');
		$this->load->view('Admin/Footer');
		}
		else
		{

			$passwordku = $this->input->post('password1');
			$data = [
					'nama' => htmlspecialchars($this->input->post('nama',true)),
					'email' => htmlspecialchars($this->input->post('email',true)),
					'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
					'is_active' => 1,
					'date_created' => time(),
					];

			$this->send_email($data['email'],$passwordku);
			$this->db->insert('admin',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
 			 Congratulation, your account has been created !
			</div>');
			redirect(base_url('Admin/register_admin'));
		}
	}
	public function galeri(){
		$data['title'] = "Upload foto";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/upload_foto');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function fotoberjalanku(){
		$data['title'] = "Upload foto Halaman Utama";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/upload_foto_berjalan');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function uploadpopup(){
		$data['title'] = "Upload foto Pop Up";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/upload_foto_popup');
		$this->load->view('Admin/Footer',FALSE);
	}

	public function upload_image(){

		$config['upload_path']          = './assets/galeri/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			redirect('Admin/list_galeri');
		}else{
			$nama_file = $this->upload->data();
					$config['image_library']='gd2';
					$config['source_image']='./assets/galeri/'.$nama_file['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;

					$config['new_image']= './assets/galeri/'.$nama_file['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

			$data = array('upload_data' => $this->upload->data());

			$namafile= $nama_file['file_name'];
			$data = array(
			'foto' => $namafile,
			'tanggal' => time(),
			);

			$this->db->insert('galeri', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Gambar Berhasil di Post !
				</div>');
			redirect(base_url('Admin/galeri'));

		}
	}
	public function upload_fotojalan(){

		$config['upload_path']          = './assets/custom/images/fotoberjalan';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			redirect('Admin/list_fotogerak');
		}else{
			$nama_file = $this->upload->data();
					$config['image_library']='gd2';
					$config['source_image']='./assets/custom/images/fotoberjalan/'.$nama_file['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['max_size']     = '3000';
                	$config['quality']= '50%';
                	$config['width']= 3333;
                	$config['height']= 803;
                	$config['new_image']= './assets/custom/images/fotoberjalan/'.$nama_file['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

			$data = array('upload_data' => $this->upload->data());

			$namafile= $nama_file['file_name'];
			$data = array(
			'foto' => $namafile,

			);

			$this->db->insert('fotoberjalan', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Gambar Berhasil di Post !
				</div>');
			redirect(base_url('Admin/list_fotogerak'));

		}
	}
	public function upload_fotopopup(){

		$config['upload_path']          = './assets/custom/images/fotopopup';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			redirect('Admin/list_popup');
		}else{
			$nama_file = $this->upload->data();
					$config['image_library']='gd2';
					$config['source_image']='./assets/custom/images/fotopopup/'.$nama_file['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '50%';
					$config['max_size']     = '3000';

                	$config['new_image']= './assets/custom/images/fotopopup/'.$nama_file['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

			$data = array('upload_data' => $this->upload->data());

			$namafile= $nama_file['file_name'];
			$data = array(
			'foto' => $namafile,

			);

			$this->db->insert('fotopopup', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Gambar Berhasil di Post !
				</div>');
			redirect(base_url('Admin/list_popup'));

		}
	}
	public function jurnal(){
		$data['title'] = "Upload Jurnal";
		$data['user'] = $this->db->get_where('admin' , ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/upload_jurnal');
		$this->load->view('Admin/Footer',FALSE);
	}
	public function upload_jurnalku(){
		$judul = $this->input->post('judul');
		$config['upload_path']          = './assets/jurnal/';
		$config['allowed_types']        = 'pdf';
		$config['file_name']            = $judul;
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Upload Gagal !
				</div>');
			redirect('Admin/jurnal');
		}else{
			$nama_file = $this->upload->data();

			$data = array('upload_data' => $this->upload->data());

			$namafile= $nama_file['file_name'];
			$data = array(
			'nama_jurnal' => $judul,
			'file_name' => $namafile,
			'date_uploaded' => time(),
			);

			$this->db->insert('jurnal', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Jurnal Berhasil di Post !
				</div>');
			redirect(base_url('Admin/jurnal'));

		}
	}

	private function _generateRandomString($length = 6) {
			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
					$randomString .= $characters[rand(0, $charactersLength - 1)];
			}

			return  $randomString;
		}
	function send_email($email,$string){
		
	$config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://no-reply@iaisumsel.or.id',
            'smtp_user' => 'no-reply@iaisumsel.or.id',  // Email gmail
            'smtp_pass'   => 'password123',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('no-reply@iaisumsel.or.id', 'IAI SUMSEL');

        // Email penerima
        $this->email->to($email); // Ganti dengan email tujuan

        
        // Subject email
        $this->email->subject('Password Anda');

        // Isi email
        $this->email->message("Password anda = ".$string);

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            $this->session->set_flashdata('message1','<div class="alert alert-success" role="alert">
				Email berhasil !
				</div>');    } else {
            $this->session->set_flashdata('message1','<div class="alert alert-danger" role="alert">
				Email Gagal dikirim !
				</div>');
           redirect('Admin');
        }
		
	}
	function send_fail($email){
		$config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://no-reply@iaisumsel.or.id',
            'smtp_user' => 'no-reply@iaisumsel.or.id',  // Email gmail
            'smtp_pass'   => 'password123',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('no-reply@iaisumsel.or.id', 'IAI SUMSEL');

        // Email penerima
        $this->email->to($email); // Ganti dengan email tujuan

        
        // Subject email
        $this->email->subject('Request ditolak');

        // Isi email
        $this->email->message("Request anda ditolak, harap hubungi admin IAI Sumsel melalui Whatsapp di halaman Kontak Kami");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            $this->session->set_flashdata('message1','<div class="alert alert-success" role="alert">
				Email berhasil !
				</div>');    } else {
            $this->session->set_flashdata('message1','<div class="alert alert-danger" role="alert">
				Email Gagal dikirim !
				</div>');
           redirect('Admin');
        }
	    
		}
		public function materi(){
			$data['title'] = "Upload Materi";
			$data['kegiatan'] = $this->model->get_kegiatan()->result();
			$data['user'] = $this->db->get_where('admin' , ['email' =>
			$this->session->userdata('email')])->row_array();
			$this->load->view('Admin/Header', $data);
			$this->load->view('Admin/upload_materi');
			$this->load->view('Admin/Footer',FALSE);
		}
		public function upload_materiku(){
			$judul = $this->input->post('judul');
			$kategori = $this->input->post('kategori');
			$config['upload_path']          = './assets/materi/';
			$config['allowed_types']        = 'pdf|doc|docx|ppt|pptx|rar|zip';
			$config['file_name']            = $judul;
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('berkas')){
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					Upload Gagal !
					</div>');
				redirect('Admin/materi');
			}else{
				$nama_file = $this->upload->data();

				$data = array('upload_data' => $this->upload->data());

				$judul= $nama_file['file_name'];
				$data = array(
				'judul' => $judul,
				'kategori' => $kategori,
				);

				$this->db->insert('materi', $data);
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
					Materi Berhasil di Post !
					</div>');
				redirect(base_url('Admin/materi'));

			}
		}

		public function list_materi(){
			$data['title'] = "List Materi";
			$data['user'] = $this->db->get_where('admin' , ['email' =>
			$this->session->userdata('email')])->row_array();
			$this->db->order_by('tanggal_upload', 'DESC');
			$data['kursus'] = $this->db->get("materi where kategori='kursus'");
			$data['seminar'] = $this->db->get("materi where kategori='seminar'");
			$data['sertifikasi'] = $this->db->get("materi where kategori='sertifikasi'");
			$this->load->view('Admin/Header', $data);
			$this->load->view('Admin/list_materi' );
			$this->load->view('Admin/Footer',FALSE);
		}

		public function hapus_materi($id_materi)
	{
		$this->db->where('id_materi', $id_materi);
		$this->db->delete('materi');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
              Materi Berhasil Di hapus !
			  </div>');
		redirect(base_url('Admin/list_materi'));
	}
}
