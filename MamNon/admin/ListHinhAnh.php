<?php
include "header.php";
include "slider.php";
include '../class/HinhAnh.php';
include '../helpers/format.php';
?>

<?php
$fm = new Format();
$ha = new HinhAnh();
$show_HinhAnh = $ha ->show_HinhAnh();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>Hoạt Động Vui Chơi</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Ngày</th>
                        <th>Mô Tả</th>
                        <th>Ảnh</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                    <?php
                    if($show_HinhAnh){$i = 0;
                        while ($result = $show_HinhAnh->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $fm->formatDate($result['Ngay']) ?></td>
                        <td><?php echo $result['MoTa'] ?></td>
                        <td><a href="uploads/<?php echo $result['Anh']?>"><img src="uploads/<?php echo $result['Anh']?>" alt="" width="120"></a></td>
                        <td><a href="Anhedit.php?id=<?php echo $result['id'] ?>">Sửa</a> | <a href="Anhdelete.php?id=<?php echo $result['id'] ?>">Xóa</a></td>
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