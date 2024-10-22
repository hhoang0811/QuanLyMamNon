<?php
include 'include/header.php';
include '../class/PhanHoi.php';
?>
<?php
$phanhoi = new PhanHoi();
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $insert_phanhoi = $phanhoi ->insert_phanhoi($_POST);
}
?>

<?php
$login_check=Session::get('customer_login');
if($login_check==false){
    header('Location:login.php');
}
?>

<!--------------------------profile------------------------->
<section class="product row1">
    <div class="container">
    <form action="" method="post" id="myform"><br>
    <h2 style="margin-top:10px;margin-bottom:10px; color:#008080;font-family:'Times New Roman', Times, serif ;">Ý Kiến Đóng Góp</h2>
    <?php
                if(isset($insert_phanhoi)){
                    echo $insert_phanhoi;
                }
            ?>
        <table class="tb_customer">
            <div class="textarea_F">
                <p style="margin-top:10px;margin-bottom:10px; color:#FF6347;font-family:'Times New Roman', Times, serif ;">Ý kiến đóng góp sẽ được gửi ẩn danh</p>
                <textarea class="textarea" name="NoiDung" cols="50" rows="10"></textarea>
            </div>
        </table>
        <input type="submit" class="button_submit" value="Gửi"/>
        <!-- <button type="submit" onclick="" onclick="showaler()" class="button_submit">Gửi</button><br> -->
        
        </form>
    </div>
</section>
</html>

<script>
    document.getElementById('myform').addEventListener('submit', function(){
        alert('Xác nhận gửi!');
    });
</script>

<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function showaler(){
        Swal.fire(
            'Đã Gửi!',
            'Cám ơn quý phụ huynh đã đóng góp ý kiến!',
            'success'
        )
    }
</script> -->

<style>
body{
    background-color:#ffff;
}
form {
    margin-left:80%;
    text-align:center;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px #008080;
    width: 600px !important;
    height: 420px !important ;

}
.container{
        background-color:#ffff;
        margin-top:170px;
    }
.tb_customer {
    margin-left:10%;
    width: 400px;
    text-align: center;
    margin-top: 20px;
    margin-bottom:25px;
}
.textarea_F{
    margin-left:12%;
    background-color: #FFFFFF;
    border: 6px solid #D3D3D3;
    border-radius: 60px 60px;
    width:450px;
    margin-top:10px;
}
.textarea{
    border: none;
    outline: none;
}
table {
    border-collapse: collapse;
}
.tb_customer tr  {
    border: 2px solid #ddd;
    height: 45px ;
}
.tb_customer tr td {
    background-color: #fff ;
    border:none;
}
.tb_customer tr td a{
   color:red;
}

.button_submit{
    width:80px;
    height:25px;
    background-color:black;
    border-radius:40px;
    color:white;
    cursor: pointer;
    margin-bottom:10px;
}
</style>


<?php
include 'include/footer.php';
?>
