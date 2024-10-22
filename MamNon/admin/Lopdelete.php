<?php
include '../class/Lop.php';

$lop = new Lop();
if(!isset($_GET['MaLop']) || $_GET['MaLop']==NULL ){
    echo "<script>window.location = 'Loplist.php'</script>";
}else {
    $lop_id = $_GET['MaLop'];
}
 $delete_Lop = $lop -> delete_Lop($lop_id);
?>