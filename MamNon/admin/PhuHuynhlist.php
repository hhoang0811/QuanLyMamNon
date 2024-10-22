<?php
include "header.php";
include "slider.php";
include '../class/PhuHuynh.php';
?>

<?php
$fm = new Format();
$phuhuynh = new PhuHuynh();
$show_PhuHuynh = $phuhuynh ->show_PhuHuynh();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Phụ Huynh</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Mã PH</th>
                        <th>Tên PH</th>
                        <th>Năm Sinh</th>
                        <th>Nghề Nghiệp</th>
                        <th>Địa Chỉ</th>
                        <th>Email</th>
                        <th>Tùy Chỉnh</th>
                        <th>Chi Tiết</th>
                    </tr>
                    <?php
                    if($show_PhuHuynh){$i = 0;
                        while ($result = $show_PhuHuynh->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['MaPH'] ?></td>
                        <td><?php echo $result['TenPH'] ?></td>
                        <td><?php echo $result['NamSinh'] ?></td>
                        <td><?php echo $result['NgheNghiep'] ?></td>
                        <td><?php echo $fm->textShorten($result['DiaChiThuongTru'], 20);?></td>
                        <td><?php echo $result['Email'] ?></td>
                        <td><a href="PhuHuynhedit.php?MaPH=<?php echo $result['MaPH'] ?>">Sửa</a> | <a href="PhuHuynhdelete.php?MaPH=<?php echo $result['MaPH'] ?>">Xóa</a></td>
                        <td><a href="PH_profile.php?MaPH=<?php echo $result['MaPH'] ?>">Xem</a></td>
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