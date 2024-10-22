<?php
include "header.php";
include "slider.php";
include '../class/SucKhoe.php';
include '../helpers/format.php';
?>
<?php
$sk = new SucKhoe();
$fm = new Format();
if(!isset($_GET['MaSo']) || $_GET['MaSo']==NULL ){
    echo "<script>window.location = '404.php'</script>";
}else {
    $ssk_id = $_GET['MaSo'];
}
?>


<!--------------------------profile------------------------->
<section class="product row1">
    <div class="container">
    <form action="" method=""><br>
        <table class="tb_customer">
            <?php
            // $phuhuynh_id = Session::get('MaPH');
            $get_ssk = $sk->get_ssk($ssk_id);
            if($get_ssk){
                while($result = $get_ssk->fetch_assoc()){

            ?>
            <tr>
                <td colspan="2"><h2 style="margin-left:10px; margin-top:10px; color:red;">SỔ SỨC KHỎE</h2></td>
            </tr>
            <tr>
                <td colspan="2">
                <h3 style="text-align:left; margin-left:20px;margin-bottom:4px;">Ngày Cập Nhật</h3>
                <p style="text-align:left; margin-left:20px;margin-bottom:4px;"><?php echo $fm->formatDate($result['Ngay']) ?></p>
                <h3 style="text-align:left; margin-left:20px;margin-bottom:4px;">Mã Học Sinh</h3>
                <p style="text-align:left; margin-left:20px;"><?php echo $result['MaHS'] ?> - <?php echo $result['TenHS'] ?></p>
                </td>
            </tr>
            <tr>
                <td><b>Chiều Cao</b></td>
                
                <td><?php echo $result['ChieuCao'] ?></td>
            </tr>
            <tr>
                <td><b>Cân Nặng</b></td>
                
                <td><?php echo $result['CanNang'] ?></td>
            </tr>
            <tr>
                <td><b>Tình Trạng Mắt</b></td>
                
                <td><?php echo $result['Mat'] ?></td>
            </tr>
            <tr>
                <td><b>Tai Mũi Họng</b></td>
                
                <td><?php echo $result['TaiMuiHong'] ?></td>
            </tr>
            <tr>
                <td><b>Tình Trạng Răng</b></td>
                
                <td><?php echo $result['Rang'] ?></td>
            </tr>
            <tr>
                <td><b>Huyết Áp</b></td>
                
                <td><?php echo $result['HuyetAp'] ?></td>
            </tr>
            <tr>
                <td><b>Ghi Chú</b></td>
                
                <td><?php echo $result['GhiChu'] ?></td>
            </tr>
            <tr>
                <td><b>Kết Luận</b></td>
                
                <td><?php echo $result['KetLuan'] ?></td>
            </tr>
            <tr>
                <td colspan=2><a href="SucKhoeedit.php?MaSo=<?php echo $result['MaSo'] ?>" style="color:red;">Cập Nhật</a></td>
            </tr>
            <?php
                }
            }
            ?>
        </table>
        </form>
    </div>
</section>

</html>

<style>
.container {
    margin-top:50px;
}
table {
    margin-top:25px;
    border-collapse:collapse;
    width:100%;
}
th, td{
    text-align:center;
    padding:10px;
}

.tb_customer {
    width: 100%;
    text-align: center;
    margin-top: 20px;
}
form {
    margin-left:27%;
    text-align:center;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px red;
    width: 700px !important;
    height: 620px !important ;
}
    body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>

