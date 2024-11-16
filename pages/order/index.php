<?php 
    require_once("../../includes/header.php");
    if(!$_check_session_user){
      echo "<script>  location.href = '../../pages/homepage/';  </script>";
      exit;
    }
?>

<?php 
    require_once("../../includes/footer.php"); 
?>