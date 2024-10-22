<?php
include "header.php";
include "slider.php";
include '../class/ThongBao.php';
?>

<?php
$thongbao = new ThongBao();
if(!isset($_GET['id']) || $_GET['id']==NULL ){
    echo "<script>window.location = 'ThongBaolist.php'</script>";
}else {
    $id = $_GET['id'];
}

?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['submit'])){
    // $khoanthu_id = $_POST['MaKhoanThu'];
    // $lop_TenLop = $_POST['lop_TenLop'];
    // $lop_siso = $_POST['lop_siso'];
    $update_thongbao = $thongbao ->update_thongbao($_POST, $id);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-product_add">
            <h1>Cập Nhật Thông Báo</h1><br>
            <?php
             $get_thongbao = $thongbao->get_thongbao($id);
                 if($get_thongbao){
                     while($result_thongbao = $get_thongbao->fetch_assoc()){
            ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Ngày Ra Thông Báo<span style="color: red;">*</span></label>
                    <input name="Ngay" required type="text" value="<?php echo $result_thongbao['Ngay'] ?>">
                    <label for="">Chủ Đề<span style="color: red;">*</span></label>
                    <input name="ChuDe" required type="text" value="<?php echo $result_thongbao['ChuDe'] ?>">
                    <label for="">Nội Dung<span style="color: red;">*</span></label><br>
                    <textarea name="NoiDung" id="editor1" cols="100" rows="20" <?php echo $result_thongbao['NoiDung'] ?>></textarea> <br>
                    <input class="update_pro" type="submit" name="submit" value="Update">
            <?php
                }
            }
                ?>
            </div>
        </div>
    </section>
</body>
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
<script>
    CKEDITOR.replace( 'editor1' );
</script>