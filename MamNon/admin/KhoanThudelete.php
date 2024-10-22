<?php
include '../class/KhoanThu.php';

$khoanthu = new KhoanThu();
if(!isset($_GET['MaKhoanThu']) || $_GET['MaKhoanThu']==NULL ){
    echo "<script>window.location = 'KhoanThulist.php'</script>";
}else {
    $khoanthu_id = $_GET['MaKhoanThu'];
}
 $delete_Lop = $khoanthu -> delete_KhoanThu($khoanthu_id);
?>