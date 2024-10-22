<?php
include "header.php";
include "slider.php";
?>

<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../class/cart.php');
include_once ($filepath.'/../helpers/format.php');
?>

<?php
$ct = new Cart();
if(isset($_GET['Shiftid'])){
    $SoHD = $_GET['Shiftid'];
    $datetime = $_GET['NgayLap'];
    $price = $_GET['TongHD'];
    $Shifted =  $ct->Shiftid($SoHD,$datetime,$price);
}

if(isset($_GET['del_id'])){
    $SoHD = $_GET['del_id'];
    $datetime = $_GET['NgayLap'];
    $price = $_GET['TongHD'];
    $del_id =  $ct->del_id($SoHD,$datetime,$price);
}
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Đăng Ký Khóa Học</h1><br>
                <?php
                if(isset($Shifted)){
                    echo $Shifted;
                }
                ?>

                <?php
                if(isset($del_id)){
                    echo $del_id;
                }
                ?>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Thời Gian</th>
                        <th>Khóa Học</th>
                        <th>Tổng Học Phí</th>
                        <th>Học Sinh</th>
                        <th>Trạng Thái</th>
                        <th>Hóa Đơn</th>
                    </tr>
                    <?php
                        $ct = new Cart();
                        $fm = new Format();
                        $get_order_cart = $ct->get_order_cart();
                        if($get_order_cart){
                            $i = 0;
                            while($result = $get_order_cart->fetch_assoc()){
                                $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $fm->formatDate($result['NgayLap']) ?></td>
                        <td><?php echo $result['TenKhoanThu'] ?></td>
                        <td><?php echo $result['TongHD'] ?><sup>đ</sup></td>
                        <td><a style="color:#990000;" href="Profile_HSByMaPH.php?MaPH=<?php echo $result['MaPH'] ?>"><?php echo $result['MaHS'] ?></a></td>
                        <td>
                            <?php
                            if($result['Trangthai']==0){
                            ?>
                            <a href="?Shiftid=<?php echo $result['SoHD'] ?>&TongHD=<?php echo $result['TongHD'] ?>&NgayLap=<?php echo $result['NgayLap'] ?>">Chờ Xác Nhận...</a>
                            <?php
                            }
                            
                            elseif($result['Trangthai']==2){
                            ?>
                            <p>Đã Ghi Danh</p><a href="?del_id=<?php echo $result['SoHD'] ?>&TongHD=<?php echo $result['TongHD'] ?>&NgayLap=<?php echo $result['NgayLap'] ?>">Xóa</a>
                            <?php
                                }
                            
                            ?>
                        </td>
                        <td><a href="Indonhang.php?SoHD=<?php echo $result['SoHD'] ?>">Chi Tiết</a></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>
<style>
    body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
</html>