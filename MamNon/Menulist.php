<?php
include "include/header.php";
?>

<?php
$show_Menu = $menu ->show_Menu();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory-list">
    <form action="" method=""><br>
        <h1 style="font-family:'Times New Roman', Times, serif ;color:#6e4ba3; font-size:30px;">THỰC ĐƠN HẰNG NGÀY</h1>
                <table>
                    <tr>
                        <th style="width:17%;">Ngày</th>
                        <th style="width:8%;">Khối Lớp</th>
                        <th style="width:25%;">Buổi Sáng</th>
                        <th style="width:25%;">Buổi Trưa</th>
                        <th style="width:25%;">Buổi Chiều</th>
                    </tr>
                    <?php
                    $fm = new Format();
                    if($show_Menu){$i = 0;
                        while ($result = $show_Menu->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $fm->formatDateVN($result['Ngay']) ?></td>
                        <td><?php echo $result['TenLoaiLop'] ?></td>
                        <td><?php echo $result['Sang'] ?></td>
                        <td><?php echo $result['Trua'] ?></td>
                        <td><?php echo $result['Chieu'] ?></td>
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
table tr {
    margin-left:20px;
}
table, th, td{
    border-top:1px solid #ccc;
    border-bottom:1px solid #ccc;
}
th{
    text-align:center;
    padding:10px;
}

td{
    text-align:center;
    padding:20px;
}

form {
    margin-left:10%;
    text-align:center;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px green;
    width: 1250px !important;
    height: 800px !important ;
}
</style>
<?php
include 'include/footer.php';
?>