<?php
include "header.php";
include "slider.php";
include '../class/HocSinh.php';
include '../class/PhuHuynh.php';
include '../class/Lop.php';
?>

<?php
$lop = new Lop();
$phuhuynh = new PhuHuynh();
$hs = new HocSinh();
if(!isset($_GET['MaHS']) || $_GET['MaHS']==NULL ){
    echo "<script>window.location = 'HocSinhlist.php'</script>";
}else {
    $hs_id = $_GET['MaHS'];
}

?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['submit'])){

    $update_HocSinh = $hs ->update_HocSinh($_POST, $_FILES, $hs_id);
}
?>


<div class="admin-content-right">
<div class="admin-content-right-product_add">

                <?php
                    $get_HS = $hs->get_HS($hs_id);
                    if($get_HS){
                        while($result_hs = $get_HS->fetch_assoc()){
                ?>
                <h1>Cập Nhật Học Sinh <?php echo $result_hs['MaHS'] ?></h1><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- <label for="">Mã Học Sinh<span style="color: red;">*</span></label>
                    <input name="MaHS" required type="text" value="<?php echo $result_hs['MaHS'] ?>"> -->
                    <label for="">Họ Và Tên<span style="color: red;">*</span></label>
                    <input name="TenHS" required type="text" value="<?php echo $result_hs['TenHS'] ?>">
                    <label for="">Giới Tính<span style="color: red;">*</span></label>
                    <select name="GioiTinh" id="">
                    <option value="#">---chọn---</option>
                    <?php
                        $show_GT = $hs -> show_GT();
                        if($show_GT){
                            while ($result = $show_GT -> fetch_assoc()){

                        ?>
                        <option 
                        <?php
                        if($result['id']==$result_hs['GioiTinh']){ echo 'selected'; }
                        ?>
                        
                        value="<?php echo $result['id'] ?>"><?php echo $result['TenGT'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label for="">Dân Tộc<span style="color: red;">*</span></label>
                    <input name="DanToc" required type="text" value="<?php echo $result_hs['DanToc'] ?>">
                    <label for="">Ngày Sinh<span style="color: red;">*</span></label>
                    <input name="NamSinh" required type="text" value="<?php echo $result_hs['NamSinh'] ?>">
                    <label for="">Ngày Nhập Học<span style="color: red;">*</span></label>
                    <input name="NgayNhapHoc" required type="text" value="<?php echo $result_hs['NgayNhapHoc'] ?>">
                    <label for="">Chọn Loại Lớp<span style="color: red;">*</span></label>
                    <select name="MaLoaiLop" id="MaLoaiLop">
                        <option value="#">---chọn---</option>
                        <?php
                        $show_loailop = $lop -> show_LoaiLop();
                        if($show_loailop){
                            while ($result = $show_loailop -> fetch_assoc()){

                        ?>
                        <option 
                        <?php
                        if($result['MaLoaiLop']==$result_hs['MaLoaiLop']){ echo 'selected'; }
                        ?>
                        
                        value="<?php echo $result['MaLoaiLop'] ?>"><?php echo $result['TenLoaiLop'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label for="">Chọn Lớp<span style="color: red;">*</span></label>
                    <select name="MaLop" id="MaLop">
                        <option value="">---chọn---</option>
                        <?php
                        $show_lop = $lop -> show_Lop();
                        if($show_lop){
                            while ($result = $show_lop -> fetch_assoc()){

                        ?>
                        <option 
                        <?php
                        if($result['MaLop']==$result_hs['MaLop']){ echo 'selected'; }
                        ?>
                        
                        value="<?php echo $result['MaLop'] ?>"><?php echo $result['TenLop'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label for="">Phụ Huynh<span style="color: red;">*</span></label>
                    <select name="MaPH" id="">
                        <option value="#">---chọn---</option>
                        <?php
                        $show_PhuHuynh = $phuhuynh -> show_PhuHuynh();
                        if($show_PhuHuynh){
                            while ($result = $show_PhuHuynh -> fetch_assoc()){

                        ?>
                        <option 
                        <?php
                        if($result['MaPH']==$result_hs['MaPH']){ echo 'selected'; }
                        ?>
                        
                        value="<?php echo $result['MaPH'] ?>"><?php echo $result['TenPH'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label for="">Ảnh Đại Diện<span style="color: red;">*</span></label><br>
                    <img src="uploads/<?php echo $result_hs['AnhDaiDien']?>" width="120"><br>
                    <input name="AnhDaiDien" type="file">

                    <?php
                            }
                        }
                        ?>

                    <input class="update_pro" type="submit" name="submit" value="Update">
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
    body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
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
</style>
</html>