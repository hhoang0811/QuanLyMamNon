<?php
include "header.php";
include "slider.php";
include '../class/HinhAnh.php';
?>

<?php
$ha = new HinhAnh();
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $insert_Anh = $ha ->insert_Anh($_POST, $_FILES);
}
?>

<div class="admin-content-right">
<div class="admin-content-right-product_add">
                <h1>Thêm Hình Ảnh Mới</h1><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Ngày Sinh Hoạt<span style="color: red;">*</span></label>
                    <input name="Ngay" required type="text">
                    <label for="">Mô Tả<span style="color: red;">*</span></label>
                    <input name="MoTa" required type="text">
                    <label for="">Hình Ảnh<span style="color: red;">*</span></label>
                    <input name="Anh" required type="file" multiple>
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
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
</style>
</html>
<style>
    body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>