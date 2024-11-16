<?php
require_once("../../includes/header.php");
if (!$_check_session_user) {
    echo "<script>  location.href = '../../pages/homepage/';  </script>";
    exit;
}
?>
<div class="side-app">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">รายการสั่งซื้อของฉัน</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">รายการสั่งซื้อของฉัน</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- CONTENT START -->
    <div class="card">
        <div class="card-header py-1">
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
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover text-nowrap align-middle mb-0">
                    <thead class="border-top">
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-start">สถานะการสั่งซื้อ</th>
                            <th scope="col" class="text-start">ช่องทางการชำระเงิน</th>
                            <th scope="col" class="text-center">ค่าขนส่ง</th>
                            <th scope="col" class="text-center">ค่าชำระรวม</th>
                            <th scope="col" class="text-start">วันที่สั่งซื้อ <br> <span
                                    style="color:#fb6b25;">เวลาสั่งซื้อ</span></th>
                            <th scope="col" class="text-center">ข้อมูลลูกค้า/ที่อยู่</th>
                        </tr>
                    </thead>
                    <tbody id="show_orders" class="border-bottom">
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

<!-- Modal อัพสลิปขึ้นระบบ-->
<div class="modal fade" id="modal_upload_file_slip" tabindex="-1" aria-labelledby="modal_label_upload_file_slip_detail"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_label_upload_file_slip_detail">อัพสลิปชำระเงิน</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <h4 for="customFile"><b> จำนวนเงินที่ต้องชำระ <span class="show_total_price">0</span> บาท </b></h4>
                <form onsubmit="return save_upload_slip();">
                    <div class="form-group mb-3">
                        <label for="">วันที่โอนเงิน</label>
                        <input value="" type="date" class="form-control" name="slip_date" id="slip_date">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">เวลาโอนเงิน</label>
                        <input value="" type="time" class="form-control" name="slip_time" id="slip_time">
                    </div>
                    <div class="form-group mb-3">
                        <label for="slip_file" class="form-label">แนบหลักฐานการชำระเงิน</label>
                        <input class="form-control h-100" type="file" id="slip_file" name="slip_file">
                    </div>
                    <div class="form-group text-center mb-3">
                        <img id="preview_slip_file" class="w-75" style="object-fit: cover;"
                            src="https://via.placeholder.com/300x450" alt="">
                    </div>
                    <script>
                        $("#slip_file").change(function (event) {
                            let file = event.target.files[0];
                            let reader = new FileReader();
                            reader.onload = (event) => {
                                document.getElementById("preview_slip_file").src = event.target.result;
                            };
                            reader.readAsDataURL(file);
                        });
                    </script>
                    <div class="form-group mb-3 text-center">
                        <input type="hidden" id="slip_od_id" name="slip_od_id" value="">
                        <button type="submit" class="btn btn-primary w-75">บันทึก</button>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover text-nowrap align-middle mb-0">
                        <tbody id="show_slips">
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

<!-- Modal รายละเอียดการสั่งซื้อ -->
<div class="modal fade" id="modal_order_detail" tabindex="-1" aria-labelledby="modal_label_order_detail_detail"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_label_order_detail_detail">รายละเอียดข้อมูลการสั่งซื้อ</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 px-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-3 p-0 shadow border">
                                    <div class="card-header py-2">
                                        <h4 class="mb-0">ข้อมูลการสั่งซื้อ</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-1"><b class="fw-bold">สั่งซื้อเมื่อวันที่ :</b> <span
                                                name="od_date" id="od_date" class="text-secondary"></span></p>
                                        <p class="mb-1"><b class="fw-bold">สถานะการสั่งซื้อ :</b> <span name="od_status"
                                                id="od_status" class="badge py-3"></span></p>
                                        <p class="mb-1"><b class="fw-bold">ช่องทางการชำระเงิน :</b> <span
                                                name="od_option_payment" id="od_option_payment"
                                                class="badge py-3"></span></p>
                                        <p class="mb-1"><b class="fw-bold">ค่าขนส่ง :</b> <span name="od_freight"
                                                id="od_freight" class="text-secondary"></span></p>
                                        <div class="card card-body py-1 px-2 shadow border">
                                            <p class="mb-1"><b class="fw-bold">ข้อความตอบกลับในกรณีที่อนุมัติการสั่งซื้อไม่ผ่าน
                                                    :</b> <span class="fw-bold" name="od_status_reply"
                                                    id="od_status_reply" style="color:#FF0000;"
                                                    class="text-secondary"></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-1">
                                    <button id="btn_for_cancel_order" class="btn btn-danger"
                                        onclick="func_cancel_order();">ยกเลิกการสั่งซื้อ</button>
                                </div>
                                <div class="form-group mb-2">
                                    <p class="text-danger">ถ้าหากยกเลิกการสั่งซื้อไปแล้ว
                                        ท่านไม่สามารถคืนค่าสถานะของการสั่งซื้อได้</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-1">
                        <div class="card mb-3 p-0 shadow border">
                            <div class="card-header py-2">
                                <h4 class="mb-0">ข้อมูลจัดส่ง</h4>
                            </div>
                            <div class="card-body">
                                <p class="mb-1"><b class="fw-bold">ชื่อที่ใช้จัดส่ง :</b> <span name="od_user_name"
                                        id="od_user_name" class="text-secondary"></span></p>
                                <p class="mb-1"><b class="fw-bold">เบอร์โทรศัพท์ :</b> <span name="od_tell" id="od_tell"
                                        class="text-secondary"></span></p>
                                <p class="mb-1"><b class="fw-bold">รายละเอียดที่อยู่ :</b> <span name="od_address"
                                        id="od_address" class="text-secondary"></span></p>
                                <p class="mb-1"><b class="fw-bold">เลขที่ไปรษณีย์ :</b> <span name="od_zipcode"
                                        id="od_zipcode" class="text-secondary"></span></p>
                                <p class="mb-1"><b class="fw-bold">ตำบล :</b> <span name="od_tumbol" id="od_tumbol"
                                        class="text-secondary"></span></p>
                                <p class="mb-1"><b class="fw-bold">อำเภอ :</b> <span name="od_amphur" id="od_amphur"
                                        class="text-secondary"></span></p>
                                <p class="mb-1"><b class="fw-bold">จังหวัด :</b> <span name="od_province"
                                        id="od_province" class="text-secondary"></span></p>

                                <!-- <div class="form-group mb-2">
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
                                </div> -->
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
        formData.append("query_for_my_user", 1);
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
                        let show_btn_upload_slip = (json["data"][i]["od_status"] == 3) ? `<br> <button class="btn btn-primary py-1 mt-2" onclick="func_modal_upload_slip('${json["data"][i]["od_id"]}');">แนบหลักฐานการชำระเงินอีกครั้ง</button>` : "";
                        $("#show_orders").append(`
                            <tr>
                                <td class="py-1 text-center">${Number(i) + 1}</td>
                                <td class="py-1 text-start">
                                    <span class="fw-bold" style="color:${json["data"][i]["od_status_bg_color"]};">${json["data"][i]["od_status_text"]}</span>
                                    ${show_btn_upload_slip}
                                </td>
                                <td class="py-1 text-start"><span class="fw-bold" style="color:${json["data"][i]["od_option_payment_bg_color"]}">${json["data"][i]["od_option_payment_text"]}</span></td>
                                <td class="text-center py-1">${Number(json["data"][i]["od_freight"]).toLocaleString()}</td>
                                <td class="text-center py-0">${(Number(json["data"][i]["od_total"]) + Number(json["data"][i]["od_freight"])).toLocaleString()}</td>
                                <td class="text-start py-0"> <span>${od_date}</span> <br> <span style="color:#fb6b25;">${od_time}</span> </td>
                                <td class="text-center py-1"><button class="btn btn-info w-100 py-1" onclick="func_modal_order_detail('${json["data"][i]["od_id"]}');">รายละเอียดข้อมูล</button></td>
                            </tr>
                        `)
                    }
                    if (json["data"].length == 0) {
                        $("#show_orders").append(`
                            <tr>
                              <td colspan="8" class="text-center"> 
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

    function save_upload_slip() {
        page_loading("show");
        let formData = new FormData();
        formData.append("action", "upload_slips");
        formData.append("slip_date", $("#slip_date").val());
        formData.append("slip_time", $("#slip_time").val());
        formData.append("order_id", od_id_for_manage);
        let totalfiles = document.getElementById("slip_file").files.length;
        for (let index = 0; index < totalfiles; index++) {
            formData.append("slip_file", document.getElementById("slip_file").files[index]);
        }
        $.ajax({
            type: "POST",
            url: "<?= $_dr_api ?>/manage_slips.php",
            processData: false,
            contentType: false,
            data: formData,
            success: function (respon) {
                let json = JSON.parse(respon);
                if (json["status"] == 1) {
                    Swal.fire({
                        icon: 'success',
                        title: "สำเร็จ",
                        text: ""
                    });
                    func_list_orders(curent_page);
                    $("#modal_upload_file_slip").modal("hide");
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: json["error"],
                        text: ""
                    });
                }
                page_loading("hide");
            },
            error: function (error) {
                toastr.error(error.statusText);
            }
        });
        return false;
    }

    function func_modal_upload_slip(od_id) {
        page_loading("show");
        od_id_for_manage = od_id;
        $.ajax({
            type: "POST",
            url: "<?= $_dr_api ?>/manage_slips.php",
            data: { "action": "read_slips", "order_id": od_id },
            success: function (respon) {
                let json = JSON.parse(respon);
                if (json["status"] == 1) {
                    $("#slip_od_id").val(od_id);
                    $("#show_slips").empty();
                    for (let i in json["data"]) {
                        $("#show_slips").append(`
                            <tr>
                                <td class="py-1 text-center" style="width:20px;">${Number(i) + 1}</td>
                                <td class="py-0 text-center" style="width:200px;">
                                    <img src="<?= $_dr_storage ?>/slips/${json["data"][i]["slip_img"]}" alt="" class="w-100">
                                </td>
                            </tr>
                        `)
                    }
                    $("#modal_upload_file_slip").modal("show");
                } else {
                    toastr.error(json["error"]);
                }
                page_loading("hide");
            },
            error: function (error) {
                toastr.error(error.statusText);
            }
        });
    }

    var od_id_for_manage = ""; // เก็บรหัสการสั่งซื้อไว้เผื่อไว้เมื่อยกเลิกการสั่งซื้อ จะได้อ้างรหัสการสั่งซื้อถูก
    function func_modal_order_detail(od_id) {
        page_loading("show");
        od_id_for_manage = od_id;
        $.ajax({
            type: "POST",
            url: "<?= $_dr_api ?>/manage_order.php",
            data: { "action": "read_orders", "order_id": od_id },
            success: function (respon) {
                let json = JSON.parse(respon);
                if (json["status"] == 1) {
                    $("#od_date").html(json["data"][0]["od_date"]);
                    $("#od_status").html(json["data"][0]["od_status_text"]);
                    $("#od_status").attr("style", "background-color:" + json["data"][0]["od_status_bg_color"] + ";");
                    $("#od_status_reply").html(json["data"][0]["od_status_reply"]);
                    $("#od_option_payment").html(json["data"][0]["od_option_payment_text"]);
                    $("#od_option_payment").attr("style", "background-color:" + json["data"][0]["od_option_payment_bg_color"] + ";");
                    $("#od_freight").html(Number(json["data"][0]["od_freight"]).toLocaleString());
                    $("#od_user_name").html(json["data"][0]["od_user_name"]);
                    $("#od_tell").html(json["data"][0]["od_tell"]);
                    $("#od_province").html(json["data"][0]["od_province"]);
                    $("#od_amphur").html(json["data"][0]["od_amphur"]);
                    $("#od_tumbol").html(json["data"][0]["od_tumbol"]);
                    $("#od_zipcode").html(json["data"][0]["od_zipcode"]);
                    $("#od_address").html(json["data"][0]["od_address"]);
                    if (json["data"][0]["is_disabled_order_cancel"] == 1) {
                        $("#btn_for_cancel_order").attr("disabled", "");
                    } else {
                        $("#btn_for_cancel_order").removeAttr("disabled");
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
    }

    function func_cancel_order() {
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
                page_loading("show");
                $.ajax({
                    type: "POST",
                    url: "<?= $_dr_api ?>/manage_order.php",
                    data: { "action": "cancel_order", "od_id": od_id_for_manage },
                    success: function (respon) {
                        let json = JSON.parse(respon);
                        if (json["status"] == 1) {
                            Swal.fire(
                                'สำเร็จ',
                                json["return_text"],
                                'success'
                            )
                            func_list_orders(curent_page);
                        } else {
                            Swal.fire(
                                'ไม่สำเร็จ',
                                json["error"],
                                'error'
                            )
                        }
                        page_loading("hide");
                    },
                    error: function (error) {
                        toastr.error(error.statusText);
                        page_loading("hide");
                    }
                });
            }
        })
    }
</script>
<?php require_once("../../includes/footer.php"); ?>