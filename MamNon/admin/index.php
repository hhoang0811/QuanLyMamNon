<?php
include "header.php";
include "slider.php";
?>

<?php
$connect = new mysqli('localhost', 'root', '', 'maugiao');
$sql = "SELECT gioitinh.*, COUNT(hocsinh.MaHS) AS 'Quanlity'
        FROM hocsinh
        INNER JOIN gioitinh
        ON hocsinh.GioiTinh = gioitinh.id
        GROUP BY hocsinh.GioiTinh";
$result = mysqli_query($connect, $sql);
$data=[];
while ($row = mysqli_fetch_array($result)){
    $data[] = $row;
}
//////
$sql_lop = "SELECT loailop.*, COUNT(lop.MaLop) AS 'Quanlity'
        FROM lop
        INNER JOIN loailop
        ON lop.MaLoaiLop = loailop.MaLoaiLop
        GROUP BY lop.MaLoaiLop";
$result_lop = mysqli_query($connect, $sql_lop);
$data_lop=[];
while ($row_lop = mysqli_fetch_array($result_lop)){
    $data_lop[] = $row_lop;
}
?>

<div class="admin-content-right">
    <div class="tbl_HS">
        <table class="tbl_1">
            <tr>
                <th style="background-color:#F0F0F0;">Tổng Số Học Sinh</th>
                <th style="text-align:center;padding-right:15px;font-weight: lighter; background-color:#F0F0F0;">
                    <?php
                    $sql2 = "SELECT * FROM hocsinh";
                    $result = mysqli_query($connect, $sql2);

                    echo mysqli_affected_rows($connect) ." ". "Học Sinh";
                    ?>
                </th>
                <th style="font-weight: lighter; background-color:#F0F0F0;"><a href="HocSinhlist.php">Xem</a></th>
            </tr>
            <tr>
                <th style="background-color:#FFFFFF; color:#3366FF;">Học Sinh Nam</th>
                <th style="text-align:center;padding-right:15px;font-weight: lighter; background-color:#FFFFFF;">
                    <?php
                        $sql3 = "SELECT * FROM hocsinh WHERE GioiTinh = '0'";
                        $result = mysqli_query($connect, $sql3);

                        echo mysqli_affected_rows($connect) ." ". "Học Sinh";
                    ?>
                </th>
                <th style="font-weight: lighter; background-color:#FFFFFF;"><a href="HocSinhNam.php">Xem</a></th>
            </tr>
            <tr>
                <th style="background-color:#F0F0F0; color:#FF3300;">Học Sinh Nữ</th>
                <th style="text-align:center;padding-right:15px;font-weight: lighter; background-color:#F0F0F0;">
                <?php
                        $sql4 = "SELECT * FROM hocsinh WHERE GioiTinh = '1'";
                        $result = mysqli_query($connect, $sql4);

                        echo mysqli_affected_rows($connect) ." ". "Học Sinh";
                    ?>
                </th>
                <th style="font-weight: lighter; background-color:#F0F0F0;"><a href="HocSinhNu.php">Xem</a></th>
            </tr>
        </table>
        <!-- ///////////////// -->
        <html>
        <head>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                ['TenGT', 'Quanlity'],
                <?php
                foreach($data as $key) {
                    echo "['" . $key['TenGT'] . "' , " . $key['Quanlity'] . "],";
                }
                ?>
                ]);

                var options = {
                title: 'Sơ Đồ Thống Kê Học Sinh',
                is3D: true,
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
            </script>
        </head>
        <body>
            <div id="piechart" style="width: 50%; height: 300px;"></div>
        </body>
        </html>
    </div>  
    <!-- //////////////// -->
    <div class="tbl_Lop">
        <table class="tbl_1">
        <tr>
                <th style="background-color:#FFFFFF;">Tổng Số Lớp Học</th>
                <th style="text-align:center;padding-right:15px;font-weight: lighter; background-color:#FFFFFF;">
                    <?php
                    $sql2 = "SELECT * FROM lop";
                    $result = mysqli_query($connect, $sql2);

                    echo mysqli_affected_rows($connect) ." ". "Lớp";
                    ?>
                </th>
                <th style="font-weight: lighter; background-color:#FFFFFF;"><a href="Loplist.php">Xem</a></th>
            </tr>
            <tr>
                <th style="background-color:#F0F0F0; color:#3366FF;">Lớp Mầm</th>
                <th style="text-align:center;padding-right:15px;font-weight: lighter; background-color:#F0F0F0;">
                    <?php
                        $sql3 = "SELECT * FROM lop WHERE MaLoaiLop = '6'";
                        $result = mysqli_query($connect, $sql3);

                        echo mysqli_affected_rows($connect) ." ". "Lớp";
                    ?>
                </th>
                <th style="font-weight: lighter; background-color:#F0F0F0;"><a href="LoplistByLoaiLop.php?MaLoaiLop=6<?php echo 'MaLoaiLop' ?>">Xem</a></th>
            </tr>
            <tr>
                <th style="background-color:#FFFFFF; color:#FF3300;">Lớp Chồi</th>
                <th style="text-align:center;padding-right:15px;font-weight: lighter; background-color:#FFFFFF;">
                <?php
                        $sql4 = "SELECT * FROM lop WHERE MaLoaiLop = '11'";
                        $result = mysqli_query($connect, $sql4);

                        echo mysqli_affected_rows($connect) ." ". "Lớp";
                    ?>
                </th>
                <th style="font-weight: lighter; background-color:#FFFFFF;"><a href="LoplistByLoaiLop.php?MaLoaiLop=11<?php echo 'MaLoaiLop' ?>">Xem</a></th>
            </tr>
            <tr>
                <th style="background-color:#F0F0F0; color:#FF9900;">Lớp Lá</th>
                <th style="text-align:center;padding-right:15px;font-weight: lighter; background-color:#F0F0F0;">
                <?php
                        $sql4 = "SELECT * FROM lop WHERE MaLoaiLop = '12'";
                        $result = mysqli_query($connect, $sql4);

                        echo mysqli_affected_rows($connect) ." ". "Lớp";
                    ?>
                </th>
                <th style="font-weight: lighter; background-color:#F0F0F0;"><a href="LoplistByLoaiLop.php?MaLoaiLop=12<?php echo 'MaLoaiLop' ?>">Xem</a></th>
            </tr>
        </table>
        <!-- ///////////////// -->
        <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['TenLoaiLop', 'Quanlity'],
          <?php
                foreach($data_lop as $key) {
                    echo "['" . $key['TenLoaiLop'] . "' , " . $key['Quanlity'] . "],";
                }
                ?>
        ]);

        var options = {
          title: 'Sơ Đồ Thống Kê Lớp Học',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 50%; height: 300px;"></div>
  </body>
</html>
    </div>  
</div>
</section>
</body>
</html>
<style>
.admin-content-right{
    margin-top:40px;
}
table tr th a {
    color:#008080;
}
table tr th a:hover {
    text-decoration: underline;
}
table {
    border-collapse:collapse;
    width:40%;
}
.tbl_HS{
    display:flex;
}
.tbl_Lop{
    display:flex;
}
.tbl_1{
    margin-right:60px;
    margin-left:30px;
    margin-bottom:70px;
}
/* body{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-repeat: no-repeat;
    background-size:cover;
} */
</style>