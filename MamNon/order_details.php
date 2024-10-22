<?php
include 'include/header.php';
?>

<?php
$login_check=Session::get('customer_login');
if($login_check==false){
    header('Location:login.php');
}
$ct = new Cart();
if(isset($_GET['XacNhanid'])){
    $SoHD = $_GET['XacNhanid'];
    $datetime = $_GET['NgayLap'];
    $price = $_GET['TongHD'];
    $Xacnhan =  $ct->Xacnhan($MaPH,$datetime,$price);
}
?>


<!-- <?php
$MaPH = Session::get('customer_id');
if(!isset($MaPH)){
    header('Location:login.php');
}
?> -->

<!---------------------------payment--------------->
<section class="delivery">
    <div class="container">
        <div class="delivery-content row1">
            <div class="delivery-content-left">
                <h3>CHI TIẾT ĐĂNG KÝ</h3>
                <div class="delivery-content-left-input-top row1">
                    
            <div class="delivery-content-right">
                <form action="" method="POST">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Khóa Học</th>
                        <th>Tổng Học Phí</th>
                        <th>Ngày Đăng Ký</th>
                        <th>Trạng thái</th>
                        <!-- <th>Tùy Chỉnh</th> -->
                        <th>Hóa Đơn</th>
                    </tr>
                    <?php
                    $MaPH = Session::get('customer_id');
                    $get_cart_ordered = $ct->get_cart_ordered($MaPH);
                    if($get_cart_ordered){
                        $i = 0;
                        
                        while($result = $get_cart_ordered->fetch_assoc()){
                            $i++;
                    ?>
                    <tr>
                        <td><p><?php echo $i; ?></p></td>      
                        <td><p><?php echo $result['TenKhoanThu'] ?></p></td>
                        <td><p><?php echo $result['TongHD'] ?><sup>đ</sup></p></td>
                        <td><?php echo $fm->formatDate($result['NgayLap']) ?></td>
                        <td>
                            <?php
                                if($result['Trangthai']==0){
                                    echo 'Chờ...';
                                }
                                elseif($result['Trangthai']==2){
                                    echo 'Đã Ghi Danh';
                                }
                            ?>
                        </td>
                        <!-- <?php
                        if($result['Trangthai']=='0'){
                        ?>
                        <td><?php echo 'N/A';?></td>
                        <?php  
                        }
                        else{
                        ?>
                        <td><?php echo 'Đã Ghi Danh' ?></td>
                        <?php
                        }
                        ?> -->
                        <td>
                        <?php
                            if($result['Trangthai']==0){
                            ?>
                            <a>N/A</a>
                            <?php
                            }
                            
                            elseif($result['Trangthai']==2){
                            ?>
                            <a class="print" href="order.php?SoHD=<?php echo $result['SoHD'] ?>"><i class="fas fa-print"></i></a>
                            <?php
                                }
                            
                            ?>
                        </td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
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
.container {
    margin-top:200px;
    background-color:white;
    margin-bottom:50px;
}

.delivery-content-right {
    width: 100%;
    padding-left: 15px;
}
.delivery-content-right table{
    margin-top:20px;
}
table {
    margin-left:15%;
    margin-top:25px;
    border-collapse:collapse;
    width:170%;
}

table tr th {
    font-family: serif;
    font-size:18px;
    background-color:#F8F8F8;
}

table, th, td{
    border-top:1px solid #ccc;
    border-bottom:1px solid #ccc;
}
th, td{
    text-align:center;
    padding:10px;
}
.delivery-content-left h3{
   margin-left:17%;
   font-family:serif;
   color:#DC143C;
   font-size:25px;
}   
.print:hover{
    color:red;
}
</style>