<?php
include 'include/header.php';
?>

<?php
if(isset($_GET['Cart_id'])){
    $Cart_id = $_GET['Cart_id'];
    $delete_cart = $ct->delete_cart($Cart_id);
}
?>

<?php
    if(!isset($_GET['id'])){
        echo "<meta http-equiv='refresh' content='0;URL=?id=live'>";
    }
?>
<!-----------------------------cart--------------->
<section class="cart">
    <div class="container">
        <div class="cart-content row1">
            <div class="cart-content-left">
                <table>
                    <tr>
                        <th>Tên Khóa Học</th>
                        <th>Học Phí</th>
                        <th>Mô Tả</th>
                        <th>Tổng</th>
                        <th>Xóa</th>
                    </tr>
                    <?php
                    $get_cart = $ct->get_cart();
                    if($get_cart){
                        $subtotal = 0;
                        while($result = $get_cart->fetch_assoc()){

                    ?>
                    <tr>
                        <td><p><?php echo $result['TenKhoanThu'] ?></p></td>
                        <td><p><?php echo $result['Gia'] ?><sup>đ</sup></p></td>
                        <td><p><?php echo $result['MoTa'] ?></p></td>
                        <td><p><?php $total = $result['Gia']; echo $total; ?><sup>đ</sup></p></td>
                        <td><a href="?Cart_id=<?php echo $result['Cart_id'] ?>">X</a></td>
                    </tr>
                    <?php
                        $subtotal += $total;
                        }
                    }
                    ?>
                </table> <br>
                <?php
                    if(isset($delete_cart)){
                    echo $delete_cart;
                    }
                ?>
            </div>
            <?php
                $check_cart = $ct->check_cart();
                if($check_cart){
            ?>
            <div class="cart-content-right">
                <table>
                    <tr>
                        <th colspan="2">TỔNG HỌC PHÍ CÁC KHÓA HỌC</th>
                    </tr>
                    <tr>
                        <td><p style="font-weight:bold ;">TỔNG HỌC PHÍ</p></td>
                        <td><p><?php
                        echo $subtotal;
                        Session::set('sum',$subtotal);
                        ?><sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td><p style="font-weight:bold ;"><u>THÀNH TIỀN</u></p></td>
                        <td><p style="color: red; font-weight: bold;">
                        <?php 
                              $grandtotal = $subtotal;
                        echo $grandtotal; ?><sup>đ</sup></p></td>
                    </tr>
                </table>
                <div class="cart-content-right-button">
                    <button><a href="KhoaHoc_Dsach.php">QUAY VỀ</a></button>
                    <button><a class="button_ThanhToan" href="delivery.php">XÁC NHẬN</a></button>
                </div><br>
                <!-- <P style="text-align:center;"><a class="a_login" style="color:red;" href="login.php">Đăng nhập</a> để Thanh Toán</P> -->
            </div>
            <?php
            }else{
                echo '<h3 style="color:red;">DANH SÁCH ĐĂNG KÝ HIỆN ĐANG TRỐNG!</h3>'; 
                echo '<a class="a_cart_emp" href="index_PH.php">Quay Về</a>';
            }
            ?>
        </div>
    </div>
</section>


<?php
include 'include/footer.php';
?>

<style>
.container {
    margin-top:180px;
    margin-bottom:80px;
    background-color:white;
}

.cart-content-left td:nth-child(1){
    width: 200px;
}
.cart-content-left td:nth-child(2){
    width: 100px;
}
.cart-content-left td:nth-child(3){
    width: 250px;
}
.cart-content-left td:nth-child(4){
    width: 150px;
}
.cart-content-left td:nth-child(5){
    width: 100px;
}
.cart-content-left table a {
    display: block;
    width: 20px;
    height: 20px;
    border: 1px solid #dddddd;
    cursor: pointer;
    margin-left: 45px;
}
.cart-content-left table a:hover{
    color:red;
}
.cart-content-left {
    flex: 2;
}

.cart-content-left table {
    width: 90%;
    text-align: center;
}
.cart-content-right {
    flex: 1;
    padding-left: 20px;
    border-left: 2px solid #ddd;
}
.cart-content-right table {
    width: 100%;
}
.cart-content-right-button button {
    padding: 0 18px;
    height: 35px;
    cursor: pointer;
    margin-top:15px ;
}
.cart-content-right-button button{
    font-weight:bold;
}
.cart-content-right-button button a:hover{
    color:black;
}
.button_ThanhToan {
    color: black ;
}
.a_login:hover{
    text-decoration: underline;
}
.a_cart_emp{
    color:blue;
    margin-left:5px;
}
.a_cart_emp:hover{
    text-decoration: underline;
}
.cart-content-right table td {
    font-size: 15px;
    font-family: var(--main-text-font) ;
    color: #333;
    padding: 6px 0;
}
.cart-content-right tr:nth-child(3) td {
    border-bottom: 2px solid #dddddd;
}
.cart-content-right tr td:last-child {
    text-align: right;
}
.cart-content-right-text {
    margin: 20px 0;
    text-align: center;
}
.cart-content-right-text p {
    font-size: 15px;
    font-family: var(--main-text-font) ;
    color: #333;
}
.cart-content-right-button {
    text-align: center;
    align-items: center;
}
</style>