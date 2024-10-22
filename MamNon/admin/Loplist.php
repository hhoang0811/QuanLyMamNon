<?php
include "header.php";
include "slider.php";
include '../class/Lop.php';
include '../helpers/format.php';
?>

<?php
$fm = new Format();
$lop = new Lop();
$show_Lop = $lop ->show_Lop();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Các Lớp</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Mã Lớp</th>
                        <th>Tên Lớp</th>
                        <th>Sỉ Số</th>
                        <th>Loại Lớp</th>
                        <th>Năm Học</th>
                        <th>Tùy Chỉnh</th>
                        <th>Chi Tiết</th>
                    </tr>
                    <?php
                    if($show_Lop){$i = 0;
                        while ($result = $show_Lop->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['MaLop'] ?></td>
                        <td><?php echo $result['TenLop'] ?></td>
                        <td><?php echo $result['SiSo'] ?></td>
                        <td><?php echo $result['TenLoaiLop'] ?></td>
                        <td><?php echo $result['NamHoc'] ?></td>
                        <td><a href="Lopedit.php?MaLop=<?php echo $result['MaLop'] ?>">Sửa</a> | <a href="Lopdelete.php?MaLop=<?php echo $result['MaLop'] ?>">Xóa</a></td>
                        <td><a href="HocSinhlistByMaLop.php?MaLop=<?php echo $result['MaLop'] ?>">Xem</a></td>
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