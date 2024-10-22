<?php
include "header.php";
include "slider.php";
include '../class/PhuHuynh.php';
?>
<?php
$ph = new PhuHuynh();
if(!isset($_GET['MaPH']) || $_GET['MaPH']==NULL ){
    echo "<script>window.location = '404.php'</script>";
}else {
    $phuhuynh_id = $_GET['MaPH'];
}

?>

<!--------------------------profile------------------------->
<section class="product row1">
                <form action="" method=""><br>
                    <h2 style="margin-top:10px; color:#008080; font-size:30px;">THÔNG TIN HỌC SINH</h2>
                    <table class="tb_customer">
                        <?php
                            $MaPH = Session::get('customer_id');
                            $get_HocSinhByMaPH = $ph->get_HocSinhByMaPH($phuhuynh_id);
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
                                <td><b>Dân Tộc</b></td>
                            
                                <td><?php echo $result['DanToc'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Ngày Sinh</b></td>
                            
                                <td><?php echo $result['NamSinh'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Phụ Huynh</b></td>
                            
                                <td><?php echo $result['TenPH'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Liên Lạc</b></td>
                            
                                <td><?php echo $result['Email'] ?></td>
                            </tr>
                            <tr>
                                <td colspan=2><a style="color:red;" href="HocSinh_profile.php?MaHS=<?php echo $result['MaHS'] ?>">Chi Tiết</a></td>
                            </tr>
                            <?php
                                    }
                                }
                            ?>
                    </table>
                </form>
</section>

</html>

<style>

.product{
    margin-top:30px;
    margin-left:15%;
}
form {
    margin-left:10%;
    text-align:center;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px #008080;
    width: 550px !important;
    height: 500px !important ;

}
    .container{
        background-color:white;
    }
    .tb_customer {
    width: 100%;
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
    body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>

