<?php
include "header.php";
include "slider.php";
include '../class/NamHoc.php';
?>

<?php
$namhoc = new NamHoc();

if(!isset($_GET['NamHoc']) || $_GET['NamHoc']==NULL ){
    echo "<script>window.location = 'NamHoclist.php'</script>";
}else {
    $namhoc_id = $_GET['NamHoc'];
}
 $get_namhoc = $namhoc -> get_namhoc($namhoc_id);
 if($get_namhoc){
     $result = $get_namhoc -> fetch_assoc();
 }
?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $ngaykhaigiang = $_POST['NgayKhaiGiang'];
    $update_namhoc = $namhoc ->update_namhoc($ngaykhaigiang, $namhoc_id);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
            <h1>Cập Nhật Ngày Khai Giảng</h1>
                <form action="" method="post">
                    <input required name ="NgayKhaiGiang" type="text" placeholder="Nhập ngày khai giảng"
                     value = "<?php echo $result['NgayKhaiGiang'] ?>">
                    <button type="submit">Cập nhật</button>
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