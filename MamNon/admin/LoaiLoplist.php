<?php
include "header.php";
include "slider.php";
include '../class/LoaiLop.php';
?>

<?php
$loailop = new LoaiLop();
$show_LoaiLop = $loailop ->show_LoaiLop();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Loại Lớp</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Tên Loại Lớp</th>
                        <th>Chi Tiết</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                    <?php
                    if($show_LoaiLop){$i = 0;
                        while ($result = $show_LoaiLop->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['MaLoaiLop'] ?></td>
                        <td><?php echo $result['TenLoaiLop'] ?></td>
                        <td><a href="LoplistByLoaiLop.php?MaLoaiLop=<?php echo $result['MaLoaiLop'] ?>">Xem</a></td>
                        <td><a href="LoaiLopedit.php?MaLoaiLop=<?php echo $result['MaLoaiLop'] ?>">Sửa</a> | <a href="LoaiLopdelete.php?MaLoaiLop=<?php echo $result['MaLoaiLop'] ?>">Xóa</a></td>
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