<?php
include "header.php";
include "slider.php";
include '../class/PhuHuynh.php';
?>

<?php
$phuhuynh = new PhuHuynh();
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $insert_PhuHuynh = $phuhuynh ->insert_PhuHuynh($_POST);
}
?>

<div class="admin-content-right">
<div class="admin-content-right-product_add">
                <h1>Thêm Phụ Huynh</h1><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Mã Phụ Huynh<span style="color: red;">*</span></label>
                    <input name="MaPH" required type="text">
                    <label for="">Tên Phụ Huynh<span style="color: red;">*</span></label>
                    <input name="TenPH" required type="text">
                    <label for="">Năm Sinh<span style="color: red;">*</span></label>
                    <input name="NamSinh" required type="text">
                    <label for="">Nghề Nghiệp<span style="color: red;">*</span></label>
                    <input name="NgheNghiep" required type="text">
                    <label for="">Nơi Công Tác<span style="color: red;">*</span></label>
                    <input name="NoiCongTac" required type="text">
                    <label for="">Địa Chỉ<span style="color: red;">*</span></label>
                    <input name="DiaChiThuongTru" required type="text">
                    <label for="">Email<span style="color: red;">*</span></label>
                    <input name="Email" required type="text">
                    <label for="">PassWord<span style="color: red;">*</span></label>
                    <input name="MatKhau" required type="text">

                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
<style>
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