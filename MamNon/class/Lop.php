<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
?>


<?php
class Lop{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    public function show_LoaiLop(){
        $query = "SELECT * FROM loailop ORDER BY MaLoaiLop DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function show_namhoc(){
        $query = "SELECT * FROM namhoc ORDER BY NamHoc DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    

    public function show_Lop(){
        $query = "SELECT lop.*, loailop.TenLoaiLop 
        FROM lop 
        INNER JOIN loailop 
        ON lop.MaLoaiLop = loailop.MaLoaiLop 
        ORDER BY lop.MaLop DESC";

        $result = $this -> db ->select($query);
        return $result;
    }
    public function get_lop($lop_id){
        $query = "SELECT * FROM lop WHERE MaLop = '$lop_id'";
        $result = $this -> db ->select($query);
        return $result;
    }

    public function get_LopListByLoaiLopId($loailop_id){
        $query = "SELECT * FROM lop WHERE MaLoaiLop = '$loailop_id'";
        $result = $this -> db ->select($query);
        return $result;
    }

    public function insert_lop($_post){
        $lop_name = $_POST['TenLop'];
        $lop_siso = $_POST['SiSo'];
        $loailop_id = $_POST['MaLoaiLop'];
        $lop_namhoc = $_POST['NamHoc'];

        $query = "INSERT INTO lop(
            TenLop,
            SiSo,
            MaLoaiLop,
            NamHoc) 
            VALUES (
                    '$lop_name',
                    '$lop_siso',
                    '$loailop_id',
                    '$lop_namhoc')";
        $result = $this -> db ->insert($query);
        //header('Location:Loplist.php');
        return $result;
    }

    public function update_Lop($post, $lop_id){
        $lop_name = $_POST['TenLop'];
        $lop_siso = $_POST['SiSo'];
        $loailop_id = $_POST['MaLoaiLop'];
        $lop_namhoc = $_POST['NamHoc'];
       
        $query = "UPDATE lop SET 
            TenLop = '$lop_name',
            SiSo = '$lop_siso',
            MaLoaiLop = '$loailop_id',
            NamHoc = '$lop_namhoc'

            WHERE MaLop = '$lop_id' ";

        $result = $this -> db ->update($query);
        //header('Location:productlist.php');
        return $result;
    }





    









    // public function get_LopByID($lop_id){
    //     $query = "SELECT * FROM lop WHERE MaLop = '$lop_id'";
    //     $result = $this -> db ->select($query);
    //     return $result;
    // }

    // // public function update_cartegory($cartegory_name, $cartegory_id){
    // //     $query = "UPDATE loaihh SET TenLoaiHH = '$cartegory_name' WHERE MaLoaiHH = '$cartegory_id'";
    // //     $result = $this -> db ->update($query);
    // //     header('Location:cartegorylist.php');
    // //     return $result;
    // // }

    public function delete_Lop($lop_id){
        $query = "DELETE FROM lop WHERE MaLop = '$lop_id'";
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

    public function get_LopByLoaiLop($lop_id){
        $query = "SELECT lop.*, loailop.TenLoaiLop
        FROM lop 
        INNER JOIN loailop ON lop.MaLoaiLop = loailop.MaLoaiLop 
        WHERE lop.MaLop = '$lop_id'";

        $result = $this -> db ->select($query);
        return $result;
    }

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