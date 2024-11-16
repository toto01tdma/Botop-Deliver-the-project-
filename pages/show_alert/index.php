<?php 
	require_once("../../includes/header.php");
	if(!$_check_session_user){
        echo "<script>  location.href = '../../pages/homepage/';  </script>";
        exit;
    }
?>
					<div class="side-app">

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Notication</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Notication</li>
								</ol>
							</div>
						</div>
						<!-- PAGE-HEADER END -->

                        <!-- Row -->
						<div class="row row-sm">
							<div class="col-sm-12 col-md-12 col-lg-5 col-xl-4">
								<div class="card custom-card">
									<div class="main-content-app pt-0">
										<div class="main-content-left main-content-left-chat">

											<div class="card-body">
												<form class="col" onsubmit="return func_show_my_notication();">
													<div class="input-group">
														<input type="text" id="keyword_search_notication_by_header" name="keyword_search_notication_by_header" class="form-control" value="" placeholder="ระบุเพื่อค้นหาข้อความแจ้งเตือน">
														<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> ค้นหา</button>
													</div>
												</form>
											</div>
											<nav class="nav main-nav-line main-nav-line-chat card-body p-2">
												<button class="btn btn-success py-0 mx-1">การสั่งซื้อ</button>
												<button class="btn btn-info py-0 mx-1">โปรโมชั่น</button>
												<!-- <a class="nav-link active" data-bs-toggle="tab" href="#ChatList">แจ้งเตือนการสั่งซื้อ</a>
												<a class="nav-link" data-bs-toggle="tab" href="#ChatCalls">แจ้งเตือนโปรโมชั่น</a>
												<a class="nav-link" data-bs-toggle="tab" href="#ChatContacts">แจ้งเตือนอื่นๆ</a> -->
											</nav>
											<div class="tab-content main-chat-list">
												<div id="show_my_notication" class="main-chat-list" style="overflow-y:auto;">
													<a class="media new border-bottom" href="#">
														<div class="main-img-user online">
															<img alt="" src="../../assets/images/users/5.jpg"> <span>2</span>
														</div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Socrates Itumay</span> <span>2 hours</span>
															</div>
															<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
														</div>
													</a>
													<a class="media new border-bottom" href="#">
														<div class="main-img-user">
															<img alt="" src="../../assets/images/users/6.jpg"> <span>1</span>
														</div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Dexter dela Cruz</span> <span>3 hours</span>
															</div>
															<p>Maec enas tempus, tellus eget con dime ntum rhoncus, sem quam</p>
														</div>
													</a>
												</div><!-- main-chat-list -->
												<script>
													function func_show_my_notication(){
														$.ajax({
															type: "POST",
															url: "<?=$_dr_api?>/manage_alert_notication.php",
															data: { 
																"action":"read_alert_notication",
																"keyword" : $("#keyword_search_notication_by_header").val()
															},
															success:function(respon){
																let json = JSON.parse(respon);
																if(json["status"] == 1){
																	let html = "";
																	let count_not_reading = 0; // จำนวนการแจ้งเตือนที่ยังไม่อ่าน
																	for(let i in json["data"]){
																		let row = json["data"][i];
																		html += `<div class="media new border-bottom" onclick="func_set_reading_notication('${row["alnt_id"]}');">`;
																		html += `	<div class="me-3 notifyimg  bg-success-gradient brround box-shadow-primary">`;
																		html += `		<i class="fe fe-shopping-cart text-white"></i>`;
																		html += `	</div>`;
																		html += `	<div class="media-body">`;
																		html += `		<div class="media-contact-name">`;
																		html += `			<span>${row["alnt_header"]}</span>`;
																		if(row["alnt_reading_status"] == 0){
																			html += `			<span class="px-2 badge bg-danger rounded-pill text-white">ยังไม่อ่าน</span>`;
																		}else{
																			html += `			<span></span>`;
																		}
																		html += `		</div>`;
																		html += `		<p>${row["alnt_datetime"]}</p>`;
																		html += `	</div>`;
																		html += `</div>`;
																	}
																	$("#show_my_notication").html(html); // แสดงข้อความแจ้งเตือน
																}else{
																	toastr.error(json["error"]);
																}
															},
															error:function(error){
																toastr.error(error.statusText);
															}
														});
														return false;
													}
													func_show_my_notication();
													// ตัวแปร intervalInMillisecondsForAlertNotificationOnHeaderPage มาจากไฟล์ header.php
													setInterval(func_show_my_notication, intervalInMillisecondsForAlertNotificationOnHeaderPage); // เมื่อผ่านไปครบ 5 นาทีจะทำงานในฟังก์ชั่นนี้อีกรอบ

													function func_set_reading_notication(alnt_id){
														$.ajax({
															type: "POST",
															url: "<?=$_dr_api?>/manage_alert_notication.php",
															data: { 
																	"action":"read_alert_notication",
																	"alnt_id":alnt_id
																},
															success:function(respon){
																let json = JSON.parse(respon);
																if(json["status"] == 1){
																	let row = json["data"][0];
																	$("#notication_header").html(row["alnt_header"]);
																	$("#notication_body").html(row["content_html"]);

																	func_show_my_notication();
																	func_show_notication_on_header_page();
																}else{
																	toastr.error(json["error"]);
																}
															},
															error:function(error){
																toastr.error(error.statusText);
															}
														});
													}
													<?php if(isset($_GET["id"])){ ?>
														func_set_reading_notication("<?php echo $_GET["id"];?>");
													<?php } ?>
												</script>
											</div>
											<!-- main-chat-list -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
								<div class="card custom-card">
									<div class="main-content-app pt-0">
										<div class="main-content-body main-content-body-chat">
											<div class="main-chat-header pt-3">
												<!-- <div class="main-img-user online"><img alt="avatar" src="../../assets/images/users/1.jpg"></div> -->
												<div class="me-3 notifyimg  bg-success-gradient brround box-shadow-primary">
													<i class="fe fe-shopping-cart text-white"></i>
												</div>
												<div class="main-chat-msg-name mt-2">
													<h6 id="notication_header">คลิกการแจ้งเตือนเพื่อดูรายละเอียดการแจ้งเตือน</h6>
													<span class="dot-label bg-success"></span><small class="me-3">online</small>
												</div>
												<!-- <nav class="nav">
													<a class="nav-link" href="" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-end shadow">
														<a class="dropdown-item" href="#"><i class="fe fe-phone-call me-1"></i> Phone Call</a>
														<a class="dropdown-item" href="#"><i class="fe fe-video me-1"></i> Video Call</a>
														<a class="dropdown-item" href="#"><i class="fe fe-user-plus me-1"></i> Add Contact</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
													</div>
													<a class="nav-link" data-bs-toggle="tooltip" href="" title="Phone Call"><i class="fe fe-phone-call"></i></a>
													<a class="nav-link" data-bs-toggle="tooltip" href="" title="Video Call"><i class="fe fe-video"></i></a>
													<a class="nav-link" data-bs-toggle="tooltip" href="" title="Add Contact"><i class="fe fe-user-plus"></i></a>
													<a class="nav-link" data-bs-toggle="tooltip" href="" title="Delete"><i class="fe fe-trash-2"></i></a>
												</nav> -->
											</div><!-- main-chat-header -->
											<div class="main-chat-body">
												<div class="content-inner" id="notication_body">

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
					</div>
<?php require_once("../../includes/footer.php"); ?>