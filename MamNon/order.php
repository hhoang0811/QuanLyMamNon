<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/class/HoaDon.php');
include_once ('helpers/format.php');
?>

<?php
$hd = new HoaDon();
if(!isset($_GET['SoHD']) || $_GET['SoHD']==NULL ){
    echo "<script>window.location = '404.php'</script>";
}else {
    $SoHD = $_GET['SoHD'];
}

?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div  class="admin-content-right">
    <div id="body" class="admin-content-right-cartegory-list">
    <div id="data">
                <table>
					<div class="h1"><h1>HÓA ĐƠN ĐĂNG KÝ KHÓA HỌC</h1></div>
					<div class="h2">
						<img src='img/Logo-01.png' height="130" width="230">
						<p><span style="font-weight:bold;color:#191970;">TRƯỜNG MẦM NON QUỐC TẾ</span></p>
						<p><span style="font-weight:bold;">ĐC:</span> 102/27 Lê Anh Xuân, Thới Bình, Ninh Kiều, Cần Thơ</p>
						<p><span style="font-weight:bold;">Email:</span> MamNonABC@gmail.com</p>
						<p><span style="font-weight:bold;">Hotline:</span> 0932838539</p>
					</div>
    				<?php

                        $fm = new Format();
                        $get_HoaDon = $hd->get_HoaDon($SoHD);
                		if($get_HoaDon){
                    	while($result = $get_HoaDon->fetch_assoc()){
                    ?>
                    <tr>
						<th>Số HD</th>
                        <th style="text-align:right;padding-right:15px;font-weight: lighter;"><?php echo $result['SoHD'] ?></th>
                    </tr>
                    <tr>
						<th>Thời Gian Đăng Ký</th>
                        <th style="text-align:right;padding-right:15px;font-weight: lighter;"><?php echo $fm->formatDate($result['NgayLap']) ?></th>
                    </tr>
                    <tr>
						<th>Khóa Học</th>
                        <th style="text-align:right;padding-right:15px;font-weight: lighter;"><?php echo $result['TenKhoanThu'] ?></th>
                    </tr>
                    <tr>
						<th>Mã Học Sinh</th>
                        <th style="text-align:right;padding-right:15px;font-weight: lighter;"><?php echo $result['MaHS'] ?></th>
                    </tr>
                    <tr>
						<th>Tên Học Sinh</th>
                        <th style="text-align:right;padding-right:15px;font-weight: lighter;"><?php echo $result['TenHS'] ?></th>
                    </tr>
                    <tr>
						<th>Mã Lớp</th>
                        <th style="text-align:right;padding-right:15px;font-weight: lighter;"><?php echo $result['MaLop'] ?></th>
                    </tr>
                    <tr>
						<th>Tên Phụ Huynh</th>
                        <th style="text-align:right;padding-right:15px;font-weight: lighter;"><?php echo $result['TenPH'] ?></th>
                    </tr>
                    <tr>
						<th>Trạng Thái</th>
                        <th style="text-align:right;padding-right:15px;font-weight: lighter;"><?php
                            if($result['Trangthai']==0){
                            ?>
                            <?php
							echo 'Chờ Xác Nhận';
							?>
                            <?php
                            }elseif($result['Trangthai']==1){
                            ?>
                            <?php
                            echo 'Chờ Phụ Huynh Xác Nhận';
                            ?>
                            <?php
                            }elseif($result['Trangthai']==2){
                            ?>
                            <?php
                            echo 'Đã Ghi Danh';
                            ?>
                            <?php
                                }
                            
                            ?></th>
                    </tr>
                    <tr>
						<th>Học Phí</th>
                        <th style="text-align:right;padding-right:15px;font-weight: lighter;"><?php echo $result['TongHD'] ?><sup>đ</sup></th>
                    </tr>
					<?php
                    }
                }
            ?>
                </table>
                <div class="sign">
                    <div class="sign_Ad">
                    <p style="font-weight:bold;margin-left:5%;">HIỆU TRƯỞNG</p>
                    <p style="margin-left:15%;">hoang</p>
                    <p>Đinh Thịnh Huy Hoàng</p>
                    </div>

                    <div class="sign_U">
                        <p>............, Ngày........Tháng.......Năm.......</p>
                        <p style="margin-left:20%;font-weight:bold;">Phụ Huynh</p>
                    </div>
                </div>
                </div>
				<button id="btnPrint" type="button" class="fa fa-print" onClick="printpage()"> In</button>
            </div>
        </div>
    </section>
</div>
</body>
</html>
<script>
	function printpage() {
		var body = document.getElementById('body').innerHTML;
		var data = document.getElementById('data').innerHTML;
		document.getElementById('body').innerHTML = data;
		window.print();
		document.getElementById('body').innerHTML = body;
	}

</script>


<style>
body{
    height:297mm;
    width:210mm;
}
.admin-content-right-cartegory-list{
    margin-top:15px;
    margin-left:10%;
}

table {
    margin-top:35px;
    margin-left:15%;
    margin-bottom:20px;
    border-collapse:collapse;
    width:70%;
    
}
table tr th {
    font-family: serif;
    font-size:18px;
    
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
    padding:8px;
}
.h1{
	text-align: center;
	font-family:'Times New Roman', Times, serif ;
	color: rgb(228, 49, 109);
}
.h2{
	margin-left:10%;
}
#btnPrint{
	margin-top:30px;
    margin-left:10%;
	background-color: black;
	color:white;
    width: 70px;
    height: 40px;
	cursor: pointer;
	font-weight: bold
} 
#btnPrint:hover{
	background-color: #484848;
	color:black;
	font-weight: bold
}
.sign{
    width:100%;
    margin-top:15%;
    margin-left:10%;
    display:flex;
}
.sign_Ad{
    width:45%;
}
.sign_U{
    width:55%;
}
</style>
