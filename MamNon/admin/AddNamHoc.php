<?php
include "header.php";
include "slider.php";
include '../class/Namhoc.php';
?>
<?php
$namhoc = new NamHoc();
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $namhoc_name = $_POST['NamHoc'];
    $khaigiang = $_POST['NgayKhaiGiang'];
    $insert_namhoc = $namhoc ->insert_namhoc($namhoc_name, $khaigiang);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Nhập Năm Học Mới</h1>
                <form action="" method="post">
                    <input required name ="NamHoc" type="text" placeholder="Nhập năm học mới"><br>
                    <input required name ="NgayKhaiGiang" type="text" placeholder="Nhập ngày khai giảng">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
<style>
    body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>