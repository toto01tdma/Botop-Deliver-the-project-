<?php
require_once("../../includes/config.php");

$database_obj = new Database();
$database_obj->get_session_start();
$pdo = $database_obj->get_var_connect();

if (!isset($_SESSION["user"])) {
	echo "ไม่พบ เซสชั่น";
	exit;
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE user_status = 1 AND user_id = :user_id LIMIT 1");
$stmt->bindValue(':user_id', $_SESSION["user"]["user_id"], PDO::PARAM_STR);
$get = $database_obj->qrySql($stmt);
$get_my_data = $get["data"][0];

?>
<!doctype html>
<html lang="en" dir="ltr">

<head>

	<!-- META DATA -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Botop">
	<meta name="author" content="Spruko Technologies Private Limited">
	<meta name="keywords"
		content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">

	<!-- TITLE -->
	<title>
		<?= $_project_name ?>
	</title>

	<!-- FAVICON -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="../../assets/admin_template/HTML/HTML/assets/images/brand/favicon.ico" /> -->
	<link rel="shortcut icon" type="image/x-icon" href="../../assets/img/<?= $_favicon_image ?>" />

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<!-- BOOTSTRAP CSS -->
	<link href="../../assets/admin_template/HTML/HTML/assets/plugins/bootstrap/css/bootstrap.min.css"
		rel="stylesheet" />

	<!-- STYLE CSS -->
	<link href="../../assets/admin_template/HTML/HTML/assets/css/style.css" rel="stylesheet" />
	<link href="../../assets/admin_template/HTML/HTML/assets/css/dark-style.css" rel="stylesheet" />
	<link href="../../assets/admin_template/HTML/HTML/assets/css/skin-modes.css" rel="stylesheet" />

	<!-- SIDE-MENU CSS -->
	<link href="../../assets/admin_template/HTML/HTML/assets/css/sidemenu.css" rel="stylesheet" id="sidemenu-theme">

	<!--C3 CHARTS CSS -->
	<link href="../../assets/admin_template/HTML/HTML/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

	<!-- P-scroll bar css-->
	<link href="../../assets/admin_template/HTML/HTML/assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

	<!--- FONT-ICONS CSS -->
	<link href="../../assets/admin_template/HTML/HTML/assets/css/icons.css" rel="stylesheet" />

	<!-- SIDEBAR CSS -->
	<link href="../../assets/admin_template/HTML/HTML/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!-- SELECT2 CSS -->
	<link href="../../assets/admin_template/HTML/HTML/assets/plugins/select2/select2.min.css" rel="stylesheet" />

	<!-- INTERNAL Data table css -->
	<link href="../../assets/admin_template/HTML/HTML/assets/plugins/datatable/css/dataTables.bootstrap5.css"
		rel="stylesheet" />
	<link href="../../assets/admin_template/HTML/HTML/assets/plugins/datatable/responsive.bootstrap5.css"
		rel="stylesheet" />

	<!-- COLOR SKIN CSS -->
	<link id="theme" rel="stylesheet" type="text/css" media="all"
		href="../../assets/admin_template/HTML/HTML/assets/colors/color1.css" />

	<!-- Libraries Stylesheet -->
	<link rel="stylesheet" href="../../plugins/toastr/toastr.css">
</head>

<body>

	<!-- BACKGROUND-IMAGE -->
	<div class="login-img"
		style="background-image: url('../../assets/img/background-login.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">

		<!-- GLOABAL LOADER -->
		<div id="global-loader">
			<img src="../../assets/admin_template/HTML/HTML/assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOABAL LOADER -->

		<!-- PAGE -->
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card">
						<div class="card-body pb-1">
							<!-- ฟอร์มเข้าสู่ระบบ -->
							<div class="w-100 text-center mb-4">
								<img src="../../assets/img/<?= $_logo_image ?>" alt="" class="w-75"
									style="object-fit: cover;">
							</div>
							<form onsubmit="return false;">
								<h3 class="text-center mb-4 fw-bold">ส่งอีเมลยืนยันการเปลี่ยนรหัสผ่าน</h3>
								<div class="mb-3">
									<label for="username" class="form-label">ระบบจะส่งอีเมลยืนยันไปที่ <span class="text-secondary"> <?=$get_my_data["user_email"]?> </span> เมื่อกดส่งอีเมลแล้วให้ทำการคลิกลิงค์ที่ส่งทางอีเมลเพื่อเปลี่ยนรหัสผ่าน</label>
								</div>
								<div class="mb-3 text-center">
									<button type="button" class="btn btn-primary"
										onclick="send_email_for_reset();">คลิกเพื่อส่งอีเมลยืนยัน</button>
								</div>
								<p class="mt-4 mb-0">
									<span class="mb-0"><a href="../../pages/user/edit_my_user.php"
											class="text-info">ย้อนกลับ</a></span>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End PAGE -->

	</div>
	<!-- BACKGROUND-IMAGE CLOSED -->

	<!-- BOOTSTRAP JS -->
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- BACK-TO-TOP -->
	<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

	<!-- JQUERY JS -->
	<script src="../../assets/admin_template/HTML/HTML/assets/js/jquery.min.js"></script>

	<!-- SPARKLINE JS-->
	<script src="../../assets/admin_template/HTML/HTML/assets/js/jquery.sparkline.min.js"></script>

	<!-- CHART-CIRCLE JS-->
	<script src="../../assets/admin_template/HTML/HTML/assets/js/circle-progress.min.js"></script>

	<!-- CHARTJS CHART JS-->
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/chart/Chart.bundle.js"></script>
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/chart/utils.js"></script>

	<!-- PIETY CHART JS-->
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/peitychart/jquery.peity.min.js"></script>
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/peitychart/peitychart.init.js"></script>

	<!-- INTERNAL SELECT2 JS -->
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/select2/select2.full.min.js"></script>

	<!-- INTERNAL Data tables js-->
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/datatable/dataTables.responsive.min.js"></script>

	<!-- ECHART JS-->
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/echarts/echarts.js"></script>

	<!-- SIDE-MENU JS-->
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/sidemenu/sidemenu.js"></script>

	<!-- SIDEBAR JS -->
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/sidebar/sidebar.js"></script>

	<!-- Perfect SCROLLBAR JS-->
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/p-scroll/pscroll.js"></script>
	<script src="../../assets/admin_template/HTML/HTML/assets/plugins/p-scroll/pscroll-1.js"></script>

	<!-- APEXCHART JS -->
	<script src="../../assets/admin_template/HTML/HTML/assets/js/apexcharts.js"></script>

	<!-- INDEX JS -->
	<script src="../../assets/admin_template/HTML/HTML/assets/js/index1.js"></script>

	<!-- CUSTOM JS -->
	<script src="../../assets/admin_template/HTML/HTML/assets/js/custom.js"></script>

	<!-- JavaScript Libraries -->
	<script src="../../plugins/toastr/toastr.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
		function send_email_for_reset() {
			$.ajax({
				type: "POST",
				url: "<?= $_dr_api ?>/manage_user.php", // end point api คือส่ง api ไปยังปลายทางที่ระบุไว้
				data: {
					"action": "send_email_for_reset_password",
					"email": "<?=$get_my_data["user_email"]?>"
				},
				success: function (respon) {
					let json = JSON.parse(respon);
					if (json["status"] == 1) {
						Swal.fire('ส่งอีเมลสำเร็จ', '', 'success');
					} else {
						Swal.fire('ส่งอีเมลไม่สำเร็จ', '', 'error');
					}
				}
			})
		}
	</script>
</body>

</html>