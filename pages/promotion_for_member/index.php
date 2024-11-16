<?php require_once("../../includes/header.php"); ?>
<div class="side-app">

	<!-- PAGE-HEADER -->
	<div class="page-header">
		<div>
			<h1 class="page-title">สิทธิโปรโมชั่น</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">สิทธิโปรโมชั่น</li>
			</ol>
		</div>
	</div>
	<!-- PAGE-HEADER END -->

	<!-- CONTENT START -->
	<div id="show_promotions" class="row">
		<div class="col-6 col-md-4">
			<div class="card">
				<div class="card-header px-2 py-3">
					<h3 class="mb-0">ชื่อโปรโมชั่น</h3>
				</div>
				<div class="card-body">
					<p><span class="text-success"><b>เริ่ม : </b></span> <span class="text-danger"><b>หมดเขต</b></span>
					</p>
					<p><b>รายละเอียด : </b></p>
				</div>
			</div>
		</div>
	</div>

	<script>
		function func_list_promotions() {
			page_loading("show");
			$.ajax({
				type: "POST",
				url: "<?= $_dr_api ?>/manage_promotions.php",
				data: {
					"action": "read_promotions",
					"keyword": ""//$("#keyword_search_users").val() 
				},
				success: function (respon) {
					let json = JSON.parse(respon);
					if (json["status"] == 1) {
						let html = "";
						for (let i in json["data"]) {
							let row = json["data"][i];
							html += `<div class="col-6 col-md-4">`;
								html += `<div class="card">`;
									html += `<div class="card-header px-2 py-3">`;
									html += `<h3 class="mb-0">${row["pmt_name"]}</h3>`;
										html += `</div>`;
									html += `<div class="card-body">`;
									html += `<p class="mb-1"><span class="text-success"><b class="fw-bold">เริ่ม : </b>${row["pmt_start_date"]}</span></p>`;
									html += `<p class="mb-1"><span class="text-danger"><b class="fw-bold"> หมดเขต : </b>${row["pmt_timeout"]}</span></p>`;
										html += `<p><b class="fw-bold">รายละเอียด : </b>${row["pmt_detail"]}</p>`;
										html += `</div>`;
									html += `</div>`;
								html += `</div>`;
						}
						$("#show_promotions").html(html);
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
			return false;
		}
		func_list_promotions();
	</script>
	<!-- CONTENT END -->
</div>
<?php require_once("../../includes/footer.php"); ?>