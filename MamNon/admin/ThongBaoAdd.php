<?php
include "header.php";
include "slider.php";
include '../class/ThongBao.php';
?>
<?php
$thongbao = new ThongBao();
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $insert_thongbao = $thongbao ->insert_thongbao($_POST);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
            <h1>Thêm Thông Báo</h1><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Ngày Ra Thông Báo<span style="color: red;">*</span></label><br>
                    <input name="Ngay" required type="text"><br>
                    <label for="">Nhập Chủ Đề<span style="color: red;">*</span></label><br>
                    <input name="ChuDe" required type="text"><br>
                    <label for="">Nhập Nội Dung<span style="color: red;">*</span></label><br>
                    <textarea name="NoiDung" id="editor1" cols="30" rows="10" placeholder="--Nhập nội dung--"></textarea> <br>
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