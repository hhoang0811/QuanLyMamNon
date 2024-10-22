<?php
include '../class/Menu.php';

$menu = new Menu();
if(!isset($_GET['id']) || $_GET['id']==NULL ){
    echo "<script>window.location = 'Menulist.php'</script>";
}else {
    $menu_id = $_GET['id'];
}
 $delete_Menu = $menu -> delete_Menu($menu_id);
?>