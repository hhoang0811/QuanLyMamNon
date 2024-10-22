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

<?php
$login_check=Session::get('customer_login');
if($login_check==false){
    header('Location:login.php');
}
?>

<!---------------------------payment--------------->
<section class="delivery">
    <div class="container">
        <div class="delivery-content row1">
            <div class="delivery-content-right">
            <form action="" method="POST"><br>
                <h3 style="font-family: Georgia;color:#6e4ba3; font-size:30px;">THÔNG TIN ĐĂNG KÝ</h3>
                <table>
                    <tr>
                        <th style="text-align:center;">STT</th>
                        <th>Khóa Học</th>
                        <th>Học Phí</th>  
                    </tr>
                    <?php
                    $get_cart = $ct->get_cart();
                    if($get_cart){
                        $subtotal = 0;
                        $sl = 0;
                        $i = 0;
                        while($result = $get_cart->fetch_assoc()){
                            $i++;
                    ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $i; ?></td>
                        <td><p><?php echo $result['TenKhoanThu'] ?></p></td>
                        <td><p><?php echo $result['Gia'] ?><sup>đ</sup>/Khóa</p></td>
                        
                    </tr>
                    <?php
                        $total = $result['Gia'];
                        $subtotal += $total;
                        }
                    }
                    ?>
                </table>
                <table>
                    <!-- <tr>
                        <td style="border-top:2px solid #dddddd;"><p style="font-weight:bold ;">TỔNG CỘNG</p></td>
                        <td style="border-top:2px solid #dddddd;"><p><?php
                        echo $subtotal;
                        Session::set('sum',$subtotal);
                        ?><sup>đ</sup></p></td>
                    </tr> -->
                    <tr>
                        <td><p style="font-weight:bold ;"><u>TỔNG HỌC PHÍ</u></p></td>
                        <td><p style="color: red; font-weight: bold;">
                        <?php 
                              $grandtotal = $subtotal;
                        echo $grandtotal; ?><sup>đ</sup></p></td>
                    </tr>
                </table>
                <div class="delivery-content-left-button row1">
                    <button class="a_ChotDon">
                        <a href="?orderid=order">HOÀN TẤT</a>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!---------------------------footer------------>
<?php
include 'include/footer.php';
?>
<style>
form {
    margin-left:85%;
    text-align:center;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px red;
    width: 570px !important;
    height: 500px !important ;

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

table, th, td{
    border-top:1px solid #ccc;
}
th, td{
    text-align:center;
    padding:10px;
}
.container {
    margin-top:170px;
    background-color:white;
}
.a_ChotDon{
    margin-left:40%;
    margin-top:50px;
    font-weight:bold;
    background-color:#CD5C5C;
    color:White;
    border:none;
    width:100px;
    height:30px;
    cursor: pointer;
    border-radius:20px;
    transition: all 0.3s ease;
}
.a_ChotDon:hover{
    background-color:#dddddd;
    color:#CD5C5C;
    border:1px solid #CD5C5C;
}
</style>