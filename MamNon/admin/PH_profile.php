<?php
include "header.php";
include "slider.php";
include '../class/PhuHuynh.php';
?>
<?php
$phuhuynh = new PhuHuynh();
if(!isset($_GET['MaPH']) || $_GET['MaPH']==NULL ){
    echo "<script>window.location = '404.php'</script>";
}else {
    $phuhuynh_id = $_GET['MaPH'];
}

?>

<!--------------------------profile------------------------->
<section class="product row1">
    <div class="container">
        <table class="tb_customer">
            <?php
            // $phuhuynh_id = Session::get('MaPH');
            $get_phuhuynh = $phuhuynh->get_PhuHuynh($phuhuynh_id);
            if($get_phuhuynh){
                while($result = $get_phuhuynh->fetch_assoc()){

            ?>
            <tr>
                <td colspan=2><h2 style="font-family: Georgia;color:#6e4ba3;">THÔNG TIN PHỤ HUYNH</h2></td>
            </tr>

            <tr>
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
            <tr>
                <td><b>Mật Khẩu</b></td>
                
                <td><?php echo $result['MatKhau'] ?></td>
            </tr>
            <tr style="background-color:#ddd;">
                <td colspan="3"><a href="PhuHuynhedit.php?MaPH=<?php echo $result['MaPH'] ?>">Chỉnh Sửa</a></td>
            </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</section>

</html>

<style>
.tb_customer {
    margin-left: 27%;
    width: 800px;
    text-align: center;
    margin-top: 50px;
}
table {
    border-collapse: collapse;
}
table tr{
    font-family: serif;
    font-size:18px;
    background-color:#F8F8F8;
}
table, th, td{
    border-top:1px solid #ccc;
    border-bottom:1px solid #ccc;
}

td{
    text-align:center;
    padding:10px;
    border:none;
}
/* .tb_customer tr  {
    border: 2px solid #ddd;
    height: 45px ;
}
.tb_customer tr td {
    background-color: #fff ;
    border:none;
} */
.tb_customer tr td a{
   color:red;
}
body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>

