<?php
include('path.php');
include($ROOTPATH.'/app/database/db.php');

$order_id = $_GET['order_no'];
$item = selectOrder('order_table', ['order_no' => $order_id]);
require('fpdf/fpdf.php');
$header = array('Item Name', 'Quantity', 'Rate', 'Amount');
class PDF extends FPDF{

    // Simple table
    function BasicTable($header, $data)
    {
        // Header
        foreach($header as $col)
            $this->Cell(40,7,$col,1);
        $this->Ln();
        // Data
        foreach($data as $row)
        {
            foreach($row as $col)
                $this->Cell(40,6,$col,1);
            $this->Ln();
        }
    }
}


$pdf = new PDF();


// Data loading

/**$info = array();
foreach ($data as $line){
$info[] = explode(' ',trim($line));

} */
//printD($item);

//printD($data);
//printD($info);
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->BasicTable($header,$item);
$pdf->Output('D', $order_id.'_Order.pdf');
exit();
header("Location: order_form.php");