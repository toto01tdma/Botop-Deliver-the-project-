<?php 
	require_once("../../includes/header.php");
	if(!$_check_session_user){
		echo "<script>  location.href = '../../pages/homepage/';  </script>";
		exit;
	}else if(($_SESSION["user"]["user_type"] == 1) === false){
        echo "<script>  location.href = '../../pages/homepage/';  </script>";
        exit;
    }
?>
					<div class="side-app">

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">จัดการโปรโมชั่น</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">จัดการโปรโมชั่น</li>
								</ol>
							</div>
						</div>
						<!-- PAGE-HEADER END -->

                        <!-- CONTENT START -->
                        <div class="card">
                            <div class="card-body">
								<div class="row mb-2">
									<!-- <form class="col" onsubmit="return func_list_products(0);">
										<div class="input-group">
											<input type="text" id="keyword_search_products" class="form-control" value="" placeholder="Search for...">
											<button class="btn btn-success" type="submit"><i class="fa fa-search"></i> ค้นหาสินค้า</button>
										</div>
									</form> -->
									<div class="col-auto">
										<button class="btn btn-primary" onclick="reset_form_all(); $('#modal_form_manage_promotion').modal('show');"><i class="fa fa-plus"></i> เพิ่มโปรโมชั่น</button>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-striped table-hover text-nowrap align-middle mb-0">
										<thead class="border-top">
											<tr>
												<th class="text-center" scope="col">#</th>
												<th class="text-center" scope="col">โปรโมชั่น</th>
												<th class="text-center" scope="col"><span class="text-success">วันที่เพิ่มโปรโมชั่น</span> <br> <span class="text-danger">วันที่สิ้นสุดโปรโมชั่น</span></th>
												<th class="text-center" scope="col">เงื่อนไขการรับสิทธิโปรโมชั่น</th>
												<th class="text-center" scope="col">สิทธิ์ส่งฟรี</th>
												<th class="text-center" scope="col">จัดการ</th>
											</tr>
										</thead>
										<tbody id="show_promotions" class="border-bottom">
										</tbody>
									</table>
								</div>
								<div class="row">
									<div class="col-12 text-end">
										<div id="content_pagination_promotions">
										</div>
									</div>
								</div>
                            </div>
                        </div>
                        <!-- CONTENT END -->
					</div>

	<!-- Modal จัดการโปรโมชั่น -->
    <div class="modal fade" id="modal_form_manage_promotion" tabindex="-1" aria-labelledby="modal_label_manage_promotion" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_label_manage_promotion">จัดการโปรโมชั่น</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
					<form onsubmit="return func_save_promotions();">
						<div class="mb-3">
							<label for="promotionName" class="form-label">ชื่อโปรโมชั่น</label>
							<input type="text" class="form-control cls_input_form check_input_form_not_null" id="promotionName" name="promotionName" maxlength="60" required>
						</div>
						<div class="mb-3">
							<label for="startDate" class="form-label">วันที่เริ่มโปรโมชั่น</label>
							<input type="date" class="form-control cls_input_form check_input_form_not_null" id="startDate" name="startDate" required>
						</div>
						<div class="mb-3">
							<label for="endDate" class="form-label">วันที่สิ้นสุดโปรโมชั่น</label>
							<input type="date" class="form-control cls_input_form check_input_form_not_null" id="endDate" name="endDate" required>
						</div>
						<script>
							// ป้องกันไม่ให้เลือก "วันที่สิ้นสุดโปรโมชั่น" เป็นวันที่ก่อนปัจจุบัน
							document.getElementById("endDate").addEventListener("change", function() {
								var selectedDate = new Date(this.value);
								var currentDate = new Date();

								if (selectedDate < currentDate) {
									alert("ไม่สามารถเลือกวันที่ก่อนวันที่ปัจจุบันได้");
									this.value = ""; // ล้างค่าวันที่ที่เลือก
								}
							});
						</script>
						<div class="mb-3 card px-3 pb-3 bg-secondary-transparent">
							<label class="form-label">เงื่อนไขการรับสิทธิโปรโมชั่น</label>
							<div class="form-check">
								<input class="form-check-input cls_form_for_checkbox_and_radio" type="radio" onclick="func_show_input_form_for_condition_promotion();" name="radioConditionPromotionType" id="radio_condition_is_amount" value="radio_condition_is_amount" checked>
								<label class="form-check-label" for="radio_condition_is_amount">จำนวนเงินรวมทั้งหมด</label>
							</div>
							<div class="form-check">
								<input class="form-check-input cls_form_for_checkbox_and_radio" type="radio" onclick="func_show_input_form_for_condition_promotion();" name="radioConditionPromotionType" id="radio_condition_is_quantity" value="radio_condition_is_quantity">
								<label class="form-check-label" for="radio_condition_is_quantity">จำนวนสินค้าของสินค้าที่เชื่อมไว้</label>
							</div>
							<script>
								function func_show_input_form_for_condition_promotion(){
									$(".hidden_element_for_condition_promotion").addClass("d-none");
									$(".pmt_condition_for_remove_class_check").removeClass("check_input_form_not_null");
									if($("#radio_condition_is_amount").prop("checked")){
										$("#show_input_form_condition_promotion_amount").removeClass("d-none");
										$("#pmt_condition_amount").addClass("check_input_form_not_null");
									}else if($("#radio_condition_is_quantity").prop("checked")){
										$("#show_input_form_condition_promotion_quantity").removeClass("d-none");
										$("#pmt_condition_quantity").addClass("check_input_form_not_null");
									}
								}
							</script>
							<div class="hidden_element_for_condition_promotion" id="show_input_form_condition_promotion_amount">
								<label for="discountValue" class="form-label">ระบุจำนวนเงินทั้งหมด</label>
								<div class="input-group">
									<input type="number" class="form-control cls_input_form pmt_condition_for_remove_class_check" id="pmt_condition_amount" name="pmt_condition_amount" min="1">
									<label class="input-group-text" for="">บาท</label>
								</div>
							</div>
							<div class="hidden_element_for_condition_promotion" id="show_input_form_condition_promotion_quantity">
								<label for="percentDiscountValue" class="form-label">ระบุจำนวนของสินค้า</label>
								<div class="input-group">
									<input type="number" class="form-control cls_input_form pmt_condition_for_remove_class_check" id="pmt_condition_quantity" name="pmt_condition_quantity" min="1">
									<label class="input-group-text" for="">ชิ้น</label>
								</div>
							</div>
						</div>
						<div class="mb-3 card px-3 py-3 bg-success-transparent">
							<div class="form-check">
								<input class="form-check-input cls_form_for_checkbox_and_radio" type="checkbox" name="freeShipping" id="freeShipping" value="freeShipping">
								<label class="form-check-label" for="freeShipping">ค่าส่งฟรี</label>
							</div>
						</div>
						<div class="mb-3 card px-3 pb-3 bg-info-transparent">
							<label class="form-label">ประเภทโปรโมชั่น</label>
							<div class="form-check">
								<input class="form-check-input cls_form_for_checkbox_and_radio" type="radio" onclick="func_show_input_form_for_promotion_type_discount();" name="radioPromotionDiscountType" id="noDiscount" value="noDiscount">
								<label class="form-check-label" for="noDiscount">ไม่มีส่วนลด</label>
							</div>
							<div class="form-check">
								<input class="form-check-input cls_form_for_checkbox_and_radio" type="radio" onclick="func_show_input_form_for_promotion_type_discount();" name="radioPromotionDiscountType" id="discountType" value="discountType">
								<label class="form-check-label" for="discountType">ส่วนลด</label>
							</div>
							<div class="form-check">
								<input class="form-check-input cls_form_for_checkbox_and_radio" type="radio" onclick="func_show_input_form_for_promotion_type_discount();" name="radioPromotionDiscountType" id="percentageDiscountType" value="percentageDiscountType">
								<label class="form-check-label" for="percentageDiscountType">เปอร์เซนต์ส่วนลด</label>
							</div>
							<script>
								function func_show_input_form_for_promotion_type_discount(){
									$(".hidden_element_for_discount").addClass("d-none");
									$(".pmt_discount_for_remove_class_check").removeClass("check_input_form_not_null");
									if($("#discountType").prop("checked")){
										$("#show_input_form_discount_value").removeClass("d-none");
										$("#discountValue").addClass("check_input_form_not_null");
									}else if($("#percentageDiscountType").prop("checked")){
										$("#show_input_form_percent_discount_value").removeClass("d-none");
										$("#percentDiscountValue").addClass("check_input_form_not_null");
									}
								}
							</script>
							<div class="hidden_element_for_discount" id="show_input_form_discount_value">
								<label for="discountValue" class="form-label">ระบุส่วนลด</label>
								<div class="input-group">
									<input type="number" class="form-control cls_input_form pmt_discount_for_remove_class_check" id="discountValue" name="discountValue" min="1">
									<label class="input-group-text" for="validatedInputGroupSelect">บาท</label>
								</div>
							</div>
							<div class="hidden_element_for_discount" id="show_input_form_percent_discount_value">
								<label for="percentDiscountValue" class="form-label">ระบุเปอร์เซนต์ส่วนลด</label>
								<div class="input-group">
									<input type="number" class="form-control cls_input_form pmt_discount_for_remove_class_check" id="percentDiscountValue" name="percentDiscountValue" min="1" max="80">
									<label class="input-group-text" for="validatedInputGroupSelect">%</label>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="promotionDetails" class="form-label">รายละเอียดโปรโมชั่น</label>
							<textarea class="form-control cls_input_form check_input_form_not_null" id="promotionDetails" rows="3" required></textarea>
						</div>
						<div class="text-center">
							<input class="cls_input_form" type="hidden" id="pmt_id" name="pmt_id" value="">
							<button type="submit" class="btn btn-success w-75">บันทึก</button>
						</div>
					</form>
					<script>
						function func_save_promotions(){
							page_loading("show");

							// ตรวจสอบว่าช่องกรอก กรอกครบหรือไม่
							let check_have_error = true;
							let input_form_all = document.getElementsByClassName("check_input_form_not_null");
							for(let i = 0; i < input_form_all.length; i++){
								if(input_form_all[i].value == ""){
									check_have_error = false;
									Swal.fire({
										title: 'ตรวจสอบ',
										text: 'กรุณากรอกข้อมูลให้ครบ',
										icon: 'warning',
										confirmButtonText: 'ตกลง'
									});
									page_loading("hide");
									return false;
								}
							}

							// ตรวจสอบว่าได้ติ๊กเงื่อนไขการรับโปรโมชั่นหรือไม่
							let check_radio_pmt_condition_error = false;
							if ($("#radio_condition_is_amount").is(":checked")) {
								check_radio_pmt_condition_error = true;
							} else if ($("#radio_condition_is_quantity").is(":checked")) {
								check_radio_pmt_condition_error = true;
							}
							if(check_radio_pmt_condition_error === false){
								Swal.fire({
									title: 'ตรวจสอบ',
									text: 'กรุณาเลือกเงื่อนไขการรับสิทธิโปรโมชั่น',
									icon: 'warning',
									confirmButtonText: 'ตกลง'
								});
								page_loading("hide");
								return false;
							}

							// ตรวจสอบว่าได้ติ๊กส่วนลดของโปรโมชั่นหรือไม่
							let check_radio_pmt_discount_error = false;
							if ($("#noDiscount").is(":checked")) {
								check_radio_pmt_discount_error = true;
							} else if ($("#discountType").is(":checked")) {
								check_radio_pmt_discount_error = true;
							} else if ($("#percentageDiscountType").is(":checked")) {
								check_radio_pmt_discount_error = true;
							}
							if(check_radio_pmt_discount_error === false){
								Swal.fire({
									title: 'ตรวจสอบ',
									text: 'กรุณาเลือกประเภทส่วนลดโปรโมชั่น',
									icon: 'warning',
									confirmButtonText: 'ตกลง'
								});
								page_loading("hide");
								return false;
							}

							if(check_have_error && check_radio_pmt_condition_error && check_radio_pmt_discount_error){
								// ถ้า $("#pmt_id").val() == "" แปลว่ากำลังสร้างข้อมูลสินค้า
								// ถ้า $("#pmt_id").val() != "" แปลว่ากำลังแก้ไขข้อมูลสินค้า
								let formData = new FormData();
								formData.append("action", "save_promotions");
								formData.append("pmt_id", $("#pmt_id").val());
								formData.append("pmt_name", $("#promotionName").val());
								formData.append("pmt_start_date", $("#startDate").val());
								formData.append("pmt_timeout", $("#endDate").val());

								let pmt_condition_type
								if($("#radio_condition_is_amount").prop("checked")){
									pmt_condition_type = 1;
									formData.append("pmt_condition_amount", $("#pmt_condition_amount").val());
								}else if($("#radio_condition_is_quantity").prop("checked")){
									pmt_condition_type = 2;
									formData.append("pmt_condition_quantity", $("#pmt_condition_quantity").val());
								}else{
									pmt_condition_type = 0;
								}
								formData.append("pmt_condition_type", pmt_condition_type);

								let pmt_discount_type;
								if($("#discountType").prop("checked")){
									pmt_discount_type = 1;
									formData.append("pmt_discount", $("#discountValue").val());
								}else if($("#percentageDiscountType").prop("checked")){
									pmt_discount_type = 2;
									formData.append("pmt_percent_discount", $("#percentDiscountValue").val());
								}else{
									pmt_discount_type = 0;
								}
								formData.append("pmt_discount_type", pmt_discount_type);

								let pmt_free_shipping = ($("#freeShipping").prop("checked")) ? 1 : 0;
								formData.append("pmt_free_shipping", pmt_free_shipping);
								formData.append("pmt_detail", $("#promotionDetails").val());
								$.ajax({
									type:"POST",
									processData: false,
									contentType: false,
									url:"<?=$_dr_api?>/manage_promotions.php",
									data: formData ,
									// dataType : 'JSON',
									success:function(respon){
										let json = JSON.parse(respon);
										if(json["status"] == 1){
											Swal.fire({
												icon: 'success',
												title: 'สำเร็จ',
												text: 'บันทึกข้อมูลสำเร็จ'
											});
											func_list_promotions(curent_page);
											$("#modal_form_manage_promotion").modal("hide");
										}else{
											Swal.fire({
												icon: 'error',
												title: 'ผิดพลาด',
												text: json["error"]
											})
										}
										page_loading("hide");
									},
									error:function(error){
										toastr.error(error.statusText);
										page_loading("hide");
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
        var curent_page = 0;
        function func_list_promotions(page){
            curent_page = page;
            page_loading("show");
            $.ajax({
                type: "POST",
                url: "<?=$_dr_api?>/manage_promotions.php",
                data: { 
					"action" : "read_promotions", 
					"page" : page, 
					"keyword" : ""//$("#keyword_search_users").val() 
				},
                success:function(respon){
                    let json = JSON.parse(respon);
                    if(json["status"] == 1){
                        let html = "";
                        for(let i in json["data"]){
							let row = json["data"][i];
							let pmt_free_shipping = (row["pmt_free_shipping"] == 1) ? "<span class='text-success'>มี</span>" : "<span class='text-danger'>ไม่มี</span>" ;
                            html += `<tr>`;
							html += `	<td class="p-1 text-center">${Number(i)+1}</td>`;
							html += `	<td class="p-1">${row["pmt_name"]}</td>`;
							html += `	<td class="p-1"><span class="text-success">${row["pmt_start_date"]}</span> <br> <span class="text-danger">${row["pmt_timeout"]}</span></td>`;
							if(row["pmt_condition_type"] == 1){
								html += `<td class="p-1">ซื้อสินค้าครบ ${row["pmt_condition_amount"]} บาท</td>`;
							}else if(row["pmt_condition_type"] == 2){
								html += `<td class="p-1">ซื้อสินค้าที่เชื่อมไว้ครบ ${row["pmt_condition_quantity"]} ชิ้น</td>`;
							}
							html += `	<td class="p-1 text-center">${pmt_free_shipping}</td>`;
							html += `	<td class="p-1 text-center">
											<button onclick="func_preview_update_promotions('${row["pmt_id"]}')" class="w-100 py-0 btn btn-warning mb-1">แก้ไข</button> <br>
											<button onclick="func_delete_promotions('${row["pmt_id"]}')" class="w-100 py-0 btn btn-danger">ลบ</button>
										</td>`;
							html += `</tr>`;
                        }
						$("#show_promotions").html(html);
                        show_pagination("func_list_promotions", "content_pagination_promotions", json["count_all"], curent_page);
                    }else{
                        toastr.error(json["error"]);
                    }
					page_loading("hide");
                },
				error:function(error){
					toastr.error(error.statusText);
					page_loading("hide");
                }
            });
            return false;
        }
        func_list_promotions(curent_page);

		function func_preview_update_promotions(pmt_id){
			reset_form_all();
			page_loading("show");
			$.ajax({
				type: "POST",
				url: "<?=$_dr_api?>/manage_promotions.php",
				data: { 
					"action":"read_promotions", 
					"keyword":"", 
					"pmt_id":pmt_id
				},
				success:function(respon){
					let json = JSON.parse(respon);
					$("#pmt_id").val(json["data"][0]["pmt_id"]);
					$("#promotionName").val(json["data"][0]["pmt_name"]);
					$("#startDate").val(json["data"][0]["pmt_start_date"]);
					$("#endDate").val(json["data"][0]["pmt_timeout"]);
					$("#minAmount").val(json["data"][0]["pmt_amount"]);
					$("#promotionDetails").val(json["data"][0]["pmt_detail"]);
					(json["data"][0]["pmt_free_shipping"] == 1) ? $("#freeShipping").prop("checked", true) : $("#freeShipping").prop("checked", false);
					
					$(".hidden_element_for_condition_promotion").addClass("d-none");
					if(json["data"][0]["pmt_condition_type"] == 1){
						$("#radio_condition_is_amount").prop("checked", true);
						$("#pmt_condition_amount").val(json["data"][0]["pmt_condition_amount"]);
						$("#show_input_form_condition_promotion_amount").removeClass("d-none");
					}else if(json["data"][0]["pmt_condition_type"] == 2){
						$("#radio_condition_is_quantity").prop("checked", true);
						$("#pmt_condition_quantity").val(json["data"][0]["pmt_condition_quantity"]);
						$("#show_input_form_condition_promotion_quantity").removeClass("d-none");
					}

					$(".hidden_element_for_discount").addClass("d-none");
					if(json["data"][0]["pmt_discount_type"] == 1){
						$("#discountType").prop("checked", true);
						$("#discountValue").val(json["data"][0]["pmt_discount"]);
						$("#show_input_form_discount_value").removeClass("d-none");
					}else if(json["data"][0]["pmt_discount_type"] == 2){
						$("#percentageDiscountType").prop("checked", true);
						$("#percentDiscountValue").val(json["data"][0]["pmt_percent_discount"]);
						$("#show_input_form_percent_discount_value").removeClass("d-none");
					}else{
						$("#noDiscount").prop("checked", true);
					}

					$("#modal_form_manage_promotion").modal("show");
					page_loading("hide");
				},
				error:function(error){
				toastr.error(error.statusText);
				page_loading("hide");
				}
			});
        }
		function func_delete_promotions(pmt_id){
			Swal.fire({
				title: 'ยืนยันการลบ',
				text: "ต้องการลบใช่หรือไม่!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#d33',
				cancelButtonColor: '#3085d6',
				confirmButtonText: 'Ok'
			}).then((result) => {
				if(result.isConfirmed) {
					page_loading("show");
					$.ajax({
						type: "POST",
						url: "<?=$_dr_api?>/manage_promotions.php",
						data: { 
							"action" : "delete_promotions", 
							"pmt_id" : pmt_id
						},
						success:function(respon){
							let json = JSON.parse(respon);
							if(json["status"] == 1){
								toastr.success("Success");
								func_list_promotions(curent_page);
							}else{
								toastr.error(json["error"]);
							}
							page_loading("hide");
						},
						error:function(error){
							toastr.error(error.statusText);
							page_loading("hide");
						}
					});
				}
          	})
          	return false;
		}

		function reset_form_all(){
			$(".cls_input_form").val("");
			$(".hidden_element_for_discount").addClass("d-none");
			$(".hidden_element_for_condition_promotion").addClass("d-none");
			$(".cls_form_for_checkbox_and_radio").prop("checked", false);
			
			return false;
        }
	</script>
<?php require_once("../../includes/footer.php"); ?>