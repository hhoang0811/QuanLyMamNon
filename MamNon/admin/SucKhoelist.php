<?php
include "header.php";
include "slider.php";
include '../class/SucKhoe.php';
include '../helpers/format.php';
?>

<?php
$fm = new Format();
$sk = new SucKhoe();
$show_ssk = $sk ->show_ssk();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Sổ Sức Khỏe</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Mã Sổ</th>
                        <th>Ngày Cập Nhật</th>
                        <th>Học Sinh</th>
                        <th>Ghi Chú</th>
                        <th>Kết Luận</th>
                        <th>Chi Tiết</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                    <?php
                    if($show_ssk){$i = 0;
                        while ($result = $show_ssk->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['MaSo'] ?></td>
                        <td><?php echo $fm->formatDate($result['Ngay']) ?></td>
                        <td><?php echo $result['TenHS'] ?></td>
                        <td><?php echo $fm->textShorten($result['GhiChu'], 20);?></td>
                        <td><?php echo $result['KetLuan'] ?></td>
                        <td><a href="ChiTietSucKhoeByMaSo.php?MaSo=<?php echo $result['MaSo'] ?>">Xem</a></td>
                        <td><a href="SucKhoeedit.php?MaSo=<?php echo $result['MaSo'] ?>">Sửa</a> | <a href="SucKhoedelete.php?MaSo=<?php echo $result['MaSo'] ?>">Xóa</a></td>
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