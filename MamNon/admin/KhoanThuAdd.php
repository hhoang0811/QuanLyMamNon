<?php
include "header.php";
include "slider.php";
include '../class/KhoanThu.php';
?>
<?php
$khoanthu = new KhoanThu();
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $insert_KhoanThu = $khoanthu ->insert_KhoanThu($_POST);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
            <h1>Thêm Khoản Thu</h1><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Nhập Tên Khoản Thu<span style="color: red;">*</span></label><br>
                    <input name="TenKhoanThu" required type="text"><br>
                    <label for="">Nhập Giá<span style="color: red;">*</span></label><br>
                    <input name="Gia" required type="text"><br>
                    <label for="">Nhập Mô Tả<span style="color: red;">*</span></label><br>
                    <textarea name="MoTa" id="editor1" cols="30" rows="10" placeholder="--Nhập mô tả--"></textarea> <br>
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
<script>
    CKEDITOR.replace( 'editor1' );
</script>

<style>
    .admin-content-right-cartegory_add input {
        margin-bottom:10px;
    }
    body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>