<?php
require_once("../../includes/header.php");

// ดึงข้อมูลสินค้า
$stmt = $pdo->prepare("SELECT * FROM products INNER JOIN categorys ON products.ctgr_id = categorys.ctgr_id WHERE products.pd_id = :pd_id LIMIT 1"); // ใส่โค้ด Sql ลงไป
$stmt->bindValue(':pd_id', $_GET["product_id"], PDO::PARAM_INT);
$get = $database_obj->qrySql($stmt);
if ($get["count_all"] <= 0) { // ถ้าไม่เจอสินค้าเลย จะปิดการทำงานทันที
	exit;
}
$get_product = $get["data"][0];

// ดึงรูปหน้าปก
$stmt = $pdo->prepare("SELECT pd_img_name FROM product_images WHERE pd_id = :pd_id AND pd_img_status_cover = 1 LIMIT 1"); // ใส่โค้ด Sql ลงไป
$stmt->bindValue(':pd_id', $_GET["product_id"], PDO::PARAM_INT);
$get = $database_obj->qrySql($stmt);
$get_product["pd_image"] = $get["data"][0]["pd_img_name"];

// ดึงรูปสินค้ามาทั้งหมด
$stmt = $pdo->prepare("SELECT pd_img_name FROM product_images WHERE pd_id = :pd_id AND pd_img_status_cover = 0"); // ใส่โค้ด Sql ลงไป
$stmt->bindValue(':pd_id', $_GET["product_id"], PDO::PARAM_INT);
$get = $database_obj->qrySql($stmt);
$holdData["pd_img_name"] = $get_product["pd_image"];
array_unshift($get["data"], $holdData);
$get_product_img = $get["data"];

$image_index = 0;
$count_image = count($get_product_img);
$count_image_on_slide = 3; // จำนวนรูปต่อ 1 สไลด์

$count_slide = ceil($count_image / $count_image_on_slide);
?>
<div class="side-app">

	<!-- PAGE-HEADER -->
	<div class="page-header">
		<div>
			<h1 class="page-title">
				<?= $get_product["pd_name"] ?>
			</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">รายละเอียดสินค้า</a></li>
				<li class="breadcrumb-item active" aria-current="page">
					<?= $get_product["pd_name"] ?>
				</li>
			</ol>
		</div>
	</div>
	<!-- PAGE-HEADER END -->
	<!-- CONTENT START -->
	<div class="card mb-2">
		<div class="card-header">
			<a href="../../pages/homepage/" class="btn btn-dark"><i class="bi bi-caret-left-fill"></i> ย้อนกลับ</a>
			<!-- <div class="card-options">
									<a href="#" class="btn btn-primary btn-sm">Action 1</a>
									<a href="#" class="btn btn-secondary btn-sm ms-2">Action 2</a>
								</div> -->
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<!-- <div class="card productdesc"> -->
					<!-- <div class="card-body"> -->
					<div class="productdec text-center">
						<div class="bg-light-gray py-1 px-1 text-center br-5">
							<div id="carousel_slide_primary_image_product" class="mt-1 carousel slide p-1 mt-0"
								data-bs-ride="carousel" data-bs-interval="false">
								<div class="carousel-inner" style="border-radius:0px;">
									<?php foreach ($get_product_img as $key => $pd_img) { ?>
										<div class="carousel-item <?= ($key == 0) ? "active" : ""; ?>">
											<img alt="Product"
												src="<?= $_dr_storage ?>/products/<?= $get_product["pd_id"] ?>/image_main/<?= $pd_img["pd_img_name"] ?>"
												class="w-100" style="object-fit:cover; height:380px;">
										</div>
									<?php } ?>
								</div>
								<a class="carousel-control-prev product-carousel-control"
									href="#carousel_slide_primary_image_product" role="button" data-bs-slide="prev">
									<!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
									<span class="fw-bold text-dark" style="font-size:300%;" aria-hidden="true"> < </span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next product-carousel-control"
									href="#carousel_slide_primary_image_product" role="button" data-bs-slide="next">
									<!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
									<span class="fw-bold text-dark" style="font-size:300%;" aria-hidden="true"> > </span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div id="carousel_slide_secondary_image_product"
								class="mt-1 carousel slide px-2 py-1 bg-white" data-bs-ride="carousel"
								data-bs-interval="false">
								<div class="carousel-inner" style="border-radius:0px;">
									<?php
									$ind_img = 0;
									for ($i = 0; $i < $count_slide; $i++) { ?>
										<div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>">
											<div class="row">
												<?php 
												for ($j = 0; $j < $count_image_on_slide; $j++) {
													if ($image_index == $count_image) {
														break;
													} ?>
													<div class="col-4 p-1" data-bs-target="#carousel_slide_primary_image_product" data-bs-slide-to="<?=$ind_img?>" aria-label="Slide <?=$ind_img?>">
														<img alt="Product"
															src="<?= $_dr_storage ?>/products/<?= $get_product["pd_id"] ?>/image_main/<?= $get_product_img[$image_index]["pd_img_name"] ?>"
															class="w-100" style="object-fit:cover; height:150px; cursor:pointer;">
													</div>
													<?php 
													$image_index++;
													$ind_img ++;
												} ?>
											</div>
										</div>
									<?php 
									} 
									?>
								</div>
								<a class="carousel-control-prev product-carousel-control"
									href="#carousel_slide_secondary_image_product" role="button" data-bs-slide="prev">
									<!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
									<span class="fw-bold text-dark" style="font-size:300%;" aria-hidden="true"> < </span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next product-carousel-control"
									href="#carousel_slide_secondary_image_product" role="button" data-bs-slide="next">
									<!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
									<span class="fw-bold text-dark" style="font-size:300%;" aria-hidden="true"> > </span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
					<!-- </div> -->
					<!-- </div> -->
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="panel panel-primary">
						<div class="tab-menu-heading">
							<div class="tabs-menu">
								<h4 class="mb-0">
									<?= $get_product["pd_name"] ?>
								</h4>
							</div>
						</div>
						<div class="panel-body tabs-menu-body">
							<div class="tab-content">
								<div class="tab-pane active" id="tab1">
									<ul class="list-unstyled mb-0">
										<li class="py-3 row border-0">
											<div class="col-sm-3 text-muted">หมวดหมู่</div>
											<div class="col-sm-3">
												<?= $get_product["ctgr_name"] ?>
											</div>
										</li>
										<li class="py-3 row border-0">
											<div class="col-sm-3 text-muted">ราคา</div>
											<div class="col-sm-3">
												<?= $get_product["pd_price"] ?> บาท
											</div>
										</li>
										<li class="py-3 row border-0">
											<div class="col-sm-3 text-muted">ค่าขนส่ง</div>
											<div class="col-sm-3">
												<?= $get_product["pd_freight"] ?> บาท
											</div>
										</li>
									</ul>
									<?php
										// ตรวจสอบว่าสินค้านี้มีโปรโมชั่นหรือไม่
										$current_date = date("Y-m-d");
										$stmt = $pdo->prepare("SELECT * FROM product_connect_promotion INNER JOIN promotions ON product_connect_promotion.pmt_id = promotions.pmt_id WHERE product_connect_promotion.pd_id = :pd_id AND promotions.pmt_start_date <= '".$current_date."' AND promotions.pmt_timeout >= '".$current_date."' LIMIT 1");
										$stmt->bindValue(':pd_id', $get_product["pd_id"], PDO::PARAM_INT);
										$get_promotion = $database_obj->qrySql($stmt);
										if($get_promotion["count_all"] > 0){
											$promotion = $get_promotion["data"][0];
											// <span class="badge bg-primary">มีโปรโมชั่น</span>
											$show_text_promotion = "<span class='badge bg-primary'> โปรโมชั่น ";
											if($promotion["pmt_condition_type"] == 1){
												$show_text_promotion .= "ซื้อสินค้าครบ ".$promotion["pmt_condition_amount"]." บาท (รวมรายการอื่น)";
											}else if($promotion["pmt_condition_type"] == 2){
												$show_text_promotion .= "ซื้อสินค้ารายการนี้จำนวน ".$promotion["pmt_condition_quantity"]." ชิ้น";
											}else{
												$show_text_promotion .= "ไม่มีเงื่อนไขโปรโมชั่น";
											}

											if($promotion["pmt_discount_type"] == 1){
												$show_text_promotion .= " ลด ".$promotion["pmt_discount"]." บาท";
											}else if($promotion["pmt_discount_type"] == 2){
												$show_text_promotion .= " ลด ".$promotion["pmt_percent_discount"]." เปอร์เซ็นต์ ของราคาสินค้าทั้งหมด";
											}else{
												$show_text_promotion .= "ไม่มีส่วนลด";
											}

											if($promotion["pmt_free_shipping"] == 1){
												$show_text_promotion .= " และ ค่าส่งฟรี";
											}

											$show_text_promotion .= "</span>";
										}else{
											$show_text_promotion = "";
										}
										echo $show_text_promotion;
									?>
									
									<? if ($_SESSION["user"]["user_type"] == 2) { ?>
										<div class="text-center mt-5 pb-5 border-bottom">
											<button onclick="pushItemToCart('<?= $get_product['pd_id'] ?>')"
												class="btn btn-info"><i class="bi bi-cart-plus"></i>
												นำสินค้าลงตะกร้า</button>
											<!-- <button href="#" class="btn btn-secondary"><i class="ti-shopping-cart"> </i> Buy Now</button> -->
										</div>
										<script>
											function pushItemToCart(pd_id) {
												page_loading("show");
												$.ajax({
													type: "POST",
													url: "<?= $_dr_api ?>/manage_order_list.php",
													data: { "action": "save_order_list", "pd_id": pd_id },
													success: function (respon) {
														let json = JSON.parse(respon);
														if (json["status"] == 1) {
															window.toastr.remove();
															toastr.success("Success");
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
										</script>
									<? } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header py-2" style="background-color:#fafafa;">
			<h3 class="mb-0">
				รายละเอียดสินค้า
			</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<div>
						<?php
						// ดึงไฟล์ JSON รายละเอียดสินค้า 
						$string = file_get_contents($_dr_storage . "/products/" . $get_product["pd_id"] . "/" . $get_product["pd_detail"]);
						$content = json_decode($string, true);
						echo $content["content"];
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-1 gx-4 gx-lg-3" id="show_products">
	</div>
	<script>
		function func_list_products() {
			page_loading("show");
			<?php if ($_check_session_user) { ?>
				let to_action = "read_product_for_recommendation_system_cosine_similarity";
			<?php } else { ?>
				let to_action = "read_products";
			<?php } ?>
			$.ajax({
				type: "POST",
				url: "<?= $_dr_api ?>/manage_product.php",
				data: {
					"action": to_action,
				},
				success: function (respon) {
					let json = JSON.parse(respon);
					if (json["status"] == 1) {
						$("#show_products").empty();
						for (i in json["data"]) {

							// ตรวจสอบว่าสินค้านี้มาจากการแนะนำของระบบ
							let show_tag_recommendation_system = "";
							if (json["data"][i]["is_recommendation_system"] !== undefined) {
								if (json["data"][i]["is_recommendation_system"] == 1) {
									show_tag_recommendation_system = `
										<div class="ribbone">
											 <div class="ribbon"><span>Recommend</span></div>
										</div>
									`;
								}
							}

							// ตรวจสอบว่าสินค้านี้มีโปรโมชั่นที่ยังใช้ได้หรือไม่
							let show_text_for_product_have_promotion = "";
							if (json["data"][i]["is_have_promotions"] !== undefined) {
								if (json["data"][i]["is_have_promotions"] == 1) {
									show_text_for_product_have_promotion = `
										<span class="badge bg-primary">มีโปรโมชั่น</span>
									`;
								}
							}

							// ตรวจสอบว่าสต็อกสินค้าคงเหลือในระบบ ยังเหลืออยู่หรือไม่ ถ้าเหลือก็แสดงปุ่มนำสินค้าลงตะกร้า
							let show_pd_price = "";
							let disabled_button_push_item_to_cart = "";
							<?php if ($_SESSION["user"]["user_type"] == 1) { ?>
								disabled_button_push_item_to_cart = "disabled";
							<?php } else if ($_SESSION["user"]["user_type"] == 2) { ?>
									if (Number(json["data"][i]["pd_stock"]) > 0) {
										show_pd_price = `${json["data"][i]["pd_price"]}.-`;
										disabled_button_push_item_to_cart = "";
									} else {
										show_pd_price = `<h5 class="text-danger">สินค้าหมด</h5>`;
										disabled_button_push_item_to_cart = "disabled";
									}
							<?php } ?>

							$("#show_products").append(`
								<div class="col-6 col-sm-6 col-md-4 col-xl-3 px-2">
									<div class="card item-card">
										${show_tag_recommendation_system}
										<div class="product-grid6 card-body" style="height:440px;">
											<div class="product-image6 p-3">
												<a href="../../pages/homepage/product_description.php?product_id=${json["data"][i]["pd_id"]}" target="_blank">
													<img class="img-fluid" src="<?= $_dr_storage ?>/products/${json["data"][i]["pd_id"]}/image_main/${json["data"][i]["pd_image"]}" alt="img" style="height:18rem;">
												</a>
											</div>
											<div class="product-content text-center">
												<div class="mb-2">
													<span id="show_count_like${json["data"][i]["pd_id"]}">${json["data"][i]["count_like"]}</span>
													<i class="bi bi-heart-fill text-danger"></i>
													${show_text_for_product_have_promotion}
												</div>
												<h4 class="title"><a href="../../pages/homepage/product_description.php?product_id=${json["data"][i]["pd_id"]}" target="_blank">${json["data"][i]["pd_name"]}</a></h4>
												<div class="price"> ${show_pd_price} <!--<span class="ms-4">999999 .-</span>--></div>
											</div>
											<ul class="icons">
												<li><a href="../../pages/homepage/product_description.php?product_id=${json["data"][i]["pd_id"]}" target="_blank" data-tip="ดูรายละเอียดสินค้า"><i class="fe fe-eye"></i></a></li>
											</ul>
										</div>
										<?php if ($_check_session_user) { ?>
																	<div class="card-footer row px-3 py-1">
																		<div class="col-6 px-1">
																			<button onclick="pushItemToCart('${json["data"][i]["pd_id"]}')" data-id="${json["data"][i]["pd_id"]}" class="btn btn-outline-info w-100 p-1" ${disabled_button_push_item_to_cart}><i class="bi bi-basket"></i></button>
																		</div>
																		<div class="col-6 px-1">
																			<button onclick="func_likeProduct('${json["data"][i]["pd_id"]}');" id="btn_likeProduct${json["data"][i]["pd_id"]}" class="btn btn-outline-danger w-100 p-1 ${json["data"][i]["like_active"]}"><i class="bi bi-heart"></i></button>
																		</div>
																	</div>
										<?php } ?>
									</div>
								</div>
							`);
						}
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
		func_list_products();

		<?php if ($_check_session_user) { ?>
			function func_likeProduct(pd_id) {
				$.ajax({
					type: "POST",
					url: "<?= $_dr_api ?>/manage_product.php",
					data: {
						"action": "set_like_product",
						"pd_id": pd_id
					},
					success: function (respon) {
						let json = JSON.parse(respon);
						if (json["status"] == 1) {
							if (json["active"] == 1) {
								$(`#btn_likeProduct${pd_id}`).addClass("active");
								let count_like = Number($(`#show_count_like${pd_id}`).html());
								$(`#show_count_like${pd_id}`).html(count_like + 1);
							} else {
								$(`#btn_likeProduct${pd_id}`).removeClass("active");
								let count_like = Number($(`#show_count_like${pd_id}`).html());
								$(`#show_count_like${pd_id}`).html(count_like - 1);
							}
							window.toastr.remove();
							toastr.success("Success");
						} else {
							toastr.error(json["error"]);
						}
					}
				});
			}
		<?php } ?>
	</script>








































































































































































































	<?php /*
<!-- CONTENT START -->
<div class="card">
	<div class="card-header">
		<a href="../../pages/homepage/" class="btn btn-dark"><i class="bi bi-caret-left-fill"></i> ย้อนกลับ</a>
		<!-- <div class="card-options">
			<a href="#" class="btn btn-primary btn-sm">Action 1</a>
			<a href="#" class="btn btn-secondary btn-sm ms-2">Action 2</a>
		</div> -->
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-7 col-md-12">
				<div class="card productdesc">
					<div class="card-body">
						<div class="productdec text-center">
							<div class="bg-light-gray py-1 px-1 text-center br-5">
								<div id="carousel_slide_primary_image_product" class="mt-1 carousel slide p-1 mt-0" data-bs-ride="carousel" data-bs-interval="false">
									<div class="carousel-inner" style="border-radius:0px;">
										<?php foreach($get_product_img AS $key => $pd_img){ ?>
											<div class="carousel-item <?=($key == 0) ? "active" : "" ;?>">
												<img alt="Product" src="<?=$_dr_storage?>/products/<?=$get_product["pd_id"]?>/image_main/<?=$pd_img["pd_img_name"]?>" class="w-100" style="object-fit:cover; height:380px;">
											</div>
										<?php } ?>
									</div>
									<a class="carousel-control-prev product-carousel-control" href="#carousel_slide_primary_image_product" role="button" data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next product-carousel-control" href="#carousel_slide_primary_image_product" role="button" data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div id="carousel_slide_secondary_image_product" class="mt-1 carousel slide px-2 py-1 bg-white" data-bs-ride="carousel" data-bs-interval="false">
									<div class="carousel-inner" style="border-radius:0px;">
										<?php for($i = 0; $i < $count_slide; $i++){ ?>
											<div class="carousel-item <?=($i == 0) ? "active" : "" ;?>">
												<div class="row">
													<?php 	for($j = 0; $j < $count_image_on_slide; $j++){ 
																if($image_index == $count_image){
																	break;
																} ?>
																<div class="col-4 p-1">
																	<img alt="Product" src="<?=$_dr_storage?>/products/<?=$get_product["pd_id"]?>/image_main/<?=$get_product_img[$image_index]["pd_img_name"]?>" class="w-100" style="object-fit:cover; height:200px;">
																</div>
													<?php 	$image_index++;
															} ?>
												</div>
											</div>
										<?php } ?>
									</div>
									<a class="carousel-control-prev product-carousel-control" href="#carousel_slide_secondary_image_product" role="button" data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next product-carousel-control" href="#carousel_slide_secondary_image_product" role="button" data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
						<div class="text-center mt-5 pb-5 border-bottom">
							<button onclick="pushItemToCart('<?=$get_product['pd_id']?>')" class="btn btn-info"><i class="bi bi-cart-plus"></i> นำสินค้าลงตะกร้า</button>
							<!-- <button href="#" class="btn btn-secondary"><i class="ti-shopping-cart"> </i> Buy Now</button> -->
						</div>
						<script>
							function pushItemToCart(pd_id){
								page_loading("show");
								$.ajax({
									type: "POST",
									url: "<?=$_dr_api?>/manage_order_list.php",
									data: { "action" : "save_order_list", "pd_id":pd_id},
									success:function(respon){
										let json = JSON.parse(respon);
										if(json["status"] == 1){
											window.toastr.remove();
											toastr.success("Success");
										}else{
											toastr.error(json["error"]);
										}
										page_loading("hide");
									},
									error:function(error){
									toastr.error(error.statusText);
									}
								});
							}
						</script>

						<div class="mt-4 mb-4">
							<h3> สินค้า : <?=$get_product["pd_name"]?> </h3>
							<div>
								<?php
									// ดึงไฟล์ JSON รายละเอียดสินค้า 
									$string = file_get_contents($_dr_storage."/products/".$get_product["pd_id"]."/".$get_product["pd_detail"]);
									$content = json_decode($string, true);
									echo $content["content"];
								?>
							</div>
						</div>
						<?php ?><div class="panel panel-primary">
							<div class="tab-menu-heading">
								<div class="tabs-menu ">
									<!-- Tabs -->
									<ul class="nav panel-tabs">
										<li><a href="#tab1" class="active me-2" data-bs-toggle="tab">Specification</a></li>
										<li><a href="#tab2" class=" me-2" data-bs-toggle="tab">Dimensions</a></li>
										<li><a href="#tab3" data-bs-toggle="tab">Reviews<span class="badge bg-secondary ms-1">2</span></a></li>
									</ul>
								</div>
							</div>
							<div class="panel-body tabs-menu-body">
								<div class="tab-content">
									<div class="tab-pane active" id="tab1">
										<h4 class="mb-5 mt-3">General</h4>
										<ul class="list-unstyled mb-0">
											<li class="row">
												<div class="col-sm-3 text-muted">Brand</div>
												<div class="col-sm-3">CASAMOTION</div>
											</li>
											<li class=" row">
												<div class="col-sm-3 text-muted">Model Number</div>
												<div class="col-sm-3">AHLF016</div>
											</li>
											<li class="p-b-20 row">
												<div class="col-sm-3 text-muted">Model Name</div>
												<div class="col-sm-3">casamotion</div>
											</li>
											<li class="p-b-20 row">
												<div class="col-sm-3 text-muted">Suitable For</div>
												<div class="col-sm-3">Table, Floor</div>
											</li>
											<li class="p-b-20 row">
												<div class="col-sm-3 text-muted">Material</div>
												<div class="col-sm-3">Wood</div>
											</li>
											<li class="p-b-20 row">
												<div class="col-sm-3 text-muted">Color</div>
												<div class="col-sm-3">Brown</div>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="tab2">
										<ul class="list-unstyled mb-0">
											<li class="row">
												<div class="col-sm-3 text-muted">Width</div>
												<div class="col-sm-3">6.1 inch</div>
											</li>
											<li class=" row">
												<div class="col-sm-3 text-muted">Height</div>
												<div class="col-sm-3">24 inch</div>
											</li>
											<li class="p-b-20 row">
												<div class="col-sm-3 text-muted">Depth</div>
												<div class="col-sm-3">6.1 inch</div>
											</li>
											<li class="p-b-20 row">
												<div class="col-sm-3 text-muted">Other Dimensions</div>
												<div class="col-sm-3">15.5*15.5*24CM</div>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="tab3">
										<div class="media mb-5">
											<div class=" me-3">
												<a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="../../assets/images/users/5.jpg"> </a>
											</div>
											<div class="media-body">
												<h5 class="mt-0 mb-0">Gavin Murray</h5>
												<div class="text-warning mb-0">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<p class="font-13 text-muted mb-0">Good Looking.........</p>
												<a href=""><span class="badge btn-custom rounded-pill">Reply</span></a>
											</div>
										</div>
										<div class="media mb-5">
											<div class=" me-3">
												<a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="../../assets/images/users/15.jpg"> </a>
											</div>
											<div class="media-body">
												<h5 class="mt-0 mb-0">Paul Smith</h5>
												<div class="text-warning mb-0">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<p class="font-13 text-muted mb-0">Very nice ! On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the </p>
												<a href=""><span class="badge btn-custom rounded-pill">Reply</span></a>
											</div>
										</div>
										<h5 class="mb-3">Add Review</h5>
										<form class="form-horizontal  m-t-20" action="index.html">
											<div class="form-group">
												<div class="col-xs-12">
													<input class="form-control" type="text" required="" placeholder="Username*">
												</div>
											</div>
											<div class="form-group">
												<div class="col-xs-12">
													<input class="form-control" type="email" required="" placeholder="Email*">
												</div>
											</div>
											<div class="form-group">
												<div class="col-xs-12">
													<textarea class="form-control" rows="5">Your Review*</textarea>
												</div>
											</div>
											<div class="">
												<a href="#" class="btn btn-primary btn-rounded  waves-effect waves-light">Submit</a>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- COL-END -->
			<div class="col-lg-5 col-md-12">
				<!-- <div class="card">
					<div class="card-header">
						<div class="card-title"> Categories &amp; Fliters</div>
					</div>
					<div class="card-body">
						<div class="custom-checkbox custom-control">
							<input type="checkbox" data-bs-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" checked="">
							<label for="checkbox-1" class="custom-control-label">Mens</label>
						</div>
						<div class="custom-checkbox custom-control">
							<input type="checkbox" data-bs-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
							<label for="checkbox-2" class="custom-control-label">Womens</label>
						</div>
						<div class="custom-checkbox custom-control">
							<input type="checkbox" data-bs-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
							<label for="checkbox-3" class="custom-control-label">Kids</label>
						</div>
						<div class="custom-checkbox custom-control">
							<input type="checkbox" data-bs-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
							<label for="checkbox-4" class="custom-control-label">Others</label>
						</div>
						<div class="form-group mt-3">
							<label class="form-label">Category</label>
							<select name="beast" id="select-beast" class="form-control form-select select2">
								<option value="0">--Select--</option>
								<option value="1">Dress</option>
								<option value="2">Bags &amp; Purses</option>
								<option value="3">Coat &amp; Jacket</option>
								<option value="4">Beauty</option>
								<option value="5">Jeans</option>
								<option value="5">Jewellery</option>
								<option value="5">Electronics</option>
								<option value="5">Sports</option>
								<option value="5">Technology</option>
								<option value="5">Watches</option>
								<option value="5">Accessories</option>
							</select>
						</div>
						<div class="form-group">
							<label class="form-label">Brand</label>
							<select name="beast" id="select-beast1" class="form-control form-select select2">
								<option value="0">--Select--</option>
								<option value="1">White</option>
								<option value="2">Black</option>
								<option value="3">Red</option>
								<option value="4">Green</option>
								<option value="5">Blue</option>
								<option value="6">Yellow</option>
							</select>
						</div>
						<div class="form-group">
							<label class="form-label">Type</label>
							<select name="beast" id="select-beast2" class="form-control form-select select2">
								<option value="0">--Select--</option>
								<option value="1">Extra Small</option>
								<option value="2">Small</option>
								<option value="3">Medium</option>
								<option value="4">Large</option>
								<option value="5">Extra Large</option>
							</select>
						</div>
						<div class="form-group">
							<label class="form-label">Color</label>
							<select name="beast" id="select-beast3" class="form-control form-select select2">
								<option value="0">--Select--</option>
								<option value="1">White</option>
								<option value="2">Black</option>
								<option value="3">Red</option>
								<option value="4">Green</option>
								<option value="5">Blue</option>
								<option value="6">Yellow</option>
							</select>
						</div>
						<a class="btn btn-primary " href="#">Apply Filter</a>
						<a class="btn btn-danger" href="#">Search Now</a>
					</div>
				</div> -->
				<div class="card productdesc-1">
					<div class="card-body bg_gray">
						<div id="carouselExampleControls" class="carousel slide  p-2 border" data-bs-ride="carousel">
							<?php if($_check_session_user){ ?>
								<div class="ribbone"> <div class="ribbon"><span>Recommend</span></div> </div>
							<?php } ?>
							<div class="carousel-inner" id="show_product_recommend">
								
							</div>
							<script>
								page_loading("show");
								$.ajax({
									type: "POST",
									url: "<?=$_dr_api?>/manage_product.php",
									<?php if($_check_session_user){ ?>
										data: { 
											"action" : "read_product_for_recommendation_system_cosine_similarity",
											"query_for_product_recommend" : 1,
											"keyword" : "", 
											"cate_id" : ""
										},
									<?php }else{ ?>
										data: { 
											"action" : "read_products",
											"limit" : 10,
											"keyword" : ""
										},
									<?php } ?>
									success:function(respon){
										let json = JSON.parse(respon);
										if(json["status"] == 1){
											let html ="";
											for(i in json["data"]){
												// ตรวจสอบว่าสินค้านี้มาจากการแนะนำของระบบ
												let active = (i == 0) ? "active" : "";
												html += `<div class="carousel-item ${active}">`;
												html += `	<a href="product_description.php?product_id=${json["data"][i]["pd_id"]}"><img class="pro_img" alt="Product" src="<?=$_dr_storage?>/products/${json["data"][i]["pd_id"]}/image_main/${json["data"][i]["pd_image"]}" style="object-fit: cover;"></a>`;
												html += `	<div class="carouselproduct mt-4 text-center pb-4">`;
												html += `		<h5 class=""><a href="#">${json["data"][i]["pd_name"]}</a></h5>`;
												html += `		<ul class="product_price list-unstyled">`;
												html += `			<!--<li class="old_price">$999.00.-</li>-->`;
												html += `			<li class="new_price">${json["data"][i]["pd_price"]}.-</li>`;
												html += `		</ul>`;
												html += `		<div class="mb-3 mt-2 text-warning">`;
												html += `			<!--<i class="fa fa-star"></i>`;
												html += `			<i class="fa fa-star"></i>`;
												html += `			<i class="fa fa-star"></i>`;
												html += `			<i class="fa fa-star-o"></i>`;
												html += `			<i class="fa fa-star-o"></i>-->`;
												html += `		</div>`;
												html += `		<button onclick="pushItemToCart('${json["data"][i]["pd_id"]}')" class="btn btn-primary"><i class="ti-shopping-cart"></i>นำสินค้าลงตะกร้า</button>`;
												html += `	</div>`;
												html += `</div>`;
											}
											$("#show_product_recommend").html(html);
										}else{
											toastr.error(json["error"]);
										}
										page_loading("hide");
									},
									error:function(error){
										toastr.error(error.statusText);
									}
								});
							</script>
							<a class="carousel-control-prev product-carousel-control" href="#carouselExampleControls" role="button" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next product-carousel-control" href="#carouselExampleControls" role="button" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div><!-- COL-END -->
		</div>
	</div>
</div>
*/{
	} ?>

	<!-- CONTENT END -->
</div>
<?php require_once("../../includes/footer.php"); ?>