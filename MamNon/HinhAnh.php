<?php
include "include/header.php";
?>

<?php
$fm = new Format();
$ha = new HinhAnh();
$show_HinhAnh = $ha ->show_HinhAnh();
?>

<h1 style=" font-family: Georgia;color:#6e4ba3; text-align: center; margin-top:200px; font-size:30px;">HOẠT ĐỘNG VUI CHƠI</h1>
<div class="cart_list">
    <?php
        if($show_HinhAnh){
        while ($result = $show_HinhAnh->fetch_assoc()){
    ?>
    <div class="cart">
    <a href="admin/uploads/<?php echo $result['Anh']?>"><img src="admin/uploads/<?php echo $result['Anh']?>" alt="" class="cart-img"></a>
        <div class="cart-content">
            <div class="cart-top">
                <h3 class="cart-title"><?php echo $result['MoTa'] ?></h3>
                <div class="cart-date"><i class="fa-solid fa-calendar-days"></i> <?php echo $fm->formatDate($result['Ngay']) ?></div>
            </div>
        </div>
        
    </div>
    <?php
            }
        }
    ?>
</div>

<style>
    
    .cart_list{
        padding:20px;
        display:flex;
        flex-wrap:wrap;
        margin-left:-30px;
        margin-top:40px;
        margin-bottom:30px;
    }
    .cart{
        border-radius:20px;
        overflow:hidden;
        background-color:white;
        box-shadow:rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        width:calc(25% - 30px);
        margin-left:30px;
        margin-top:20px;
        cursor: pointer;
    }
    .cart:hover{
        border:1px solid #A52A2A;
    }
    .cart-img{
        height:200px;
        width:100%;
        object-fit:cover;
    }
    .cart-content{
        padding:25px;
    }
    .cart-title{
        font-weight:700;
        margin-bottom:25px;
    }
</style>
<?php
include 'include/footer.php';
?>
</body>
</html>
