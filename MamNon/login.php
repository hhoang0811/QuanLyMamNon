<?php
include 'include/header.php';
?>

<?php
        $login_check = Session::get('customer_login');
        if($login_check){
            header('Location:order.php');
        }
        ?>

<?php
if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['login'])){
    $login_PhuHuynh = $ph ->login_PhuHuynh($_POST);
}
?>

<section class="cartegory">
        <form action="" method="POST"><br>
        <h3 style="font-size: 25px ;
                    color: var(--text-1) !important;
                    align-items: center !important;
                    text-align: center ;">Đăng nhập
        </h3>

        <?php
            if(isset($login_PhuHuynh)){
            echo $login_PhuHuynh;
            }
        ?>

        <div class="row2 mb-3">
            <label for="" class="col-sm-2 col-form-label">Tên đăng nhập</label>
            <div class="col-sm-10">
                <input type="type" class="form-control" id="" name="MaPH" placeholder="Username">
            </div>
        </div>
        <div class="row2 mb-3">
            <label for="" class="col-sm-2 col-form-label">Mật khẩu</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="" name="MatKhau" placeholder="Password">
            </div>
        </div>

        <button class="btn-return"><a href="index.php" style="list-style: none; text-decoration: none"> Trở lại</a></button>
        <button type="submit" class="btn btn-primary" name="login">Đăng nhập</button>
        
        </form>
</section>

<style>
* {
    text-decoration: none !important;
    list-style-type: none !important;
}
:root {
    --white-color: #fff;
    --main-color: #10bc10;
    --color-1: #c53aac;
    --color-2: #af429b;
    --color-3: #d379c2;
    --text-1: #888;
}
body {
    margin-top: 200px;
    justify-content: center;
    align-items: flex-start;
    height: 100%;
    width: 100%;
    background: url(../Img/1.jpg);
    background-repeat: no-repeat;
    background-size: 100%;
    font-family: "Roboto", sans-serif;
}

form {
    margin: auto;
    margin-bottom: 50px ;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px rgb(128, 194, 214);
    width: 500px !important;
    height: 320px !important ;

}

.col-sm-2 {
    font-weight: bold ;
    width: 50%;
    display: flex;
    margin-left: 40px ;
    margin-top: 20px ;
   
}
.col-sm-10 input {
    margin-left: 45px;
    margin-top: 5px ;
    width: 80% ;
    height: 30px ;
    border: none;
    border-bottom: 1px solid #999;
    outline: none;
}
.btn {
    margin: 20px 0px !important;
}

.btn-primary {
    font-size: 15px ;
    width: 20% ;
    height: 12% ;
    background-color: black ;
    color: white ;
    border: none ;
    border-radius: 5px ;
    cursor: pointer;
    transition: all 0.3s ease;
}


.btn-primary:hover {
    background-color: #CD5C5C ;
    color: black ;
    border: 1px solid black;
}


span {
    padding-left: 10px;
    margin-bottom: 10px;
}

#text-logo {
    color: #000;
    text-align: center;
    font-size: 20px;
    font-weight: 500;
    padding: 20px 30px;
}

.btn-return {
    width: 20%;
    height: 12%;
    border-radius: 4px;
    font-size: 1rem;
    background-color: var(--text-1);
    border: none;
    color:white;
    margin-right: 5px;
    cursor: pointer;
    margin: 20px 20px 5px 150px !important;
}

.btn-return a{

    color: var(--white-color);
}

.btn-return:hover{
    background-color: rgb(167, 162, 162);
}
</style>


<?php
include 'include/footer.php';
?>