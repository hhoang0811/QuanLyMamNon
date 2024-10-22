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
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $insert_hs = $hs ->insert_HocSinh($_POST, $_FILES);
}
?>

<div class="admin-content-right">
<div class="admin-content-right-product_add">
                <h1>Thêm Học Sinh Mới</h1><br>
                <form action="HocSinhAdd.php" method="post" enctype="multipart/form-data">
                    <label for="">Nhập Mã Học Sinh<span style="color: red;">*</span></label>
                    <input name="MaHS" required type="text">
                    <label for="">Họ Và Tên<span style="color: red;">*</span></label>
                    <input name="TenHS" required type="text">
                    <label for="">Giới Tính<span style="color: red;">*</span></label>
                    <select name="GioiTinh" id="">
                    <option value="#">---chọn---</option>
                        <?php
                        $show_GT = $hs -> show_GT();
                        if($show_GT){
                            while ($result = $show_GT -> fetch_assoc()){

                        ?>
                        <option value="<?php echo $result['id'] ?>"><?php echo $result['TenGT'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label for="">Dân Tộc<span style="color: red;">*</span></label>
                    <input name="DanToc" required type="text">
                    <label for="">Ngày Sinh<span style="color: red;">*</span></label>
                    <input name="NamSinh" required type="text">
                    <label for="">Ngày Nhập Học<span style="color: red;">*</span></label>
                    <input name="NgayNhapHoc" required type="text">
                    <label for="">Chọn Loại Lớp<span style="color: red;">*</span></label>
                    <select name="MaLoaiLop" id="MaLoaiLop">
                        <option value="#">---chọn---</option>
                        <?php
                        $show_LoaiLop = $lop -> show_LoaiLop();
                        if($show_LoaiLop){
                            while ($result = $show_LoaiLop -> fetch_assoc()){

                        ?>
                        <option value="<?php echo $result['MaLoaiLop'] ?>"><?php echo $result['TenLoaiLop'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label for="">Chọn Lớp<span style="color: red;">*</span></label>
                    <select name="MaLop" id="MaLop">
                        <option value="">---chọn---</option>
                        <?php
                        $show_Lop = $lop -> show_Lop();
                        if($show_LoaiLop){
                            while ($result = $show_Lop -> fetch_assoc()){

                        ?>
                        <option value="<?php echo $result['MaLop'] ?>"><?php echo $result['TenLop'] ?></option>
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
                        <option value="<?php echo $result['MaPH'] ?>"><?php echo $result['TenPH'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label for="">Ảnh Đại Diện<span style="color: red;">*</span></label>
                    <input name="AnhDaiDien" required type="file">
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
    body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
</html>