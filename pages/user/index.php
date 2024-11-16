<?php 
    require_once("../../includes/header.php");
    if(!$_check_session_user){
        echo "<script>  location.href = '../../pages/homepage/';  </script>";
        exit;
    }else{
        if(($_SESSION["user"]["user_type"] == 1) === false){
            echo "<script>  location.href = '../../pages/homepage/';  </script>";
            exit;
        }
    }
?>
					<div class="side-app">

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">รายชื่อผู้ใช้ในระบบ</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">รายชื่อผู้ใช้ในระบบ</li>
								</ol>
							</div>
						</div>
						<!-- PAGE-HEADER END -->

                        <!-- CONTENT START -->
                        <div class="card">
                                <!-- <div class="card-header">
                                    <h3 class="card-title">Panel with custom buttons</h3>
                                    <div class="card-options">
                                        <a href="#" class="btn btn-primary btn-sm">Action 1</a>
                                        <a href="#" class="btn btn-secondary btn-sm ms-2">Action 2</a>
                                    </div>
                                </div> -->
                                <div class="card-body">
									<div class="row mb-2">
										<form class="col" onsubmit="return func_list_users(0);">
											<div class="input-group">
												<input type="text" id="keyword_search_users" class="form-control" value="" placeholder="ระบุผู้ใช้ที่ต้องการค้นหา...">
												<button class="btn btn-success" type="submit"><i class="fa fa-search"></i> ค้นหา</button>
											</div>
										</form>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered table-striped table-hover text-nowrap align-middle mb-0">
											<thead class="border-top">
												<tr>
													<th scope="col">#</th>
													<th scope="col">ชื่อ</th>
													<th scope="col">อีเมลล์</th>
													<th scope="col">ประเภทผู้ใช้</th>
													<th scope="col">เข้าสู่ระบบครั้งล่าสุด</th>
													<th scope="col">ลงทะเบียนเมื่อวันที่</th>
													<th scope="col">จัดการ</th>
												</tr>
											</thead>
											<tbody id="show_users" class="border-bottom">
											</tbody>
										</table>
									</div>
									<div class="row">
										<div class="col-12 text-end">
											<div id="content_pagination">
											</div>
										</div>
									</div>
                                </div>
                            </div>
                        <!-- CONTENT END -->
					</div>

	<!-- Modal รายละเอียดผู้ใช้ -->
    <div class="modal fade" id="modal_show_user_detail" tabindex="-1" aria-labelledby="modal_label_show_user_detail" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_label_show_user_detail">รายละเอียดผู้ใช้</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h4>ข้อมูลผู้ใช้</h4>
                                <ul>
                                    <li><strong>ชื่อ :</strong> <span style="color:#0008FF;" id="show_name_for_detail"></span></li>
                                    <li><strong>Email :</strong> <span style="color:#0008FF;" id="show_email_for_detail"></span></li>
                                    <li><strong>Username :</strong> <span style="color:#0008FF;" id="show_username_for_detail"></span></li>
                                    <li><strong>ประเภทผู้ใช้ :</strong> <span class="badge" id="show_type_for_detail"></span></li>
                                    <li><strong>ลงทะเบียนเมื่อวันที่ :</strong> <span style="color:#0008FF;" id="show_create_for_detail"></span></li>
                                </ul>
                            </div>
                        </div>
                        <form onsubmit="return func_set_user_type();" class="row mb-3">
                            <div class="col-md-12 mb-1"> <label for="">เปลี่ยนประเภทผู้ใช้งาน</label> </div>
                            <div class="col-md-6">
                                <select class="form-control" name="select_set_user_type" id="select_set_user_type">
                                    <option value="1"> ผู้ดูแลระบบ </option>
                                    <option value="2"> สมาชิก (ลูกค้า) </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="hidden" value="" id="input_user_id_for_set_user_type" name="input_user_id_for_set_user_type">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> บันทึก</button>
                            </div>
                        </form>
                        <div class="row" id="parent_show_button_delete_user">
                            <div class="col-md-12">
                                <button id="button_delete_user" class="btn btn-danger"><i class="fa fa-trash"></i> หยุดการทำงานของผู้ใช้</button>
                            </div>
                        </div>
                        <script>
                            function func_set_user_type(){
                                let user_id = $("#input_user_id_for_set_user_type").val();
                                let user_type = $("#select_set_user_type").val();
                                page_loading("show");
                                $.ajax({
                                    type: "POST",
                                    url: "<?=$_dr_api?>/manage_user.php",
                                    data: { "action":"set_user_type",  "user_id":user_id, "user_type":user_type},
                                    success:function(respon){
                                        let json = JSON.parse(respon);
                                        if(json["status"] == 1){
                                            toastr.success("Success");
                                            func_list_users(curent_page);
                                            func_modal_user_detail(user_id);
                                            page_loading("hide");
                                        }else{
                                            toastr.error(json["error"]);
                                            page_loading("hide");
                                        }
                                    },
                                    error:function(error){
                                        toastr.error(error.statusText);
                                        page_loading("hide");
                                    }
                                });
                                return false;
                            }
                        </script>
                    </div>
                </div>
                
                <div class="modal-footer py-1">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

	<script>
        var curent_page = 0;
        function func_list_users(page){
            curent_page = page;
            page_loading("show");
            $.ajax({
                type: "POST",
                url: "<?=$_dr_api?>/manage_user.php",
                data: { "action":"read_users", "page":page, "keyword":$("#keyword_search_users").val() },
                success:function(respon){
                    let json = JSON.parse(respon);
                    if(json["status"] == 1){
                        $("#show_users").empty();
                        for(let i in json["data"]){
                            $("#show_users").append(`
                              <tr>
                                <td class="text-center">${Number(i)+1}</td>
                                <td>${json["data"][i]["user_firstname"]} ${json["data"][i]["user_lastname"]}</td>
                                <td>${json["data"][i]["user_email"]}</td>
                                <td><span class="badge" style="background-color:${json["data"][i]["user_type_bg_color"]}"> ${json["data"][i]["user_type_text_thai"]} </span></td>
                                <td>${json["data"][i]["user_last_login_date"]}</td>
                                <td>${json["data"][i]["user_create_date"]}</td>
                                <td class="text-center">
                                  <button class="btn btn-sm btn-info w-100" data-bs-toggle="modal" data-bs-target="#modal_show_user_detail" onclick="func_modal_user_detail('${json["data"][i]["user_id"]}')">รายละเอียด</button>
                                </td>
                              </tr>
                            `)
                        }
                        if(json["data"].length == 0){
                          $("#show_users").append(`
                            <tr>
                              <td colspan="8" class="text-center"> 
                                ไม่พบข้อมูล
                              </td>
                            </tr>
                          `);
                        }
                        show_pagination("func_list_users", "content_pagination", json["count_all"], curent_page);
                    }else{
                        toastr.error(json["error"]);
                    }
                    page_loading("hide");
                },
                error:function(error){
                toastr.error(error.statusText);
                }
            });
            return false;
        }
        func_list_users(curent_page);

        function func_modal_user_detail(user_id){
            page_loading("show");
            $.ajax({
                type: "POST",
                url: "<?=$_dr_api?>/manage_user.php",
                data: { "action":"read_users", "keyword":"", "user_id":user_id },
                success:function(respon){
                    let json = JSON.parse(respon);
                    if(json["status"] == 1){
                        $("#input_user_id_for_set_user_type").val(json["data"][0]["user_id"]);
                        $("#show_name_for_detail").html(json["data"][0]["user_firstname"]+" "+json["data"][0]["user_lastname"]);
                        $("#show_email_for_detail").html(json["data"][0]["user_email"]);
                        $("#show_username_for_detail").html(json["data"][0]["user_username"]);
                        $("#show_type_for_detail").html(json["data"][0]["user_type_text_thai"]);
                        $("#show_type_for_detail").attr("style", "background-color:"+json["data"][0]["user_type_bg_color"]);
                        $("#select_set_user_type").val(json["data"][0]["user_type"]);
                        $("#show_create_for_detail").html(json["data"][0]["user_create_date"]);
                        if(json["data"][0]["user_id"] == "<?php echo $_SESSION["user"]["user_id"]?>"){
                            $("#parent_show_button_delete_user").addClass("d-none");
                            $("#button_delete_user").removeAttr("onclick");
                        }else{
                            $("#parent_show_button_delete_user").removeClass("d-none");
                            $("#button_delete_user").attr("onclick", "func_delete_user('"+json["data"][0]["user_id"]+"');");
                        }
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
        function func_delete_user(user_id){
            Swal.fire({
                title: 'ยืนยันการลบ',
                text: "ต้องการลบใช่หรือไม่!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if(result.isConfirmed){
                    page_loading("show");
                    $.ajax({
                        type: "POST",
                        url: "<?=$_dr_api?>/manage_user.php",
                        data: { "action":"delete_user", "user_id":user_id },
                        success:function(respon){
                            let json = JSON.parse(respon);
                            if(json["status"] == 1){
                                toastr.success("Success");
                                func_list_users(curent_page);
                                page_loading("hide");
                                $("#modal_show_user_detail").modal("hide");
                            }else{
                                toastr.error(json["error"]);
                                page_loading("hide");
                            }
                        },
                        error:function(error){
                            toastr.error(error.statusText);
                            page_loading("hide");
                        }
                    });
                }
            })
        }
	</script>
<?php require_once("../../includes/footer.php"); ?>