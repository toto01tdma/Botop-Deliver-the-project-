<?php
require_once("../../includes/config.php");
$database_obj = new Database();
$database_obj->get_session_start();
$pdo = $database_obj->get_var_connect();

if(!isset($_SESSION["user"])){
  exit();
}

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$activeWorksheet = $spreadsheet->getActiveSheet();

$columnCharacter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O');
$columnName = array('#', 'รหัสสินค้า', 'ชื่อสินค้า', 'ราคา');

//Set หัว Column
$rowCell=1;
$c=0;
foreach ($columnName as $cname) {
	$activeWorksheet->setCellValue($columnCharacter[$c].$rowCell, $cname);
	$c++;
}
foreach ($activeWorksheet->getColumnIterator() as $column) {
	$activeWorksheet->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
}

$stmt = $pdo->prepare("SELECT * FROM products");
$get_pd = $database_obj->qrySql($stmt);

$rowCell=2;
foreach($get_pd["data"] AS $pd){
	$activeWorksheet->setCellValue("A".$rowCell, ($rowCell-1));
	$activeWorksheet->setCellValue("B".$rowCell, $pd["pd_id"]);
	$activeWorksheet->setCellValue("C".$rowCell, $pd["pd_name"]);
    $activeWorksheet->setCellValue("D".$rowCell, $pd["pd_price"]);
    $rowCell += 1;
}


//ตั้งชื่อไฟล์
// $time = date("H:i:s");
// $date = date("Y-m-d");
// list($h,$i,$s) = explode(":",$time);
// $file_name = "shipping_(".$date."_".$h."_".$i."_".$s.").xlsx";
$file_name = "products.xlsx";
$writer = new Xlsx($spreadsheet);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'. urlencode($file_name).'"');
$writer->save('php://output');
exit();

?>
