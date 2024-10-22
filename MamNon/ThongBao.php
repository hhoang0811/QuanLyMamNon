<?php
include "include/header.php";
?>


<?php
$fm = new Format();
$thongbao = new ThongBao();
$show_thongbao = $thongbao ->show_thongbao();
?>

<?php
$login_check=Session::get('customer_login');
if($login_check==false){
    header('Location:login.php');
}
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
                <h1 style="margin-left:10%;font-family: Georgia;color:#6e4ba3;">Danh Sách Các Thông Báo</h1>
                <table>
                    <tr>
                        <th style="width:15%;">Mới Nhất</th>
                        <th style="width:15%;">Ngày Ra Thông Báo</th>
                        <th style="width:25%;">Chủ Đề</th>
                        <th style="width:40%;">Nội Dung</th>
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
.admin-content-right-cartegory-list{
    margin-top:170px;
}

table {
    margin-top:25px;
    margin-left:5%;
    margin-bottom:20px;
    border-collapse:collapse;
    width:90%;
    background-color:#fff;
}
table tr th {
    font-family: serif;
    font-size:18px;
    background-color:#C0C0C0;
}

table tr td a:hover {
    color:orange;
}
table, th, td{
    border-top:1px solid #ccc;
    border-bottom:1px solid #ccc;
}
th, td{
    text-align:center;
    padding:10px;
}

form {
    margin-left:27%;
    text-align:center;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px orange;
    width: 700px !important;
    height: 800px !important ;
}

</style>
</html>
<?php
include 'include/footer.php';
?>