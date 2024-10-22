<?php
include "header.php";
include "slider.php";
include '../class/SucKhoe.php';
include '../class/HocSinh.php';
?>

<?php
$hs = new HocSinh();
$sk = new SucKhoe();
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $insert_ssk = $sk ->insert_ssk($_POST);
}
?>

<div class="admin-content-right">
<div class="admin-content-right-product_add">
                <h1>Sổ Sức Khỏe</h1><br>
                <form action="SucKhoe.php" method="post" enctype="multipart/form-data">
                    <label for="">Nhập Ngày<span style="color: red;">*</span></label>
                    <input name="Ngay" required type="text">
                    <label for="">Học Sinh<span style="color: red;">*</span></label>
                    <select name="MaHS">
                        <option value="#">---chọn---</option>
                        <?php
                        $show_HocSinh = $hs -> show_HocSinh();
                        if($show_HocSinh){
                            while ($result = $show_HocSinh -> fetch_assoc()){

                        ?>
                        <option value="<?php echo $result['MaHS'] ?>"><?php echo $result['TenHS'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label for="">Chiều Cao<span style="color: red;">*</span></label>
                    <input name="ChieuCao" required type="text">
                    <label for="">Cân Nặng<span style="color: red;">*</span></label>
                    <input name="CanNang" required type="text">
                    <label for="">Mắt<span style="color: red;">*</span></label>
                    <input name="Mat" required type="text">
                    <label for="">Tai Mũi Họng<span style="color: red;">*</span></label>
                    <input name="TaiMuiHong" required type="text">
                    <label for="">Răng<span style="color: red;">*</span></label>
                    <input name="Rang" required type="text">
                    <label for="">Huyết Áp<span style="color: red;">*</span></label>
                    <input name="HuyetAp" required type="text">
                    <label for="">Ghi Chú</label>
                    <textarea name="GhiChu" cols="30" rows="10" placeholder="--Nhập Ghi Chú--"></textarea> <br>
                    <label for="">Kết Luận<span style="color: red;">*</span></label>
                    <input name="KetLuan" required type="text">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
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