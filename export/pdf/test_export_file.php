<?php    
    include_once($_dr_plugin."/pdf/vendor/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ใบเสนอราคา</title>

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
            <div>
                <table style="margin-bottom:8mm;">
                    <tr>
                        <td style="text-align:center;">
                            <h1>ใบเสนอราคา</h1>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td rowspan="4">
                            <img src="..." class="rounded" alt="" width="50mm">
                        </td>
                        <td style="padding-top:0mm; text-align: left;">
                            <h1>บริษัท ริชชี่ โซลูชั่น จำกัด</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>เลขที่ 5 ซอย งามวงศ์วาน 9 แยก 5 ถนน งามวงศ์วาน ตำบลบางกระสอ</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>อำเภอเมืองนนทบุรี จังหวัดนนทบุรี 11000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>เลขประจำตัวผู้เสียภาษี 0105549105194 (สำนักงานใหญ่)</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table>
                    <tr>
                        <td class="border_hm_l border_hm_t" style="width:120mm; padding-top:1.5mm; padding-bottom:1.5mm; padding-left:2mm;">
                            <p><b>ลูกค้า/บริษัท : </b> Tshop</p>
                        </td>
                        <td class="border_hm_r border_hm_t border_hm_l" style="padding-top:1.5mm; padding-bottom:1.5mm; padding-left:2mm;">
                            <p>เลขที่ 999999999999</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="border_hm_l" style="width:120mm; padding-top:1.5mm; padding-bottom:1.5mm; padding-left:2mm;">
                            <p><b>ที่อยู่ :</b> XXXXXXXXXXXXXXXXXXXXXx เลขที่ไปรษณีย์ 99999</p>
                        </td>
                        <td class="border_hm_r border_hm_l border_hm_b" style="padding-top:1.5mm; padding-bottom:1.5mm; padding-left:2mm;">
                            <p>วันที่ : 9 มิ.ย พ.ศ. 2565 </p>
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
                            <p><b>เบอร์โทร :</b> 9999999999</p>
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
                        <th class="py_hm border_hm" style="text-align:right; padding-right:2mm; width:80mm;">
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
                        for($i = 0; $i < 2; $i++){ ?>
                            <tr>
                                <td class="py_hm border_hm" style="text-align:center;">
                                    <?=$i?>
                                </td>
                                <td class="py_hm border_hm" style="text-align:right; padding-right:2mm;">
                                    สินค้า <?=$i?>
                                </td>
                                <td class="py_hm border_hm" style="text-align:right; padding-right:1mm;">
                                    2
                                </td>
                                <td class="py_hm border_hm" style="text-align:right; padding-right:1mm;">
                                    100.00
                                </td>
                                <td class="py_hm border_hm" style="text-align:right; padding-right:1mm;">
                                    200.00
                                </td>
                            </tr>
                    <?php
                        } 
                    ?>
                    <tr>
                        <td class="border_hm" rowspan="5" colspan="2">

                        </td>
                        <td class="border_hm py_hm" colspan="2" style="text-align:right; padding-right:1mm;">
                            รวมเป็นเงิน
                        </td>
                        <td class="border_hm" style="text-align:right; padding-right:1mm;">
                            200.00
                        </td>
                    </tr>
                    <tr>
                        <td class="border_hm py_hm" colspan="2" style="text-align:right; padding-right:1mm;">
                            หักส่วนลด
                        </td>
                        <td class="border_hm" style="text-align:right; padding-right:1mm;">
                            10.00
                        </td>
                    </tr>
                    <tr>
                        <td class="border_hm py_hm" colspan="2" style="text-align:right; padding-right:1mm;">
                            จำนวนเงินหลังหักส่วนลด
                        </td>
                        <td class="border_hm" style="text-align:right; padding-right:1mm;">
                            190.00
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
                            190
                        </td>
                    </tr>
                    <tr>
                        <td class="border_hm py_hm" colspan="5" style="text-align:right; padding-right:1mm;">
                            หนึ่งร้อยเก้าสิบบาทถ้วน
                        </td>
                    </tr>
                </table>
            </div>
            <div style="margin-left:3mm;">
                ใบเสนอราคานี้มีผลถึงวันที่ 09 มิ.ย. พ.ศ. 2565
            </div>
            <div style="margin:3mm;">
                <b>หมายเหตุ</b> กรณีต้องการซื้อสินค้า/บริการ กรุณาลงชื่อ ในเอกสารใบเสนอด้านล่าง
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