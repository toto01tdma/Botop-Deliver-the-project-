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
			<h1 class="page-title">เพิ่มสต็อกสินค้า</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">เพิ่มสต็อกสินค้า</li>
			</ol>
		</div>
	</div>
	<!-- PAGE-HEADER END -->

	<!-- CONTENT START -->
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover text-nowrap align-middle mb-0">
					<thead class="border-top">
						<tr>
							<th scope="col">#</th>
							<th scope="col">รูป</th>
							<th scope="col">สินค้า</th>
							<th scope="col">ราคา</th>
							<th scope="col">จำนวนสินค้าคงเหลือ</th>
							<th scope="col">ค่าขนส่งสูงสุด</th>
							<th scope="col">จัดการ</th>
						</tr>
					</thead>
					<tbody id="show_products" class="border-bottom">
					</tbody>
				</table>
			</div>
			<div class="row">
				<div class="col-12 text-end">
					<div id="content_pagination_product">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CONTENT END -->

	<!-- Modal คีย์สต็อก -->
	<div class="modal fade" id="modal_form_add_stock" tabindex="-1"
		aria-labelledby="modal_label_form_add_stock" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modal_label_form_add_stock">จัดการข้อมูลสินค้า</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
				</div>
				<div class="modal-body p-2">
					<form onsubmit="return func_add_stock_product();">
						<div class="form-group">
							<label for="number_stock">ระบุจำนวนสินค้าที่จะเพิ่ม</label>
							<input type="number" id="number_stock" name="number_stock" class="form-control" value="1" min="1" >
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-success w-100">บันทึก</button>
						</div>
					</form>
				</div>
				<div class="modal-footer py-1">
					<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		var curent_page = 0;
		var manage_pd_id = "";
		function func_list_products(page) {
			curent_page = page;
			page_loading("show");
			$.ajax({
				type: "POST",
				url: "<?= $_dr_api ?>/manage_product.php",
				data: { "action": "read_products", "page": page, "keyword": $("#keyword_search_products").val() },
				success: function (respon) {
					let json = JSON.parse(respon);
					if (json["status"] == 1) {
						$("#show_products").empty();
						for (let i in json["data"]) {
							$("#show_products").append(`
							  <tr>
								<td class="text-center">${Number(i) + 1}</td>
								<td class="text-center p-0" style="width:20mm;"> <img class="img-fluid w-100" src="<?= $_dr_storage ?>/products/${json["data"][i]["pd_id"]}/image_main/${json["data"][i]["pd_image"]}"> </td>
								<td>${json["data"][i]["pd_name"]}</td>
								<td>${json["data"][i]["pd_price"]}</td>
								<td>${json["data"][i]["pd_stock"]}</td>
								<td>${json["data"][i]["pd_freight"]}</td>
								<td class="text-center">
								  <button class="btn btn-info w-100 py-1 text-center" onclick="func_show_modal_add_stock_product('${json["data"][i]["pd_id"]}')">คีย์สต็อก</button>
								  <br>
								</td>
							  </tr>
							`)
						}
						if (json["data"].length == 0) {
							$("#show_products").append(`
							<tr>
							  <td colspan="8" class="text-center"> 
								ไม่พบสินค้า
							  </td>
							</tr>
						  `);
						}
						show_pagination("func_list_products", "content_pagination_product", json["count_all"], curent_page);
						page_loading("hide");
					} else {
						toastr.error(json["error"]);
						page_loading("hide");
					}
				},
				error: function (error) {
					toastr.error(error.statusText);
				}
			});
			return false;
		}
		func_list_products(curent_page);

		function func_show_modal_add_stock_product(pd_id){
			manage_pd_id = pd_id;
			$("#modal_form_add_stock").modal("show");
		}

		function func_add_stock_product() {
			page_loading("show");
			$.ajax({
				type: "POST",
				url: "<?= $_dr_api ?>/manage_product.php",
				data: { 
					"action": "add_stock_product", 
					"pd_id" : manage_pd_id,
					"add_stock" : $("#number_stock").val()
				},
				success: function (respon) {
					let json = JSON.parse(respon);
					if (json["status"] == 1) {
						toastr.success("สำเร็จ");
						func_list_products(curent_page);
						manage_pd_id = "";
						$("#modal_form_add_stock").modal("hide");
						$("#number_stock").val("1");
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
	</script>
</div>
<?php require_once("../../includes/footer.php"); ?>