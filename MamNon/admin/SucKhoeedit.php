<?php
include "header.php";
include "slider.php";
include '../class/SucKhoe.php';
include '../class/HocSinh.php';
?>

<?php
$hs = new HocSinh();
$sk = new SucKhoe();
if(!isset($_GET['MaSo']) || $_GET['MaSo']==NULL ){
    echo "<script>window.location = 'SucKhoelist.php'</script>";
}else {
    $ssk_id = $_GET['MaSo'];
}
//  $get_product = $product -> get_product($product_id);
//  if($get_product){
//      $result = $get_product -> fetch_assoc();
//  }
?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['submit'])){
    // $product_Mota = $_POST['product_Mota'];
    // $product_name = $_POST['product_name'];
    $update_ssk = $sk ->update_ssk($_POST, $ssk_id);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-product_add">
            <h1>Cập Nhật Sổ Sức Khỏe</h1><br>
            <?php
             $get_ssk = $sk->get_ssk($ssk_id);
                 if($get_ssk){
                     while($result_ssk = $get_ssk->fetch_assoc()){
            ?>
                 <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Nhập Ngày<span style="color: red;">*</span></label>
                    <input name="Ngay" required type="text" value="<?php echo $result_ssk['Ngay'] ?>">
                    <label for="">Học Sinh<span style="color: red;">*</span></label>
                    <select name="MaHS" id="">
                        <option value="#">---chọn---</option>
                        <?php
                        $show_HocSinh = $hs -> show_HocSinh();
                        if($show_HocSinh){
                            while ($result = $show_HocSinh -> fetch_assoc()){

                        ?>
                        <option 
                        <?php
                        if($result['MaHS']==$result_ssk['MaHS']){ echo 'selected'; }
                        ?>
                        
                        value="<?php echo $result['MaHS'] ?>"><?php echo $result['TenHS'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label for="">Chiều Cao<span style="color: red;">*</span></label>
                    <input name="ChieuCao" required type="text" value="<?php echo $result_ssk['ChieuCao'] ?>">
                    <label for="">Cân Nặng<span style="color: red;">*</span></label>
                    <input name="CanNang" required type="text" value="<?php echo $result_ssk['CanNang'] ?>">
                    <label for="">Mắt<span style="color: red;">*</span></label>
                    <input name="Mat" required type="text" value="<?php echo $result_ssk['Mat'] ?>">
                    <label for="">Tai Mũi Họng<span style="color: red;">*</span></label>
                    <input name="TaiMuiHong" required type="text" value="<?php echo $result_ssk['TaiMuiHong'] ?>">
                    <label for="">Răng<span style="color: red;">*</span></label>
                    <input name="Rang" required type="text" value="<?php echo $result_ssk['Rang'] ?>">
                    <label for="">Huyết Áp<span style="color: red;">*</span></label>
                    <input name="HuyetAp" required type="text" value="<?php echo $result_ssk['HuyetAp'] ?>">
                    <label for="">Ghi Chú</label>
                    <textarea name="GhiChu" cols="30" rows="10" value="<?php echo $result_ssk['GhiChu'] ?>"></textarea> <br>
                    <label for="">Kết Luận<span style="color: red;">*</span></label>
                    <input name="KetLuan" required type="text" value="<?php echo $result_ssk['KetLuan'] ?>">
                    <button type="submit" name="submit" value="Update">Cập Nhật</button>
                </form>
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