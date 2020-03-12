<?php
// Load file koneksi.php
require_once 'PHPExcel/PHPExcel.php';
// Panggil class PHPExcel nya
$excel = new PHPExcel();
// Settingan awal file excel
$excel->getProperties()->setCreator('IAI SUMSEL')
             ->setLastModifiedBy('IAI SUMSEL')
             ->setTitle("Data Semua Member")
             ->setSubject("Siswa")
             ->setDescription("Laporan Semua Data Siswa")
             ->setKeywords("Data Siswa");
// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
$style_col = array(
  'font' => array('bold' => true), // Set font nya jadi bold
  'alignment' => array(
    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
  ),
  'borders' => array(
    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
  )
);
// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
$style_row = array(
  'alignment' => array(
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
  ),
  'borders' => array(
    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
  )
);
$excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA SISWA IAISUMSEL"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('A1:T1'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(12); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1


// Buat header tabel nya pada baris ke 3
$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('B3', "ID"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('D3', "EMAIL");
$excel->setActiveSheetIndex(0)->setCellValue('E3', "TEMPAT LAHIR");
$excel->setActiveSheetIndex(0)->setCellValue('F3', "TANGGAL LAHIR");
$excel->setActiveSheetIndex(0)->setCellValue('G3', "ALAMAT RUMAH");
$excel->setActiveSheetIndex(0)->setCellValue('H3', "HANDPHONE");
$excel->setActiveSheetIndex(0)->setCellValue('I3', "NAMA INSTANSI");
$excel->setActiveSheetIndex(0)->setCellValue('J3', "ALAMAT INSTANSI");
$excel->setActiveSheetIndex(0)->setCellValue('K3', "PASSWORD");
$excel->setActiveSheetIndex(0)->setCellValue('L3', "KATEGORI");
$excel->setActiveSheetIndex(0)->setCellValue('M3', "COURSE");
$excel->setActiveSheetIndex(0)->setCellValue('N3', "GOLONGAN");
$excel->setActiveSheetIndex(0)->setCellValue('O3', "BIAYA");
$excel->setActiveSheetIndex(0)->setCellValue('P3', "ID CARD");
$excel->setActiveSheetIndex(0)->setCellValue('Q3', "IS ACTIVE");
$excel->setActiveSheetIndex(0)->setCellValue('R3', "BUKTI PEMBAYARAN");
$excel->setActiveSheetIndex(0)->setCellValue('S3', "DATE CREATED");
$excel->setActiveSheetIndex(0)->setCellValue('T3', "DATE ACTIVED");

// Apply style header yang telah kita buat tadi ke masing-masing kolom header
$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);

$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);

$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);

$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);

// Set height baris ke 1, 2 dan 3
$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
// Buat query untuk menampilkan semua data siswa
$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
foreach($member->result() as $u){ // Ambil semua data dari hasil eksekusi $sql
  $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
  $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $u->id);
  $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $u->nama);
  $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $u->email);
  $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $u->tempat_lahir);
  $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $u->tanggal_lahir);
  $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $u->alamat_rumah);
  $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $u->handphone);
  $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $u->nama_institusi);
  $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $u->alamat_institusi);
  $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $u->password);
  $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $u->kategori);
  $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $u->course);
  $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $u->golongan);
  $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $u->biaya);
  $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $u->id_card);
  $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $u->is_active);
  $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $u->bukti_pembayaran);
  $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $u->date_created);
  $excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $u->date_actived);
  
  // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
  $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
  
  $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
  
  $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
  
  $excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
  
  $no++; // Tambah 1 setiap kali looping
  $numrow++; // Tambah 1 setiap kali looping
}
// Set width kolom
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('J')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('K')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('L')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('M')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('N')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('O')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('P')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('R')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('S')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('T')->setWidth(30); // Set width kolom F


// Set orientasi kertas jadi LANDSCAPE
$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
// Set judul file excel nya
$excel->getActiveSheet(0)->setTitle("Laporan Data Transaksi");
$excel->setActiveSheetIndex(0);
// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Data Siswa.xlsx"'); // Set nama file excel nya
header('Cache-Control: max-age=0');
$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$write->save('php://output');
?>