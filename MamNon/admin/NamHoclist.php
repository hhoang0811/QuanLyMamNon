<?php
include "header.php";
include "slider.php";
include '../class/Namhoc.php';
?>
<?php
$namhoc = new NamHoc();
$show_namhoc = $namhoc ->show_namhoc();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>Năm Học</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Năm Học</th>
                        <th>Ngày Khai Giảng</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                    <?php
                    if($show_namhoc){$i = 0;
                        while ($result = $show_namhoc->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['NamHoc'] ?></td>
                        <td><?php echo $result['NgayKhaiGiang'] ?></td>
                        <td><a href="NamHocedit.php?NamHoc=<?php echo $result['NamHoc'] ?>">Sửa</a> | <a href="NamHocdelete.php?NamHoc=<?php echo $result['NamHoc'] ?>">Xóa</a></td>
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