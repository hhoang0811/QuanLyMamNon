<?php
include "header.php";
include "slider.php";
include '../class/Menu.php';
?>

<?php
$menu = new Menu();
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $insert_Menu = $menu ->insert_Menu($_POST);
}
?>

<div class="admin-content-right">
<div class="admin-content-right-product_add">
                <h1>Thêm Thực Đơn</h1><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Nhập Ngày<span style="color: red;">*</span></label>
                    <input name="Ngay" required type="text">
                    <label for="">Chọn Loại Lớp<span style="color: red;">*</span></label>
                    <select name="MaLoaiLop" id="">
                        <option value="#">---chọn---</option>
                        <?php
                        $show_LoaiLop = $menu -> show_LoaiLop();
                        if($show_LoaiLop){
                            while ($result = $show_LoaiLop -> fetch_assoc()){

                        ?>
                        <option value="<?php echo $result['MaLoaiLop'] ?>"><?php echo $result['TenLoaiLop'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select><br>
                    <label for="">Buổi Sáng<span style="color: red;">*</span></label>
                    <textarea name="Sang" cols="30" rows="10" placeholder="--Các món ăn buổi sáng--"></textarea> <br>

                    <label for="">Buổi Trưa<span style="color: red;">*</span></label>
                    <textarea name="Trua" cols="30" rows="10" placeholder="--Các món ăn buổi trưa--"></textarea> <br>

                    <label for="">Buổi Chiều<span style="color: red;">*</span></label>
                    <textarea name="Chieu" cols="30" rows="10" placeholder="--Các món ăn buổi chiều--"></textarea> <br>
                    
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