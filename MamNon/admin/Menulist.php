<?php
include "header.php";
include "slider.php";
include '../class/Menu.php';
?>

<?php
$fm = new Format();
$menu = new Menu();
$show_Menu = $menu ->show_Menu();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Thực Đơn</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Ngày</th>
                        <th>Khối Lớp</th>
                        <th>Buổi Sáng</th>
                        <th>Buổi Trưa</th>
                        <th>Buổi Tối</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                    <?php
                    if($show_Menu){$i = 0;
                        while ($result = $show_Menu->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['id'] ?></td>
                        <td><?php echo $fm->formatDateVN($result['Ngay']) ?></td>
                        <td><?php echo $result['TenLoaiLop'] ?></td>
                        <td><?php echo $result['Sang'] ?></td>
                        <td><?php echo $result['Trua'] ?></td>
                        <td><?php echo $result['Chieu'] ?></td>
                        <td><a href="Menuedit.php?id=<?php echo $result['id'] ?>">Sửa</a> | <a href="Menudelete.php?id=<?php echo $result['id'] ?>">Xóa</a></td>
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