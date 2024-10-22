<?php
include '../class/HocSinh.php';

$hs = new HocSinh();
if(!isset($_GET['MaHS']) || $_GET['MaHS']==NULL ){
    echo "<script>window.location = 'HocSinhlist.php'</script>";
}else {
    $hs_id = $_GET['MaHS'];
}
 $delete_HocSinh = $hs -> delete_HocSinh($hs_id);
?>