<?php
require_once("../../includes/header.php");
if (!$_check_session_user) {
    echo "<script>  location.href = '../../pages/homepage/';  </script>";
    exit;
} else if (($_SESSION["user"]["user_type"] == 1) === false) {
    echo "<script>  location.href = '../../pages/homepage/';  </script>";
    exit;
}
?>
<div class="side-app">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">รายการสั่งซื้อ</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">รายการสั่งซื้อ</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- CONTENT START -->
    <div class="card">
        <div class="card-header py-1">
            <!-- <h3 class="card-title">Panel with custom buttons</h3> -->
            <div class="card-options">
                <!-- <a href="#" class="btn btn-primary btn-sm">Action 1</a>
                                        <a href="#" class="btn btn-secondary btn-sm ms-2">Action 2</a> -->
                <a href="<?= $_dr_export ?>/excel/export_order.php" class="btn btn-success py-1">Export Excel</a>
            </div>
        </div>
        <div class="card-body" style="min-height:600px;">
            <div class="row mb-3">
                <div class="col-12 col-md-4">
                    <select name="search_by_order_status" id="search_by_order_status" onchange="func_list_orders(0);"
                        class="form-select w-100" aria-label="Default select example">
                        <option value="">-- ค้นหาโดยสถานะการสั่งซื้อ --</option>
                        <?php
                        $stmt = $pdo->prepare("SELECT * FROM order_status WHERE NOT odstt_id IN (1)");
                        $get = $database_obj->qrySql($stmt);
                        foreach ($get["data"] as $rs) {
                            echo "<option value='" . $rs["odstt_id"] . "' style='color:" . $rs["odstt_color_code"] . "'> " . $rs["odstt_name_th"] . " </option>";
                        }
                        ?>
                    </select>
                </div>
                <form class="col-12 col-md-8" onsubmit="return func_list_orders(0);">
                    <div class="input-group">
                        <input type="text" id="keyword_search" class="form-control" value=""
                            placeholder="ค้นหาโดยระบุชื่อผู้สั่งซื้อ...">
                        <button class="btn btn-success" type="submit"><i class="fa fa-search"></i> ค้นหา</button>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap mb-0">
                    <thead class="border-top">
                        <tr>
                            <th class="bg-transparent border-bottom-0" scope="col" class="text-center">#</th>
                            <th class="bg-transparent border-bottom-0" scope="col">ผู้ใช้ในระบบ <br> <span
                                    style="color:#fb6b25;">ชื่อผู้ใช้ที่ระบุในข้อมูลการจัดส่ง</span></th>
                            <th class="bg-transparent border-bottom-0" scope="col">สถานะการสั่งซื้อ</th>
                            <th class="bg-transparent border-bottom-0" scope="col">ช่องทางการชำระเงิน</th>
                            <th class="bg-transparent border-bottom-0" scope="col">ค่าขนส่ง</th>
                            <th class="bg-transparent border-bottom-0" scope="col">ราคารวม (ไม่รวมค่าขนส่ง) <br> <span
                                    style="color:#fb6b25;">ราคารวม (รวมค่าขนส่ง)</span></th>
                            <th class="bg-transparent border-bottom-0" scope="col">วันที่สั่งซื้อ <br> <span
                                    style="color:#fb6b25;">เวลาสั่งซื้อ</span></th>
                            <th class="bg-transparent border-bottom-0" scope="col">ข้อมูลลูกค้า/ที่อยู่</th>
                        </tr>
                    </thead>
                    <tbody id="show_orders">
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-12 text-end">
                    <div id="content_pagination">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT END -->
</div>

<!-- Modal รายละเอียดการสั่งซื้อ -->
<div class="modal fade" id="modal_order_detail" tabindex="-1" aria-labelledby="modal_label_order_detail_detail"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_label_order_detail_detail">รายละเอียดข้อมูลการสั่งซื้อ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 px-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <h5>ข้อมูลการสั่งซื้อ</h5>
                                        </div>
                                        <p class="mb-1"><b>ชื่อผู้ใช้ในระบบ :</b> <span name="od_user_name_in_system"
                                                id="od_user_name_in_system"></span></p>
                                        <p class="mb-1"><b>สั่งซื้อเมื่อวันที่ :</b> <span name="od_date"
                                                id="od_date"></span></p>
                                        <p class="mb-1"><b>สถานะการสั่งซื้อ :</b> <span name="od_status" id="od_status"
                                                class="badge py-3"></span></p>
                                        <p class="mb-1"><b>ช่องทางการชำระเงิน :</b> <span name="od_option_payment"
                                                id="od_option_payment" class="badge py-3"></span></p>
                                        <p class="mb-1"><b>ค่าขนส่ง :</b> <span name="od_freight"
                                                id="od_freight"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <button class="btn btn-primary count_btn_modal_order_detail"
                                        id="btn_modal_show_slip_of_order"><i
                                            class="fas fa-search me-2"></i>ตรวจสอบสลิปหลักฐานการชำระเงิน</button>
                                </div>
                                <div class="form-group mb-2">
                                    <button class="btn btn-secondary" onclick="func_export_receipt();"><i
                                            class="bi bi-cloud-arrow-down-fill me-2"></i>ดาวน์โหลดไฟล์ PDF</button></a>
                                </div>
                                <script>
                                    function func_export_receipt() {
                                        let file_name = prompt("ชื่อไฟล์", "Receipt_" + od_id_for_manage);
                                        file_name = (file_name == "" || file_name == null) ? "Receipt_" + od_id_for_manage : file_name;
                                        location.href = "<?= $_dr_export ?>/pdf/download_pdf_receipt.php?od_id=" + od_id_for_manage + "&file_name=" + file_name;
                                    }
                                </script>
                                <div class="form-group mb-2 row" id="show_form_update_order_status">
                                    <div class="input-group">
                                        <select class="form-select" name="select_od_status_for_update"
                                            id="select_od_status_for_update" aria-label="select_od_status_for_update">
                                            <?php
                                            $stmt = $pdo->prepare("SELECT * FROM order_status WHERE NOT odstt_id = 1 AND NOT odstt_id = 0 ");
                                            $get_order_status = $database_obj->qrySql($stmt);
                                            foreach ($get_order_status["data"] as $rs) {
                                                echo '<option style="color:' . $rs["odstt_color_code"] . ';" value="' . $rs["odstt_id"] . '">' . $rs["odstt_name_th"] . '</option>';
                                            }
                                            ?>
                                        </select>
                                        <button class="btn btn-outline-success" onclick="save_order_status();"
                                            type="button">บันทึก</button>
                                    </div>
                                    <div class="col-md-12 my-1">
                                        <textarea class="form-control" name="text_approve_reply" id="text_approve_reply"
                                            rows="3"
                                            placeholder="ข้อความสำหรับตอบกลับลูกค้าในกรณีที่หลักฐานการชำระเงินไม่ผ่าน"
                                            maxlength="100"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-danger"
                                            onclick="confirm_order_cancel();">ยกเลิกการสั่งซื้อ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-1">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5>ข้อมูลลูกค้า</h5>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" name="od_user_name" id="od_user_name"
                                        value="" readonly>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" name="od_tell" id="od_tell" value=""
                                        readonly>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" name="od_province" id="od_province" value=""
                                        readonly>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" name="od_amphur" id="od_amphur" value=""
                                        readonly>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" name="od_tumbol" id="od_tumbol" value=""
                                        readonly>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" name="od_zipcode" id="od_zipcode" value=""
                                        readonly>
                                </div>
                                <div class="form-group mb-2">
                                    <textarea class="form-control" name="od_address" id="od_address" rows="5"
                                        readonly></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover text-nowrap align-middle mb-0">
                        <thead>
                            <tr class="border-top">
                                <th scope="col">รูป</th>
                                <th scope="col">สินค้า</th>
                                <th scope="col">ราคา</th>
                                <th scope="col">จำนวน</th>
                                <th scope="col">รวม</th>
                            </tr>
                        </thead>
                        <tbody id="show_order_lists">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal สลิป -->
<div class="modal fade" id="modal_slips" tabindex="-1" aria-labelledby="modal_label_slips" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-dark me-2" id="btn_return_from_modal_slip_to_modal_order_detail"><i
                        class="bi bi-caret-left-fill"></i> ย้อนกลับ</button>
                <h4 class="modal-title" id="modal_label_slips">สลิปหลักฐานการชำระเงิน</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div class="row" id="show_slips">
                </div>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    var curent_page = 0;
    function func_list_orders(page) {
        curent_page = page;
        page_loading("show");
        let formData = new FormData();
        formData.append("action", "read_orders");
        formData.append("page", page);
        if ($("#search_by_order_status").val() != "") {
            formData.append("search_by_order_status", $("#search_by_order_status").val());
        }
        formData.append("keyword_search_by_name", $("#keyword_search").val());
        formData.append("quety_for_admin", 1);
        $.ajax({
            type: "POST",
            url: "<?= $_dr_api ?>/manage_order.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function (respon) {
                let json = JSON.parse(respon);
                if (json["status"] == 1) {
                    $("#show_orders").empty();
                    for (let i in json["data"]) {
                        let [od_date, od_time] = json["data"][i]["od_date"].split(' '); // แยกวันี่และเวลาเก็บไว้คนละตัวแปร
                        $("#show_orders").append(`
                            <tr class="border-bottom">
                                <td class="py-1 text-muted fs-15 fw-semibold text-center">${Number(i) + 1}</td>
                                <td class="py-1 text-muted fs-15 fw-semibold">${json["data"][i]["od_user_name_in_system"]} <br> <span style="color:#fb6b25;">${json["data"][i]["od_user_name"]}</span></td>
                                <td class="py-1 text-muted fs-15 fw-semibold text-center"><span class="badge py-3" style="background-color:${json["data"][i]["od_status_bg_color"]}">${json["data"][i]["od_status_text"]}</span></td>
                                <td class="py-1 text-muted fs-15 fw-semibold text-center"><span class="badge py-3" style="background-color:${json["data"][i]["od_option_payment_bg_color"]}">${json["data"][i]["od_option_payment_text"]}</span></td>
                                <td class="py-1 text-muted fs-15 fw-semibold">${Number(json["data"][i]["od_freight"]).toLocaleString()}</td>
                                <td class="py-0"><span>${Number(json["data"][i]["od_total"]).toLocaleString()}</span> <hr class="my-0"> <span style="color:#fb6b25;">${(Number(json["data"][i]["od_total"]) + Number(json["data"][i]["od_freight"])).toLocaleString()}</span></td>
                                <td class="py-0"> <span>${od_date}</span> <br> <span style="color:#fb6b25;">${od_time}</span> </td>
                                <td class="py-1 text-muted fs-15 fw-semibold"><button class="btn btn-info w-100 py-1" onclick="func_modal_order_detail('${json["data"][i]["od_id"]}');">รายละเอียดข้อมูล</button></td>
                            </tr>
                        `)
                    }
                    if (json["data"].length == 0) {
                        $("#show_orders").append(`
                            <tr>
                              <td colspan="8" class="text-center border-bottom"> 
                                ไม่พบข้อมูล
                              </td>
                            </tr>
                        `);
                    }
                    show_pagination("func_list_orders", "content_pagination", json["count_all"], curent_page);
                } else {
                    toastr.error(json["error"]);
                }
                page_loading("hide");
            },
            error: function (error) {
                toastr.error(error.statusText);
            }
        });
        return false;
    }
    func_list_orders(curent_page);

    var od_id_for_manage = ""; // เก็บรหัสการสั่งซื้อไว้เผื่อใช้จัดการต่างๆ
    function func_modal_order_detail(od_id) {
        page_loading("show");
        $("#modal_slips").modal("hide");
        od_id_for_manage = od_id;
        setTimeout(function () {
            $.ajax({
                type: "POST",
                url: "<?= $_dr_api ?>/manage_order.php",
                data: { "action": "read_orders", "order_id": od_id },
                success: function (respon) {
                    let json = JSON.parse(respon);
                    if (json["status"] == 1) {
                        $("#od_user_name_in_system").html(json["data"][0]["od_user_name_in_system"]);
                        $("#od_date").html(json["data"][0]["od_date"]);
                        $("#od_status").html(json["data"][0]["od_status_text"]);
                        $("#od_status").attr("style", "background-color:" + json["data"][0]["od_status_bg_color"] + ";");
                        $("#od_option_payment").html(json["data"][0]["od_option_payment_text"]);
                        $("#od_option_payment").attr("style", "background-color:" + json["data"][0]["od_option_payment_bg_color"] + ";");
                        $("#od_freight").html(Number(json["data"][0]["od_freight"]).toLocaleString());
                        $("#od_user_name").val(json["data"][0]["od_user_name"]);
                        $("#od_tell").val(json["data"][0]["od_tell"]);
                        $("#od_province").val(json["data"][0]["od_province"]);
                        $("#od_amphur").val(json["data"][0]["od_amphur"]);
                        $("#od_tumbol").val(json["data"][0]["od_tumbol"]);
                        $("#od_zipcode").val(json["data"][0]["od_zipcode"]);
                        $("#od_address").val(json["data"][0]["od_address"]);
                        $("#select_od_status_for_update").val(json["data"][0]["od_status"]);
                        $(".count_btn_modal_order_detail").addClass("d-none");
                        if (json["data"][0]["od_option_payment"] == 2) {
                            $("#btn_modal_show_slip_of_order").removeClass("d-none");
                        }
                        if (json["data"][0]["od_status"] == 0) { // ถ้าสถานะเป็นยกเลิกการสั่งซื้อ จะไม่ให้แสดงฟอร์มอัเดทสถานะ
                            $("#show_form_update_order_status").addClass("d-none");
                        } else {
                            $("#show_form_update_order_status").removeClass("d-none");
                        }

                        let od_freight = Number(json["data"][0]["od_freight"]);
                        let od_discount = Number(json["data"][0]["od_discount"]);
                        $.ajax({
                            type: "POST",
                            url: "<?= $_dr_api ?>/manage_order_list.php",
                            data: { "action": "read_order_lists", "order_id": od_id },
                            success: function (respon) {
                                let json = JSON.parse(respon);
                                if (json["status"] == 1) {
                                    $("#show_order_lists").empty();
                                    let total_price_order = 0;
                                    let count_items = 0;
                                    for (let i in json["data"]) {
                                        let sum_price_order_list = Number(json["data"][i]["odl_price"]) * Number(json["data"][i]["odl_quantity"]);
                                        count_items += 1;
                                        total_price_order += sum_price_order_list;
                                        $("#show_order_lists").append(`
                                            <tr>
                                                <td class="p-0 text-center"><img src="<?= $_dr_storage ?>/products/${json["data"][i]["pd_id"]}/image_main/${json["data"][i]["pd_image"]}" alt="Product Image" style="object-fit: cover;" width="60px" height="60px"></td>
                                                <td>${json["data"][i]["pd_name"]}</td>
                                                <td>${Number(json["data"][i]["odl_price"]).toLocaleString()}</td>
                                                <td>x${json["data"][i]["odl_quantity"]}</td>
                                                <td class="text-center">${sum_price_order_list.toLocaleString()}</td>
                                            </tr>
                                        `);
                                    }
                                    $("#show_order_lists").append(`
                                        <tr>
                                            <td colspan="2" rowspan="4" class="fw-bold border-bottom">รวม</td>
                                            <td colspan="2" class="fw-bold text-center">${count_items} รายการ</td>
                                            <td colspan="1" class="fw-bold text-center">${total_price_order.toLocaleString()}.-</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="fw-bold text-center border-bottom">ค่าขนส่ง ${od_freight.toLocaleString()}.-</td>
                                            <td colspan="1" class="fw-bold text-center border-bottom">${(od_freight + Number(total_price_order)).toLocaleString()}.-</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="fw-bold text-center border-bottom">ส่วนลด <span class="text-danger">${od_discount.toLocaleString()}</span>.-</td>
                                            <td colspan="1" class="fw-bold text-center border-bottom">${((Number(total_price_order) + od_freight) - od_discount).toLocaleString()}.-</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="fw-bold text-center border-bottom">รวมทั้งสิ้น</td>
                                            <td colspan="1" class="fw-bold text-center border-bottom">${((Number(total_price_order) + od_freight) - od_discount).toLocaleString()}.-</td>
                                        </tr>
                                    `);
                                    $("#modal_order_detail").modal("show");
                                } else {
                                    toastr.error(json["error"]);
                                }
                                page_loading("hide");
                            },
                            error: function (error) {
                                toastr.error(error.statusText);
                            }
                        });
                    } else {
                        toastr.error(json["error"]);
                    }
                    page_loading("hide");
                },
                error: function (error) {
                    toastr.error(error.statusText);
                }
            });
        }, 250);
    }
    function confirm_order_cancel() {
        Swal.fire({
            title: 'ยืนยันการยกเลิก',
            text: "ต้องการยกเลิกใช่หรือไม่!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ok'
        }).then((result) => {
            if (result.isConfirmed) {
                save_order_status(0);
            }
        })
    }
    function save_order_status(stt_id = null) { // กรณีอนุมัติ
        let set_od_status = "";
        if (stt_id == null) {
            set_od_status = $("#select_od_status_for_update").val();
        } else {
            set_od_status = stt_id;
        }

        let formData = new FormData();
        formData.append("action", "update_status_order");
        formData.append("order_id", od_id_for_manage);
        formData.append("od_status", set_od_status);
        formData.append("approve_reply", $("#text_approve_reply").val());
        page_loading("show");
        $.ajax({
            type: "POST",
            url: "<?= $_dr_api ?>/manage_order.php",
            processData: false,
            contentType: false,
            data: formData,
            success: function (respon) {
                let json = JSON.parse(respon);
                if (json["status"] == 1) {
                    toastr.success("Success");
                    func_list_orders(curent_page);
                    $("#modal_order_detail").modal("hide");
                } else {
                    toastr.error(json["error"]);
                }
                page_loading("hide");
            },
            error: function (error) {
                toastr.error(error.statusText);
                page_loading("hide");
            }
        });
    }

    $("#btn_modal_show_slip_of_order").click(function () {
        page_loading("show");
        $("#modal_order_detail").modal("hide");
        setTimeout(function () {
            $.ajax({
                type: "POST",
                url: "<?= $_dr_api ?>/manage_slips.php",
                data: { "action": "read_slips", "order_id": od_id_for_manage },
                success: function (respon) {
                    let json = JSON.parse(respon);
                    if (json["status"] == 1) {
                        $("#show_slips").empty();
                        if (json["data"].length > 0) {
                            for (let i in json["data"]) {
                                $("#show_slips").append(`
                                    <div class="col-md-6">
                                        <div class="card card-body p-1">
                                            <img class="w-100" style="object-fit: cover;" src="<?= $_dr_storage ?>/slips/${json["data"][i]["slip_img"]}" alt="">
                                        </div>
                                    </div>
                                `);
                            }
                        } else {
                            $("#show_slips").append(`<h5 class="text-center">** ไม่มีสลิปหลักฐานการชำระเงินในออเดอร์นี้ **</h5>`);
                        }
                        $("#btn_return_from_modal_slip_to_modal_order_detail").attr("onclick", "func_modal_order_detail('" + od_id_for_manage + "')");
                        $("#modal_slips").modal("show");
                    } else {
                        toastr.error(json["error"]);
                    }
                    page_loading("hide");
                },
                error: function (error) {
                    toastr.error(error.statusText);
                    page_loading("hide");
                }
            });
        }, 250);
    });
</script>

<?php require_once("../../includes/footer.php"); ?>