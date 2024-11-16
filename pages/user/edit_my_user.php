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

// ประเภทผู้ใช้
$get_my_data["user_type_obj"] = $database_obj->user_type_int_to_text($get_my_data["user_type"])
	?>
<div class="side-app">

	<!-- PAGE-HEADER -->
	<div class="page-header">
		<div>
			<h1 class="page-title"><i class="fas fa-users"></i> ข้อมูลส่วนตัว</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">ข้อมูลส่วนตัว</li>
			</ol>
		</div>
		<!-- <div class="ms-auto pageheader-btn">
								<a href="#" class="btn btn-primary btn-icon text-white me-2">
									<span>
										<i class="fe fe-plus"></i>
									</span> Button 1
								</a>
								<a href="#" class="btn btn-success btn-icon text-white">
									<span>
										<i class="fe fe-log-in"></i>
									</span> Button 2
								</a>
							</div> -->
	</div>
	<!-- PAGE-HEADER END -->

	<!-- CONTENT START -->
	<!-- <div class="card-header py-1">
								<div class="row">
									<div class="col-sm-10 my-1">
										<h5 class="mb-0">Panel with custom buttons</h5>
									</div>
									<div class="col-sm-2 my-1">
										<a class="btn btn-primary btn-sm py-0">Action</a>
										<a class="btn btn-info btn-sm py-0 ms-1">Action</a>
									</div>
								</div>
							</div> -->
	<!-- <div class="card-body" style="min-height:600px;">
			<form id="form_edit">
				<div class="row">
					<div class="col-md-6 mb-2">
						<div class="form-group mb-3">
							<label for="first_name">ชื่อจริง</label>
							<input type="text" class="form-control check_null"
								value="<?= $get_my_data["user_firstname"] ?>" id="user_firstname" name="user_firstname">
						</div>
						<div class="form-group mb-3">
							<label for="last_name">นามสกุล</label>
							<input type="text" class="form-control check_null"
								value="<?= $get_my_data["user_lastname"] ?>" id="user_lastname" name="user_lastname">
						</div>
						<div class="form-group mb-3">
							<label for="email">อีเมล</label>
							<input type="email" class="form-control check_null" value="<?= $get_my_data["user_email"] ?>"
								id="user_email" name="user_email" readonly>
						</div>
						<div class="form-group mb-3">
							<label for="username">Username</label>
							<input type="text" class="form-control check_null"
								value="<?= $get_my_data["user_username"] ?>" id="user_username" name="user_username"
								readonly>
						</div>
						<div class="form-group mb-3">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="male">
								<label class="form-check-label" for="gender1">
									ชาย
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="female">
								<label class="form-check-label" for="gender2">
									หญิง
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="gender_other">
								<label class="form-check-label" for="gender3">
									เพศอื่นๆ..
								</label>
							</div>
						</div>
						<script>
							<?php
							if ($get_my_data["user_gender"] == 1) {
								echo "document.getElementById('male').checked = true;";
							} else if ($get_my_data["user_gender"] == 2) {
								echo "document.getElementById('female').checked = true;";
							} else {
								echo "document.getElementById('gender_other').checked = true;";
							}
							?>
						</script>
					</div>
					<div class="col-md-6 mb-2">
						<div class="form-group mb-3">
							<label for="user_type">ประเภทผู้ใช้</label>
							<input type="text" class="form-control" value="<?= $get_my_data["user_type_obj"]["thai"] ?>"
								readonly>
						</div>
						<div class="form-group mb-3">
							<label for="register_date">ลงทะเบียนเมื่อวันที่</label>
							<input type="text" class="form-control" value="<?= $get_my_data["user_create_date"] ?>"
								readonly>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-12">
						<button type="submit" class="btn btn-success w-50">บันทึก</button>
					</div>
				</div>
			</form>
		</div> -->
	<div class="row">
		<div class="col-12 col-md-6">
			<div class="card">
				<div class="card-header">
					<h3 class="mb-0">ข้อมูลสมาชิก</h3>
				</div>
				<div class="card-body" style="">
					<form id="form_edit">
						<div class="form-group">
							<label for="first_name">ชื่อจริง</label>
							<input type="text" class="form-control check_null"
								value="<?= $get_my_data["user_firstname"] ?>" id="user_firstname" name="user_firstname">
						</div>
						<div class="form-group">
							<label for="last_name">นามสกุล</label>
							<input type="text" class="form-control check_null"
								value="<?= $get_my_data["user_lastname"] ?>" id="user_lastname" name="user_lastname">
						</div>
						<div class="form-group">
							<label for="email">อีเมล</label>
							<input type="email" class="form-control check_null"
								value="<?= $get_my_data["user_email"] ?>" id="user_email" name="user_email" readonly>
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control check_null"
								value="<?= $get_my_data["user_username"] ?>" id="user_username" name="user_username"
								readonly>
						</div>
						<div class="form-group">
							<label for="user_type">ประเภทผู้ใช้</label>
							<input type="text" class="form-control" value="<?= $get_my_data["user_type_obj"]["thai"] ?>"
								readonly>
						</div>
						<div class="form-group">
							<label for="register_date">ลงทะเบียนเมื่อวันที่</label>
							<input type="text" class="form-control" value="<?= $get_my_data["user_create_date"] ?>"
								readonly>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="male">
								<label class="form-check-label" for="gender1">
									ชาย
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="female">
								<label class="form-check-label" for="gender2">
									หญิง
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="gender_other">
								<label class="form-check-label" for="gender3">
									เพศอื่นๆ..
								</label>
							</div>
						</div>
						<script>
							<?php
							if ($get_my_data["user_gender"] == 1) {
								echo "document.getElementById('male').checked = true;";
							} else if ($get_my_data["user_gender"] == 2) {
								echo "document.getElementById('female').checked = true;";
							} else {
								echo "document.getElementById('gender_other').checked = true;";
							}
							?>
						</script>
						<div class="row text-center">
							<div class="col-12">
								<a href="../../pages/other/send_email_for_password_reset.php" class="btn btn-primary w-25">รีเซ็ทรหัสผ่าน</a>
								<button type="submit" class="btn btn-success w-50">บันทึกข้อมูล</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="card">
				<div class="card-header">
					<h3 class="mb-0">ที่อยู่สำหรับจัดส่ง</h3>
				</div>
				<div class="card-body" style="">
					<div class="row">
						<!-- <div class="col-6 col-md-4">
							<p><span class="fw-bold">ชื่อผู้ใช้ในระบบ : </span></p>
						</div>
						<div class="col-6 col-md-8">
							<p>
								<?php echo $get_my_data['user_firstname'] ?>
								<?php echo $get_my_data['user_lastname'] ?>
							</p>
							<input value="<?php echo $get_my_data['user_firstname'] ?>" type="hidden"
								name="user_first_name" id="user_first_name">
							<input value="<?php echo $get_my_data['user_lastname'] ?>" type="hidden"
								name="user_last_name" id="user_last_name">
						</div> -->
						<!-- <div class="col-6 col-md-4">
							<p><span class="fw-bold">อีเมลล์ : </span></p>
						</div>
						<div class="col-6 col-md-8">
							<p>
								<?php echo $get_my_data['user_email'] ?>
							</p>
							<input value="<?php echo $get_my_data['user_email'] ?>" type="hidden" name="user_email"
								id="user_email">
						</div> -->
						<?php if (!is_null($get_my_data['user_address'])) { ?>

							<div class="col-6 col-md-4">
								<p><span class="fw-bold">ชื่อที่ใช้ในการจัดส่ง : </span></p>
							</div>
							<div class="col-6 col-md-8">
								<p>
									<?php echo $get_my_data['user_fullname_for_order'] ?>
								</p>
								<input value="<?php echo $get_my_data['user_fullname_for_order'] ?>" type="hidden"
									name="user_full_name" id="user_full_name">
							</div>
							<div class="col-6 col-md-4">
								<p><span class="fw-bold">เบอร์โทรศัพท์ : </span></p>
							</div>
							<div class="col-6 col-md-8">
								<p>
									<?php echo $get_my_data['user_phonenumber'] ?>
								</p>
								<input value="<?php echo $get_my_data['user_phonenumber'] ?>" type="hidden"
									name="phone_number" id="phone_number">
							</div>
							<div class="col-6 col-md-4">
								<p><span class="fw-bold">รายละเอียดที่อยู่ : </span></p>
							</div>
							<div class="col-6 col-md-8">
								<p>
									<?php echo $get_my_data['user_address'] ?>
								</p>
								<input value="<?php echo $get_my_data['user_address'] ?>" type="hidden"
									name="address_detail" id="address_detail">
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
								<input value="<?php echo $get["data"][0]['zip_code'] ?>" type="hidden" name="thai_zipcode"
									id="thai_zipcode">
							</div>
							<div class="col-6 col-md-4">
								<p><span class="fw-bold">ตำบล : </span></p>
							</div>
							<div class="col-6 col-md-8">
								<p>
									<?php echo $get["data"][0]['name_th'] ?>
								</p>
								<input value="<?php echo $get["data"][0]['id'] ?>" type="hidden" name="thai_tambols"
									id="thai_tambols">
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
								<input value="<?php echo $get["data"][0]['id'] ?>" type="hidden" name="thai_amphures"
									id="thai_amphures">
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
								<input value="<?php echo $get["data"][0]['id'] ?>" type="hidden" name="thai_provinces"
									id="thai_provinces">
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
	<!-- CONTENT END -->
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
							<input value="" type="text" class="form-control check_required" name="edit_user_full_name"
								id="edit_user_full_name" maxlength="120" required>
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
								placeholder="ระบุรายละเอียดที่อยู่ เช่น เลขที่ หมู่ ถนน/ซอย" maxlength="250"></textarea>
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

<script>
	$(function () {
		/** Ajax Submit Login */
		$("#form_edit").submit(function (e) { // เมื่อกด submit ของ Form ที่มี id="formLogin" มันก็จะรันคำสั่ง
			let gender = 0;
			if (document.getElementById("male").checked) {
				gender = 1;
			} else if (document.getElementById("female").checked) {
				gender = 2;
			} else if (document.getElementById("gender_other").checked) {
				gender = 3;
			}
			e.preventDefault() // หยุดการทำงานของ Even หลัก หรือก็ืคือ ทำให้หน้าเว็บไม่รีเฟรชเมื่อเรากด submit

			let check_null = true;
			for (let i = 0; i < document.getElementsByClassName("check_null").length; i++) {
				let val = document.getElementsByClassName("check_null")[i].value;
				if (val == "") {
					check_null = false;
				}
			}
			if (check_null === false) {
				Swal.fire({
					icon: 'error',
					title: 'ผิดพลาด',
					text: 'กรุณากรอกข้อมูลให้ครบ'
				});
				return false;
			}

			let isNumber = /^\d+$/.test($("#user_firstname").val());
			if (isNumber) {
				Swal.fire({
					icon: 'error',
					title: 'ผิดพลาด',
					text: 'กรุณากรอกชื่อจริงเป็นตัวอักษร'
				});
				return false;
			}
			isNumber = /^\d+$/.test($("#user_lastname").val());
			if (isNumber) {
				Swal.fire({
					icon: 'error',
					title: 'ผิดพลาด',
					text: 'กรุณากรอกนามสกุลเป็นตัวอักษร'
				});
				return false;
			}

			$.ajax({
				type: "POST",
				url: "<?= $_dr_api ?>/manage_user.php", // end point api คือส่ง api ไปยังปลายทางที่ระบุไว้
				data: {
					"action": "edit_mydata_user",
					"data": $(this).serialize(),
					"gender": gender
				},
				success: function (respon) {
					let json = JSON.parse(respon);
					if (json["status"] == 1) {
						Swal.fire({
							icon: 'success',
							title: 'สำเร็จ',
							text: 'บันทึกข้อมูลสำเร็จ'
						});
					} else {
						toastr.error(json["error"]);
					}
				},
				error: function (error) {
					toastr.error(error.statusText);
				}
			})
		})
	})
</script>
<?php require_once("../../includes/footer.php"); ?>