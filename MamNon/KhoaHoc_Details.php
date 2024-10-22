<?php
include "include/header.php";
?>

<?php
if(!isset($_GET['MaKhoanThu']) || $_GET['MaKhoanThu']==NULL ){
    echo "<script>window.location = '404.php'</script>";
}else {
    $khoanthu_id = $_GET['MaKhoanThu'];
}
if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['submit'])){
    $add_cart = $ct ->add_cart($khoanthu_id);
}
?>

<?php
$get_KhoanThu = $kt ->get_KhoanThu($khoanthu_id);
?>
<?php
$login_check=Session::get('customer_login');
if($login_check==false){
    header('Location:login.php');
}
?>
<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
    <?php
        if($get_KhoanThu){
            while ($result = $get_KhoanThu->fetch_assoc()){
    ?>
    <div class="product-top row1">
        <p><a href="index_PH.php">Trang Chủ</a></p><span>&#8680;</span><p><a href="KhoaHoc_Dsach.php">Khóa Học</a></p><span>&#8680;</span><p><?php echo $result['TenKhoanThu'] ?></p>
    </div>
    <form action="" method="post"><br>
        <h1 style=" font-family: serif;color:#B22222; font-size:30px;">CHI TIẾT KHÓA HỌC</h1>
                <table>
                    <tr>
                        <th>Tên Khóa Học</th>
                        <th>Học Phí(/Khóa)</th>
                        <th>Mô Tả</th>
                    </tr>
                    <tr>
                        <td><?php echo $result['TenKhoanThu'] ?></td>
                        <td><?php echo $result['Gia'] ?><sup>đ</sup></td>
                        <td><?php echo $result['MoTa'] ?></td>
                    </tr>
                </table>
                <button class="btn_back"><a href="KhoaHoc_DSach.php">Trở Về</a></button>
                <input type="submit" name="submit" value="Tiếp Tục">
        </form>
        <?php
                }
            }
        ?>
    </div>
</div>
    </section>
</body>
</html>
<style>
.admin-content-right-cartegory-list{
    margin-top:150px;
}
table {
    margin-top:25px;
    border-collapse:collapse;
    width:100%;
}
table tr th {
    font-family: serif;
    font-size:18px;
    background-color:#F8F8F8;
}

table tr td a:hover {
    color:orange;
}
table, th, td{
    border-top:1px solid #ccc;
    border-bottom:1px solid #ccc;
}
th, td{
    text-align:center;
    padding:10px;
}

form {
    margin-top:40px;
    margin-left:27%;
    text-align:center;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px #DC143C;
    width: 700px !important;
    height: 350px !important ;
}
.product-top a,p,span {
    margin-left:6px;
    font-family: serif;
    color:#DC143C;
}
.product-top a:hover{
    text-decoration:underline;
}
.btn_back {
    background-color:#587885;
    color:white;
    border-radius: 20px 20px;
    border:none;
    width: 100px;
    height: 35px;
    margin: 45px 0 12px;
}
.btn_back a {
    font-weight:bold;
    color:black;
}
.admin-content-right-cartegory-list input{
    font-weight:bold;
    background-color:black;
    color:white;
    border-radius: 20px 20px;
    border:none;
    width: 100px;
    height: 35px;
    margin: 15px 0 12px;
    cursor: pointer;
}
.admin-content-right-cartegory-list input:hover{
    background-color:#debdc7;
    color:black;
    border-radius: 20px 20px;
    border:1px solid black;
}
</style>
<?php
include 'include/footer.php';
?>