<?php
require_once("../../includes/header.php");
?>
<div class="side-app">

    <!-- CONTENT START -->
    <div class="row mt-2">
        <div id="carouselExampleIndicators" class="carousel slide px-0" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../assets/img/cover_image1.jpg" style="object-fit: cover;" class="d-block w-100"
                        height="550px" alt="...">
                    <!-- <img src="https://via.placeholder.com/1920x900" class="d-block w-100" alt="..."> -->
                </div>
                <div class="carousel-item">
                    <img src="../../assets/img/cover_image2.jpg" style="object-fit: cover;" class="d-block w-100"
                        height="550px" alt="...">
                    <!-- <img src="https://via.placeholder.com/1920x900" class="d-block w-100" alt="..."> -->
                </div>
                <div class="carousel-item">
                    <img src="../../assets/img/cover_image3.jpg" style="object-fit: cover;" class="d-block w-100"
                        height="550px" alt="...">
                    <!-- <img src="https://via.placeholder.com/1920x900" class="d-block w-100" alt="..."> -->
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="row mt-2">
        <div class="card mt-1">
            <div class="card-body">
                <form class="row" onsubmit="return func_list_products();">
                    <div class="col">
                        <div class="input-group">
                            <input type="text" id="keyword_search_products" class="form-control" value=""
                                placeholder="ระบุสินค้าที่ต้องการค้นหา...">
                            <button class="btn btn-success" type="submit"><i class="fa fa-search"></i>
                                ค้นหาสินค้า</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-3">
                    <div class="col">
                        <select class="form-select" id="search_product_by_category_id"
                            name="search_product_by_category_id" style="width:100%;">
                            <option value="*">-- แสดงทั้งหมด --</option>
                            <?php
                            $stmt = $pdo->prepare("SELECT * FROM categorys");
                            $get = $database_obj->qrySql($stmt);
                            foreach ($get["data"] as $rs) {
                                echo "<option value='" . $rs["ctgr_id"] . "'> " . $rs["ctgr_name"] . " </option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        $('#search_product_by_category_id').select2({
                        }).on('select2:select', function (e) {
                            func_list_products();
                        }).on('select2:open', function (e) {
                        });
                    });
                </script>
            </div>
        </div>
    </div>

    <div class="row mt-1 gx-4 gx-lg-3" id="show_products">
    </div>

    <!-- CONTENT END -->
</div>

<script>
    function func_list_products() {
        page_loading("show");
        let keyword = $("#keyword_search_products").val();
        let cate_id = $("#search_product_by_category_id").val();
        <?php if ($_check_session_user) { ?>
            let to_action = (keyword != "" || cate_id != "*") ? "read_products" : "read_product_for_recommendation_system_cosine_similarity";
        <?php } else { ?>
            let to_action = "read_products";
        <?php } ?>
        $.ajax({
            type: "POST",
            url: "<?= $_dr_api ?>/manage_product.php",
            data: {
                "action": to_action,
                "keyword": keyword,
                "cate_id": cate_id
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
                        <?php if (isset($_SESSION["user"])) {
                            if ($_SESSION["user"]["user_type"] == 1) { ?>
                                disabled_button_push_item_to_cart = "disabled";
                            <?php } else if ($_SESSION["user"]["user_type"] == 2) { ?>
                                    if (Number(json["data"][i]["pd_stock"]) > 0) {
                                        show_pd_price = `${json["data"][i]["pd_price"]}.-`;
                                        disabled_button_push_item_to_cart = "";
                                    } else {
                                        show_pd_price = `<h5 class="text-danger">สินค้าหมด</h5>`;
                                        disabled_button_push_item_to_cart = "disabled";
                                    }
                            <?php }
                        } ?>

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
                                        <?php if ($_check_session_user) {
                                            if ($_SESSION["user"]["user_type"] == 2) { ?>
                                                            <div class="card-footer row px-3 py-1">
                                                                <div class="col-6 px-1">
                                                                    <button onclick="pushItemToCart('${json["data"][i]["pd_id"]}')" data-id="${json["data"][i]["pd_id"]}" class="btn btn-outline-info w-100 p-1" ${disabled_button_push_item_to_cart}><i class="bi bi-basket"></i></button>
                                                                </div>
                                                                <div class="col-6 px-1">
                                                                    <button onclick="func_likeProduct('${json["data"][i]["pd_id"]}');" id="btn_likeProduct${json["data"][i]["pd_id"]}" class="btn btn-outline-danger w-100 p-1 ${json["data"][i]["like_active"]}"><i class="bi bi-heart"></i></button>
                                                                </div>
                                                            </div>
                                            <?php }
                                        } ?>
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
    <?php } ?>
</script>
<?php require_once("../../includes/footer.php"); ?>