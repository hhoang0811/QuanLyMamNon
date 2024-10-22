<?php
include "include/header.php";
?>

<?php
$show_KhoanThu = $kt ->show_KhoanThu();
?>
<?php
$login_check=Session::get('customer_login');
if($login_check==false){
    header('Location:login.php');
}
?>
<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
    <form action="" method=""><br>
        <h1 style=" font-family: Georgia;color:#6e4ba3; font-size:30px;">DANH SÁCH CÁC KHÓA HỌC</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th style="text-align:left;">Tên Khóa Học</th>
                        <th>Chi Tiết</th>
                    </tr>
                    <?php
                    if($show_KhoanThu){$i = 0;
                        while ($result = $show_KhoanThu->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td style="text-align:left;"><a href="KhoaHoc_Details.php?MaKhoanThu=<?php echo $result['MaKhoanThu']  ?>"><?php echo $result['TenKhoanThu'] ?></a></td>
                        <td><a href="KhoaHoc_Details.php?MaKhoanThu=<?php echo $result['MaKhoanThu']  ?>">Xem</a></td>
                    </tr>
                    <?php
                    }
                }
                    ?>
                </table>
        </form>
    </div>
</div>
    </section>
</body>
</html>
<style>
.admin-content-right-cartegory-list{
    margin-top:170px;
}
table {
    margin-top:25px;
    border-collapse:collapse;
    width:100%;
}
table tr th {
    font-family: serif;
    font-size:18px;
    background-color:#F8F8F8;
}
table tr td a:hover {
    color:orange;
}
table, th, td{
    border-top:1px solid #ccc;
    border-bottom:1px solid #ccc;
}
th, td{
    
    padding:10px;
}

form {
    margin-left:25%;
    text-align:center;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px orange;
    width: 800px !important;
    height: 800px !important ;
}
</style>
<?php
include 'include/footer.php';
?>