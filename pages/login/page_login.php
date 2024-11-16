<?php require_once ("../../includes/config.php");

$database_obj = new Database();
$database_obj->get_session_start();

if (isset($_SESSION["user"])) {
  header("location:" . $_dr_page . "/homepage/");
  exit();
}
require_once ("../../assets/class/class_google_service.php"); ?>
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
  <link href="../../assets/admin_template/HTML/HTML/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

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
                <img src="../../assets/img/<?= $_logo_image ?>" alt="" class="w-75" style="object-fit: cover;">
              </div>
              <form id="formLogin" class="cls_card_form">
                <h3 class="text-center mb-4 fw-bold">เข้าสู่ระบบ</h3>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control cls_input_form check_null_for_login" id="username"
                    name="username" />
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">รหัสผ่าน</label>
                  <input type="password" class="form-control cls_input_form check_null_for_login" id="password"
                    name="password" />
                </div>
                <div class="row">
                  <div class="col-12 mb-3">
                    <button type="submit" class="mx-auto btn btn-primary btn-block w-50">เข้าสู่ระบบ</button>
                  </div>
                  <?php
                  $google_class = new ads_google_service();
                  $google_class->set_client_id($_google_client_id);
                  $google_class->set_client_secret($_google_client_secret);
                  //$client_redirect_url จะต้องเหมือนที่ฟิกไว้ใน Google Console ด้วยนะ
                  $client_redirect_url = $_redirect_url_for_auth_by_google;
                  $scope[] = "https://www.googleapis.com/auth/userinfo.profile";
                  $scope[] = "https://www.googleapis.com/auth/userinfo.email";
                  // $scope[] = "https://www.googleapis.com/auth/calendar";
                  $link_gg_login = $google_class->gen_authen_url($client_redirect_url, $scope);
                  ?>
                  <div class="col-12 mb-3">
                    <a href="<?php echo $link_gg_login; ?>" type="button"
                      class="mx-auto btn btn-primary btn-block w-50">เข้าสู่ระบบด้วยบัญชี Google</a>
                  </div>
                </div>
                <p class="mt-4 mb-0">
                  <span class="mb-0"><a href="../../pages/homepage/" class="text-info">กลับไปหน้าหลัก</a></span>
                  <span class="mb-0 text-danger" onclick="change_form('formRegister');"
                    style="cursor:pointer;">ลงทะเบียน</span>
                </p>
              </form>

              <!-- ฟอร์มเซ็ตรหัสผ่านในกรณีที่ลงทะเบียนด้วยบัญชี Facebook -->
              <form id="formInputPasswordForRegisterByFacebook" class="cls_card_form d-none">
                <h3 class="card-title text-center mb-4">ตั้งค่า Username และ รหัสผ่าน</h3>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control cls_input_form" id="username_for_regsiter_by_facebook"
                    name="username_for_regsiter_by_facebook" required />
                  <p style="color:#FF0000;" id="output_error_username_for_register_by_facebook"></p>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">รหัสผ่าน</label>
                  <input type="password" class="form-control cls_input_form"
                    onkeyup="func_check_confirm_password_register_by_fb();" id="password_for_regsiter_by_facebook"
                    name="password_for_regsiter_by_facebook" required />
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">ยืนยันรหัสผ่าน</label>
                  <input type="password" class="form-control cls_input_form"
                    onkeyup="func_check_confirm_password_register_by_fb();" id="password_for_regsiter_by_facebook2"
                    name="password_for_regsiter_by_facebook2" required />
                  <p style="color:#FF0000;" id="output_error_confirm_password_for_register_by_fb"></p>
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-success btn-block">Confirm</button>
                </div>
              </form>

              <!-- ฟอร์มลงทะเบียน -->
              <form id="formRegister" class="cls_card_form d-none">
                <h3 class="text-center mb-4 fw-bold">ลงทะเบียน</h3>
                <div class="row mb-2">
                  <div class="col-6">
                    <label for="first_name" class="form-label">ชื่อจริง</label>
                    <input type="text" class="form-control cls_input_form check_null_for_register" id="first_name"
                      name="first_name" maxlength="60" />
                  </div>
                  <div class="col-6">
                    <label for="last_name" class="form-label">นามสกุล</label>
                    <input type="text" class="form-control cls_input_form check_null_for_register" id="last_name"
                      name="last_name" maxlength="60" />
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-12">
                    <label for="email" class="form-label">อีเมล์</label>
                    <input type="email" class="form-control cls_input_form check_null_for_register"
                      id="email_for_regsiter" name="email_for_regsiter" maxlength="200" />
                  </div>
                  <p style="color:#FF0000;" id="output_error_email_for_register"></p>
                </div>
                <div class="row mb-2">
                  <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control cls_input_form check_null_for_register"
                      id="username_for_regsiter" name="username_for_regsiter" maxlength="60" />
                  </div>
                  <p style="color:#FF0000;" id="output_error_username_for_register"></p>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label for="password" class="form-label">รหัสผ่าน</label>
                    <input type="password" class="form-control cls_input_form check_null_for_register"
                      onkeyup="func_check_confirm_password();" id="password_for_register" name="password_for_register"
                      maxlength="60" />
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label for="password2" class="form-label">ยืนยันรหัสผ่าน</label>
                    <input type="password" class="form-control cls_input_form check_null_for_register"
                      onkeyup="func_check_confirm_password();" id="password_for_register2"
                      name="password_for_register2" />
                  </div>
                  <p style="color:#FF0000;" id="output_error_confirm_password_for_register"></p>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender_for_register" id="male_for_register"
                        checked>
                      <label class="form-check-label" for="gender_for_register1">
                        ชาย
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender_for_register" id="female_for_register">
                      <label class="form-check-label" for="gender_for_register2">
                        หญิง
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender_for_register"
                        id="gender_other_for_register">
                      <label class="form-check-label" for="gender_for_register2">
                        เพศอื่นๆ
                      </label>
                    </div>
                    <p style="color:#FF0000" id="error_gender_for_register"></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-block w-50">ลงทะเบียน</button>
                  </div>
                </div>
                <p class="mt-4 mb-0">
                  <span class="mb-0"><a href="../../pages/homepage/" class="text-info">กลับไปหน้าหลัก</a></span>
                  <span class="mb-0 text-danger" onclick="change_form('formLogin')"
                    style="cursor:pointer;">เข้าสู่ระบบ</span>
                </p>
              </form>
              <div class="fb-login-button mt-2" data-width="" onlogin="checkLoginState();" data-size="medium"
                data-button-type="login_with" data-layout="default" data-auto-logout-link="false"
                data-use-continue-as="false">
                เข้าสู่ระบบด้วย Facebook
              </div>
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

  <!-- Facebook API -->
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

  <script>
    let check_confirm_password_for_register = true;

    function change_form(show_form) {
      // ซ่อน card ของฟอร์มทั้งหมด
      let count = document.getElementsByClassName("cls_card_form").length;
      for (let i = 0; i < count; i++) {
        document.getElementsByClassName("cls_card_form")[i].classList.add("d-none");
      }
      // แสดงเฉพาะฟอร์มที่เลือก
      document.getElementById(show_form).classList.remove("d-none");

      // เคลียร์ตัวอักษรออกจากช่องกรอกทั้งหมด
      count = document.getElementsByClassName("cls_input_form").length;
      for (let i = 0; i < count; i++) {
        document.getElementsByClassName("cls_input_form")[i].value = "";
      }
    }

    function func_check_confirm_password() {
      let pass1 = $("#password_for_register").val();
      let pass2 = $("#password_for_register2").val();
      if (pass1 == pass2) {
        check_confirm_password_for_register = true;
        $("#output_error_confirm_password_for_register").html("");
      } else {
        check_confirm_password_for_register = false;
        $("#output_error_confirm_password_for_register").html("** ยืนยันรหัสผ่านไม่ตรงกัน **");
      }
    }

    $(function () {
      /** Ajax Submit Login */
      $("#formLogin").submit(function (e) { // เมื่อกด submit ของ Form ที่มี id="formLogin" มันก็จะรันคำสั่ง
        e.preventDefault() // หยุดการทำงานของ Even หลัก หรือก็ืคือ ทำให้หน้าเว็บไม่รีเฟรชเมื่อเรากด submit

        let check_null = true;
        for (let i = 0; i < document.getElementsByClassName("check_null_for_login").length; i++) {
          let val = document.getElementsByClassName("check_null_for_login")[i].value;
          if (val == "") {
            check_null = false;
          }
        }
        if (check_null) {
          $.ajax({
            type: "POST",
            url: "<?= $_dr_api ?>/auth.php", // end point api คือส่ง api ไปยังปลายทางที่ระบุไว้
            data: {
              "action": "login",
              "data": $(this).serialize()
            },
            // $(this) ก็คือมันจะอ้างอิงไปยังตัวไอดีฟอร์ม ก็คือ #formLogin ส่วน .serialize() คือการเรียกข้อมูลที่เรากรอกลงไปใน input ทั้งหมด
            // สรุป $(this).serialize() ก็คือการเรียกข้อมูลใน input ที่อยู่ในฟอร์ม id="formLogin" ทั้งหมดออกมานั่นเอง
            // console.log($(this).serialize()) มันจะแสดงประมาณนี้ username=xxxx&password=yyyy
            success: function (respon) {
              let json = JSON.parse(respon);
              if (json["status"] == 1) {
                window.toastr.remove() // <= เพื่อป้องกันไม่ให้ข้อความแจ้งเตือนมันเยอะเกินไปเมื่อเรากด submit รัวๆ
                toastr.success('เข้าสู่ระบบแล้ว');
                setTimeout(() => {
                  location.href = '../../pages/homepage/';
                }, 800);
              } else {
                Swal.fire({
                  icon: 'error',
                  title: 'ผิดพลาด',
                  text: json["error"]
                });
              }

            },
            error: function (error) {
              toastr.error(error.statusText);
            }

          })/*.done(function(resp) {
              window.toastr.remove() // <= เพื่อป้องกันไม่ให้ข้อความแจ้งเตือนมันเยอะเกินไปเมื่อเรากด submit รัวๆ
              toastr.success('เข้าสู่ระบบเรียบร้อย')
              setTimeout(() => {
                location.href = '../../pages/homepage/'
              }, 800)
            }).fail(function(resp) {
              window.toastr.remove()
              toastr.error('ไม่สามารถเข้าสู่ระบบได้')
              // หากอยากเล่นการแจ้งเตือน toastr ให้ไปที่ลิ้ง https://codeseven.github.io/toastr/demo.html
            })*/
        } else {
          Swal.fire({
            icon: 'error',
            title: 'ผิดพลาด',
            text: 'กรุณากรอกข้อมูลให้ครบ'
          });
        }
      })

      /** Ajax Submit Register */
      $("#formRegister").submit(function (e) {
        e.preventDefault(); // หยุดการทำงานของ Even หลัก หรือก็ืคือ ทำให้หน้าเว็บไม่รีเฟรชเมื่อเรากด submit
        let is_check_gender = true;
        let gender = 0;
        if (document.getElementById("male_for_register").checked) {
          gender = 1;
        } else if (document.getElementById("female_for_register").checked) {
          gender = 2;
        } else if (document.getElementById("gender_other_for_register").checked) {
          gender = 3;
        } else {
          is_check_gender = false;
          $("#error_gender_for_register").html("** เลือกเพศ **");
          return false;
        }

        let check_null = true;
        for (let i = 0; i < document.getElementsByClassName("check_null_for_register").length; i++) {
          let val = document.getElementsByClassName("check_null_for_register")[i].value;
          if (val == "") {
            check_null = false;
          }
        }
        if (check_null == false) {
          Swal.fire({
            icon: 'error',
            title: 'ผิดพลาด',
            text: 'กรุณากรอกข้อมูลให้ครบ'
          });
          return false;
        }

        if (check_confirm_password_for_register && is_check_gender && check_null) {
          $.ajax({
            type: "POST",
            url: "<?= $_dr_api ?>/auth.php", // end point api คือส่ง api ไปยังปลายทางที่ระบุไว้
            data: {
              "action": "register",
              "data": $(this).serialize(),
              "gender": gender
            },
            success: function (respon) {
              let json = JSON.parse(respon);
              if (json["status"] == 1) {
                window.toastr.remove() // <= เพื่อป้องกันไม่ให้ข้อความแจ้งเตือนมันเยอะเกินไปเมื่อเรากด submit รัวๆ
                toastr.success('ลงทะเบียนเรียบร้อย');
                // หากอยากเล่นการแจ้งเตือน toastr ให้ไปที่ลิ้ง https://codeseven.github.io/toastr/demo.html
                setTimeout(() => {
                  location.href = '../../pages/login/page_login.php';
                }, 800);
              } else {
                Swal.fire({
                  icon: 'error',
                  title: 'ผิดพลาด',
                  text: json["error"]
                })
              }

            },
            error: function (error) {
              toastr.error(error.statusText);
              page_loading("hide");
            }
          });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'ผิดพลาด',
            text: 'มีข้อมูลผิดพลาด กรุณาตรวจสอบ'
          })
        }
      })
      $('#email_for_regsiter').on('keyup', function () {
        setTimeout(() => {
          $.ajax({
            type: "POST",
            url: "<?= $_dr_api ?>/auth.php", // end point api คือส่ง api ไปยังปลายทางที่ระบุไว้
            data: {
              "action": "check_email_for_register",
              "email": $(this).val()
            },
            success: function (respon) {
              let json = JSON.parse(respon);
              if (json["status"] == 1) {
                $("#output_error_email_for_register").html("");
              } else {
                $("#output_error_email_for_register").html(json["error"]);
              }
            }
          })
        }, 400);
      })
      $('#username_for_regsiter').on('keyup', function () {
        setTimeout(() => {
          $.ajax({
            type: "POST",
            url: "<?= $_dr_api ?>/auth.php", // end point api คือส่ง api ไปยังปลายทางที่ระบุไว้
            data: {
              "action": "check_username_for_register",
              "username": $(this).val()
            },
            success: function (respon) {
              let json = JSON.parse(respon);
              if (json["status"] == 1) {
                $("#output_error_username_for_register").html("");
              } else {
                $("#output_error_username_for_register").html(json["error"]);
              }
            }
          })
        }, 400);
      })
    })

    // API Facebook
    window.fbAsyncInit = function () {
      FB.init({
        appId: '779952169874801',
        cookie: true,                     // Enable cookies to allow the server to access the session.
        xfbml: true,                     // Parse social plugins on this webpage.
        version: 'v14.0'           // Use this Graph API version for this call.
      });
    }

    function checkLoginState() {               // Called when a person is finished with the Login Button.
      FB.getLoginStatus(function (response) {   // Called after the JS SDK has been initialized.
        console.log(response);
        if (response.status === 'connected') {
          let uid = response.authResponse.userID;
          let accessToken = response.authResponse.accessToken;
          testAPI();
        } else if (response.status === 'not_authorized') {
          swal.fire("ผิดพลาด", "ไม่สามารถเข้าสู่ระบบด้วยบัญชี Facebook ได้", "error");
        } else {
          swal.fire("ผิดพลาด", "ผิดพลาดโดยไม่ทราบสาเหตุ", "error");
        }
      });
    }


    var data_arr_register_by_fb = {};
    function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
      console.log('Welcome!  Fetching your information.... ');
      FB.api('/me?fields=id, email, birthday, gender, first_name, last_name, age_range, location,link', function (response_by_fb) {
        console.log('Successful login for: ' + response_by_fb.first_name);
        console.log(response_by_fb);

        $.ajax({
          type: "POST",
          url: "<?= $_dr_api ?>/auth.php", // end point api คือส่ง api ไปยังปลายทางที่ระบุไว้
          data: {
            "action": "check_email_for_register",
            "email": response_by_fb.email
          },
          success: function (respon) {
            data_arr_register_by_fb = response_by_fb;
            let json = JSON.parse(respon);
            if (json["status"] == 1) {
              change_form("formInputPasswordForRegisterByFacebook");
            } else {
              func_process_login_by_fb(data_arr_register_by_fb);
            }
          }
        })
      });
    }
    function func_process_login_by_fb(data_obj) {
      console.log(data_obj);
      $.ajax({
        type: "POST",
        url: "<?= $_dr_api ?>/auth.php", // end point api คือส่ง api ไปยังปลายทางที่ระบุไว้
        data: {
          "action": "login_by_fb",
          "email": data_obj.email
        },
        success: function (respon) {
          let json = JSON.parse(respon);
          if (json["status"] == 1) {
            toastr.success('เข้าสู่ระบบแล้ว');
            setTimeout(() => {
              location.href = '../../pages/homepage/';
            }, 800);
          } else {
            toastr.error('ผิดพลาด');
          }
        }
      })
    }
    var check_confirm_password_for_register_by_fb = true;
    $('#username_for_regsiter_by_facebook').on('keyup', function () {
      setTimeout(() => {
        $.ajax({
          type: "POST",
          url: "<?= $_dr_api ?>/auth.php", // end point api คือส่ง api ไปยังปลายทางที่ระบุไว้
          data: {
            "action": "check_username_for_register",
            "username": $(this).val()
          },
          success: function (respon) {
            let json = JSON.parse(respon);
            if (json["status"] == 1) {
              $("#output_error_username_for_register_by_facebook").html("");
            } else {
              $("#output_error_username_for_register_by_facebook").html(json["error"]);
            }
          }
        })
      }, 400);
    })
    function func_check_confirm_password_register_by_fb() {
      let pass1 = $("#password_for_regsiter_by_facebook").val();
      let pass2 = $("#password_for_regsiter_by_facebook2").val();
      if (pass1 == pass2) {
        check_confirm_password_for_register_by_fb = true;
        $("#output_error_confirm_password_for_register_by_fb").html("");
      } else {
        check_confirm_password_for_register_by_fb = false;
        $("#output_error_confirm_password_for_register_by_fb").html("** ยืนยันรหัสผ่านไม่ตรงกัน **");
      }
    }
    $("#formInputPasswordForRegisterByFacebook").submit(function (e) {
      e.preventDefault();
      if (check_confirm_password_for_register_by_fb) {
        $.ajax({
          type: "POST",
          url: "<?= $_dr_api ?>/auth.php", // end point api คือส่ง api ไปยังปลายทางที่ระบุไว้
          data: {
            "action": "register_by_fb",
            "username": $("#username_for_regsiter_by_facebook").val(),
            "password": $("#password_for_regsiter_by_facebook").val(),
            "email": data_arr_register_by_fb.email,
            "first_name": data_arr_register_by_fb.first_name,
            "last_name": data_arr_register_by_fb.last_name,
            "gender": data_arr_register_by_fb.gender,
            "birthday": data_arr_register_by_fb.birthday,
            "age_range": data_arr_register_by_fb.age_range,
            "location": data_arr_register_by_fb.location,
            "link": data_arr_register_by_fb.link
          },
          success: function (respon) {
            let json = JSON.parse(respon);
            if (json["status"] == 1) {
              func_process_login_by_fb(data_arr_register_by_fb);
            } else {
              toastr.error(json["error"]);
            }
          }
        })
      } else {
        Swal.fire({
          icon: 'error',
          title: 'ผิดพลาด',
          text: 'มีบางอย่างผิดพลาด กรุณาตรวจสอบ'
        })
      }
    })
  </script>
</body>

</html>