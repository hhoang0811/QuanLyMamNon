<?php
include 'lib/session.php';
Session::init();
?>


<?php
include 'lib/database.php';
include 'helpers/format.php';

spl_autoload_register(function($class){
    include_once "class/".$class.".php";
});
    


$db = new Database();
$fm = new Format();
$hs = new HocSinh();
$kt = new KhoanThu();
$lop = new Lop();
$menu = new Menu();
$ph = new PhuHuynh();
$sk = new SucKhoe();
$ct = new cart();
?>

<?php
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Expires: sat, 26 Jul 1997 05:00:00 GMT");
header ("Cache-Control: max-age=2592000");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href = "style.css" />
    <title>MamNon</title>
</head>
<body>
   <header>
    <div class="logo">
        <a href="index.php"><img src="img/Logo-01.png" height="120" width="220"></a>
    </div>
    <div class="menu">

        <?php
        $login_check=Session::get('customer_login');
        if($login_check == false){
            echo '';
        } else {
            echo '<li><a href="index_PH.php">TRANG CHỦ</a></li>'; 
        }
        ?>

        <?php
        $MaPH = Session::get('customer_id');
        $get_PhuHuynh = $ph->get_PhuHuynh($MaPH);
        if($get_PhuHuynh == true){
            echo '<li><a href="PH_profile.php?MaPH='.Session::get('customer_id').' ">THÔNG TIN</a></li>';
        } else {
            echo ''; 
        }
        ?>

        <!-- <?php
        $login_check=Session::get('customer_login');
        if($login_check == false){
            echo '';
        } else {
            echo '<li><a href="ThongBao.php">THÔNG BÁO</a></li>'; 
        }
        ?> -->

        <?php
        $MaPH = Session::get('customer_id');
        $check_order = $ct->check_order($MaPH);
        if($check_order == true){
            echo '<li><a href="order_details.php">HÓA ĐƠN</a></li>';
        } else {
            echo ''; 
        }
        ?>
        




    </div>
    <div class="others">
        <li class="li_PH"><a href="GuiPhanHoi.php"><input placeholder="Đóng góp ý kiến" type="" readonly><i class="fa-sharp fa-solid fa-paper-plane"></i></a> </li>

        <?php
        if(isset($_GET['customer_id'])){
            $del_cart = $ct->delete_all_cart();
            Session::destroy();
        }
        ?>
        <li class="li_login">
        <?php
        $login_check = Session::get('customer_login');
        if($login_check == false){
            echo '<a class="fa fa-user" href="login.php"> Login</a>';
        }else{
            echo '<a class="fa fa-user" href="?customer_id='.Session::get('customer_id').' "> Logout</a>';
        }
        ?>
        </li>

        <li class="li_bell"><a href="ThongBao.php"><i class="fa-solid fa-bell"></i>
            <!-- <sup class="badges">1</sup> -->
        </a></li>
       
    </div>
</header>
<style>
.menu{
    flex: 2;
    display: flex;
}
.menu li a:hover{
    color:#DC143C;
    text-decoration:underline;
}
.others li:first-child input {
    width: 90%;
    border: none;
    border-bottom: 1px solid #000;
    outline: none;
    background: transparent;
    outline: none;
}
.others > li:first-child i {
    position: absolute;
    right: 25px;
}
.others li{
    padding: 0 10px;
    position: relative;
}
.badges{
    background-color:red;
    padding:2px;
    border-radius:100%;
    font-size:10px;
    color:#fff;
}
.li_bell a:hover{
    color:#DC143C;
}
.li_PH a:hover{
    color:#DC143C;
}
.li_login a:hover{
    color:#DC143C;
}
</style>