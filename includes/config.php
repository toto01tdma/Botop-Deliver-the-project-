<?php
    $_domain_project = "http://www.samphraonightrun.net/";

    $_dr_storage = "../../storages";
    $_dr_assets = "../../assets";
    $_dr_api = "../../services/api";
    $_dr_plugin = "../../plugins";
    $_dr_export = "../../export";
    $_dr_page = "../../pages";
    
    $_project_name = "Botop";

    $_favicon_image = "brand/favicon.PNG";
    $_logo_profile_image = "default_profile.PNG";
    $_logo_image = "brand/logo.PNG";
    $_logo_image_1 = "brand/logo-1.PNG";
    $_logo_image_2 = "brand/logo-2.PNG";
    $_logo_image_3 = "brand/logo-3.PNG";

    $_redirect_url_for_auth_by_google = "http://localhost/Botop/auth/google/check_login_google.php";
    $_google_client_id = "491542154488-todme6vg23prgvmoi8t473v8bl8kg75l.apps.googleusercontent.com";
    $_google_client_secret = "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";

    include_once($_dr_plugin."/composer/vendor/autoload.php");

    require_once("../../services/connect_database.php");
    
?>