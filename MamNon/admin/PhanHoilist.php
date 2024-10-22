<?php
include "header.php";
include "slider.php";
include '../class/PhanHoi.php';
include '../helpers/format.php';
?>

<?php
$fm = new Format();
$phanhoi = new PhanHoi();
$show_phanhoi = $phanhoi ->show_phanhoi();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1 style="color:#A52A2A;">Ý Kiến Phản Hồi Từ Phụ Huynh</h1>
                <table>
                    <tr>
                        <th style="width:10%;">STT</th>
                        <th style="width:15%;">Thời Gian</th>
                        <th style="width:35%;">Nội Dung</th>
                        <th style="width:10%;">Tùy Chỉnh</th>
                    </tr>
                    <?php
                    if($show_phanhoi){$i = 0;
                        while ($result = $show_phanhoi->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $fm->formatDate($result['Ngay']) ?></td>
                        <td><?php echo $result['NoiDung'] ?></td>
                        
                        <td><a href="PhanHoiDelete.php?id=<?php echo $result['id'] ?>">Xóa</a></td>
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