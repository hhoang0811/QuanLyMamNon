<?php
include "include/header.php";
?>
<?php
if(!isset($_GET['MaPH']) || $_GET['MaPH']==NULL ){
    echo "<script>window.location = '404.php'</script>";
}else {
    $phuhuynh_id = $_GET['MaPH'];
}

?>

<!--------------------------profile------------------------->
<section class="product row1">
    <div class="container">
    <form action="" method=""><br>
    <h2 style="margin-left:10px; margin-top:10px; color:#6e4ba3; font-size:30px;"> THÔNG TIN PHỤ HUYNH</h2>
        <table class="tb_customer">
            <?php
            // $phuhuynh_id = Session::get('MaPH');
            $get_phuhuynh = $ph->get_PhuHuynh($phuhuynh_id);
            if($get_phuhuynh){
                while($result = $get_phuhuynh->fetch_assoc()){

            ?>
            <tr style="background-color:#ddd;">
                <td><b>Mã PH (Username)</b></td>
                
                <td><?php echo $result['MaPH'] ?></td>
            </tr>
            <tr>
                <td><b>Họ Tên</b></td>
                
                <td><?php echo $result['TenPH'] ?></td>
            </tr>
            <tr>
                <td><b>Năm Sinh</b></td>
                
                <td><?php echo $result['NamSinh'] ?></td>
            </tr>
            <tr>
                <td><b>Nghề Nghiệp</b></td>
                
                <td><?php echo $result['NgheNghiep'] ?></td>
            </tr>
            <tr>
                <td><b>Nơi Công Tác</b></td>
                
                <td><?php echo $result['NoiCongTac'] ?></td>
            </tr>
            <tr>
                <td><b>Địa Chỉ</b></td>
                
                <td><?php echo $result['DiaChiThuongTru'] ?></td>
            </tr>
            <tr>
                <td><b>Email</b></td>
                
                <td><?php echo $result['Email'] ?></td>
            </tr>
            <?php
                }
            }
            ?>
        </table>
        <button class="PH_Pro_back"><a href="index_PH.php">Trở Về</a></button>
        </form>
    </div>
</section>

</html>

<style>
.container{
    background-color:white;
    margin-top:170px;
    margin-bottom:40px;
}
form {
    margin-left:85%;
    text-align:center;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px red;
    width: 570px !important;
    height: 530px !important ;

}
.tb_customer {
    margin-left: 6.4%;
    width: 500px;
    text-align: center;
    margin-top: 30px;
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

.PH_Pro_back {
    width:80px;
    height:25px;
    background-color:black;
    border-radius:40px;
    margin-top:40px;
}
.PH_Pro_back a {
    color:white;
}
</style>

<?php
include 'include/footer.php';
?>