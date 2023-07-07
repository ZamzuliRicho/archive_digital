<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/Classes/PHPExcel.php';

class ExportController extends CI_Controller {

    public function exportsm() {
        // Load model atau ambil data dari tabel yang ingin diekspor
        $this->load->model('Model_surat');
        $data['results'] = $this->Model_surat->getAll();
    
        // Buat objek PHPExcel
        $objPHPExcel = new PHPExcel();
    
        // Set judul sheet
        $objPHPExcel->getActiveSheet()->setTitle('Data Export Surat Masuk');
    
        // Set header kolom
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Nomor Surat');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Pengirim');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Perihal');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Tanggal Diterima');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Keterangan');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Klasifikasi Primer');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Klasifikasi Skunder');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', 'Klasifikasi Tersier');
        $objPHPExcel->getActiveSheet()->setCellValue('I1', 'Jenis Retensi');
        $objPHPExcel->getActiveSheet()->setCellValue('J1', 'Jadwal Retensi Aktif');
        $objPHPExcel->getActiveSheet()->setCellValue('K1', 'Jadwal Retensi Inaktif');
        $objPHPExcel->getActiveSheet()->setCellValue('L1', 'Tingkat Perkembangan');
        $objPHPExcel->getActiveSheet()->setCellValue('M1', 'Kategori');
        $objPHPExcel->getActiveSheet()->setCellValue('N1', 'Lokasi Berkas');
        // ... tambahkan kolom lainnya sesuai kebutuhan
    
        // Set data baris
        $no = 1;
        $row = 2;
        foreach ($data['results'] as $result) {
        $objPHPExcel->getActiveSheet()->setCellValue('A'. $row, $result->no_suratmasuk);
        $objPHPExcel->getActiveSheet()->setCellValue('B'. $row, $result->asal_surat);
        $objPHPExcel->getActiveSheet()->setCellValue('C'. $row, $result->perihal);
        $objPHPExcel->getActiveSheet()->setCellValue('D'. $row, $result->tanggal_diterima);
        $objPHPExcel->getActiveSheet()->setCellValue('E'. $row, $result->keterangan);
        $objPHPExcel->getActiveSheet()->setCellValue('F'. $row, $result->judul_indeks);
        $objPHPExcel->getActiveSheet()->setCellValue('G'. $row, $result->id_sekunder);
        $objPHPExcel->getActiveSheet()->setCellValue('H'. $row, $result->id_tersier);
        $objPHPExcel->getActiveSheet()->setCellValue('I'. $row, $result->jenis_retensi);
        $objPHPExcel->getActiveSheet()->setCellValue('J'. $row, $result->jadwal_retensi_aktif);
        $objPHPExcel->getActiveSheet()->setCellValue('K'. $row, $result->jadwal_retensi_inaktif);
        $objPHPExcel->getActiveSheet()->setCellValue('L'. $row, $result->tingkat_perkembangan);
        $objPHPExcel->getActiveSheet()->setCellValue('M'. $row, $result->kategori_surat);
        $objPHPExcel->getActiveSheet()->setCellValue('N'. $row, $result->lokasi_berkas);
        
        $row++;
        }
      
        // Simpan file Excel
        $config['upload_path']          = 'vendor/files/suratmasuk/';
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $filename = 'data_export_surat_masuk.xls'; // Nama file ekspor
        $objWriter->save($filename);
      
        // Set header untuk mengunduh file
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
      
        // Tampilkan file yang akan diunduh
        readfile($filename);
        exit();
    }

    public function exportsk() {
      // Load model atau ambil data dari tabel yang ingin diekspor
      $this->load->model('Model_surat');
      $data['results'] = $this->Model_surat->getAllsk();
  
      // Buat objek PHPExcel
      $objPHPExcel = new PHPExcel();
  
      // Set judul sheet
      $objPHPExcel->getActiveSheet()->setTitle('Data Export Surat Keluar');
  
      // Set header kolom
      // $objPHPExcel->getActiveSheet()->ssetCellValue('A1', 'No');
      $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Nomor Surat');
      $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Penerima');
      $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Perihal');
      $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Tanggal Dikirim');
      $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Keterangan');
      $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Klasifikasi Primer');
      $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Klasifikasi Skunder');
      $objPHPExcel->getActiveSheet()->setCellValue('H1', 'Klasifikasi Tersier');
      $objPHPExcel->getActiveSheet()->setCellValue('I1', 'Jenis Retensi');
      $objPHPExcel->getActiveSheet()->setCellValue('J1', 'Jadwal Retensi Aktif');
      $objPHPExcel->getActiveSheet()->setCellValue('K1', 'Jadwal Retensi Inaktif');
      $objPHPExcel->getActiveSheet()->setCellValue('L1', 'Tingkat Perkembangan');
      $objPHPExcel->getActiveSheet()->setCellValue('M1', 'Kategori');
      $objPHPExcel->getActiveSheet()->setCellValue('N1', 'Lokasi Berkas');
      // ... tambahkan kolom lainnya sesuai kebutuhan
  
      // Set data baris
    
      $row = 2;
      foreach ($data['results'] as $result) {
      // $objPHPExcel->getActiveSheet()->setCellValue('A'. $no++);
      $objPHPExcel->getActiveSheet()->setCellValue('A'. $row, $result->no_suratkeluar);
      $objPHPExcel->getActiveSheet()->setCellValue('B'. $row, $result->tujuan);
      $objPHPExcel->getActiveSheet()->setCellValue('C'. $row, $result->perihal);
      $objPHPExcel->getActiveSheet()->setCellValue('D'. $row, $result->tanggal_keluar);
      $objPHPExcel->getActiveSheet()->setCellValue('E'. $row, $result->keterangan);
      $objPHPExcel->getActiveSheet()->setCellValue('F'. $row, $result->judul_indeks);
      $objPHPExcel->getActiveSheet()->setCellValue('G'. $row, $result->id_sekunder);
      $objPHPExcel->getActiveSheet()->setCellValue('H'. $row, $result->id_tersier);
      $objPHPExcel->getActiveSheet()->setCellValue('I'. $row, $result->jenis_retensi_sk);
      $objPHPExcel->getActiveSheet()->setCellValue('J'. $row, $result->jadwal_retensi_aktif_sk);
      $objPHPExcel->getActiveSheet()->setCellValue('K'. $row, $result->jadwal_retensi_inaktif_sk);
      $objPHPExcel->getActiveSheet()->setCellValue('L'. $row, $result->tingkat_perkembangan_sk);
      $objPHPExcel->getActiveSheet()->setCellValue('M'. $row, $result->kategori_surat_sk);
      $objPHPExcel->getActiveSheet()->setCellValue('N'. $row, $result->lokasi_berkas);
      
      $row++;
      }
    
      // Simpan file Excel
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
      $filename = 'data_export_surat_keluar.xls'; // Nama file ekspor
      $objWriter->save($filename);
    
      // Set header untuk mengunduh file
      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="'.$filename.'"');
      header('Cache-Control: max-age=0');
    
      // Tampilkan file yang akan diunduh
      readfile($filename);
      exit();
  }

}
