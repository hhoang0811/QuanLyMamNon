<?php
include "include/header.php";
?>
<?php
if(!isset($_GET['MaHS']) || $_GET['MaHS']==NULL ){
    echo "<script>window.location = '404.php'</script>";
}else {
    $hs_id = $_GET['MaHS'];
}
?>

<?php
$login_check=Session::get('customer_login');
if($login_check==false){
    header('Location:login.php');
}
?>
<!--------------------------profile------------------------->

<section class="product row1">

    <div class="container">
        <form action="" method=""><br>
            <h1 style="color:#6e4ba3; font-weight:bold; font-family: Georgia">THÔNG TIN HỌC SINH</h1>
            <?php
                $get_HS = $hs->get_HS($hs_id);
                if($get_HS){
                    while($result = $get_HS->fetch_assoc()){
            ?>
                <div>
                <td><img src="admin/uploads/<?php echo $result['AnhDaiDien']?>" width="150"></td>
                </div>
                <tr style="background-color:#ddd;">
                    <td><b>Mã Học Sinh</b></td>
                    <td>:</td>
                    <td><?php echo $result['MaHS'] ?></td>
                </tr><br><br>
                <tr style="background-color:#ddd;">
                    <td><b>Họ Tên</b></td>
                    <td>:</td>
                    <td><?php echo $result['TenHS'] ?></td>
                </tr><br><br>
                <tr style="background-color:#ddd;">
                    <td><b>Giới Tính</b></td>
                    <td>:</td>
                    <td>
                    <?php
                                if($result['GioiTinh']==0){
                                    echo 'Nam';
                                }elseif($result['GioiTinh']==1){
                                    echo 'Nữ';
                                }else{
                                    echo 'Khác';
                                }
                                ?>
                    </td>
                </tr><br><br>
                <tr style="background-color:#ddd;">
                    <td><b>Dân Tộc</b></td>
                    <td>:</td>
                    <td><?php echo $result['DanToc'] ?></td>
                </tr><br><br>
                <tr style="background-color:#ddd;">
                    <td><b>Ngày Sinh</b></td>
                    <td>:</td>
                    <td><?php echo $result['NamSinh'] ?></td>
                </tr><br><br>
                <tr style="background-color:#ddd;">
                    <td><b>Ngày Nhập Học</b></td>
                    <td>:</td>
                    <td><?php echo $result['NgayNhapHoc'] ?></td>
                </tr><br><br>
                <tr style="background-color:#ddd;">
                    <td><b>Khối Lớp</b></td>
                    <td>:</td>
                    <td><?php echo $result['TenLoaiLop'] ?></td>
                </tr><br><br>
                <tr style="background-color:#ddd;">
                    <td><b>Lớp</b></td>
                    <td>:</td>
                    <td><?php echo $result['TenLop'] ?></td>
                </tr><br><br>
                <h4>Thông Tin Liên Hệ</h4>
                <tr style="background-color:#ddd;">
                    <td><b>Phụ Huynh</b></td>
                    <td>:</td>
                    <td><a style="color:red;" href="PH_profile.php?MaPH=<?php echo $result['MaPH'] ?>"><?php echo $result['TenPH'] ?></a></td>
                </tr><br><br>
               
                <h3>Các liên kết</h3>
                    <ul>
                        <li><a style="color:red;" href="ChiTietSucKhoe.php?MaHS=<?php echo $result['MaHS'] ?>">Sổ Theo Dõi Sức Khỏe</a></li><br>
                    </ul>
            <?php
                    }
                }
            ?>
            <button class="button_back"><a href="index_PH.php">Trở Về</a></button>
        </form>
    </div>
</section>
</html>



<style>

form {
    margin-left:100%;
    text-align:center;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px rgb(128, 194, 214);
    width: 500px !important;
    height: 780px !important ;

}
.container h1{
    margin-bottom:20px;
}
.container{
    padding-left: 15px;
    background-color:white;
    margin-top:170px;
    margin-bottom:40px;
}
.container img {
    margin-bottom:10px;
}
.container tr {
    margin-bottom:20px;
}
.container h4{
    font-weight:bold;
    color:green;
    font-size:25px;
}
.container h3{
    font-weight:bold;
    color:green;
    font-size:25px;
}
.container h1 {
    font-size:30px;
}
.button_back {
    width:80px;
    height:25px;
    background-color:black;
    border-radius:40px;
}
.button_back a {
    color:white;
}
</style>


<?php
include 'include/footer.php';
?>
