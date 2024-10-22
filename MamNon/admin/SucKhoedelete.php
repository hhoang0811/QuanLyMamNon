<?php
include '../class/SucKhoe.php';

$sk = new SucKhoe();
if(!isset($_GET['MaSo']) || $_GET['MaSo']==NULL ){
    echo "<script>window.location = 'SucKhoelist.php'</script>";
}else {
    $ssk_id = $_GET['MaSo'];
}
 $delete_ssk = $sk -> delete_ssk($ssk_id);

 ?>