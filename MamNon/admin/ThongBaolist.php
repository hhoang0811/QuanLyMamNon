<?php
include "header.php";
include "slider.php";
include '../class/ThongBao.php';
include '../helpers/format.php';
?>

<?php
$fm = new Format();
$thongbao = new ThongBao();
$show_thongbao = $thongbao ->show_thongbao();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Các Thông Báo</h1>
                <table>
                    <tr>
                        <th style="width:10%;">STT</th>
                        <th style="width:10%;">Ngày Ra Thông Báo</th>
                        <th style="width:20%;">Chủ Đề</th>
                        <th style="width:35%;">Nội Dung</th>
                        <th style="width:10%;">Tùy Chỉnh</th>
                    </tr>
                    <?php
                    if($show_thongbao){$i = 0;
                        while ($result = $show_thongbao->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['Ngay'] ?></td>
                        <td><?php echo $result['ChuDe'] ?></td>
                        <td><?php echo $result['NoiDung'] ?></td>
                        
                        <td><a href="ThongBaoEdit.php?id=<?php echo $result['id'] ?>">Sửa</a> | <a href="ThongBaoDelete.php?id=<?php echo $result['id'] ?>">Xóa</a></td>
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
    table {
        width:100%;
    }
body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
</html>