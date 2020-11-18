<?php
Class Laporan_barang extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Laporan Barang',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Gudang ATK YIKY',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'ID',1,0);
        $pdf->Cell(85,6,'NAMA',1,0);
        $pdf->Cell(27,6,'MERK',1,0);
        $pdf->Cell(85,6,'JENIS',1,0);
        $pdf->Cell(27,6,'SATUAN',1,0);
        $pdf->Cell(85,6,'QTY',1,0);
        $pdf->Cell(27,6,'HARGA',1,1);
        // $pdf->Cell(25,6,'TANGGAL LHR',1,1);
        $pdf->SetFont('Arial','',10);
        $tbl_brng = $this->db->get('tbl_brng')->result();
        foreach ($tbl_brng as $row){
            $pdf->Cell(20,6,$row->id_bar,1,0);
            $pdf->Cell(85,6,$row->nama_bar,1,0);
            $pdf->Cell(20,6,$row->merk_bar,1,0);
            $pdf->Cell(85,6,$row->jenis_bar,1,0);
            $pdf->Cell(20,6,$row->satuan_bar,1,0);
            $pdf->Cell(20,6,$row->qty,1,0);  
            $pdf->Cell(85,6,$row->harga_bar,1,1);
        }
        $pdf->Output();
    }
}