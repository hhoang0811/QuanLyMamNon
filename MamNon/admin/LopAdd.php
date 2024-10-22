<?php
include "header.php";
include "slider.php";
include '../class/Lop.php';
?>

<?php
$lop = new Lop();
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $insert_lop = $lop ->insert_lop($_POST);
}
?>

<div class="admin-content-right">
<div class="admin-content-right-product_add">
                <h1>Thêm Lớp</h1><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Nhập Tên Lớp<span style="color: red;">*</span></label>
                    <input name="TenLop" required type="text">
                    <label for="">Nhập Sỉ Số<span style="color: red;">*</span></label>
                    <input name="SiSo" required type="text">
                    <label for="">Chọn Loại Lớp<span style="color: red;">*</span></label>
                    <select name="MaLoaiLop" id="">
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
                    <label for="">Chọn Năm Học<span style="color: red;">*</span></label>
                    <select name="NamHoc" id="">
                        <option value="#">---chọn---</option>
                        <?php
                        $show_namhoc = $lop -> show_namhoc();
                        if($show_namhoc){
                            while ($result = $show_namhoc -> fetch_assoc()){

                        ?>
                        <option value="<?php echo $result['NamHoc'] ?>"><?php echo $result['NamHoc'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
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