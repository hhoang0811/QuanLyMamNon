
<?php
$show_KhoanThu = $kt ->show_KhoanThu();
?>
<footer>
    <div class="row">
        <div class="boxcenter">
            <div class="boxfooter1">
                <h4 class="colorc">Địa Chỉ</h4>
                <div class="location1 marginbottom"><i class="fa-solid fa-location-dot"></i>  102/27 Lê Anh Xuân, Thới Bình, Ninh Kiều, Cần Thơ</div>
                <!-- <div class="location marginbottom"><i class="fa-solid fa-location-dot"></i>  10/25 Trần Hưng Đạo, Thới Bình, Ninh Kiều, Cần Thơ</div> -->
                <div class="mail marginbottom"><i class="fa-solid fa-envelope"></i>  MamNonABC@gmail.com</div>
                <div class="phone marginbottom"><i class="fa-solid fa-phone"></i> 0932838539</div>
                <div class="zalo"><a href="https://zalo.me/pc">Zalo: 0932838539</a></div>
            </div>
            <div class="boxfooter2 colorc">
                <h4>Các Khóa Học
                    <ul class="Danhmuc-footer">
                    <?php
                        while ($result = $show_KhoanThu->fetch_assoc()){;
                    ?>
                        <li class="marginbottom"><a href="KhoaHoc_Details.php?MaKhoanThu=<?php echo $result['MaKhoanThu']  ?>"><?php echo $result['TenKhoanThu'] ?></a></li>
                    <?php
                        }
                    ?> 
                    </ul>
                </h4>
            </div>
            <div class="boxfooter3 colorc">
                <h4>Theo Dõi Chúng Tôi
                    <li class="social-media">
                        <a href="https://www.facebook.com/H22-Sneakers-102430635639216"><img src="img/fb1.PNG" width="30" height="30"></a>
                        <a href="https://twitter.com/?lang=vi"><img src="img/twitter1.PNG" width="30" height="30"></a>
                        <a href="https://www.instagram.com/ditixhhng_/"><img src="img/ig1.PNG" width="30" height="30"></a>
                    </li>
                </h4>
            </div>
            <div class="boxfooter5">
                <h4 class="colorc">Tải Ứng Dụng Trên</h4>
                <div class="app-google">
                    <img src="img/app store.png">
                    <img src="img/CH Play.png">
                </div>
                <div class="formUuDai">
                    <p><b style="font-size: 14px;">Nhận Các Thông Báo Mới Nhất Của Trường</b></p>
                    <input type="text" placeholder="Nhập Email của bạn...">
                </div>   
            </div>
        </div>
    </div>
    <div class="row textcener colorc">@MamNonQuocTe all rights reserved</div>
</footer>
</body>

<style>
    .boxfooter3{
    margin-top: 10px;
    width: 20%;
    margin-left: 13%;
}
.boxfooter2{
    margin-top: 10px;
    width: 10%;
    float: left;
    margin-left: 50px;
}
</style>