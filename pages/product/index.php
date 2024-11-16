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
								<h1 class="page-title">จัดการสินค้า</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">จัดการสินค้า</li>
								</ol>
							</div>
						</div>
						<!-- PAGE-HEADER END -->

              <!-- CONTENT START -->
              <div class="card">
                <div class="card-body">
									<div class="row mb-2">
										<form class="col" onsubmit="return func_list_products(0);">
											<div class="input-group">
												<input type="text" id="keyword_search_products" class="form-control" value="" placeholder="ระบุสินค้าที่ต้องการค้นหา...">
												<button class="btn btn-success" type="submit"><i class="fa fa-search"></i> ค้นหาสินค้า</button>
											</div>
										</form>
										<div class="col-auto">
											<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_form_manage_category"><i class="bi bi-gear-fill"></i> จัดการหมวดหมู่สินค้า</button>
										</div>
										<div class="col-auto">
											<button onclick="reset_form_all(); $('#modal_form_manage_product').modal('show');" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่มสินค้า</button>
										</div>
										<div class="col-auto">
											<a href="<?=$_dr_export?>/excel/export_product.php" class="btn btn-success">Export Excel</a>
										</div>
									</div>
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
													<th scope="col">ระยะเวลาการชำระเงินสูงสุด</th>
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
					</div>

		<!-- Modal จัดการหมวดหมู่สินค้า -->
    <div class="modal fade" id="modal_form_manage_category" tabindex="-1" aria-labelledby="modal_label_manage_category" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_label_manage_category">จัดการหมวดหมู่สินค้า</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <form onsubmit="return func_create_category();">
                            <div class="input-group mb-3">
                                <input class="form-control cls_form" type="text" value="" maxlength="60" id="input_category_name_for_create" placeholder="ระบุชื่อหมวดหมู่สินค้าสำหรับเพิ่ม">
                                <button type="submit" class="btn btn-labeled btn-success"><span class="btn-label"><i class="fa fa-save"></i></span> เพิ่ม</button>
                            </div>
                        </form>
                  </div>
                  <div class="form-group">
                        <table class="table table-bordered table-striped table-hover text-nowrap w-100" id="list_categorys">

                        </table>
                  </div>
                  <script>
                    function func_create_category(){
                      page_loading("show");

                      // ตรวจสอบว่าค่าที่รับมาเป็นตัวเลขหรือไม่
                      let inputValue = $("#input_category_name_for_create").val();
                      if(inputValue == ""){
                        Swal.fire({
                          icon: 'error',
                          title: 'ผิดพลาด',
                          text: 'กรุณากรอกชื่อหมวดหมู่สินค้า'
                        });
                        page_loading("hide");
                        return false;
                      }
              
                      let isNumber = /^\d+$/.test(inputValue);
                      if (isNumber === false) {
                        $.ajax({  
                              type: "POST", 
                              url: "<?=$_dr_api?>/manage_category.php", 
                              data: { 
                                  "action":"create_category", 
                                  "cate_name": inputValue 
                              },
                          success:function(respon){
                            let json = JSON.parse(respon);
                            if(json["status"] == 1){
                              toastr.success("บันทึกสำเร็จ");
                              $("#input_category_name_for_create").val("");
                              page_loading("hide");
                              func_list_categorys();
                            }else{
                              toastr.error(json["error"]);
                              page_loading("hide");
                            }
                          },
                          error:function(error){
                            toastr.error(error.statusText);
                          }
                        });
                      }else{
                        Swal.fire({
                          icon: 'error',
                          title: 'ผิดพลาด',
                          text: 'กรุณากรอกตัวอักษร'
                        });
                        page_loading("hide");
                      }
                      return false;
                    }
                    function func_update_category(cate_id){
                      // ตรวจสอบว่าค่าที่รับมาเป็นตัวเลขหรือไม่
                      let inputValue = $("#input_category_name_for_update_"+cate_id).val();
                      if(inputValue == ""){
                        Swal.fire({
                          icon: 'error',
                          title: 'ผิดพลาด',
                          text: 'กรุณากรอกชื่อหมวดหมู่สินค้า'
                        });
                        page_loading("hide");
                        return false;
                      }
              
                      let isNumber = /^\d+$/.test(inputValue);
                      if (isNumber === false) {
                        page_loading("show");
                        $.ajax({  type: "POST", url: "<?=$_dr_api?>/manage_category.php", 
                                  data: { "action":"update_category", 
                                          "cate_id": cate_id,
                                          "cate_name": inputValue },
                          success:function(respon){
                            let json = JSON.parse(respon);
                            if(json["status"] == 1){
                              toastr.success("บันทึกสำเร็จ");
                              func_list_categorys();
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
                      }else{
                        Swal.fire({
                          icon: 'error',
                          title: 'ผิดพลาด',
                          text: 'กรุณากรอกตัวอักษร'
                        });
                        page_loading("hide");
                      }
                      return false;
                    }
                    function func_delete_category(cate_id){
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
                          $.ajax({  type: "POST", url: "<?=$_dr_api?>/manage_category.php", 
                            data: { "action":"delete_category", 
                                    "cate_id": cate_id},
                            success:function(respon){
                              let json = JSON.parse(respon);
                              if(json["status"] == 1){
                                toastr.success("ลบสำเร็จ");
                                func_list_categorys();
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
                    function func_list_categorys(){
                      $.ajax({  type: "POST", url: "<?=$_dr_api?>/manage_category.php", data: { "action":"read_categorys", "keyword":""},
                        success:function(respon){
                          let json = JSON.parse(respon);
                          if(json["status"] == 1){
                            $("#list_categorys").empty();
                            for(let i in json["data"]){
                              $("#list_categorys").append(`
                                <tr>
                                  <td class="py-1 pe-0">${Number(i)+1}.</td>
                                  <td class="ps-0 py-1">
                                    <form class="input-group py-1" onsubmit="return func_update_category('${json["data"][i]["ctgr_id"]}')">
                                        <input class="form-control" placeholder="ระบุชื่อหมวดหมู่สำหรับแก้ไข" id="input_category_name_for_update_${json["data"][i]["ctgr_id"]}" value="${json["data"][i]["ctgr_name"]}">
                                        <button class="py-1 btn btn-warning text-white" type="submit"><i class="fa fa-edit"></i> บันทึก</button>
                                        <button class="py-1 btn btn-danger text-white" onclick="func_delete_category('${json["data"][i]["ctgr_id"]}');" type="button"><i class="fa fa-trash"></i></button>
                                    </form>
                                  </td>
                                </tr>
                              `);
                            }
                            func_list_category_to_select();
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
                    func_list_categorys();
                  </script>
                </div>
                <div class="modal-footer py-1">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal จัดการสินค้า -->
    <div class="modal fade" id="modal_form_manage_product" tabindex="-1" aria-labelledby="modal_label_form_manage_product" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_label_form_manage_product">จัดการข้อมูลสินค้า</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body p-2">
                  <div class="card mt-4">
                    <div class="card-body px-2">
                      <form>
                        <div class="row mb-2">
                          <div class="col-12 col-md-6">
                            <label for="select_pd_cate" class="form-label mb-1">หมวดหมู่สินค้า</label>
                            <select class="form-select" id="select_pd_cate" name="select_pd_cate" style="width:100%;">
                            </select>
                          </div>
                          <div class="col-12 col-md-6">
                            <label for="pd_name" class="form-label mb-1">ชื่อสินค้า</label>
                            <input type="text" class="form-control cls_input_form check_null" id="pd_name" name="pd_name" maxlength="100">
                          </div>
                        </div>
                        <script>
                          function func_list_category_to_select(){
                            page_loading("show");
                            $.ajax({  
                            type: "POST", 
                            url: '<?=$_dr_api?>/manage_category.php', 
                            data: { 
                              "action": "read_categorys",
                              "keyword":""
                            },
                            success:function(respon){
                              let json = JSON.parse(respon);
                              if(json["status"] == 1){
                              $("#select_pd_cate").empty();
                              for(i in json["data"]){
                                $("#select_pd_cate").append(`
                                <option value="${json["data"][i]["ctgr_id"]}">${json["data"][i]["ctgr_name"]}</option>
                                `);
                              }
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
                          func_list_category_to_select();

                          function check_textNumber_is_number(element_id){
                            let val = $("#"+element_id).val();
                            let isNumber = /^\d+$/.test(val);
                            if (isNumber === false) {
                              $("#show_text_error_"+element_id).html("** ไม่ควรกรอกเป็นตัวอักษรอื่นนอกจากตัวเลข **");
                            }else{
                              $("#show_text_error_"+element_id).html("");
                            }
                          }
                        </script>
                        <div class="row mb-2">
                          <div class="col-12 col-md-6">
                            <label for="pd_price" class="form-label mb-1">ราคา <span id="show_text_error_pd_price" style="color:#FF0000;"></span></label>
                            <div class="input-group">
                            <input type="number" class="form-control cls_input_form check_null" onkeyup="check_textNumber_is_number('pd_price')" id="pd_price" name="pd_price" step=".01" min="0" placeholder="00.00" value="">
                            <span class="input-group-text">บาท</span>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <label for="pd_stock" class="form-label mb-1">จำนวนสินค้าที่ขาย <span id="show_text_error_pd_stock" style="color:#FF0000;"></span></label>
                            <input type="number" class="form-control cls_input_form check_null" onkeyup="check_textNumber_is_number('pd_stock')" id="pd_stock" name="pd_stock" min="0" placeholder="0">
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col-12 col-md-6">
                            <label for="pd_freight" class="form-label mb-1">ค่าขนส่งของสินค้าชิ้นนี้ <span id="show_text_error_pd_freight" style="color:#FF0000;"></span></label>
                            <input type="number" class="form-control cls_input_form check_null" onkeyup="check_textNumber_is_number('pd_freight')" id="pd_freight" name="pd_freight" step=".01" min="0" placeholder="00.00" value="">
                          </div>
                          <div class="col-12 col-md-6">
                            <label for="pd_payment_period" class="form-label mb-1">ระยะเวลาที่ชำระเงินไม่เกิน <span id="show_text_error_pd_payment_period" style="color:#FF0000;"></span></label>
                            <input type="number" class="form-control cls_input_form check_null" onkeyup="check_textNumber_is_number('pd_payment_period')" id="pd_payment_period" name="pd_payment_period" placeholder="" value="">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div id="div_show_product_images_all" class="card mt-3 d-none">
                    <div class="card-body px-2">
                      <div id="card_show_product_images" class="row mb-2">
                      </div>
                      <script>
                          function func_upload_image(pd_id, action, pd_img_id = null){
                            // สร้างอิลิเมนต์ input สำหรับเลือกไฟล์
                            let input = document.createElement('input');
                            input.type = 'file';
                            input.addEventListener('change', () => {
                              // เมื่อไฟล์ถูกเลือก
                              let formData = new FormData();
                              if(action == "create"){
                                formData.append("action", "create_product_file");
                              }else if(action == "replace"){
                                formData.append("action", "update_product_file");
                              }
                              formData.append("pd_img_id", pd_img_id);
                              formData.append("pd_id", pd_id);
                              let count = input.files.length;
                              for(let index = 0; index < count; index++) {
                                formData.append("pd_image", input.files[index]);
                              }
                              page_loading("show");

                              // สร้าง XMLHTTPRequest object
                              let xhr = new XMLHttpRequest();
                              xhr.open("POST", "<?=$_dr_api?>/manage_product.php", true);
                              xhr.onload = function() {
                                if (xhr.status === 200) {
                                  let json = JSON.parse(xhr.responseText);
                                  if(json["status"] == 1){
                                    func_list_product_images(pd_id);
                                  }else{
                                    Swal.fire({
                                      icon: 'error',
                                      title: 'ผิดพลาด',
                                      text: json["error"]
                                    });
                                  }
                                  page_loading("hide");
                                }else{
                                  toastr.error(xhr.statusText);
                                  page_loading("hide");
                                }
                              };
                              xhr.onerror = function() {
                                toastr.error(xhr.statusText);
                              };
                              xhr.send(formData);
                            });
                            input.click();
                          }
                          function func_change_selected_cover_image(pd_id, pd_img_id){
                            page_loading("show");
                            $.ajax({  type: "POST", url: "<?=$_dr_api?>/manage_product.php", data: { "action":"change_selected_cover_image", "pd_img_id":pd_img_id, "pd_id":pd_id},
                              success:function(respon){
                                let json = JSON.parse(respon);
                                if(json["status"] == 1){
                                  func_list_product_images(pd_id);
                                  func_list_products(curent_page);
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
                          function func_delete_image(pd_id, pd_img_id){
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
                                $.ajax({  type: "POST", url: "<?=$_dr_api?>/manage_product.php",
                                  data: { 
                                    "action":"delete_product_file", 
                                    "pd_img_id":pd_img_id,
                                    "pd_id":pd_id
                                  },
                                  success:function(respon){
                                    let json = JSON.parse(respon);
                                    if(json["status"] == 1){
                                      func_list_product_images(pd_id);
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
                          }
                          function func_list_product_images(pd_id){
                            $.ajax({  type: "POST", url: "<?=$_dr_api?>/manage_product.php", data: { "action":"read_product_files", "pd_id":pd_id },
                              success:function(respon){
                                let json = JSON.parse(respon);
                                if(json["status"] == 1){
                                  $("#card_show_product_images").empty();
                                  let count_image = json["data"].length;
                                  for(let i = 0; i <= count_image; i++){
                                    if(typeof json["data"][i] !== 'undefined'){
                                      let showBorderSelectCover = "";
                                      let showButtonEditImage = "";
                                      if(json["data"][i]["pd_img_status_cover"] == 1){
                                        showBorderSelectCover = "outline: #666BFF solid 3px;";
                                        showButtonEditImage = "";
                                      }else{
                                        showBorderSelectCover = "";
                                        showButtonEditImage = ` <div class="btn-group" role="group">
                                                      <button type="button" class="btn btn-primary btn-sm" onclick="func_change_selected_cover_image('${pd_id}', '${json["data"][i]["pd_img_id"]}')"><i class='far fa-image'></i></button>
                                                      <button type="button" class="btn btn-warning btn-sm" onclick="func_upload_image('${pd_id}', 'replace', '${json["data"][i]["pd_img_id"]}')"><i class='fas fa-sync-alt'></i></button>
                                                      <button type="button" class="btn btn-danger btn-sm" onclick="func_delete_image('${pd_id}', '${json["data"][i]["pd_img_id"]}')"><i class="fa fa-trash"></i></button>
                                                    </div>`
                                      }
                                      $("#card_show_product_images").append(`
                                        <div class="col-6 col-lg-3 p-1">
                                          <img class="w-100" style="height:16rem; border-radius:5px; ${showBorderSelectCover}" id="" src="<?=$_dr_storage?>/products/${pd_id}/image_main/${json["data"][i]["pd_img_name"]}" alt="Image Preview">
                                          ${showButtonEditImage}
                                        </div>
                                      `);
                                    }else{
                                      $("#card_show_product_images").append(`
                                        <div class="col-6 col-lg-3 p-1">
                                          <div onclick="func_upload_image('${pd_id}', 'create')" class="w-100 d-flex justify-content-center align-items-center" style="height:16rem; border-radius:5px; background-color:#FFD28D; cursor:pointer;">
                                          <p style="font-size:1500%;" class="text-white my-0"> + </p>
                                          </div>
                                        </div>
                                      `);
                                    }
                                  }
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
                      </script>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <div class="card-body px-2">
                      <div class="row">
                        <div class="col-12">
                          <div>
                            <textarea tyep="text" id="pd_detail" name="pd_detail">
                              <h1 style='font-family:tahoma;'>ระบุคำอธิบายสินค้า...</h1>
                            </textarea>
                          </div>
                        </div>
                      </div>
                      <script src="<?=$_dr_plugin?>/ckeditor/ckeditor.js"></script>
                      <script>
                        CKEDITOR.replace('pd_detail', {
                          customConfig: '<?=$_dr_plugin?>/ckeditor/config.js?v=<?=time()?>',
                          "filebrowserImageUploadUrl": "/content/upload/imgupload.php" //(แก้ไขด้วย)
                        });
                      </script>
                      <div class="row mt-3">
                        <div class="col-12 text-center">
                          <input class="cls_input_form" type="hidden" id="pd_id" value="">
                          <button onclick="form_manage_product();" type="button" class="btn btn-success w-75"><i class="fa fa-save"></i> บันทึก</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer py-1">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var curent_page = 0;

        function func_delete_product(pd_id){
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
                url: "<?=$_dr_api?>/manage_product.php",
                data: { "action":"delete_product", "pd_id":pd_id},
                success:function(respon){
                  let json = JSON.parse(respon);
                  if(json["status"] == 1){
                    toastr.success("Success");
                    func_list_products(curent_page);
                    reset_form_all();
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
        function func_preview_update_product(pd_id){
          page_loading("show");
          $.ajax({
            type: "POST",
            url: "<?=$_dr_api?>/manage_product.php",
            data: { "action":"read_products", "keyword":"", "pd_id":pd_id},
            success:function(respon){
              let json = JSON.parse(respon);
              $("#div_show_product_images_all").removeClass("d-none");
              $("#pd_id").val(json["data"][0]["pd_id"]);
              $("#pd_name").val(json["data"][0]["pd_name"]);
              $("#pd_price").val(json["data"][0]["pd_price"]);
              $("#pd_stock").val(json["data"][0]["pd_stock"]);
              $("#pd_freight").val(json["data"][0]["pd_freight"]);
              $("#pd_payment_period").val(json["data"][0]["pd_payment_period"]);
              $("#select_pd_cate").val(json["data"][0]["ctgr_id"]);
              CKEDITOR.instances.pd_detail.setData(json["data"][0]["pd_detail_html"]);
              func_list_product_images(pd_id);
              page_loading("hide");
              $('#modal_form_manage_product').modal('show');
            },
            error:function(error){
              toastr.error(error.statusText);
              page_loading("hide");
            }
          });
        }
        function reset_form_all(){
          let count = document.getElementsByClassName("cls_input_form").length;
          for(let i = 0; i < count; i++){
            document.getElementsByClassName("cls_input_form")[i].value = "";
          }
          $("#image_preview").attr("src", "");
          $("#div_image_preview").addClass("d-none");
          $("#pd_name").removeAttr("readonly");
          $("#select_pd_cate").val(0);
          $("#div_show_product_images_all").addClass("d-none");
          CKEDITOR.instances.pd_detail.setData("<h1 style='font-family:tahoma;'>ระบุคำอธิบายสินค้า...</h1>");
          return false;
        }
        function func_list_products(page){
            curent_page = page;
            page_loading("show");
            $.ajax({
                type: "POST",
                url: "<?=$_dr_api?>/manage_product.php",
                data: { "action":"read_products", "page":page, "keyword":$("#keyword_search_products").val() },
                success:function(respon){
                    let json = JSON.parse(respon);
                    if(json["status"] == 1){
                        $("#show_products").empty();
                        for(let i in json["data"]){
                            $("#show_products").append(`
                              <tr>
                                <td class="text-center">${Number(i)+1}</td>
                                <td class="text-center p-0" style="width:20mm;"> <img class="img-fluid w-100" src="<?=$_dr_storage?>/products/${json["data"][i]["pd_id"]}/image_main/${json["data"][i]["pd_image"]}"> </td>
                                <td>${json["data"][i]["pd_name"]}</td>
                                <td>${json["data"][i]["pd_price"]}</td>
                                <td>${json["data"][i]["pd_stock"]}</td>
                                <td>${json["data"][i]["pd_freight"]}</td>
                                <td>${json["data"][i]["pd_payment_period"]}</td>
                                <td class="text-center">
                                  <button class="btn btn-sm btn-warning w-100 py-1 text-center" onclick="func_preview_update_product('${json["data"][i]["pd_id"]}')"><i class="fa fa-edit"></i> แก้ไข</button>
                                  <br>
                                  <button class="btn btn-sm btn-danger w-100 py-1 text-center" onclick="func_delete_product('${json["data"][i]["pd_id"]}')"><i class="fa fa-trash"></i> ลบ</button>
                                </td>
                              </tr>
                            `)
                        }
                        if(json["data"].length == 0){
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
                    }else{
                        toastr.error(json["error"]);
                        page_loading("hide");
                    }
                },
                error:function(error){
                toastr.error(error.statusText);
                }
            });
            return false;
        }
        func_list_products(curent_page);

        // $(function() {
          // $("#form_manage_product").submit(function(e){
            // e.preventDefault();
          function form_manage_product(){
            for(let i = 0; i < document.getElementsByClassName("check_null").length; i++) {
              let val = document.getElementsByClassName("check_null")[i].value;
              if (val == "") {
                Swal.fire({
                  icon: 'error',
                  title: 'ผิดพลาด',
                  text: 'กรุณากรอกข้อมูลให้ครบ'
                });
                return false;
              }
            }

            let isNumber = /^\d+$/.test($("#pd_name").val());
            if (isNumber) {
              Swal.fire({
                icon: 'error',
                title: 'ผิดพลาด',
                text: 'ชื่อสินค้าไม่ควรเป็นเลข'
              });
              return false;
            }

            page_loading("show");
            // ถ้า $("#pd_id").val() == "" แปลว่ากำลังสร้างข้อมูลสินค้า
            // ถ้า $("#pd_id").val() != "" แปลว่ากำลังแก้ไขข้อมูลสินค้า
            let formData = new FormData();
            formData.append("action", "save_product");
            formData.append("pd_id", $("#pd_id").val());
            formData.append("pd_name", $("#pd_name").val());
            formData.append("pd_price", $("#pd_price").val());
            formData.append("pd_stock", $("#pd_stock").val());
            formData.append("pd_freight", $("#pd_freight").val());
            let pd_detail = CKEDITOR.instances.pd_detail.getData();
            formData.append("pd_detail", pd_detail);
            formData.append("pd_payment_period", $("#pd_payment_period").val());
            formData.append("ctgr_id", $("#select_pd_cate").val());
            $.ajax({
              type:"POST",
              processData: false,
              contentType: false,
              url:"<?=$_dr_api?>/manage_product.php",
              data: formData ,
              // dataType : 'JSON',
              success:function(respon){
                var json = JSON.parse(respon);
                if(json["status"] == 1){
                  if(json["return_action"] == "create"){
                    func_preview_update_product(json["return_pd_id"])
                  }
                  Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ',
                    text: 'บันทึกข้อมูลสำเร็จ'
                  });
                  func_list_products(curent_page);
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
            return false;
          // })
          }
        // });
    </script>
<?php require_once("../../includes/footer.php"); ?>