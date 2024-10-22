<?php
include "header.php";
include "slider.php";
include '../class/KhoanThu.php';
include '../helpers/format.php';
?>

<?php
$fm = new Format();
$khoanthu = new KhoanThu();
$show_KhoanThu = $khoanthu ->show_KhoanThu();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Các Khoản Thu</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Mã Số</th>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Mô Tả</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                    <?php
                    if($show_KhoanThu){$i = 0;
                        while ($result = $show_KhoanThu->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['MaKhoanThu'] ?></td>
                        <td><?php echo $result['TenKhoanThu'] ?></td>
                        <td><?php echo $result['Gia'] ?> <sup>đ</sup></td>
                        <td><?php echo $fm->textShorten($result['MoTa'], 20);?></td>
                        <td><a href="KhoanThuEdit.php?MaKhoanThu=<?php echo $result['MaKhoanThu'] ?>">Sửa</a> | <a href="KhoanThudelete.php?MaKhoanThu=<?php echo $result['MaKhoanThu'] ?>">Xóa</a></td>
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