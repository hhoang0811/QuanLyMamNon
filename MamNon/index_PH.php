<?php
include 'include/header.php';
?>
<?php
$login_check=Session::get('customer_login');
if($login_check==false){
    header('Location:login.php');
}
?>

<div class="container">
        <div class="delivery-content row1">
            <div class="delivery-content-left">
                <div class="delivery-content-left-input-top">
                <form action="" method=""><br>
                <h2 style="margin-top:10px; color:#6e4ba3; font-size:30px;">THÔNG TIN HỌC SINH</h2>
                    <table class="tb_customer">
                    <?php
                        $MaPH = Session::get('customer_id');
                        $get_HocSinhByMaPH = $ph->get_HocSinhByMaPH($MaPH);
                        if($get_HocSinhByMaPH){
                            while($result = $get_HocSinhByMaPH->fetch_assoc()){

                        ?>
                        <tr>
                            <td><b>Mã Học Sinh</b></td>
                            
                            <td><?php echo $result['MaHS'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Họ Tên</b></td>
                            
                            <td><?php echo $result['TenHS'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Giới Tính</b></td>
                           
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
                        </tr>
                        <tr>
                            <td><b>Ngày Sinh</b></td>
                            
                            <td><?php echo $result['NamSinh'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Ngày Nhập Học</b></td>
                            
                            <td><?php echo $result['NgayNhapHoc'] ?></td>
                        </tr>
                    </table>
                    <button class="button_back"><a href="HocSinh_profile.php?MaHS=<?php echo $result['MaHS'] ?>" >Chi Tiết</a></button>
                    <?php
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>

            <div class="delivery-content-right">
            <?php
                $MaPH = Session::get('customer_id');
                $get_HocSinhByMaPH = $ph->get_HocSinhByMaPH($MaPH);
                if($get_HocSinhByMaPH){
                    while($result = $get_HocSinhByMaPH->fetch_assoc()){
            ?>
                <form action="" method="">
                    <div class="delivery-content-right-items">
                        <a href="ChiTietSucKhoe.php?MaHS=<?php echo $result['MaHS'] ?>"><img src="img/suckhoeicon.jpg" alt="" width="120"></a>
                        <a href="Menulist.php"><img src="img/depositphotos_164298442-stock-photo-menu-food-dish-icon-elegant.jpg" alt="" width="120"></a>
                    </div>
                    <div class="delivery-content-right-items-p">
                        <p>Sức Khỏe</p>
                        <p>Thực Đơn</p>
                    </div>
                    <div class="delivery-content-right-items-img3">
                    <a href="KhoaHoc_Dsach.php"><img src="img/CLASS-Icon-Teal-1.png" alt="" width="120"></a>
                    <a href="HinhAnh.php"><img src="img/223117.png" alt="" width="115"></a>
                    </div>
                    <div class="delivery-content-right-items-p2">
                        <p>Khóa Học</p>
                        <p>Hình Ảnh</p>
                    </div>
                </form>
            <?php
                    }
                }
            ?>
            </div>


        </div>
</div>

<?php
include 'include/footer.php';
?>

<style>
form {
    margin-left:38%;
    text-align:center;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px #6e4ba3;
    width: 500px !important;
    height: 430px !important ;

}
    .container{
        background-color:white;
    }
    .tb_customer {
    margin-left:10%;
    width: 400px;
    text-align: center;
    margin-top: 25px;
    margin-bottom:30px;
}
table {
    border-collapse: collapse;
}
.tb_customer tr  {
    border: 1px solid rgb(128, 194, 214);
    height: 45px ;
}

    .delivery-content-left {
        margin-top:170px;
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
.delivery-content-right {
    margin-top:170px;
    margin-left:10%;
}
.delivery-content-right-items {
    display:flex;
    margin-left:15%;
}
.delivery-content-right-items-img3 {
    display:flex;
    margin-left:15%;
}
.delivery-content-right-items img {
    margin-left:35px;
    margin-top:25px;
}
.delivery-content-right-items-img3 img {
    margin-left:35px;
    margin-top:25px;
}
.delivery-content-right-items-p {
    display:flex;
    margin-left:15%;
}
.delivery-content-right-items-p p{
    margin-left:40px;
    color:#6e4ba3; 
    font-weight:bold; 
    font-family: Georgia;
    font-size:25px;
    margin-top:10px;
    margin-bottom:25px;
}

.delivery-content-right-items-p2 {
    display:flex;
    margin-left:15%;
}
.delivery-content-right-items-p2 p{
    margin-left:35px;
    color:#6e4ba3; 
    font-weight:bold; 
    font-family: Georgia;
    font-size:25px;
    margin-top:10px;
    margin-bottom:25px;
}
</style>