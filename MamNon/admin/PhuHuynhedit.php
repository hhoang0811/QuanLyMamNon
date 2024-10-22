<?php
include "header.php";
include "slider.php";
include '../class/PhuHuynh.php';
?>

<?php
$phuhuynh = new PhuHuynh();
if(!isset($_GET['MaPH']) || $_GET['MaPH']==NULL ){
    echo "<script>window.location = 'PhuHuynhlist.php'</script>";
}else {
    $phuhuynh_id = $_GET['MaPH'];
}

?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['submit'])){
    // $food_id = $_POST['MaMon'];
    // $food_name = $_POST['TenMon'];
    $update_PhuHuynh = $phuhuynh ->update_PhuHuynh($_POST, $phuhuynh_id);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-product_add">
            <h1>Cập Nhật Thông Tin Phụ Huynh</h1><br>
            <?php
             $get_PhuHuynh = $phuhuynh->get_PhuHuynh($phuhuynh_id);
                 if($get_PhuHuynh){
                     while($result_phuhuynh = $get_PhuHuynh->fetch_assoc()){
            ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Cập Nhật Tên<span style="color: red;">*</span></label>
                    <input name="TenPH" required type="text" value="<?php echo $result_phuhuynh['TenPH'] ?>">
                    <label for="">Cập Nhật Năm Sinh<span style="color: red;">*</span></label>
                    <input name="NamSinh" required type="text" value="<?php echo $result_phuhuynh['NamSinh'] ?>">
                    <label for="">Cập Nhật Nghề Nghiệp<span style="color: red;">*</span></label>
                    <input name="NgheNghiep" required type="text" value="<?php echo $result_phuhuynh['NgheNghiep'] ?>">
                    <label for="">Cập Nhật Nơi Công Tác<span style="color: red;">*</span></label>
                    <input name="NoiCongTac" required type="text" value="<?php echo $result_phuhuynh['NoiCongTac'] ?>">
                    <label for="">Cập Nhật Địa Chỉ<span style="color: red;">*</span></label>
                    <input name="DiaChiThuongTru" required type="text" value="<?php echo $result_phuhuynh['DiaChiThuongTru'] ?>">
                    <label for="">Cập Nhật Email<span style="color: red;">*</span></label>
                    <input name="Email" required type="text" value="<?php echo $result_phuhuynh['Email'] ?>">
                    <label for="">Cập Nhật Mật Khẩu<span style="color: red;">*</span></label>
                    <input name="MatKhau" required type="text" value="<?php echo $result_phuhuynh['MatKhau'] ?>">
                    
                    <input class="update_pro" type="submit" name="submit" value="Update">
                </form>
                <?php
                     }
                 }
                ?>
            </div>
        </div>
    </section>
</body>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
<style>
    .admin-content-right-product_add input,select {
    width: 200px;
    height: 30px;
    display: block;
    margin: 6px 12px;
    padding-left: 12px;
}
.admin-content-right-product_add textarea {
    display: block;
    height: 200px;
    width: 500px;
    margin-bottom: 12px;
    padding: 12px;
}
.update_pro {
    display: block;
    align-items: center ;
    justify-content: center ;
    margin-top: 10px;
    margin-bottom: 50px;
    height: 30px;
    width: 100px;
    cursor: pointer;
    background-color: rgb(136, 58, 84);
    color: white;
    border: none;
    transition: all 0.3s ease;
}
.update_pro:hover {
    background-color: #ddd;
    color:  rgb(136, 58, 84);
    border: 2px solid  rgb(136, 58, 84);
}
.product_size {
        display: flex;
        margin-top: 10px ;
        margin-bottom: 15px;
        margin-left: 20px ;
    }
    .product_size p {
        font-weight: bold;
    }
    .product_size input{
        width: 20px;
        height: 20px;
        display: block;
        margin-top: 0 ;
        margin-left: 5px ;
        margin-right: 15px ;
    }
    body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
</html>