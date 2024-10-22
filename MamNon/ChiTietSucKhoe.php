<?php
include 'include/header.php';
?>
<?php
$fm = new Format();
$hs = new HocSinh();
if(!isset($_GET['MaHS']) || $_GET['MaHS']==NULL ){
    echo "<script>window.location = '404.php'</script>";
}else {
    $hs_id = $_GET['MaHS'];
}
?>


<!--------------------------profile------------------------->
<section class="product row1">
    <div class="container">
    <form action="" method=""><br>
    <h2 style="margin-top:10px; color:#6e4ba3;">SỔ SỨC KHỎE</h2><br>
        <table class="tb_customer">
            <?php
            // $phuhuynh_id = Session::get('MaPH');
            $get_ssk = $hs->get_ssk($hs_id);
            if($get_ssk){
                while($result = $get_ssk->fetch_assoc()){

            ?>
            <h3 style="font-family: serif; font-size:20px; margin-bottom:7px;">Ngày Cập Nhật</h3>
            <p style="margin-bottom:7px;"><?php echo $fm->formatDate($result['Ngay']) ?></p>

            <h3 style="font-family: serif; font-size:20px; margin-bottom:7px;">Mã Học Sinh</h3>
            <?php echo $result['MaHS'] ?>
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
            <?php
                }
            }
            ?>
        </table>
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
    box-shadow: 0 0 20px #008B8B;
    width: 500px !important;
    height: 660px !important ;

}
.container{
        background-color:white;
        margin-top:170px;
    }
.tb_customer {
    margin-left:10%;
    width: 400px;
    text-align: center;
    margin-top: 20px;
    margin-bottom:25px;
}
table {
    border-collapse: collapse;
}
.tb_customer tr  {
    border: 2px solid #ddd;
    height: 45px ;
}
.tb_customer tr td {
    background-color: #fff ;
    border:none;
}
.tb_customer tr td a{
   color:red;
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
