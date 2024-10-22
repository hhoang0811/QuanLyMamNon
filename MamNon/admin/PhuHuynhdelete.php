<?php
include '../class/PhuHuynh.php';

$phuhuynh = new PhuHuynh();
if(!isset($_GET['MaPH']) || $_GET['MaPH']==NULL ){
    echo "<script>window.location = 'PhuHuynhlist.php'</script>";
}else {
    $phuhuynh_id = $_GET['MaPH'];
}
 $delete_PhuHuynh = $phuhuynh -> delete_PhuHuynh($phuhuynh_id);
?>