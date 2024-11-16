<?php
if ($_SERVER['REQUEST_METHOD'] === "GET") {
    require_once("../../includes/config.php");
    $database_obj = new Database();
    $database_obj->get_session_start();
    $pdo = $database_obj->get_var_connect();

    $stmt = $pdo->prepare("SELECT * FROM `orders` WHERE od_id = :od_id LIMIT 1");
    $stmt->bindValue(':od_id', $_GET["od_id"], PDO::PARAM_INT);
    $get_order = $database_obj->qrySql($stmt);
    if ($get_order["count_all"] > 0) {

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        include_once($_dr_plugin . "/composer/vendor/autoload.php");

        $file_name = $_GET["file_name"].".pdf";
        $file_path = /*$_dr_export_files."/".*/ $file_name;
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
                    'B' => 'THSarabunNew Bold.ttf',
                ]
            ],
        ]);
        ob_start();

        // Start generating PDF content
        ?> 
        
        <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <title>ใบเสร็จ</title>

                    <style>
                        *{
                            box-sizing: border-box;
                            padding:0;
                            margin:0;
                        }
                        p{
                            margin: 0;
                        }
                        .py_hm{
                            padding-top:1.5mm; 
                            padding-bottom:1.5mm;
                        }
                        .border_hm{
                            border-color: #000000;
                            border-style: solid;
                            border-width: 1;
                        }
                        .border_hm_t{
                            border-top-color: #000000;
                            border-top-style: solid;
                            border-top-width: 1;
                        }
                        .border_hm_b{
                            border-bottom-color: #000000;
                            border-bottom-style: solid;
                            border-bottom-width: 1;
                        }
                        .border_hm_l{
                            border-left-color: #000000;
                            border-left-style: solid;
                            border-left-width: 1;
                        }
                        .border_hm_r{
                            border-right-color: #000000;
                            border-right-style: solid;
                            border-right-width: 1;
                        }
                        table {
                            width:100%;
                            caption-side: bottom;
                            border-collapse: collapse;
                            text-indent: initial;
                            border-spacing: 2px;
                        }
                        body{
                            font-family: "Garuda";
                            <?php   // ถ้ากำหนด $_GET["size"] เป็น 0 หรือไม่ได้กำหนด จะให้เป็นไซส์ขนาด A4
                                    // ถ้า $_GET["size"] เป็น 1 จะกำหนดความกว้าง 210mm
                                    if(isset($_GET["size"])){ 
                                        if($_GET["size"] == 0){ ?>
                                            width:210mm;
                                            height:297mm;                  
                            <?php       }else if($_GET["size"] == 1){ ?>
                                            width:210mm;
                                            height:auto;
                            <?php       }
                                    }else{ ?>
                                        width:210mm;
                                        height:297mm;
                            <?php   } ?>
                            background-color: #FFFFFF;
                            box-sizing: border-box;
                        }
                        .row{
                            --bs-gutter-x: 1.5rem;
                            --bs-gutter-y: 0;
                            display: flex;
                            flex-wrap: wrap;
                            margin-top: calc(var(--bs-gutter-y) * -1);
                            margin-right: calc(var(--bs-gutter-x) * -.5);
                            margin-left: calc(var(--bs-gutter-x) * -.5);
                        }
                    </style>
                </head>
                <body>
                        <!-- <div id="A4_Form"> -->
                            <div style="margin-bottom:1.5rem;">
                                <table style="margin-bottom:8mm;">
                                    <tr>
                                        <td style="text-align:center;">
                                            <h1>ใบเสร็จ</h1>
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td rowspan="4">
                                            <!-- <img style="object-fit: cover;" src="https://via.placeholder.com/300x300" width="30mm" height="30mm" alt=""> -->
                                            <img style="object-fit: cover;" src="<?php echo "http://".$_SERVER["HTTP_HOST"]."/".$_project_name."/assets/img/".$_logo_image?>" width="30mm" height="30mm" alt="">
                                            <!-- <img style="object-fit: cover;" src="https://office.adsshortcut.com/export/assets_by_ratcha/logo_rIchy_.jpg" width="30mm" height="30mm" alt=""> -->
                                            
                                        </td>
                                        <td style="padding-top:0mm; text-align: left;">
                                            <h1>บริษัท <?=$_project_name?> จำกัด</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="margin-bottom:0.5rem;">เลขที่ 5 หมู่หลายคัก ซอยยิกๆ ตำบลไม่ใช่ตำล่าง </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="margin-bottom:0.5rem;">อำเภอไม่เอาชอบอำเธอมากกว่า จังหวัดไม่รู้แต่กูเป็นหวัด 1212312121</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="margin-bottom:0.5rem;">เลขประจำตัวผู้เสียภาษี 9999999999 (สำนักงานใหญ่ มากเลยน้าาาา)</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td class="border_hm_l border_hm_t" style="width:120mm; padding-top:1.5mm; padding-bottom:1.5mm; padding-left:2mm;">
                                            <p><b>ชื่อผู้สั่งซื้อ : </b> <?=$get_order["data"][0]["od_user_name"]?></p>
                                        </td>
                                        <td class="border_hm_r border_hm_t border_hm_l" style="padding-top:1.5mm; padding-bottom:1.5mm; padding-left:2mm;">
                                            <p>เลขที่ 999999999999</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border_hm_l" style="width:120mm; padding-top:1.5mm; padding-bottom:1.5mm; padding-left:2mm;">
                                            <p><b>ที่อยู่ :</b> <?=$get_order["data"][0]["od_address"]?> ตำบล <?=$get_order["data"][0]["od_tumbol"]?> อำเภอ <?=$get_order["data"][0]["od_amphur"]?> จังหวัด <?=$get_order["data"][0]["od_province"]?> เลขที่ไปรษณีย์ <?=$get_order["data"][0]["od_zipcode"]?></p>
                                        </td>
                                        <td class="border_hm_r border_hm_l border_hm_b" style="padding-top:1.5mm; padding-bottom:1.5mm; padding-left:2mm;">
                                            <p>สั่งซื้อเมื่อวันที่ : <?=$get_order["data"][0]["od_date"]?> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border_hm_l" style="width:120mm; padding-top:1.5mm; padding-bottom:1.5mm; padding-left:2mm;">
                                            <p><b>เลขประจำตัวผู้เสียภาษีอากร : 9999999999</p>
                                        </td>
                                        <td class="border_hm_r border_hm_l" style="padding-top:1.5mm; padding-bottom:1.5mm; padding-left:2mm;">
                                            <p>เครดิต .........................................</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border_hm_l border_hm_b" style="width:120mm; padding-top:1.5mm; padding-bottom:1.5mm; padding-left:2mm;">
                                            <p><b>เบอร์โทร :</b> <?=$get_order["data"][0]["od_tell"]?></p>
                                        </td>
                                        <td class="border_hm_r border_hm_b border_hm_l" style="padding-top:1.5mm; padding-bottom:1.5mm; padding-left:2mm;">
                                            <p>เงื่อนไขชำระ ................................</p>
                                        </td>
                                    </tr>
                                </table>
                                <table class="table" style="margin-top:5mm;">
                                    <tr style="background-color:#FFE4D3;">
                                        <th class="py_hm border_hm" style="text-align:center;">
                                            ลำดับ
                                        </th>
                                        <th class="py_hm border_hm" style="text-align:center; padding-right:2mm; width:80mm;">
                                            รายละเอียด
                                        </th>
                                        <th class="py_hm border_hm" style="text-align:right; padding-right:1mm;">
                                            จำนวน
                                        </th>
                                        <th class="py_hm border_hm" style="text-align:right; padding-right:1mm;">
                                            ราคาต่อหน่วย
                                        </th>
                                        <th class="py_hm border_hm" style="text-align:right; padding-right:1mm;">
                                            ราคา
                                        </th>
                                    </tr>
                                    <?php
                                        $stmt = $pdo->prepare("SELECT order_lists.*, products.pd_name FROM `order_lists` INNER JOIN `products` ON products.pd_id = order_lists.pd_id 
                                                                WHERE od_id = :od_id "); // ใส่โค้ด Sql ลงไป
                                        $stmt->bindValue(':od_id', $_GET["od_id"], PDO::PARAM_INT);
                                        $get_items = $database_obj->qrySql($stmt);
                                        $index = 0;
                                        $sum_price = 0;
                                        $total_price = 0;
                                        foreach($get_items["data"] AS $item){ 
                                            $sum_price = $item["odl_quantity"] * $item["odl_price"]; 
                                            $total_price += $sum_price; ?>
                                            <tr>
                                                <td class="py_hm border_hm" style="text-align:center;">
                                                    <?=($index+1)?>
                                                </td>
                                                <td class="py_hm border_hm" style="text-align:left; padding-right:2mm;">
                                                    <?=$item["pd_name"]?>
                                                </td>
                                                <td class="py_hm border_hm" style="text-align:right; padding-right:1mm;">
                                                    <?=$item["odl_quantity"]?>
                                                </td>
                                                <td class="py_hm border_hm" style="text-align:right; padding-right:1mm;">
                                                    <?=number_format($item["odl_price"], 2)?>
                                                </td>
                                                <td class="py_hm border_hm" style="text-align:right; padding-right:1mm;">
                                                    <?=number_format($sum_price, 2)?>
                                                </td>
                                            </tr>
                                    <?php
                                        $index += 1;
                                        } 
                                    ?>
                                    <tr>
                                        <td class="border_hm" rowspan="7" colspan="2">

                                        </td>
                                        <td class="border_hm py_hm" colspan="2" style="text-align:right; padding-right:1mm;">
                                            รวมเป็นเงิน
                                        </td>
                                        <td class="border_hm" style="text-align:right; padding-right:1mm;">
                                            <?=number_format($total_price, 2)?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border_hm py_hm" colspan="2" style="text-align:right; padding-right:1mm;">
                                            ค่าขนส่ง
                                        </td>
                                        <td class="border_hm" style="text-align:right; padding-right:1mm;">
                                            <?=number_format($get_order["data"][0]["od_freight"], 2)?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border_hm py_hm" colspan="2" style="text-align:right; padding-right:1mm;">
                                            จำนวนเงินหลังรวมค่าขนส่ง
                                        </td>
                                        <td class="border_hm" style="text-align:right; padding-right:1mm;">
                                            <?php
                                                $total_price += $get_order["data"][0]["od_freight"];
                                                echo number_format($total_price, 2);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border_hm py_hm" colspan="2" style="text-align:right; padding-right:1mm;">
                                            หักส่วนลด
                                        </td>
                                        <td class="border_hm" style="text-align:right; padding-right:1mm;">
                                            <?=number_format($get_order["data"][0]["od_discount"], 2)?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border_hm py_hm" colspan="2" style="text-align:right; padding-right:1mm;">
                                            จำนวนเงินหลังหักส่วนลด
                                        </td>
                                        <td class="border_hm" style="text-align:right; padding-right:1mm;">
                                            <?php
                                                $total_price -= $get_order["data"][0]["od_discount"];
                                                echo number_format($total_price, 2);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border_hm py_hm" colspan="2" style="text-align:right; padding-right:1mm;">
                                            จำนวนภาษีมูลค่าเพิ่ม 7%
                                        </td>
                                        <td class="border_hm" style="text-align:right; padding-right:1mm;">
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border_hm py_hm" colspan="2" style="text-align:right; padding-right:1mm;">
                                            รวมทั้งสิ้น
                                        </td>
                                        <td class="border_hm" style="text-align:right; padding-right:1mm;">
                                            <?=number_format($total_price, 2)?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border_hm py_hm" colspan="5" style="text-align:right; padding-right:1mm;">
                                            <?=$database_obj->ThaiBahtConversion($total_price)?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div style="margin:3mm;">
                                <b>หมายเหตุ</b> -
                            </div>
                            <div style="margin:8mm;">
                                <table>
                                    <tr>
                                        <td>
                                            (____________________)
                                        </td>
                                        <td style="width:80mm;">
                                            
                                        </td>
                                        <td>
                                            (____________________)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center; padding-top:3mm;">
                                            <b>ผู้สั่งซื้อสินค้า</b>
                                        </td>
                                        <td style="width:80mm;">
                                            
                                        </td>
                                        <td style="text-align:center; padding-top:3mm;">
                                            <b>ผู้ออกเอกสาร</b>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                </body>
            </html>

        <?php
        // End generating PDF content

        $html_content = ob_get_clean();
        $mpdf->WriteHTML($html_content);

        // Save the PDF file on the server
        $mpdf->Output($file_path, \Mpdf\Output\Destination::FILE);

        // Set the appropriate headers to make the file downloadable
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file_name . '"');
        header('Content-Length: ' . filesize($file_path));
        readfile($file_path);

        // Delete the PDF file from the server
        unlink($file_path);
    } else {
        echo json_encode(array('file' => 'Error: Order not found'));
    }
} else {
    echo json_encode(array('file' => 'Error: Invalid request method'));
}
?>
