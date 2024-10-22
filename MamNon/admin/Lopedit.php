<?php
include "header.php";
include "slider.php";
include '../class/Lop.php';
?>

<?php
$lop = new Lop();
if(!isset($_GET['MaLop']) || $_GET['MaLop']==NULL ){
    echo "<script>window.location = 'Loplist.php'</script>";
}else {
    $lop_id = $_GET['MaLop'];
}

?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['submit'])){
    //$lop_id = $_POST['MaLop'];
    // $lop_TenLop = $_POST['lop_TenLop'];
    // $lop_siso = $_POST['lop_siso'];
    $update_lop = $lop ->update_Lop($_POST, $lop_id);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-product_add">
            <h1>Cập Nhật Lớp</h1><br>
            <?php
             $get_lop = $lop->get_lop($lop_id);
                 if($get_lop){
                     while($result_lop = $get_lop->fetch_assoc()){
            ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Cập Nhật Tên Lớp<span style="color: red;">*</span></label>
                    <input name="TenLop" required type="text" value="<?php echo $result_lop['TenLop'] ?>">
                    <label for="">Cập Nhật Sỉ Số<span style="color: red;">*</span></label>
                    <input name="SiSo" required type="text" value="<?php echo $result_lop['SiSo'] ?>">
                    <label for="">Cập Nhật Loại Lớp<span style="color: red;">*</span></label>
                    <select name="MaLoaiLop" id="">
                        <option value="#">---chọn---</option>
                        <?php
                        $show_loailop = $lop -> show_LoaiLop();
                        if($show_loailop){
                            while ($result = $show_loailop -> fetch_assoc()){

                        ?>
                        <option 
                        <?php
                        if($result['MaLoaiLop']==$result_lop['MaLoaiLop']){ echo 'selected'; }
                        ?>
                        
                        value="<?php echo $result['MaLoaiLop'] ?>"><?php echo $result['TenLoaiLop'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label for="">Cập Nhật Năm Học<span style="color: red;">*</span></label>
                    <select name="NamHoc" id="">
                        <option value="#">---chọn---</option>
                        <?php
                        $show_namhoc = $lop -> show_namhoc();
                        if($show_namhoc){
                            while ($result = $show_namhoc -> fetch_assoc()){

                        ?>
                        <option 
                        <?php
                        if($result['NamHoc']==$result_lop['NamHoc']){ echo 'selected'; }
                        ?>
                        
                        value="<?php echo $result['NamHoc'] ?>"><?php echo $result['NamHoc'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <input class="update_pro" type="submit" name="submit" value="Update">
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