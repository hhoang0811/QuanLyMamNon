<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
?>


<?php
class KhoanThu{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    // public function show_LoaiLop(){
    //     $query = "SELECT * FROM loailop ORDER BY MaLoaiLop DESC";
    //     $result = $this -> db ->select($query);
    //     return $result;
    // }
    public function show_KhoanThu(){
        $query = "SELECT * FROM khoanthu ORDER BY MaKhoanThu DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    

    // public function show_KhoanThu(){
    //     $query = "SELECT lop.*, loailop.TenLoaiLop 
    //     FROM lop 
    //     INNER JOIN loailop 
    //     ON lop.MaLoaiLop = loailop.MaLoaiLop 
    //     ORDER BY lop.MaLop DESC";

    //     $result = $this -> db ->select($query);
    //     return $result;
    // }
    public function get_KhoanThu($khoanthu_id){
        $query = "SELECT * FROM khoanthu WHERE MaKhoanThu = '$khoanthu_id'";
        $result = $this -> db ->select($query);
        return $result;
    }


    public function insert_KhoanThu($_post){
        $khoanthu_name = $_POST['TenKhoanThu'];
        $khoanthu_price = $_POST['Gia'];
        $khoanthu_desc = $_POST['MoTa'];

        $query = "INSERT INTO khoanthu(
            TenKhoanThu,
            Gia,
            MoTa) 
            VALUES (
                    '$khoanthu_name',
                    '$khoanthu_price',
                    '$khoanthu_desc')";
        $result = $this -> db ->insert($query);
        //header('Location:Loplist.php');
        return $result;
    }

    public function update_KhoanThu($post, $khoanthu_id){
        $khoanthu_name = $_POST['TenKhoanThu'];
        $khoanthu_price = $_POST['Gia'];
        $khoanthu_desc = $_POST['MoTa'];
       
        $query = "UPDATE khoanthu SET 
            TenKhoanThu = '$khoanthu_name',
            Gia = '$khoanthu_price',
            MoTa = '$khoanthu_desc'

            WHERE MaKhoanThu = '$khoanthu_id' ";

        $result = $this -> db ->update($query);
        //header('Location:productlist.php');
        return $result;
    }





    









    public function get_LopByID($lop_id){
        $query = "SELECT * FROM lop WHERE MaLop = '$lop_id'";
        $result = $this -> db ->select($query);
        return $result;
    }

    // // public function update_cartegory($cartegory_name, $cartegory_id){
    // //     $query = "UPDATE loaihh SET TenLoaiHH = '$cartegory_name' WHERE MaLoaiHH = '$cartegory_id'";
    // //     $result = $this -> db ->update($query);
    // //     header('Location:cartegorylist.php');
    // //     return $result;
    // // }

    public function delete_KhoanThu($khoanthu_id){
        $query = "DELETE FROM khoanthu WHERE MaKhoanThu = '$khoanthu_id'";
        $result = $this -> db ->delete($query);
        header('Location:Loplist.php');
        return $result;
    }

    // //font-end-
    // public function getproduct_all (){
    //     $query = "SELECT * FROM hanghoa order by MSHH DESC";
    //     $result = $this -> db ->select($query);
    //     return $result;
    // }

    // public function getdetails($product_id){
    //     $query = "SELECT hanghoa.*, loaihh.TenLoaiHH
    //     FROM hanghoa 
    //     INNER JOIN loaihh ON hanghoa.MaLoaiHH = loaihh.MaLoaiHH 
    //     WHERE hanghoa.MSHH = '$product_id'";

    //     $result = $this -> db ->select($query);
    //     return $result;
    // }

    // public function getImg($product_id){
    //     $query = "SELECT hanghoa.*, hinhhh.TenHinh
    //     FROM hanghoa 
    //     INNER JOIN hinhhh ON hanghoa.MSHH = hinhhh.MSHH 
    //     WHERE hanghoa.MSHH = '$product_id'";

    //     $result = $this -> db ->select($query);
    //     return $result;
    // }

    // public function getSize($product_id){
    //     $query = "SELECT hanghoa.*, size.TenSize
    //     FROM hanghoa 
    //     INNER JOIN size ON hanghoa.MSHH = size.MSHH 
    //     WHERE hanghoa.MSHH = '$product_id'";

    //     $result = $this -> db ->select($query);
    //     return $result;
    // } 

}
?>