<?php
include "header.php";
include "slider.php";
include '../class/Menu.php';
?>

<?php
$menu = new Menu();
if(!isset($_GET['id']) || $_GET['id']==NULL ){
    echo "<script>window.location = 'Menulist.php'</script>";
}else {
    $menu_id = $_GET['id'];
}

?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['submit'])){
    $update_Menu = $menu ->update_Menu($_POST, $menu_id);
}
?>

<div class="admin-content-right">
<div class="admin-content-right-product_add">
                <h1>Cập Nhật Thực Đơn</h1><br>

                <?php
                    $get_Menu = $menu->get_Menu($menu_id);
                    if($get_Menu){
                        while($result_menu = $get_Menu->fetch_assoc()){
                ?>

                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Nhập Ngày<span style="color: red;">*</span></label>
                    <input name="Ngay" required type="text" value="<?php echo $result_menu['Ngay'] ?>">
                    <label for="">Chọn Loại Lớp<span style="color: red;">*</span></label>
                    <select name="MaLoaiLop" id="">
                    <option value="#">---chọn---</option>
                        <?php
                        $show_loailop = $menu -> show_LoaiLop();
                        if($show_loailop){
                            while ($result = $show_loailop -> fetch_assoc()){

                        ?>
                        <option 
                        <?php
                        if($result['MaLoaiLop']==$result_menu['MaLoaiLop']){ echo 'selected'; }
                        ?>
                        
                        value="<?php echo $result['MaLoaiLop'] ?>"><?php echo $result['TenLoaiLop'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select><br>
                    <label for="">Buổi Sáng<span style="color: red;">*</span></label>
                    <textarea name="Sang" cols="30" rows="10"><?php echo $result_menu['Sang'] ?></textarea> <br>

                    <label for="">Buổi Trưa<span style="color: red;">*</span></label>
                    <textarea name="Trua" cols="30" rows="10"><?php echo $result_menu['Trua'] ?></textarea> <br>

                    <label for="">Buổi Chiều<span style="color: red;">*</span></label>
                    <textarea name="Chieu" cols="30" rows="10"><?php echo $result_menu['Chieu'] ?></textarea> <br>

                    <?php
                            }
                        }
                        ?>
                    
                    <!-- <button type="submit">Cập Nhật</button> -->
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