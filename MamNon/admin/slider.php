<script language="javascript" src="../script/slider.js"></script>
<section class="admin-content">
        <div class="admin-content-left">
            <!-- <ul class="ul-home">
                
            </ul> -->
            <!-- <div class="toggle">
            <ion-icon name="menu-outline" class="open"></ion-icon>
                <ion-icon name="remove-circle-outline" class="close"></ion-icon>
            </div> -->
            <ul>
                <li class="admin-content-left-li li-home"><a href="index.php"><ion-icon name="home-outline"></ion-icon></a>
                </li>
                <li class="admin-content-left-li"><a><ion-icon name="storefront-outline"></ion-icon> LỚP</a>
                    <ul>
                        <li><a href="LopAdd.php">Thêm Lớp</a></li>
                        <li><a href="Loplist.php">Danh Sách</a></li>
                    </ul>
                </li>
                <li class="admin-content-left-li"><a><ion-icon name="podium-outline"></ion-icon> KHỐI LỚP</a>
                    <ul>
                        <li><a href="LoaiLopadd.php">Thêm Khối Lớp</a></li>
                        <li><a href="LoaiLoplist.php">Danh Sách Khối Lớp</a></li>
                    </ul>
                </li>
                <li class="admin-content-left-li"><a><ion-icon name="body-outline"></ion-icon> HỌC SINH</a>
                    <ul>
                        <li><a href="HocSinhAdd.php">Thêm Học Sinh</a></li>
                        <li><a href="HocSinhlist.php">Danh Sách Học Sinh</a></li>
                    </ul>
                </li>
                <li class="admin-content-left-li"><a><ion-icon name="person-outline"></ion-icon> PHỤ HUYNH HỌC SINH</a>
                    <ul>
                        <li><a href="PhuHuynhAdd.php">Thêm</a></li>
                        <li><a href="PhuHuynhlist.php">Danh Sách</a></li>
                    </ul>
                </li>
                
                <li class="admin-content-left-li"><a> <ion-icon name="newspaper-outline"></ion-icon> THỰC ĐƠN</a>
                    <ul>
                        <li><a href="MenuAdd.php">Thêm Thực Đơn</a></li>
                        <li><a href="Menulist.php">Danh Sách</a></li>
                    </ul>
                </li>
                <li class="admin-content-left-li"><a><ion-icon name="library-outline"></ion-icon> KHÓA HỌC</a>
                    <ul>
                        <li><a href="KhoanThuAdd.php">Thêm</a></li>
                        <li><a href="KhoanThulist.php">Danh Sách</a></li>
                    </ul>
                </li>
                <li class="admin-content-left-li"><a><ion-icon name="reader-outline"></ion-icon> HÓA ĐƠN</a>
                    <ul>
                        <li><a href="order.php">Danh Sách</a></li>
                    </ul>
                </li>
                <li class="admin-content-left-li"><a><ion-icon name="medkit-outline"></ion-icon> SỨC KHỎE</a>
                    <ul>
                        <li><a href="SucKhoe.php">Thêm</a></li>
                        <li><a href="SucKhoelist.php">Quản Lý Sổ</a></li>
                    </ul>
                </li>
                <li class="admin-content-left-li"><a><ion-icon name="notifications-outline"></ion-icon> THÔNG BÁO</a>
                    <ul>
                        <li><a href="ThongBaoAdd.php">Thêm</a></li>
                        <li><a href="ThongBaolist.php">Liệt Kê</a></li>
                    </ul>
                </li>
                <li class="admin-content-left-li"><a><ion-icon name="images-outline"></ion-icon> ẢNH SINH HOẠT</a>
                    <ul>
                        <li><a href="AddHinhAnh.php">Thêm</a></li>
                        <li><a href="ListHinhAnh.php">Danh Sách</a></li>
                    </ul>
                </li>
                <li class="admin-content-left-li"><a><ion-icon name="mail-unread-outline"></ion-icon> Ý KIẾN PH</a>
                    <ul>
                        <li><a href="PhanHoilist.php">Danh Sách</a></li>
                    </ul>
                </li>
                <li class="admin-content-left-li"><a><ion-icon name="calendar-number-outline"></ion-icon> NĂM HỌC</a>
                    <ul>
                        <li><a href="AddNamHoc.php">Thêm</a></li>
                    </ul>
                </li>
            </ul>
        </div>
<script>
    const itemsliderbar = document.querySelectorAll(".admin-content-left-li");
    itemsliderbar.forEach(function(menu,index){
    menu.addEventListener("click",function(){
    menu.classList.toggle("block")
    })
})
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- <script>
    let list = document.querySelectorAll('.admin-content-left-li');
    for (let i=0; i<list.length; i++){
        list[i].onclick = function(){
            
            let j = 0;
            while(j < list.length){
                list[j++].className = 'admin-content-left-li';
            }
            
            list[i].className = 'li-home';
            
            
        }
    }
</script> -->

<!-- <script>
    let menuToggle = document.querySelector('.toggle');
    menuToggle.onclick = function(){
        menuToggle.classList.toggle('active')
    }
</script> -->
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: black;
    outline: none;
}
a{
    text-decoration: none;
}
ul {
    list-style: none;
}
.admin-content {
    padding-top: 0;
    display: flex;
}
.admin-content-left {
    background-color: #F5F5F5;
    width: 20%;
    height: 100vh;
    padding: 25px 0 0 0px;
    border-radius:50px;
    margin-left:10px;
    margin-top:20px;
    margin-bottom:20px;
}
.admin-content-left-li ul{
    display: none;
    }
.admin-content-left-li.block ul {
    display: block; 
    }
.admin-content-left> ul>li>a {
    font-weight: bold;
    position:relative;
    display:block;
    cursor: pointer;
}
.admin-content-left> ul>li>a:hover{
    text-decoration: underline;
}
.admin-content-left> ul>li>a ion-icon {
    font-size:1.05em;
    margin-right:10px;
    color:#606060;
}
.admin-content-left ul li {
    margin: 20px 0;
    padding-left:20px;
    
}

.admin-content-left ul ul {
    margin-left: 12px;
}
.admin-content-left-li > a{
    font-size:18px;
    color:#822e3d;
}
.admin-content-left-li > ul > li > a:hover{
    color:#822e3d;
    text-decoration:underline;
}
.admin-content-right {
    width: 80%;
    padding: 30px 0 0 12px;
}
.admin-content-right-cartegory_add input {
    height: 30px;
    width: 200px;
    padding-left: 12px;
    margin-top: 20px;
}
.admin-content-right-cartegory_add button {
    display: block;
    margin-top: 10px;
    height: 30px;
    width: 100px;
    cursor: pointer;
    background-color: rgb(136, 58, 84);
    color: white;
    border: none;
    transition: all 0.3s ease;
}
.admin-content-right-cartegory_add button:hover {
    background-color: #ddd;
    color:  rgb(136, 58, 84);
    border: 2px solid  rgb(136, 58, 84);
}
.admin-content-right-cartegory-list table {
    width: 100%;
    text-align: center;
    margin-top: 20px;
}
.admin-content-right-cartegory-list table tr th,td {
    border: 1px solid #ddd;
}
.admin-content-right-cartegory-list table tr td a {
    color:  red;
} 
.admin-content-right-cartegory-list table tr td a:hover {
    text-decoration: underline;
}
table {
    border-collapse: collapse;
}
table tr th {
    font-family: serif;
    font-size:18px;
    background-color:#F8F8F8;
}
table, th, td{
    border-top:1px solid #ccc;
    border-bottom:1px solid #ccc;
}
th, td{
    text-align:center;
    padding:10px;
}
.li-home{
    background:#E8E8E8;
    border-bottom-right-radius:20px;
    border-top-right-radius:20px;
    height:40px;
    width:20%;
}
.li-home a {
    font-size:18px;
    color:#0c3063;
    padding-top:10px;
    
}
.li-home a ion-icon:hover {
    color:red;   
}
.li-home > a > ion-icon{
    font-size:1.05em;
    margin-right:7px;
}
/* .toggle{
    position:fixed;
    height:50px;
    width:50px;
    background:red;
    border-radius:10px;
    cursor: pointer;
    display:fixed;
    justify-content: center;
    align-items:center;
}
.toggle.active{
    background:#000;
}
.toggle ion-icon{
    position:absolute;
    color:#fff;
    font-size:30px;
    display:none;
}
.toggle ion-icon.open,
.toggle.active ion-icon.close{
    display:block;
}
.toggle ion-icon.close,
.toggle.active ion-icon.open{
    display:none;
} */
/*----------------------------------------------------------*/
.admin-content-right-product_add input,select {
    width: 200px;
    height: 30px;
    display: block;
    margin: 6px 12px;
    padding-left: 12px;
}
.admin-content-right-product_add textarea {
    display: block;
    height: 200px;
    width: 500px;
    margin-bottom: 12px;
    padding: 12px;
}
.admin-content-right-product_add button {
    display: block;
    margin-top: 10px;
    margin-bottom: 50px;
    height: 30px;
    width: 100px;
    cursor: pointer;
    background-color: rgb(136, 58, 84);
    color: white;
    border: none;
    transition: all 0.3s ease;
}
.admin-content-left{
    background-image:url("../img/609cb4d1b2dbabc4bbde0ea75147b094.jpg");
    background-size:cover;
}
</style>

