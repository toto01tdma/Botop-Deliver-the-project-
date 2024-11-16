<?php
require_once("config.php");
include_once("../../services/connect_database.php");
$database_obj = new Database();
$database_obj->get_session_start();
$pdo = $database_obj->get_var_connect();

function isActiveMenuSideBar($data)
{
	$array = explode('/', $_SERVER['REQUEST_URI']);
	$key = array_search("pages", $array);
	$name = $array[$key + 1];
	return $name === $data ? 'active' : '';
}

if (isset($_GET["setting_theme_web_page"])) { // ตั้งค่าธีมเป็นโหมดสว่างหรือมืด
	if ($_GET["setting_theme_web_page"] == 1) {
		$_SESSION["set_darkmode"] = 1;
	} else {
		unset($_SESSION["set_darkmode"]);
	}
}

$_check_session_user = isset($_SESSION["user"]);
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
	<title><?= $_project_name ?></title>

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

<body id="main_body_web_page"
	class="app sidebar-mini <?php echo (isset($_SESSION["set_darkmode"])) ? "dark-mode" : ""; ?>">
	<!-- ถ้าต้องการใช้ธีมมืดให้ใส่ dark-mode ตรง class ถ้าไม่เอาธีมมืดก็แค่ลบ dark-mode ออก -->
	<div id="spinner_page_loading" style="background:#000000ad; z-index:9999999;"
		class="d-none position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<script>
		function set_theme_web_page() {
			let set_theme;
			if ($('#main_body_web_page').hasClass('dark-mode')) {
				set_theme = "0"; // เซ็ตเป็น Light Mode
			} else {
				set_theme = "1"; // เซ็ตเป็น Dark Mode
			}
			location.href = "?setting_theme_web_page=" + set_theme;
		}
	</script>
	<script>
		function page_loading(action) {
			if (action == "hide") {
				if ($('#spinner_page_loading').hasClass('d-none') === false) {
					// เช็คว่าอีลีเมนต์ที่มี id = spinner_page_loading มีคลาส d-none แล้วใช่หรือไม่ ถ้ามีคลาสจะคืนค่าเป็น true ถ้าไม่มีจะส่งค่าเป็น false
					$('#spinner_page_loading').addClass('d-none');
				}
			} else if (action == "show") {
				if ($('#spinner_page_loading').hasClass('d-none')) {
					$('#spinner_page_loading').removeClass('d-none');
				}
			}
		}
	</script>
	<script>
		// show_pagination(ชื่อฟังก์ชั่นแสดงข้อมูล, ชื่อ id ของอีลีเมนต์ที่ต้องยัด html ใส่, จำนวนข้อมูลที่แสดง, หมายเลขเพจ)
		function show_pagination(func, parent, count, page) {
			let show_page_start = 0;
			let margin = 4; // ระยะห่างระหว่างปุ่มที่คลิกกับปุ่มสิ้นสุด
			if (page > margin) {
				show_page_start = (page - margin);
			}

			let max_page = 0;
			while ((max_page * 50) < count) {
				max_page += 1;
			}

			let show_page_end = 0;
			if ((page + margin) >= max_page) {
				show_page_end = max_page;
			} else {
				show_page_end = ((page + 1) + margin);
			}

			let showing_end = (show_page_end == (page + 1)) ? count : page/*(page+1)*/ * 50;
			let = html = "";
			html += `<div class="row pt-3">`;
			html += `   <div class="col-md-6 mb-2 text-start">
								แสดง ${(page * 50) + 1} ถึง ${showing_end} จาก ${count} รายการ
							</div>
							<div class="col-md-6 mb-2 text-end">
								<nav class="d-inline-block" aria-label="...">
									<ul class="pagination">
										<li style="cursor:pointer;" class="page-item" onclick="${func}(0)">
											<a class="page-link">First</a>
										</li>
				`;
			for (let i = show_page_start; i < show_page_end; i++) {
				let active = (page == i) ? "active" : "";
				let aria_current = (page == i) ? ` aria-current="page" ` : "";
				let even_onclick = (page == i) ? "" : ` onclick="${func}(${i})" `;
				html += `           <li style="cursor:pointer;" class="page-item ${active}" ${aria_current} ${even_onclick}><a class="page-link">${i + 1}</a></li> `;
			}
			html += `
										<li style="cursor:pointer;" class="page-item" onclick="${func}(${max_page - 1})">
											<a class="page-link">Last</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
				`;
			$("#" + parent).html(html);
		}
	</script>

	<!-- ChatBot Start -->
	<div class="position-fixed p-3" style="right:90px; bottom:10px; z-index:99;">
		<button class="btn btn-lg btn-primary btn-lg-square" data-bs-toggle="modal"
			data-bs-target="#showChatBotOfDialogFlow" type="button">
			<i class="fas fa-robot"></i>
		</button>
	</div>
	<!-- Modal แสดงแชทบอท -->
	<div class="modal fade" id="showChatBotOfDialogFlow" tabindex="-1" aria-labelledby="exampleModalLongTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">แชทอัตโนมัติ</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
				</div>
				<div class="modal-body" style="height:30rem;">
					<iframe class="w-100 h-100 border-0" allow="microphone;"
						src="https://console.dialogflow.com/api-client/demo/embedded/7a3c52f6-980c-47b2-9be1-de39dfd85664"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- ChatBot End -->

	<!-- GLOBAL-LOADER -->
	<div id="global-loader">
		<img src="../../assets/admin_template/HTML/HTML/assets/images/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /GLOBAL-LOADER -->

	<!-- PAGE -->
	<div class="page">
		<div class="page-main">

			<!--APP-SIDEBAR-->
			<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
			<aside class="app-sidebar">
				<div class="side-header p-2">
					<a class="header-brand1" href="../../pages/homepage/">
						<!-- <img src="../../assets/admin_template/HTML/HTML/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
							<img src="../../assets/admin_template/HTML/HTML/assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
							<img src="../../assets/admin_template/HTML/HTML/assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
							<img src="../../assets/admin_template/HTML/HTML/assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo"> -->
						<img src="../../assets/img/<?= $_logo_image ?>" class="header-brand-img desktop-logo w-100 h-100"
							alt="logo">
						<img src="../../assets/img/<?= $_logo_image_1 ?>" class="header-brand-img toggle-logo" alt="logo">
						<img src="../../assets/img/<?= $_logo_image_2 ?>" class="header-brand-img light-logo" alt="logo">
						<img src="../../assets/img/<?= $_logo_image_3 ?>" class="header-brand-img light-logo1 w-100 h-100"
							alt="logo">
					</a><!-- LOGO -->
				</div>
				<ul class="side-menu">
					<li>
						<h3>Menu</h3>
					</li>
					<li class="slide">
						<a class="side-menu__item <?php echo isActiveMenuSideBar('homepage'); ?>" data-bs-toggle="slide"
							href="../../pages/homepage/"><i class="side-menu__icon fe fe-home"></i><span
								class="side-menu__label">Home</span></a>
					</li>
					<?php
					if ($_check_session_user) { ?>
						<li class="slide">
							<a class="side-menu__item <?php echo isActiveMenuSideBar('promotion_for_member'); ?>"
								data-bs-toggle="slide" href="../../pages/promotion_for_member/"><i
									class="side-menu__icon fe fe-tag"></i><span
									class="side-menu__label">สิทธิโปรโมชั่น</span></a>
						</li>
						<?php if ($_SESSION["user"]["user_type"] == 1) { ?>
							<li class="slide">
								<a class="side-menu__item <?php echo isActiveMenuSideBar('dashboard'); ?>"
									data-bs-toggle="slide" href="#"><i class="side-menu__icon bi bi-speedometer me-2"></i><span
										class="side-menu__label"></i>Dashboard</span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li><a href="../../pages/dashboard/" class="slide-item">ยอดขาย</a></li>
									<li><a href="../../pages/dashboard/orders_all.php" class="slide-item">การสั่งซื้อทั้งหมด</a>
									</li>
									<!-- <li><a href="#" class="slide-item">จำลองระบบแนะนำ</a></li> -->
								</ul>
							</li>
							<!-- <li class="slide">
											<a class="side-menu__item <?php echo isActiveMenuSideBar('setting'); ?>" data-bs-toggle="slide" href="#"><i class="side-menu__icon bi bi-gear-fill me-2"></i><span class="side-menu__label"></i>ตั้งค่า</span><i class="angle fa fa-angle-right"></i></a>
											<ul class="slide-menu">
												<li><a href="#" class="slide-item">การตั้งค่า 1</a></li>
												<li><a href="#" class="slide-item">การตั้งค่า 2</a></li>
												<li><a href="#" class="slide-item">การตั้งค่า 3</a></li>
												<li><a href="#" class="slide-item">การตั้งค่า 4</a></li>
											</ul>
										</li> -->
							<li class="slide">
								<a class="side-menu__item <?php echo isActiveMenuSideBar('product'); ?>" data-bs-toggle="slide"
									href="#"><i class="side-menu__icon bi bi-box-seam-fill me-2"></i><span
										class="side-menu__label"></i>สินค้า</span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li><a href="../../pages/product/" class="slide-item">จัดการสินค้า</a></li>
									<li><a href="../../pages/product/add_stock.php" class="slide-item">เพิ่มสต็อกสินค้า</a></li>
								</ul>
							</li>
							<li class="slide">
								<a class="side-menu__item <?php echo isActiveMenuSideBar('user'); ?>" data-bs-toggle="slide"
									href="#"><i class="side-menu__icon bi bi-person-circle me-2"></i><span
										class="side-menu__label"></i>ผู้ใช้</span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li><a href="../../pages/user/" class="slide-item">จัดการผู้ใช้</a></li>
								</ul>
							</li>
							<li class="slide">
								<a class="side-menu__item <?php echo isActiveMenuSideBar('promotion'); ?>"
									data-bs-toggle="slide" href="#"><i class="side-menu__icon bi bi-tag-fill me-2"></i><span
										class="side-menu__label"></i>โปรโมชั่น</span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li><a href="../../pages/promotion/" class="slide-item">จัดการโปรโมชั่น</a></li>
									<li><a href="../../pages/promotion/product_connect_promotion.php"
											class="slide-item">กำหนดโปรโมชั่นแก่สินค้า</a></li>
								</ul>
							</li>
						<?php
						} else if ($_SESSION["user"]["user_type"] == 2) { ?>
								<li class="slide">
									<a class="side-menu__item <?php echo isActiveMenuSideBar('order'); ?>" data-bs-toggle="slide"
										href="#"><i class="side-menu__icon bi bi-cart-fill me-2"></i><span
											class="side-menu__label"></i>สั่งซื้อ</span><i class="angle fa fa-angle-right"></i></a>
									<ul class="slide-menu">
										<li><a href="../../pages/order/order_start.php" class="slide-item">สั่งซื้อ</a></li>
										<li><a href="../../pages/order/order_history.php"
												class="slide-item">ประวัติการสั่งซื้อของฉัน</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item <?php echo isActiveMenuSideBar('show_alert'); ?>"
										data-bs-toggle="slide" href="../../pages/show_alert/"><i
											class="side-menu__icon fe fe-bell me-2"></i><span
											class="side-menu__label"></i>การแจ้งเตือน</span></a>
								</li>
							<?php
						}
						?>
					<?php
					}
					?>

					<?php
					if ($_check_session_user) {
						?>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#" onclick="logout_user();">
								<i class="side-menu__icon fe fe-log-out me-2"></i><span class="side-menu__label">Sign
									out</span>
							</a>
						</li>
						<script>
							function logout_user() {
								$.ajax({
									type: "POST",
									url: "../../services/api/auth.php",
									data: {
										"action": "logout"
									},
									success: function (respon) {
										toastr.success('ออกจากระบบแล้ว กรุณารอสักครู่...');
										setTimeout(() => {
											location.href = './';
										}, 800);
									},
									error: function (error) {
										toastr.error(error.statusText);
									}
								})
							}
						</script>
						<?php
					} else {
						?>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="../../pages/login/page_login.php">
								<i class="side-menu__icon fe fe-log-in me-2"></i><span class="side-menu__label">Sign
									in</span>
							</a>
						</li>
						<?php
					}
					?>
				</ul>
			</aside>
			<!--/APP-SIDEBAR-->

			<!-- Mobile Header -->
			<div class="app-header header">
				<div class="container-fluid">
					<div class="d-flex">
						<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
							href="#"></a><!-- sidebar-toggle-->
						<a class="header-brand1 d-flex d-md-none" href="../../pages/homepage/">
							<!-- <img src="../../assets/admin_template/HTML/HTML/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
								<img src="../../assets/admin_template/HTML/HTML/assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
								<img src="../../assets/admin_template/HTML/HTML/assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
								<img src="../../assets/admin_template/HTML/HTML/assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo"> -->
							<img src="../../assets/img/<?= $_logo_image ?>" class="header-brand-img desktop-logo"
								alt="logo">
							<img src="../../assets/img/<?= $_logo_image_1 ?>" class="header-brand-img toggle-logo"
								alt="logo">
							<img src="../../assets/img/<?= $_logo_image_2 ?>" class="header-brand-img light-logo"
								alt="logo">
							<img src="../../assets/img/<?= $_logo_image_3 ?>" class="header-brand-img light-logo1"
								alt="logo">
						</a><!-- LOGO -->
						<div class="main-header-center ms-3 d-none d-md-block">
							<!-- <input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button> -->
							<h1 class="mb-0 fw-bold">เว็บขายสินค้า OTOP </h1>
						</div>
						<div class="d-flex order-lg-2 ms-auto header-right-icons">
							<!-- <div class="dropdown d-lg-none d-md-block d-none">
									<a href="#" class="nav-link icon" data-bs-toggle="dropdown">
										<i class="fe fe-search"></i>
									</a>
									<div class="dropdown-menu header-search dropdown-menu-start">
										<div class="input-group w-100 p-2">
											<input type="text" class="form-control" placeholder="Search....">
											<div class="input-group-text btn btn-primary">
												<i class="fa fa-search" aria-hidden="true"></i>
											</div>
										</div>
									</div> 
								</div>--><!-- SEARCH -->
							<div class="dropdown d-none d-md-flex profile-1">
								<?php if ($_check_session_user) { ?>
									<a href="../../pages/user/edit_my_user.php" class="nav-link pe-2 leading-none d-flex"
										aria-expanded="false">
									<?php } else { ?>
										<a href="../../pages/login/page_login.php" class="nav-link pe-2 leading-none d-flex"
											aria-expanded="false">
											<?php
								} ?>
										<span class="me-2">
											<img src="../../assets/img/<?= $_logo_profile_image ?>" alt="profile-user"
												class="avatar profile-user brround cover-image">
										</span>
										<?php if ($_check_session_user) { ?>
											<h5 class="text-dark ms-2 mb-0 text-center">
												<?php echo $_SESSION["user"]["user_firstname"] . " " . $_SESSION["user"]["user_lastname"]; ?><br>
												<small
													class="text-muted"><?php echo $_SESSION["user"]["user_type_text"] ?></small>
											</h5>
										<?php } else {
											echo "<h6>เข้าสู่ระบบ</h6>";
										} ?>
									</a>
							</div>
							<button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button"
								data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
								aria-controls="navbarSupportedContent-4" aria-expanded="false"
								aria-label="Toggle navigation">
								<span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
							</button>
							<div class="dropdown d-none d-md-flex">
								<a class="nav-link icon theme-layout nav-link-bg layout-setting"
									onclick="set_theme_web_page();">
									<span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip"
										title="Dark Theme"><i class="fe fe-moon"></i></span>
									<span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip"
										title="Light Theme"><i class="fe fe-sun"></i></span>
								</a>
							</div><!-- Theme-Layout -->
							<div class="dropdown d-none d-md-flex">
								<a class="nav-link icon full-screen-link nav-link-bg">
									<i class="fe fe-minimize fullscreen-button"></i>
								</a>
							</div><!-- FULL-SCREEN -->
							<div class="dropdown d-none d-md-flex notifications">
								<a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span
										class="show_point_for_new_notication_for_not_reading"><span
											class="pulse-danger"></span></span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
									<div class="drop-heading border-bottom">
										<div class="d-flex">
											<h6 class="mt-1 mb-0 fs-16 fw-semibold">คุณมีการแจ้งเตือน</h6>
											<div class="ms-auto">
												<span
													class="badge bg-success rounded-pill show_count_notication_not_reading_on_header_page">0</span>
											</div>
										</div>
									</div>
									<div class="notifications-menu show_notication_on_header_page">

									</div>
									<div class="dropdown-divider m-0"></div>
									<?php if ($_check_session_user) { ?>
										<a href="../../pages/show_alert/"
											class="dropdown-item text-center p-3 text-muted">View all Notification</a>
									<?php } else { ?>
										<a href="../../pages/login/page_login.php"
											class="dropdown-item text-center p-3 text-muted text-primary">
											ลงชื่อเข้าใช้งานเพื่อดูการแจ้งเตือน
										</a>
									<?php } ?>
								</div>
							</div><!-- NOTIFICATIONS -->
							<div class="dropdown d-none d-md-flex">
								<?php if ($_check_session_user) { ?>
									<a class="nav-link icon nav-link-bg" onclick="logout_user()">
										<i class="fe fe-log-out"></i>
									</a>
								<?php } else { ?>
									<a class="nav-link icon nav-link-bg" href="../../pages/login/page_login.php">
										<i class="fe fe-log-in"></i>
									</a>
								<?php } ?>
							</div>
							<!--<div class="dropdown d-none d-md-flex header-settings">
									<a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-menu"></i>
									</a>
								</div>--><!-- SIDE-MENU -->
						</div>
					</div>
				</div>
			</div>
			<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
				<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
					<div class="d-flex order-lg-2 ms-auto">
						<!-- <div class="dropdown d-sm-flex">
								<a href="#" class="nav-link icon" data-bs-toggle="dropdown">
									<i class="fe fe-search"></i>
								</a>
								<div class="dropdown-menu header-search dropdown-menu-start">
									<div class="input-group w-100 p-2">
										<input type="text" class="form-control" placeholder="Search....">
										<div class="input-group-text btn btn-primary">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</div>
								</div> 
							</div>--><!-- SEARCH -->
						<div class="dropdown d-md-flex">
							<a class="nav-link icon theme-layout nav-link-bg layout-setting"
								onclick="set_theme_web_page();">
								<span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip"
									title="Dark Theme"><i class="fe fe-moon"></i></span>
								<span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip"
									title="Light Theme"><i class="fe fe-sun"></i></span>
							</a>
						</div><!-- Theme-Layout -->
						<div class="dropdown d-md-flex">
							<a class="nav-link icon full-screen-link nav-link-bg">
								<i class="fe fe-minimize fullscreen-button"></i>
							</a>
						</div><!-- FULL-SCREEN -->
						<div class="dropdown  d-md-flex notifications">
							<a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span
									class="show_point_for_new_notication_for_not_reading"><span
										class="pulse-danger"></span></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
								<div class="drop-heading border-bottom">
									<div class="d-flex">
										<h6 class="mt-1 mb-0 fs-16 fw-semibold">คุณมีการแจ้งเตือน</h6>
										<div class="ms-auto">
											<span
												class="badge bg-success rounded-pill show_count_notication_not_reading_on_header_page">0</span>
										</div>
									</div>
								</div>
								<div class="notifications-menu show_notication_on_header_page">

								</div>
								<div class="dropdown-divider m-0"></div>
								<?php if ($_check_session_user) { ?>
									<a href="../../pages/show_alert/" class="dropdown-item text-center p-3 text-muted">View
										all Notification</a>
								<?php } else { ?>
									<a href="../../pages/login/page_login.php"
										class="dropdown-item text-center p-3 text-muted text-primary">
										ลงชื่อเข้าใช้งานเพื่อดูการแจ้งเตือน
									</a>
								<?php } ?>
							</div>
						</div><!-- NOTIFICATIONS -->
						<!-- <div class="dropdown d-md-flex message">
								<a class="nav-link icon text-center" data-bs-toggle="dropdown">
									<i class="fe fe-message-square"></i><span class="pulse"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
									<div class="drop-heading border-bottom">
										<div class="d-flex">
											<h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Messages</h6>
											<div class="ms-auto">
												<span class="badge bg-danger rounded-pill">4</span>
											</div>
										</div>
									</div>
									<div class="message-menu">
										<a class="dropdown-item d-flex" href="chat.html">
											<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="../../assets/admin_template/HTML/HTML/assets/images/users/1.jpg"></span>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1">Madeleine</h5>
													<small class="text-muted ms-auto text-end">
														3 hours ago
													</small>
												</div>
												<span>Hey! there I' am available....</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="chat.html">
											<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="../../assets/admin_template/HTML/HTML/assets/images/users/12.jpg"></span>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1">Anthony</h5>
													<small class="text-muted ms-auto text-end">
														5 hour ago
													</small>
												</div>
												<span>New product Launching...</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="chat.html">
											<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="../../assets/admin_template/HTML/HTML/assets/images/users/4.jpg"></span>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1">Olivia</h5>
													<small class="text-muted ms-auto text-end">
														45 mintues ago
													</small>
												</div>
												<span>New Schedule Realease......</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="chat.html">
											<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="../../assets/admin_template/HTML/HTML/assets/images/users/15.jpg"></span>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1">Sanderson</h5>
													<small class="text-muted ms-auto text-end">
														2 days ago
													</small>
												</div>
												<span>New Schedule Realease......</span>
											</div>
										</a>
									</div>
									<div class="dropdown-divider m-0"></div>
									<a href="#" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
								</div> 
							</div>--><!-- MESSAGE-BOX -->
						<div class="dropdown d-md-flex profile-1">
							<a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
								<span>
									<!-- <img src="../../assets/admin_template/HTML/HTML/assets/images/users/8.jpg" alt="profile-user" class="avatar  profile-user brround cover-image"> -->
									<img src="../../assets/img/<?= $_logo_profile_image ?>" alt="profile-user"
										class="avatar  profile-user brround cover-image">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
								<div class="drop-heading">
									<div class="text-center">
										<!-- <h5 class="text-dark mb-0">Elizabeth Dyer</h5> -->
										<?php if ($_check_session_user) { ?>
											<h5 class="text-dark mb-0">
												<?php echo $_SESSION["user"]["user_firstname"] . " " . $_SESSION["user"]["user_lastname"]; ?>
											</h5>
											<small
												class="text-muted"><?php echo $_SESSION["user"]["user_type_text"] ?></small>
										<?php } else {
											echo "<h6>ยังไม่เข้าสู่ระบบ</h6>";
										} ?>
									</div>
								</div>
								<div class="dropdown-divider m-0"></div>
								<?php if ($_check_session_user) { ?>
									<a class="dropdown-item" href="../../pages/user/edit_my_user.php">
										<i class="dropdown-icon fe fe-user"></i> Profile
									</a>
									<!-- <a class="dropdown-item" href="#">
												<i class="dropdown-icon fe fe-mail"></i> Inbox
												<span class="badge bg-primary float-end">3</span>
											</a>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon fe fe-settings"></i> Settings
											</a> -->
								<?php } ?>
								<!-- <a class="dropdown-item" href="#">
										<i class="dropdown-icon fe fe-alert-triangle"></i> Need help?
									</a> -->
								<?php if ($_check_session_user) { ?>
									<a class="dropdown-item" href="#" onclick="logout_user();">
										<i class="dropdown-icon fe fe-log-out"></i> Sign out
									</a>
								<?php } else { ?>
									<a class="dropdown-item" href="../../pages/login/page_login.php">
										<i class="dropdown-icon fe fe-log-in"></i> Sign in
									</a>
								<?php } ?>
							</div>
						</div>
						<!--<div class="dropdown d-md-flex header-settings">
								<a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
									<i class="fe fe-menu"></i>
								</a>
							</div>--><!-- SIDE-MENU -->
					</div>
				</div>
			</div>
			<!-- /Mobile Header -->

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
			<script
				src="../../assets/admin_template/HTML/HTML/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
			<script
				src="../../assets/admin_template/HTML/HTML/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
			<script
				src="../../assets/admin_template/HTML/HTML/assets/plugins/datatable/dataTables.responsive.min.js"></script>

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

			<?php if ($_check_session_user) { ?>
				<script>
					function func_show_notication_on_header_page() {
						$.ajax({
							type: "POST",
							url: "<?= $_dr_api ?>/manage_alert_notication.php",
							data: {
								"action": "read_alert_notication",
								"limit": 3
							},
							success: function (respon) {
								let json = JSON.parse(respon);
								if (json["status"] == 1) {
									let html = "";
									let count_not_reading = 0; // จำนวนการแจ้งเตือนที่ยังไม่อ่าน
									for (let i in json["data"]) {
										let row = json["data"][i];
										html += `<a class="dropdown-item d-flex" href="../../pages/show_alert/index.php?id=${row["alnt_id"]}">`;
										html += `	<div class="me-3 notifyimg  bg-success-gradient brround box-shadow-primary">`;
										html += `		<i class="fe fe-shopping-cart"></i>`;
										html += `	</div>`;
										html += `	<div class="mt-1">`;
										html += `		<h5 class="notification-label mb-1">${row["alnt_header"]}</h5>`;
										html += `		<!--<span class="notification-subtext">1 day ago</span>-->`;
										html += `		<span class="notification-subtext">${row["alnt_datetime"]}</span>`;
										if (row["alnt_reading_status"] == 0) {
											html += `		<span class="badge bg-danger rounded-pill text-white">ยังไม่อ่าน</span>`;
											count_not_reading += 1;
										}
										html += `	</div>`;
										html += `</a>`;
									}
									$(".show_notication_on_header_page").html(html); // แสดงข้อความแจ้งเตือน
									$(".show_count_notication_not_reading_on_header_page").html(count_not_reading); // แสดงจำนวนการแจ้งเตือนที่ยังไม่เข้าไปอ่าน
									if (count_not_reading > 0) { // ตรวจสอบเงื่อนไขถ้าการแจ้งเตือนที่ยังไม่อ่าน มากกว่า 0 จะให้แสดงจุดตรงไอคอนกระดิ่งเพื่อบ่งบอกว่ามีการแจ้งเตือนที่ยังไม่อ่าน
										$(".show_point_for_new_notication_for_not_reading").html(`<span class="pulse-danger"></span>`);
									} else {
										$(".show_point_for_new_notication_for_not_reading").html("");
									}
								} else {
									toastr.error(json["error"]);
								}
							},
							error: function (error) {
								toastr.error(error.statusText);
							}
						});
					}
					func_show_notication_on_header_page();
					const intervalInMillisecondsForAlertNotificationOnHeaderPage = 5 * 60 * 1000; // หน่วงเวลา 5 นาที โดยแปลงเป็นหน่วยมิลลิวินาที
					setInterval(func_show_notication_on_header_page, intervalInMillisecondsForAlertNotificationOnHeaderPage); // เมื่อผ่านไปครบ 5 นาทีจะทำงานในฟังก์ชั่นนี้อีกรอบ
				</script>
			<?php } ?>
			<!--app-content open-->
			<div class="app-content">