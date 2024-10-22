<?php
include "header.php";
include "slider.php";
include '../class/HocSinh.php';
include '../helpers/format.php';
?>

<?php
$fm = new Format();
$hs = new HocSinh();
$show_HocSinhNam = $hs ->show_HocSinhNam();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Học Sinh Nam</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh</th>
                        <th>Mã Số</th>
                        <th>Họ Tên</th>
                        <th>Giới Tính</th>
                        <th>Dân Tộc</th>
                        <th>Ngày Sinh</th>
                        <th>Khối Lớp</th>
                        <th>Tên Lớp</th>
                        <th>Chi Tiết</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                    <?php
                    if($show_HocSinhNam){$i = 0;
                        while ($result = $show_HocSinhNam->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><img src="uploads/<?php echo $result['AnhDaiDien']?>" width="70"></td>
                        <td><?php echo $result['MaHS'] ?></td>
                        <td><?php echo $result['TenHS'] ?></td>
                        <td>Nam</td>
                        
                        <td><?php echo $result['DanToc'] ?></td>
                        <td><?php echo $result['NamSinh'] ?></td>
                        <td><?php echo $result['TenLoaiLop'] ?></td>
                        <td><?php echo $result['TenLop'] ?></td>
                        
                        <td><a href="HocSinh_profile.php?MaHS=<?php echo $result['MaHS'] ?>">Xem</a></td>
                        <td><a href="HocSinhedit.php?MaHS=<?php echo $result['MaHS'] ?>">Sửa</a> | <a href="HocSinhdelete.php?MaHS=<?php echo $result['MaHS'] ?>">Xóa</a></td>
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
</html>
<style>
    body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>