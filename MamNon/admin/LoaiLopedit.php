<?php
include "header.php";
include "slider.php";
include '../class/LoaiLop.php';
?>

<?php
$loailop = new LoaiLop;

if(!isset($_GET['MaLoaiLop']) || $_GET['MaLoaiLop']==NULL ){
    echo "<script>window.location = 'LoaiLoplist.php'</script>";
}else {
    $loailop_id = $_GET['MaLoaiLop'];
}
 $get_loailop = $loailop -> get_loailop($loailop_id);
 if($get_loailop){
     $result = $get_loailop -> fetch_assoc();
 }
?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $loailop_name = $_POST['LoaiLop_name'];
    $update_loailop = $loailop ->update_loailop($loailop_name, $loailop_id);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
            <h1>Cập Nhật Loại Lớp</h1>
                <form action="" method="post">
                    <input required name ="LoaiLop_name" type="text" placeholder="Nhập tên loại lớp"
                     value = "<?php echo $result['TenLoaiLop'] ?>">
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