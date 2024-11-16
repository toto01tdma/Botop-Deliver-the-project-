<?php
require_once("../../includes/header.php");
if (!$_check_session_user) {
	echo "<script>  location.href = '../../pages/homepage/';  </script>";
	exit;
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE user_status = 1 AND user_id = :user_id LIMIT 1");
$stmt->bindValue(':user_id', $_SESSION["user"]["user_id"], PDO::PARAM_STR);
$get = $database_obj->qrySql($stmt);
$get_my_data = $get["data"][0];

// Paypal Sandbox
$_client_id = "ASlgCcia13xWCcmBsenBHnnm1K__WHES7UI5iQXeYjlpkbbLRbDsuDeOEqtpaNQxjvBEV4MObCzXKV4c";
$_client_secret = "EMHKXGrff1JA_30LlGpjc7h8by-XInMeiiG7MEDyQjHlZoFduw0A5HSh_eu5xxuK68J7hbM2AxfUjfzg";
?>
<style>
	.active_button {
		background-color: #343a40 !important;
		border-color: #343a40 !important;
	}

	.active_button .color_text_of_active_button {
		color: #FFFFFF;
	}

	.active_button:hover {
		background-color: #343a40 !important;
		border-color: #343a40 !important;
		color: #FFFFFF;
	}

	.active_button:hover .color_text_of_active_button {
		color: #FFFFFF;
	}

	.active_button:focus {
		background-color: #343a40 !important;
		border-color: #343a40 !important;
		color: #FFFFFF;
	}
</style>
<script src="https://www.paypal.com/sdk/js?client-id=<?= $_client_id ?>&components=buttons"></script>
<div class="side-app">

	<!-- PAGE-HEADER -->
	<div class="page-header mb-1">
		<div>
			<h1 class="page-title">สั่งซื้อ</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">สั่งซื้อ</li>
			</ol>
		</div>
	</div>
	<!-- PAGE-HEADER END -->

	<!-- CONTENT START -->
	<div class="row">
		<div class="col-12 col-md-8 px-1">
			<div class="card mt-1 shadow">
				<div class="card-header py-2">
					<h3 class="my-0">
						<i class="bi bi-cart-fill"></i>
						รายการสินค้าในตะกร้า
					</h3>
				</div>
				<div class="card-body" style="">
					<div class="container">
						<div id="show_cart_items" class="border" style="overflow: auto; height:500px;">

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-4 px-1">
			<div class="row">
				<div class="col-12">
					<div class="card my-1 shadow">
						<div class="card-header py-2">
							<h3 class="my-0">
								ยอดรวม
							</h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr class="border-bottom">
											<th>รายการรวม</th>
											<td><span id="show_total_items"></span> รายการ</td>
										</tr>
										<tr class="border-bottom">
											<th>ค่าสินค้า</th>
											<td><span id="show_sum_price"></span></td>
										</tr>
										<tr class="border-bottom">
											<th>ค่าขนส่ง</th>
											<td><span id="show_freight"></span></td>
										</tr>
										<tr class="border-bottom">
											<th>ส่วนลด</th>
											<td><span id="show_discount"></span></td>
										</tr>
										<tr class="border-bottom">
											<th>จำนวนเงินรวมทั้งสิ้น</th>
											<td><span class="fw-bold show_total_price"></span></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-primary" data-bs-toggle="modal"
									data-bs-target="#modal_form_option_pay_and_address">ยืนยันการสั่งซื้อ</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal เลือกช่องทางการชำระเงินและข้อมูลจัดส่ง -->
	<div class="modal fade" id="modal_form_option_pay_and_address" tabindex="-1"
		aria-labelledby="modal_label_option_pay_and_address" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header py-2">
					<h3 class="modal-title" id="modal_label_option_pay_and_address">ยืนยันข้อมูลเพื่อสั่งซื้อ</h3>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-12 px-1">
							<div class="card shadow border p-0">
								<div class="card-header py-2">
									<h3 class="my-0">
										เลือกช่องทางการชำระเงิน
									</h3>
								</div>
								<div class="card-body pb-0">
									<div class="row">
										<input type="hidden" id="option_payment" value="2">
										<div class="col-6 col-md-4 p-5">
											<div id="btn_option_pay_uploadslip"
												class="card card-body border p-1 w-100 count_button_optoin_pay mb-0 active_button"
												style="height:250px; cursor:pointer;">
												<h1 class="mb-5 pb-5 mt-3 color_text_of_active_button text-center fw-bold"
													style="font-size:500%;"><i class="bi bi-upload"></i></h1>
												<h2 class="my-0 color_text_of_active_button text-center">
													ชำระโดยการโอนเงิน</h2>
												<h5 class="my-0 color_text_of_active_button text-center">
													(คลิกเพื่ออัพหลักฐานการชำระเงิน)</h5>
											</div>
										</div>
										<div class="col-6 col-md-4 p-5">
											<div id="btn_option_pay_delivery"
												class="card card-body border p-1 w-100 count_button_optoin_pay mb-0"
												style="height:250px; cursor:pointer;">
												<h1 class="mb-5 pb-5 mt-3 color_text_of_active_button text-center fw-bold"
													style="font-size:500%;"><i class="bi bi-truck"></i></h1>
												<h2 class="my-0 color_text_of_active_button text-center">ชำระเงินปลายทาง
												</h2>
											</div>
										</div>
										<div class="col-6 col-md-4 p-5">
											<div id="btn_option_pay_paypal"
												class="card card-body border p-1 w-100 count_button_optoin_pay mb-0"
												style="height:250px; cursor:pointer;">
												<h1 class="mb-5 pb-5 mt-3 color_text_of_active_button text-center fw-bold"
													style="font-size:500%;"><i class="bi bi-paypal"></i></h1>
												<h2 class="my-0 color_text_of_active_button text-center">
													ชำระเงินผ่านระบบ Paypal
												</h2>
											</div>
										</div>
									</div>
									<script>
										$("#btn_option_pay_uploadslip").click(function () {
											func_cls_active_btn_option_pay();
											$("#option_payment").val("2");
											$(this).addClass("active_button");
											$("#modal_form_option_pay_and_address").modal("hide");
											setTimeout(function () {
												$("#modal_upload_file_slip").modal("show");
											}, 500); // 0.5 มิลลิวินาที เท่ากับ 0.5 วินาที
										});
										$("#btn_option_pay_paypal").click(function () {

											let check_input_form = true;
											<?php if (is_null($get_my_data['user_address'])) { ?>
												Swal.fire({
													icon: 'error',
													title: "กรุณากรอกที่อยู่จัดส่ง",
													text: ""
												});
												check_input_form = false;
											<?php } ?>

											if (check_input_form) {
												func_cls_active_btn_option_pay();

												// เซ็ทเป็นเก็บเงินปลายทางไว้ก่อน
												$("#option_payment").val("1");
												$("#btn_option_pay_delivery").addClass("active_button");

												$("#modal_payment_paypal").modal("show");
											}
										});
										$("#btn_option_pay_delivery").click(function () {
											func_cls_active_btn_option_pay();
											$("#option_payment").val("1");
											$(this).addClass("active_button");
										});
										function func_cls_active_btn_option_pay() {
											let count = document.getElementsByClassName("count_button_optoin_pay").length;
											for (let i = 0; i < count; i++) {
												document.getElementsByClassName("count_button_optoin_pay")[i].classList.remove("active_button");
											}
										}
									</script>
								</div>
							</div>
						</div>
						<div class="col-12 px-1">
							<div class="card shadow border p-0">
								<div class="card-header py-2">
									<h3 class="my-0">
										<i class="bi bi-person-circle"></i>
										ข้อมูลจัดส่ง
									</h3>
								</div>
								<div class="card-body" id="show_address">
									<div class="row">
										<div class="col-12 col-md-6">
											<div class="row">
												<div class="col-6 col-md-4">
													<p><span class="fw-bold">ชื่อผู้ใช้ในระบบ : </span></p>
												</div>
												<div class="col-6 col-md-8">
													<p>
														<?php echo $get_my_data['user_firstname'] ?>
														<?php echo $get_my_data['user_lastname'] ?>
													</p>
													<input value="<?php echo $get_my_data['user_firstname'] ?>"
														type="hidden" name="user_first_name" id="user_first_name">
													<input value="<?php echo $get_my_data['user_lastname'] ?>"
														type="hidden" name="user_last_name" id="user_last_name">
												</div>
												<div class="col-6 col-md-4">
													<p><span class="fw-bold">อีเมลล์ : </span></p>
												</div>
												<div class="col-6 col-md-8">
													<p>
														<?php echo $get_my_data['user_email'] ?>
													</p>
													<input value="<?php echo $get_my_data['user_email'] ?>"
														type="hidden" name="user_email" id="user_email">
												</div>
												<?php if (!is_null($get_my_data['user_address'])) { ?>

													<div class="col-6 col-md-4">
														<p><span class="fw-bold">ชื่อที่ใช้ในการจัดส่ง : </span></p>
													</div>
													<div class="col-6 col-md-8">
														<p>
															<?php echo $get_my_data['user_fullname_for_order'] ?>
														</p>
														<input value="<?php echo $get_my_data['user_fullname_for_order'] ?>"
															type="hidden" name="user_full_name" id="user_full_name">
													</div>
													<div class="col-6 col-md-4">
														<p><span class="fw-bold">เบอร์โทรศัพท์ : </span></p>
													</div>
													<div class="col-6 col-md-8">
														<p>
															<?php echo $get_my_data['user_phonenumber'] ?>
														</p>
														<input value="<?php echo $get_my_data['user_phonenumber'] ?>"
															type="hidden" name="phone_number" id="phone_number">
													</div>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="row">
													<div class="col-6 col-md-4">
														<p><span class="fw-bold">รายละเอียดที่อยู่ : </span></p>
													</div>
													<div class="col-6 col-md-8">
														<p>
															<?php echo $get_my_data['user_address'] ?>
														</p>
														<input value="<?php echo $get_my_data['user_address'] ?>"
															type="hidden" name="address_detail" id="address_detail">
													</div>
													<div class="col-6 col-md-4">
														<p><span class="fw-bold">เลขที่ไปรษณีย์ : </span></p>
													</div>
													<div class="col-6 col-md-8">
														<?php
														$stmt = $pdo->prepare("SELECT id, zip_code, name_th FROM thai_area_districts WHERE id = " . $get_my_data['district_id'] . " LIMIT 1");
														$get = $database_obj->qrySql($stmt);
														?>
														<p>
															<?php echo $get["data"][0]['zip_code'] ?>
														</p>
														<input value="<?php echo $get["data"][0]['zip_code'] ?>"
															type="hidden" name="thai_zipcode" id="thai_zipcode">
													</div>
													<div class="col-6 col-md-4">
														<p><span class="fw-bold">ตำบล : </span></p>
													</div>
													<div class="col-6 col-md-8">
														<p>
															<?php echo $get["data"][0]['name_th'] ?>
														</p>
														<input value="<?php echo $get["data"][0]['id'] ?>" type="hidden"
															name="thai_tambols" id="thai_tambols">
													</div>
													<div class="col-6 col-md-4">
														<p><span class="fw-bold">อำเภอ : </span></p>
													</div>
													<div class="col-6 col-md-8">
														<?php
														$stmt = $pdo->prepare("SELECT id, name_th FROM thai_area_amphures WHERE id = " . $get_my_data['amphure_id'] . " LIMIT 1");
														$get = $database_obj->qrySql($stmt);
														?>
														<p>
															<?php echo $get["data"][0]['name_th'] ?>
														</p>
														<input value="<?php echo $get["data"][0]['id'] ?>" type="hidden"
															name="thai_amphures" id="thai_amphures">
													</div>
													<div class="col-6 col-md-4">
														<p><span class="fw-bold">จังหวัด : </span></p>
													</div>
													<div class="col-6 col-md-8">
														<?php
														$stmt = $pdo->prepare("SELECT id, name_th FROM thai_area_provinces WHERE id = " . $get_my_data['province_id'] . " LIMIT 1");
														$get = $database_obj->qrySql($stmt);
														?>
														<p>
															<?php echo $get["data"][0]['name_th'] ?>
														</p>
														<input value="<?php echo $get["data"][0]['id'] ?>" type="hidden"
															name="thai_provinces" id="thai_provinces">
													</div>
												</div>
											</div>
											<div class="col-12">
												<button class="btn btn-warning" data-bs-toggle="modal"
													data-bs-target="#modal_form_edit_address"><i
														class="fas fa-edit me-2"></i>เปลี่ยนที่อยู่</button>
											</div>
										<?php } else { ?>
											<div class="col-12">
												<button class="btn btn-primary" data-bs-toggle="modal"
													data-bs-target="#modal_form_edit_address"><i
														class="fas fa-edit me-2"></i>เพิ่มที่อยู่</button>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 text-center">
							<button onclick="func_save_order();" class="w-50 btn btn-primary">สั่งซื้อ</button>
						</div>
					</div>
				</div>
				<div class="modal-footer py-1">
					<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal เปลี่ยนที่อยู่ -->
	<div class="modal fade" id="modal_form_edit_address" tabindex="-1" aria-labelledby="modal_label_manage_promotion"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modal_label_manage_promotion">แก้ไขที่อยู่</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
				</div>
				<div class="modal-body">
					<form onsubmit="return func_edit_address();" class="row">
						<div class="col-12">
							<div class="form-group mb-2">
								<label for="permission">ชื่อ - นามสกุล ผู้รับสินค้า</label>
								<input value="" type="text" class="form-control check_required"
									name="edit_user_full_name" id="edit_user_full_name" maxlength="120" required>
							</div>
							<div class="form-group mb-2">
								<label for="permission">เบอร์โทรศัพท์</label>
								<input value="" type="text" class="form-control check_required" name="edit_phone_number"
									id="edit_phone_number" maxlength="25" required>
							</div>
							<div class="form-group mb-2">
								<label for="permission">ภูมิภาค</label>
								<select class="form-control check_required" id="edit_thai_geographies" required>
									<option value disabled selected>-- เลือกภูมิภาค --</option>
									<?php
									$stmt = $pdo->prepare("SELECT * FROM thai_area_geographies");
									$get = $database_obj->qrySql($stmt);
									foreach ($get["data"] as $rs) {
										echo "<option value='" . $rs["id"] . "' >" . $rs["name"] . "</option>";
									}
									?>
								</select>
								<script>
									$("#edit_thai_geographies").change(function () {
										page_loading("show");
										let geo_id = $("#edit_thai_geographies").val();
										$("#edit_thai_zipcode").val("");
										$("#edit_thai_tambols").empty();
										$("#edit_thai_tambols").append(
											`<option value disabled selected>-- เลือกตำบล --</option>`
										);
										$("#edit_thai_amphures").empty();
										$("#edit_thai_amphures").append(
											`<option value disabled selected>-- เลือกอำเภอ --</option>`
										);
										$.ajax({
											type: "POST",
											url: "<?= $_dr_api ?>/query_thai_area.php",
											data: {
												"action": "query_provinces",
												"geo_id": geo_id
											},
											success: function (respon) {
												let json = JSON.parse(respon);
												$("#edit_thai_provinces").empty();
												$("#edit_thai_provinces").append(
													`<option value disabled selected>-- เลือกจังหวัด --</option>`
												);
												for (let i in json["data"]) {
													$("#edit_thai_provinces").append(
														`<option value="${json["data"][i]["id"]}">${json["data"][i]["name_th"]}</option>`
													);
												}
												page_loading("hide");
											},
											error: function (error) {
												toastr.error(error.statusText);
												page_loading("hide");
											}
										});
									});
								</script>
							</div>
							<div class="form-group mb-2">
								<label for="permission">จังหวัด</label>
								<select class="form-control check_required" id="edit_thai_provinces" required>
									<option value disabled selected>-- เลือกจังหวัด --</option>
								</select>
								<script>
									$("#edit_thai_provinces").change(function () {
										page_loading("show");
										let provin_id = $("#edit_thai_provinces").val();
										$("#edit_thai_zipcode").val("");
										$("#edit_thai_tambols").empty();
										$("#edit_thai_tambols").append(
											`<option value disabled selected>-- เลือกตำบล --</option>`
										);
										$("#edit_thai_amphures").empty();
										$("#edit_thai_amphures").append(
											`<option value disabled selected>
																		<div class="spinner-border" role="status">
																			<span class="visually-hidden">กำลังโหลด...</span>
																		</div>
																	</option>`
										);
										$.ajax({
											type: "POST",
											url: "<?= $_dr_api ?>/query_thai_area.php",
											data: {
												"action": "query_amphures",
												"provin_id": provin_id
											},
											success: function (respon) {
												let json = JSON.parse(respon);
												$("#edit_thai_amphures").empty();
												$("#edit_thai_amphures").append(
													`<option value disabled selected>-- เลือกอำเภอ --</option>`
												);
												for (let i in json["data"]) {
													$("#edit_thai_amphures").append(
														`<option value="${json["data"][i]["id"]}">${json["data"][i]["name_th"]}</option>`
													);
												}
												page_loading("hide");
											},
											error: function (error) {
												toastr.error(error.statusText);
												page_loading("hide");
											}
										});
									});
								</script>
							</div>
							<div class="form-group mb-2">
								<label for="permission">อำเภอ</label>
								<select class="form-control check_required" id="edit_thai_amphures" required>
									<option value disabled selected>-- เลือกอำเภอ --</option>
								</select>
								<script>
									$("#edit_thai_amphures").change(function () {
										page_loading("show");
										let amphur_id = $("#edit_thai_amphures").val();
										$("#edit_thai_zipcode").val("");
										$("#edit_thai_tambols").empty();
										$("#edit_thai_tambols").append(
											`<option value disabled selected>
																		<div class="spinner-border" role="status">
																			<span class="visually-hidden">กำลังโหลด...</span>
																		</div>
																	</option>`
										);
										$.ajax({
											type: "POST",
											url: "<?= $_dr_api ?>/query_thai_area.php",
											data: {
												"action": "query_tumbols",
												"amphur_id": amphur_id
											},
											success: function (respon) {
												let json = JSON.parse(respon);
												$("#edit_thai_tambols").empty();
												$("#edit_thai_tambols").append(
													`<option value disabled selected>-- เลือกตำบล --</option>`
												);
												for (let i in json["data"]) {
													$("#edit_thai_tambols").append(
														`<option value="${json["data"][i]["id"]}">${json["data"][i]["name_th"]}</option>`
													);
												}
												page_loading("hide");
											},
											error: function (error) {
												toastr.error(error.statusText);
												page_loading("hide");
											}
										});
									});
								</script>
							</div>
							<div class="form-group mb-2">
								<label for="permission">ตำบล</label>
								<select class="form-control check_required" id="edit_thai_tambols" required>
									<option value disabled selected>-- เลือกตำบล --</option>
								</select>
								<script>
									$("#edit_thai_tambols").change(function () {
										let tumbol_id = $("#edit_thai_tambols").val();
										$("#edit_thai_zipcode").val("");
										$.ajax({
											type: "POST",
											url: "<?= $_dr_api ?>/query_thai_area.php",
											data: {
												"action": "query_zipcode",
												"tumbol_id": tumbol_id
											},
											success: function (respon) {
												let json = JSON.parse(respon);
												$("#edit_thai_zipcode").val(json["data"][0]["zip_code"]);
												page_loading("hide");
											},
											error: function (error) {
												toastr.error(error.statusText);
												page_loading("hide");
											}
										})
									});
								</script>
							</div>
							<div class="form-group mb-2">
								<label for="permission">เลขไปรษณีย์</label>
								<input name="edit_thai_zipcode" id="edit_thai_zipcode" type="text"
									class="form-control check_required" value="" readonly>
							</div>
							<div class="form-group mb-2">
								<label for="permission">รายละเอียดที่อยู่</label>
								<textarea name="edit_address_detail" id="edit_address_detail" cols="30" rows="5"
									class="form-control check_required"
									placeholder="ระบุรายละเอียดที่อยู่ เช่น เลขที่ หมู่ ถนน/ซอย"
									maxlength="250"></textarea>
							</div>
							<div class="form-group mb-1 text-center">
								<button type="submit" class="btn btn-success w-100">บันทึก</button>
							</div>
						</div>
					</form>
					<script>
						function func_edit_address() {
							let check_input_form = true;
							let check_required_all = document.getElementsByClassName("check_required").length;
							for (let i = 0; i < check_required_all; i++) {
								let val = document.getElementsByClassName("check_required")[i].value;
								if (val == "") {
									Swal.fire({
										icon: 'error',
										title: "กรุณากรอกข้อมูลให้ครบ",
										text: ""
									});
									check_input_form = false;
								}
							}

							if (check_input_form) {
								let formData = new FormData();
								formData.append("action", "update_address");
								formData.append("user_full_name", $("#edit_user_full_name").val());
								formData.append("phone_number", $("#edit_phone_number").val());
								formData.append("thai_geographies", $("#edit_thai_geographies").val());
								formData.append("thai_provinces", $("#edit_thai_provinces").val());
								formData.append("thai_amphures", $("#edit_thai_amphures").val());
								formData.append("thai_tambols", $("#edit_thai_tambols").val());
								formData.append("thai_zipcode", $("#edit_thai_zipcode").val());
								formData.append("address_detail", $("#edit_address_detail").val());

								$.ajax({
									type: "POST",
									url: "<?= $_dr_api ?>/manage_user.php", // เปลี่ยนเป็น URL ที่ต้องการส่งข้อมูลไป
									data: formData,
									contentType: false, // ต้องระบุเป็น false เพื่อให้ jQuery จัดการ Content-Type
									processData: false, // ต้องระบุเป็น false เพื่อให้ jQuery ไม่ทำการแปลงข้อมูล
									success: function (response) {
										let json = JSON.parse(response);
										if (json["status"] == 1) {
											window.location.reload();
										} else {
											toastr.error(json["error"]);
										}
									},
									error: function (error) {
										// ประมวลผลเมื่อเกิดข้อผิดพลาดในการส่งข้อมูล
										console.error("เกิดข้อผิดพลาดในการส่งข้อมูล");
										console.error(error);
										// สามารถเพิ่มการปรับแต่งหรือแสดงข้อความผิดพลาดได้ตามต้องการ
									}
								});
							}
							return false;
						}
					</script>
				</div>
				<div class="modal-footer py-1">
					<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- CONTENT END -->
</div>

<!-- Modal ปุ่ม Paypal -->
<div class="modal fade" id="modal_payment_paypal" tabindex="-1" aria-labelledby="modal_label_pament_paypal"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal_label_pament_paypal">ชำระเงินด้วยระบบ PayPal</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<h4><b>คลิกเพื่อชำระเงินผ่านระบบ Paypal</b></h4>
				<div class="form-group text-center mb-3">
					<script>
						var total_price = 0;
						paypal.Buttons({
							style: {
								layout: 'vertical',
								color: 'blue',
								shape: 'rect',
								label: 'paypal'
							},
							createOrder: function (data, actions) {
								// สร้างรายการสั่งซื้อ
								let exchangeRateTHBtoUSD = 0.031
								let amount_USA = total_price * exchangeRateTHBtoUSD;
								let tt = amount_USA.toFixed(2);
								console.log(tt);

								return actions.order.create({
									purchase_units: [
										{
											amount: {
												value: Number(tt), // จำนวนเงินที่ต้องชำระ
												currency: "THB" // สกุลเงิน
											},
										},
									],
								});
							},
							onApprove: function (data, actions) {
								// กระบวนการหลังจากผู้ใช้เข้าสู่ระบบและอนุมัติการรับชำระเงิน
								return actions.order.capture().then(function (details) {
									// ดำเนินการหลังจากการจ่ายเงินสำเร็จ
									if (details["status"] == "COMPLETED") {
										$("#option_payment").val("3");
										$(this).addClass("active_button");
										func_save_order();
									}
									console.log('Payment completed:', details);

									// ส่งข้อมูลที่คุณต้องการไปยังเซิร์ฟเวอร์ของคุณ
									// โดยใช้ XMLHttpRequest หรือ Fetch API
								});
							},
						}).render('#paypal-button-container');
					</script>
					<div id="paypal-button-container"></div>
				</div>
			</div>
			<div class="modal-footer py-1">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
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
				<h4><b>เลขที่บัญชี <span class="text-primary">6462328286</span></b> <img
						src="<?= $_dr_assets ?>/img/scb_logo.png" alt="" style="width:25px;"></h4>
				<h4><b>นาย รัชชานนท์ โคตรบรรเทา</b></h4>
				<div class="form-group text-center mb-3">
					<img class="w-75" style="object-fit: cover;" src="<?= $_dr_assets ?>/img/qr_payment.jpg" alt="">
				</div>
				<h4><b> จำนวนเงินที่ต้องชำระ <span class="show_total_price text-secondary">0</span> บาท </b></h4>
				<div class="row">
					<div class="col-12 form-group mb-3">
						<label for="">วันที่โอนเงิน</label>
						<input value="" type="date" class="form-control" name="slip_date" id="slip_date">
					</div>
					<div class="col-12 form-group mb-3">
						<label for="">เวลาโอนเงิน</label>
						<input value="" type="time" class="form-control" name="slip_time" id="slip_time">
					</div>
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
				<div class="form-group text-center">
					<button type="button" class="btn btn-success w-100" data-bs-dismiss="modal"
						onclick="func_for_confirm_upload_slip()">บันทึก</button>
				</div>
				<script>
					function func_for_confirm_upload_slip() {
						$("#modal_upload_file_slip").modal("hide");
						setTimeout(function () {
							$("#modal_form_option_pay_and_address").modal("show");
						}, 500); // 0.5 มิลลิวินาที เท่ากับ 0.5 วินาที
					}
				</script>
			</div>
			<div class="modal-footer py-1">
				<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script>
	function func_save_order() {
		<?php if (is_null($get_my_data['user_address'])) { ?>
			Swal.fire({
				icon: 'error',
				title: "กรุณากรอกที่อยู่จัดส่ง",
				text: ""
			});
			return false;
		<?php } ?>
		page_loading("show");
		formData = new FormData();
		formData.append("action", "save_order");
		formData.append("od_user_name", $("#user_full_name").val()/*$("#user_first_name").val()+" "+$("#user_last_name").val()*/);
		formData.append("od_tell", $("#phone_number").val());
		formData.append("od_geographie_id", $("#thai_geographies").val());
		formData.append("od_province_id", $("#thai_provinces").val());
		formData.append("od_amphur_id", $("#thai_amphures").val());
		formData.append("od_tumbol_id", $("#thai_tambols").val());
		formData.append("od_zipcode", $("#thai_zipcode").val());
		formData.append("od_address", $("#address_detail").val());
		formData.append("od_option_payment", $("#option_payment").val());
		formData.append("status_pay", "0"); // สถานะการชำเงินด้วยระบบภายนอก เช่น Paypal ถ้า = 0 แปลว่าไม่สำเร็จหรือไม่ได้ชำระผ่านระบบภายนอก ถ้า = 1 แปลว่าชำระเงินผ่านระบบภายนอกสำเร็จ
		formData.append("slip_date", $("#slip_date").val());
		formData.append("slip_time", $("#slip_time").val());
		let totalfiles = document.getElementById("slip_file").files.length;
		for (let index = 0; index < totalfiles; index++) {
			formData.append("slip_file", document.getElementById("slip_file").files[index]);
		}
		$.ajax({
			type: "POST",
			url: "<?= $_dr_api ?>/manage_order.php",
			processData: false,
			contentType: false,
			data: formData,
			success: function (respon) {
				let json = JSON.parse(respon);
				if (json["status"] == 1) {
					Swal.fire({
						icon: 'success',
						title: 'สั่งซื้อสำเร็จ',
						text: ""
					}).then((result) => {
						location.href = "order_history.php";
					});
					func_show_cart_items();
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
				page_loading("hide");
			}
		});
	}
	function func_show_cart_items() {
		page_loading("show");
		$.ajax({
			type: "POST",
			url: "<?= $_dr_api ?>/manage_order_list.php",
			data: { "action": "read_order_lists_for_cart" },
			success: function (respon) {
				let json = JSON.parse(respon);
				if (json["status"] == 1) {
					$("#show_cart_items").empty();
					let sum_price = 0;
					let sum_price_all = 0;
					let sum_item = 0;
					for (let i in json["data"]) {
						sum_price = Number(json["data"][i]["pd_price"]) * Number(json["data"][i]["odl_quantity"]);
						let alert_qty = "";
						if (Number(json["data"][i]["pd_stock"]) == 0) {
							alert_qty = `<p style="color:#FF0000;" class="my-1">** สินค้าชิ้นนี้หมดแล้ว หากท่านกดสั่งซื้อ รายการชิ้นนี้จะไม่ถูกบันทึก แต่รายการสินค้าชิ้นอื่นที่เหลือ จะถูกบันทึกตามปกติ</p>`;
						} else if (Number(json["data"][i]["odl_quantity"]) > Number(json["data"][i]["pd_stock"])) {
							alert_qty = `<p style="color:#FF0000;" class="my-1">** จำนวนคงเหลือต่ำกว่าจำนวนที่คุณจะสั่งซื้อ ถ้าหากคุณกดสั่งซื้อ คุณจะได้จำนวนสินค้าตามจำนวนสินค้าคงเหลือในคลัง</p>`
						} else {
							alert_qty = "";
						}
						sum_price_all += sum_price;
						sum_item += 1;
						$("#show_cart_items").append(`
							<div class="card mb-1">
								<div class="card-body py-2">
									<div class="row">
										<div class="col-md-2 px-1">
											<img src="<?= $_dr_storage ?>/products/${json["data"][i]["pd_id"]}/image_main/${json["data"][i]["pd_image"]}" alt="Product Image" style="object-fit: cover;" width="100px" height="100px">
										</div>
										<div class="col-md-7">
											<h5 class="card-title">${json["data"][i]["pd_name"]}</h5>
											<p class="card-text my-1">${json["data"][i]["pd_price"]} x ${json["data"][i]["odl_quantity"]} = <span class="fw-bold px-2 py-1" style="background-color:#6c757d; color:#FFFFFF; border-radius:3px;">${sum_price.toLocaleString()}.-</span></p>
											<p style="color:#FEA838" class="my-1">จำนวนสินค้าที่เหลือในคลังมี ${json["data"][i]["pd_stock"]} ชิ้น</p>
											${alert_qty}
											<button class="btn btn-sm btn-danger" onclick="func_remove_order_lists('${json["data"][i]["odl_id"]}');">Remove</button>
										</div>
										<div class="col-md-3 px-1 mt-2">
											<div class="input-group">
												<button class="btn btn-danger" onclick="reduceItemInCart('${json["data"][i]["pd_id"]}')"> - </button>
												<input type="number" class="form-control text-center" value="${json["data"][i]["odl_quantity"]}" readonly>
												<button class="btn btn-info" onclick="pushItemToCart('${json["data"][i]["pd_id"]}')"> + </button>
											</div>
										</div>
									</div>
								</div>
							</div>
						`);
					}
					$("#show_total_items").html(sum_item);
					$("#show_sum_price").html(sum_price_all.toLocaleString() + ".-");
					let freight = Number(json["freight"]);
					if (freight <= 0 && json["freight_old"] != null) {
						$("#show_freight").html(`<s class="text-danger">${json["freight_old"]}</s> 
												<br> 
												<span class="text-success">`+ freight.toLocaleString() + "</span>.-");
					} else {
						$("#show_freight").html(freight.toLocaleString() + ".-");
					}
					let discount = Number(json["discount"]);
					if (discount > 0) {
						$("#show_discount").html(`<span class="text-danger">${discount.toLocaleString()}</span>.-`);
					} else {
						$("#show_discount").html(discount.toLocaleString() + ".-");
					}
					total_price = (sum_price_all + freight) - discount;
					$(".show_total_price").html(total_price.toLocaleString() + ".-");
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
	func_show_cart_items();

	function func_remove_order_lists(order_lists_id) {
		page_loading("show");
		$.ajax({
			type: "POST",
			url: "<?= $_dr_api ?>/manage_order_list.php",
			data: {
				"action": "delete_order_list",
				"odl_id": order_lists_id
			},
			success: function (respon) {
				let json = JSON.parse(respon);
				if (json["status"] == 1) {
					toastr.success("Success");
					func_show_cart_items();
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
	function pushItemToCart(pd_id) {
		console.log(pd_id);
		let formData = new FormData();
		formData.append("action", "save_order_list");
		formData.append("pd_id", pd_id);
		func_update_quantity(formData);
	}
	function reduceItemInCart(pd_id) {
		console.log(pd_id);
		let formData = new FormData();
		formData.append("action", "save_order_list");
		formData.append("reduce", 1); // ถ้ามีตัวแปรนี้ แปลว่าลดจำนวน
		formData.append("pd_id", pd_id);
		func_update_quantity(formData);
	}
	function func_update_quantity(formData) {
		console.log(formData);
		page_loading("show");
		$.ajax({
			type: "POST",
			processData: false,
			contentType: false,
			url: "<?= $_dr_api ?>/manage_order_list.php",
			data: formData,
			success: function (respon) {
				let json = JSON.parse(respon);
				if (json["status"] == 1) {
					window.toastr.remove();
					toastr.success("Success");
					func_show_cart_items();
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
</script>

<?php
require_once("../../includes/footer.php");
?>