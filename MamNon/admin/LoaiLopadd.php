<?php
include "header.php";
include "slider.php";
include '../class/LoaiLop.php';
?>
<?php
$loailop = new LoaiLop();
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $loaiLop_name = $_POST['LoaiLop_name'];
    $insert_LoaiLop = $loailop ->insert_LoaiLop($loaiLop_name);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm Loại Lớp</h1>
                <form action="" method="post">
                    <input required name ="LoaiLop_name" type="text" placeholder="Nhập tên loại lớp">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
<style>
    body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
</html>