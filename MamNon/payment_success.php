<?php
include 'include/header.php';
?>

<?php
if(isset($_GET['orderid']) && $_GET['orderid']=='order' ){
    $MaPH = Session::get('customer_id');
    $insert_order = $ct->insert_order($MaPH);
    $del_cart = $ct->delete_all_cart();
    header('Location:payment_success.php');
}
?>

<!-----------------------------cart--------------->
<section class="cart">
    <div class="container">
        <div class="cart-content">
            <div class="cart-content-left">
                <form action="">
                    <div class="formTB">
                        <h1>Đăng Ký thành công!</h1>
                        <?php
                        $MaPH = Session::get('customer_id');
                        $get_amount = $ct->getAmountPrice($MaPH);
                        if($get_amount){
                            $amount = 0;
                            while($result = $get_amount->fetch_assoc()){
                                $price = $result['TongHD'];
                                $amount += $price;
                            }
                        }
                        ?>
                        <p>Tổng Học Phí Cho Tất Cả Khóa Học: <?php
                        
                        $total = $amount ; 
                        echo $total.'<sup>đ</sup>';
                        ?></p><br>
                        <h2 style="font-family: serif; font-size:26px;">Nhà Trường sẽ tiến hành ghi danh khi nhận được học phí!</h2>
                        <p><a href="order_details.php">Xem Chi Tiết</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
include 'include/footer.php';
?>

<style>
form {
    padding:40px;
    margin-left:25%;
    text-align:center;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px #DC143C;
    width: 800px !important;
    height: 400px !important ;

}
.formTB{
    padding: 24px 16px;
    background-color: #FFFFFF;
    border: 6px solid #E7E8E9;
    border-radius: 56px 56px;
    padding: 32px 28px;
    margin-bottom: 32px;
    width: 100%;
    height:100%;
}
.container{
    margin-top:180px;
    margin-bottom:40px;
    background-color:white;
}
.cart-content-left {
    text-align:center;
}
.cart-content-left h1 {
    font-size:50px;
    color:green;
    font-family:'Times New Roman', Times, serif ;
    margin-bottom:20px;
}
.cart-content-left p{
    font-family:'Times New Roman', Times, serif ;
    font-size:25px;
    font-weight:bold;
    margin-top:20px;
}
.cart-content-left p > a:hover{
    text-decoration: underline;
}
.cart-content-left a{
    font-family:'Times New Roman', Times, serif ;
    color:red;
}

.cart-top-payment {
    border: 1px solid #CD5C5C;
}
.cart-top-payment i {
    color: #CD5C5C;
}
.cart-top-cart {
    border: 1px solid #dddddd;
}
.cart-top-cart i {
    color: #dddddd;
}
</style>