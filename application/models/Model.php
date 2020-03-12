<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model{

	function get_kegiatan()
	{
		$query = $this->db->get('kegiatan');
		return $query;
	}
	
	function get_sub_kegiatan($jenis_kegiatan)
	{
    return $this->db->query("SELECT id_kegiatan, nama_kegiatan, kelas, waktu, anggota, umum from kursus  where tipe='$jenis_kegiatan' AND jumlah_peserta < kuota ");
	}
	function get_kursus()
	{
		return $this->db->query("SELECT * from kursus WHERE jumlah_peserta < kuota ");
	}
	function simpan_registrasi($file_id,$file_bukti,$kategori,$course,$golongan,$price,$nama,$email,$tempat_lahir,$tanggal_lahir,$alamat_rumah,$handphone,$nama_institusi,$alamat_institusi,$date_created )
	{
		return $this->db->query("insert into member(id_card,bukti_pembayaran,kategori,course,golongan,biaya,nama,email,tempat_lahir,tanggal_lahir,alamat_rumah,handphone,nama_institusi,alamat_institusi,date_created) values ('$file_id','$file_bukti','$kategori','$course','$golongan','$price','$nama','$email','$tempat_lahir','$tanggal_lahir','$alamat_rumah','$handphone','$nama_institusi','$alamat_institusi','$date_created')");
	}
	function pencarianku($query){
    	$result = $this->db->query("SELECT tbl_berita.* FROM tbl_berita
			WHERE berita_judul LIKE '%$query%' LIMIT 12");
    	return $result; 
    }
}
