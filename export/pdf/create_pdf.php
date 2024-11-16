<?
require_once("../../includes/config.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include_once($_dr_plugin."/composer/vendor/autoload.php");

$file_pdf = "ใบเสนอราคา.pdf";
$file_path = /*$_dr_export_files."/".*/$file_pdf;
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];
$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];
$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        '../../../assets/fonts',
    ]),
    'fontdata' => $fontData + [
        'sarabun' => [
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNew Italic.ttf',
            'B' =>  'THSarabunNew Bold.ttf',
        ]
    ],
]);
ob_start(); // เริ่มต้นบัฟเฟอร์เพื่อจัดเก็บเอกสาร PDF

// ทำการเรียกใช้ไฟล์ PHP ที่ต้องการสร้าง PDF จาก URL โดยตรง
include("test_export_file.php");

$content = ob_get_clean(); // รับเนื้อหาที่อยู่ในบัฟเฟอร์เป็นตัวแปร
$mpdf->WriteHTML($content); // เขียนเนื้อหาที่ได้รับจากบัฟเฟอร์ลงใน PDF
$mpdf->Output($file_path, \Mpdf\Output\Destination::FILE); // บันทึกเอกสาร PDF ลงในไฟล์

header("Content-disposition: attachment; filename=".$file_pdf);
header("Content-type: application/pdf");
readfile($file_path);

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// session_start();
// include_once("vendor/autoload.php");

// $url = "test_export_file.php?data=1";
// $file_pdf = "ใบเสนอราคา.pdf";
// $file_path = /*"../export_file/".*/$file_pdf;
// //$file_img = $wfc_id.'.png';
// $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
// $fontDirs = $defaultConfig['fontDir'];
// $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
// $fontData = $defaultFontConfig['fontdata'];
// $mpdf = new \Mpdf\Mpdf([
//     'fontDir' => array_merge($fontDirs, [
//         '../../../assets/fonts',
//     ]),
//     'fontdata' => $fontData + [
//             'sarabun' => [
//                 'R' => 'THSarabunNew.ttf',
//                 'I' => 'THSarabunNew Italic.ttf',
//                 'B' =>  'THSarabunNew Bold.ttf',
//             ]
//         ],
// ]);
// $mpdf->WriteHTML(file_get_contents($url));
// $mpdf->Output($file_path);

// header("Content-disposition: attachment; filename=$file_pdf"); // เซตไว้เป็นดาวน์โหลด
// header("Content-type: application/pdf"); // เซตไว้เป็น PDF
// readfile($file_path); // Output the contents of the file to the browser

//$Imagick = new Imagick();
//$Imagick->readImage($_path_storage."/shop_charges/detail_bill/".$file_pdf.'[0]');
//$Imagick->writeImage($_path_storage."/shop_charges/detail_bill/".$file_img);
//line_notify("Tws983Byacqds7KAgiZFMfCsdXny5QtM0LhxqadGw3c", "นานา", $_site_images."/shop_charges/detail_bill/".$file_img);
?>