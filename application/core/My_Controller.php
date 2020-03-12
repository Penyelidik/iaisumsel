<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

	public function templete($data)
	{
		$this->load->view('umum/layout/penyambung_beranda',$data);
	}

	public function templete2($data) //untuk tentang IAI (yang ado nav di sebelah kiri)
	{
		$this->load->view('umum/layout/penyambung_tentangiai',$data);
	}
	public function templete3($data) //untuk yang dak ado nav di sebelah kiri
	{
		$this->load->view('umum/layout/penyambung_kontak',$data);
	}
	public function templete4($data) //untuk jejak (breadcrumb) kursus, seminar, samo inhouse training
	{
		$this->load->view('umum/layout/penyambung4',$data);
	}
	public function templete5($data) //untuk jejak detail kursus
	{
		$this->load->view('umum/layout/penyambung5',$data);
	}
	public function templete6($data) //untuk jejak detail seminar
	{
		$this->load->view('umum/layout/penyambung6',$data);
	}
	public function templete7($data) //untuk berita
	{
		$this->load->view('umum/layout/penyambung7',$data);
	}
	public function templete8($data) //untuk detail berita
	{
		$this->load->view('umum/layout/penyambung8',$data);
	}
	
	public function templete9($data) //untuk detail galeri
	{
		$this->load->view('umum/layout/penyambung9',$data);
	}
	public function templete10($data) //untuk interestt area
	{
		$this->load->view('umum/layout/penyambung_interest',$data);
	}
	public function templete11($data)
	{
		$this->load->view('umum/layout/penyambungdownload',$data);
	}
	public function errorku($data)
	{
		$this->load->view('umum/layout/penyambungerror',$data);
	}
	public function templete12($data) //untuk detail berita
	{
		$this->load->view('umum/layout/penyambung10',$data);
	}
}

/* End of file My_Controller.php */
/* Location: ./application/core/My_Controller.php */