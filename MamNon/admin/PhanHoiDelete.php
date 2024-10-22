<?php
include '../class/PhanHoi.php';

$phanhoi = new PhanHoi();
if(!isset($_GET['id']) || $_GET['id']==NULL ){
    echo "<script>window.location = 'ThongBaolist.php'</script>";
}else {
    $id = $_GET['id'];
}
 $delete_phanhoi = $phanhoi -> delete_phanhoi($id);
?>