<?php
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetFont('times', 'B', 15);
$pdf->AddPage();
$judul = "Laporan dari tanggal " .$tanggalawal. "sampai " .$tanggalakhir;
$pdf->Cell(0, 5, $judul, 0, 1);
$pdf->Ln();
$pdf->SetFont('times', '', 12);
$pdf->Cell(10, 5, 'No', 1, 0, 'C');
$pdf->Cell(25, 5, 'Tanggal', 1, 0, 'C');
$pdf->Cell(60, 5, 'Keterangan', 1, 0, 'C');
$pdf->Cell(25, 5, 'Pemasukan', 1, 0, 'C');
$pdf->Cell(25, 5, 'Pengeluran', 1, 0, 'C');
$pdf->Cell(25, 5, 'Saldo Akhir', 1, 1, 'C');

$saldo_awal = $this->Transaksi_model->saldo_awal($tanggalawal);
$pdf->SetFont('times', '', 12);
$pdf->Cell(10, 5, '', 1, 0, 'C');
$pdf->Cell(85, 5, 'Saldo Awal sebelum tanggal ' .$tanggalawal,1 ,0, 'C');
$pdf->Cell(25, 5, '', 1, 0, 'C');
$pdf->Cell(25, 5, '', 1, 0, 'C');
$pdf->Cell(25, 5, number_format($saldo_awal), 1, 1, 'R');


$pdf->SetFont('times', '', 11);
$no = 1;
$saldo = 0;
foreach($laporan as $aa){
    $pdf->Cell(10, 5, $no, 1, 0, 'C');
    $pdf->Cell(25, 5, $aa['tanggal'], 1, 0, 'C');
    $pdf->Cell(60, 5, $aa['keterangan'], 1, 0, 'C');
    if($aa['jenis_transaksi']=='Pemasukan'){
        $pdf->Cell(25, 5, number_format($aa['nominal']), 1, 0, 'R');
        $pdf->Cell(25, 5, ' ', 1, 0, 'R');
        
    } else {
        $pdf->Cell(25, 5, ' ', 1, 0, 'R');
        $pdf->Cell(25, 5, number_format($aa['nominal']), 1, 0, 'R');
        
    }
    $saldo = $saldo+$aa['nominal'];
    $pdf->Cell(25, 5, number_format($saldo), 1, 1, 'R');
    $no++;
}
    
$pdf->Output('laporan.pdf', 'I');