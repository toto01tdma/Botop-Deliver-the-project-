<?php require_once("../../includes/header.php"); ?>
					<div class="side-app">

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">กำหนดโปรโมชั่น</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">กำหนดโปรโมชั่น</li>
								</ol>
							</div>
						</div>
						<!-- PAGE-HEADER END -->

                        <!-- CONTENT START -->
						<div class="row">
							<div class="col-12 col-md-6 px-1">
								<div class="card">
									<div class="card-header">
										<h5 class="mb-0">สินค้า <span class="badge bg-primary" id="product_count">0</span> </h5>
										<div class="card-options">
											<form onsubmit="return func_list_products();" class="input-group">
												<input type="search" class="form-control" id="keyword_search_product" name="keyword_search_product" value="" placeholder="ระบุชื่อสินค้าเพื่อค้นหา..." aria-label="Search">
												<button class="btn btn-success"><i class="ion ion-search"></i></button>
											</form>
										</div>
									</div>
									<div class="card-body p-2" style="height:450px; overflow-y:auto;">
										<div class="accordion" id="show_products">

										</div>
										<script>
											function func_list_products(){
												let keyword = $("#keyword_search_product").val();
												page_loading("show");
												$.ajax({
													type: "POST",
													url: "<?=$_dr_api?>/manage_product.php",
													data: { 
														"action":"read_products", 
														"keyword":keyword
													},
													success:function(respon){
														let json = JSON.parse(respon);
														if(json["status"] == 1){
															let html = "";
															for(let i in json["data"]){
																let row = json["data"][i];
																html += `<div class="accordion-item">`;
																html += `	<h2 class="accordion-header" id="heading_pd${row["pd_id"]}">`;
																html += `		<button onclick="func_list_promotion_of_product('${row["pd_id"]}')" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_pd${row["pd_id"]}" aria-expanded="false" aria-controls="collapse_pd${row["pd_id"]}">
																					#${Number(i)+1} ${row["pd_name"]}
																				</button>`;
																html += `	</h2>`;
																html += `	<div id="collapse_pd${row["pd_id"]}" class="accordion-collapse collapse" aria-labelledby="heading_pd${row["pd_id"]}" data-bs-parent="#show_products">`;
																html += `		<div class="accordion-body">
																					<div class="row">
																						<div class="col-12 col-md-4">
																							<img class="img-fluid w-100" src="<?=$_dr_storage?>/products/${row["pd_id"]}/image_main/${row["pd_image"]}">
																						</div>
																						<div class="col-12 col-md-8">
																							<p><span class="fw-bold">ราคาสินค้า : </span> ${row["pd_price"]} บาท</p>
																							<p><span class="fw-bold">หมวดหมู่ : </span> ${row["ctgr_name"]}</p>
																							<p><span class="fw-bold">ค่าขนส่งของสินค้า : </span> ${row["pd_freight"]} บาท</p>
																							<p><span class="fw-bold">ระยะเวลาที่ควรชำระเงิน : </span> ${row["pd_payment_period"]} วัน</p>
																						</div>
																					</div>
																				</div>`;
																html += `	</div>`;
																html += `</div>`;
															}
															$("#show_products").html(html);
															$("#product_count").html(json["count_all"]+" รายการ");
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
											func_list_products();

											function func_list_promotion_of_product(pd_id){
												pd_id_for_manage_promotion = pd_id;
												page_loading("show");
												$.ajax({
													type: "POST",
													url: "<?=$_dr_api?>/manage_promotions.php",
													data: { 
														"action" : "read_promotion_of_product", 
														"pd_id" : pd_id
													},
													success:function(respon){
														let json = JSON.parse(respon);
														if(json["status"] == 1){
															let html = "";
															for(let i in json["data"]){
																let row = json["data"][i];
																html += `<div class="accordion-item">`;
																html += `	<h2 class="accordion-header" id="heading_pmt${row["pdcnpmt_id"]}">`;
																html += `		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_pmt${row["pdcnpmt_id"]}" aria-expanded="false" aria-controls="collapse_pmt${row["pdcnpmt_id"]}">
																					#${Number(i)+1} ${row["pmt_name"]}
																				</button>`;
																html += `	</h2>`;
																html += `	<div id="collapse_pmt${row["pdcnpmt_id"]}" class="accordion-collapse collapse" aria-labelledby="heading_pmt${row["pdcnpmt_id"]}" data-bs-parent="#show_promotion_of_product">`;
																html += `		<div class="accordion-body">
																					<p><span class="fw-bold">วันที่เริ่มโปรโมชั่น : </span> ${row["pmt_start_date"]} บาท</p>
																					<p><span class="fw-bold">วันที่หมดเขตโปรโมชั่น : </span> ${row["pmt_timeout"]} บาท</p>
																					<p><span class="fw-bold">วันที่หมดเขตโปรโมชั่น : </span> ${row["pmt_timeout"]} บาท</p>
																					<p class="text-center"><button class="btn btn-danger w-75" onclick="func_remove_product_connect_promotion('${row["pdcnpmt_id"]}');">ลบ</button></p>
																				</div>`;
																html += `	</div>`;
																html += `</div>`;
															}
															$("#show_promotion_of_product").html(html);
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
										</script>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 px-1">
								<div class="card">
									<div class="card-header">
										<h5 class="mb-0">โปรโมชั่น</h5>
										<div class="card-options">
											<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal_form_add_promotion">เชื่อมโปรโมชั่น</button>
										</div>
									</div>
									<div class="card-body p-2" style="height:450px; overflow-y:auto;">
										<div class="accordion" id="show_promotion_of_product">
											<h1 class="text-center my-5 py-5">คลิกที่รายชื่อสินค้าเพื่อกำหนดโปรโมชั่น</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <!-- CONTENT END -->
					</div>

	<!-- Modal จัดการหมวดหมู่สินค้า -->
    <div class="modal fade" id="modal_form_add_promotion" tabindex="-1" aria-labelledby="modal_label_add_promotion" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_label_add_promotion">เชื่อมโปรโมชั่น</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body" id="show_for_add_promotion">
					
                </div>
                <div class="modal-footer py-1">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

	<script>
		var pd_id_for_manage_promotion = "";
											function func_list_promotions(){
												page_loading("show");
												$.ajax({
													type: "POST",
													url: "<?=$_dr_api?>/manage_promotions.php",
													data: { 
														"action" : "read_promotions"
													},
													success:function(respon){
														let json = JSON.parse(respon);
														if(json["status"] == 1){
															let html = "";
															for(let i in json["data"]){
																let row = json["data"][i];
																html += `<div class="card mb-2">`;
																html +=		`<div class="card-body py-2">`;
																html +=			`<div class="row">`;
																html +=				`<div class="col px-0">`;
																html +=					`<h4>${row["pmt_name"]}</h4>`;
																html +=					`<p><span class="fw-bold">ขอบเขตโปรโมชั่น :</span> <span class="text-success">${row["pmt_start_date"]}</span> - <span class="text-danger">${row["pmt_timeout"]}</span></p>`;
																html +=				`</div>`;
																html +=				`<div class="col-1 px-0">`;
																html +=					`<button class="btn btn-success fw-bold" onclick="func_add_product_connect_promotion('${row["pmt_id"]}');">+</button>`;
																html +=				`</div>`;
																html +=			`</div>`;
																html +=		`</div>`;
																html +=	`</div>`;
															}
															$("#show_for_add_promotion").html(html);
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
											func_list_promotions();

											function func_add_product_connect_promotion(pmt_id){
												page_loading("show");
												$.ajax({
													type: "POST",
													url: "<?=$_dr_api?>/manage_promotions.php",
													data: { 
														"action" : "add_product_connect_promotion", 
														"pd_id" : pd_id_for_manage_promotion,
														"pmt_id" : pmt_id
													},
													success:function(respon){
														let json = JSON.parse(respon);
														if(json["status"] == 1){
															toastr.remove();
															toastr.success("สำเร็จ");
															func_list_promotion_of_product(pd_id_for_manage_promotion);
															$("#modal_form_add_promotion").modal("hide");
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

											function func_remove_product_connect_promotion(pdcnpmt_id){
												Swal.fire({
													title: 'ยืนยันการลบ',
													text: "ต้องการลบใช่หรือไม่!",
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
															url: "<?=$_dr_api?>/manage_promotions.php", 
															data: { 
																"action":"remove_product_connect_promotion", 
																"pdcnpmt_id": pdcnpmt_id
															},
															success:function(respon){
																let json = JSON.parse(respon);
																if(json["status"] == 1){
																	toastr.remove();
																	toastr.success("ลบสำเร็จ");
																	func_list_promotion_of_product(pd_id_for_manage_promotion);
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
										</script>

<?php require_once("../../includes/footer.php"); ?>