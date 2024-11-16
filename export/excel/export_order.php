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

$columnCharacter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$columnName = array('#', 'วันที่สั่งซื้อ', 'ชื่อ', 'ค่าสินค้ารวม', 'ค่าขนส่ง', 'ยอดรวม', 'จังหวัด', 'อำเภอ', 'ตำบล', 'เลขไปรษณีย์', 'รายละเอียดที่อยู่', 'สินค้า', 'จำนวนสินค้า', 'ราคา');

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

$stmt = $pdo->prepare("SELECT * FROM orders WHERE NOT od_status IN (1)");
$get = $database_obj->qrySql($stmt);

$rowCell=2;
$index_table = 1;
foreach($get["data"] AS $od){
	$stmt = $pdo->prepare("SELECT order_lists.*, products.pd_name FROM order_lists INNER JOIN products ON products.pd_id = order_lists.pd_id WHERE od_id = :od_id");
	$stmt->bindValue(':od_id', $od["od_id"], PDO::PARAM_INT);
	$get_odl = $database_obj->qrySql($stmt);
	$order_sum = 0;
	foreach($get_odl["data"] AS $odl){
		$order_sum += ($odl["odl_price"] * $odl["odl_quantity"]);
	}
	
	$activeWorksheet->setCellValue("A".$rowCell, $index_table);
	$activeWorksheet->setCellValue("B".$rowCell, $od["od_date"]);
	$activeWorksheet->setCellValue("C".$rowCell, $od["od_user_name"]);
    $activeWorksheet->setCellValue("D".$rowCell, $order_sum);
	$activeWorksheet->setCellValue("E".$rowCell, $od["od_freight"]);
	$activeWorksheet->setCellValue("F".$rowCell, ($order_sum + $od["od_freight"]));
	$activeWorksheet->setCellValue("G".$rowCell, $od["od_province"]);
	$activeWorksheet->setCellValue("H".$rowCell, $od["od_amphur"]);
	$activeWorksheet->setCellValue("I".$rowCell, $od["od_tumbol"]);
	$activeWorksheet->setCellValue("J".$rowCell, $od["od_zipcode"]);
	$activeWorksheet->setCellValue("K".$rowCell, $od["od_address"]);
	$index_odl = 1;
	foreach($get_odl["data"] AS $odl){
		$activeWorksheet->setCellValue("L".$rowCell, $index_odl.") ".$odl["pd_name"]);
		$activeWorksheet->setCellValue("M".$rowCell, $odl["odl_quantity"]);
		$activeWorksheet->setCellValue("N".$rowCell, $odl["odl_price"]);
		$index_odl += 1;
		$rowCell += 1;
	}
	$index_table += 1;
}


//ตั้งชื่อไฟล์
$time = date("H:i:s");
$date = date("Y-m-d");
list($h,$i,$s) = explode(":",$time);
$file_name = "order_(".$date."_".$h."_".$i."_".$s.").xlsx";
$writer = new Xlsx($spreadsheet);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'. urlencode($file_name).'"');
$writer->save('php://output');
exit();

?>
