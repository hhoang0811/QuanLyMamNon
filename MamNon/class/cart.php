<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../helpers/format.php');
?>


<?php
class cart{
    private $db;
    private $fm;

    public function __construct()
    {
        $this -> db = new Database();
        $this -> fm = new Format();
    }

    public function add_cart($khoanthu_id){
        $khoanthu_id = mysqli_real_escape_string($this->db->link, $khoanthu_id);
        $sid = session_id();

        $query = "SELECT * FROM khoanthu WHERE MaKhoanThu = '$khoanthu_id'";
        $result = $this->db->select($query)->fetch_assoc();

        
        $TenKT = $result['TenKhoanThu'];
        $Gia = $result['Gia'];
        $kt_decs = $result['MoTa'];

        $query_insert = "INSERT INTO cart (MaKhoanThu, sid, TenKhoanThu, Gia, MoTa)
            VALUES ('$khoanthu_id','$sid','$TenKT', '$Gia','$kt_decs')";
        $insert_cart = $this -> db ->insert($query_insert);
        if($insert_cart){
            header("Location:cart.php");
        }else{
            header("Location:404.php");
        }
        return $insert_cart; 
    }
    
    public function get_cart(){
        $sid = session_id();
        $query = "SELECT * FROM cart WHERE sid = '$sid'";

        $result = $this->db->select($query);
        return $result;
    }

    public function check_cart(){
        $sid = session_id();
        $query = "SELECT * FROM cart WHERE sid = '$sid'";

        $result = $this->db->select($query);
        return $result;
    }

    public function delete_cart($Cart_id){
        $Cart_id = mysqli_real_escape_string($this->db->link, $Cart_id);
        $query = "DELETE FROM cart WHERE Cart_id = '$Cart_id'";

        $result = $this->db->delete($query);
        if($result){
            header('Location:cart.php');
        }else{
            $mes = "<span style='color:red;'>Xóa Không Thành Công</span>";
            return $mes;
        }
    }

    public function delete_all_cart(){
        $sid = session_id();
        $query = "DELETE FROM cart WHERE sid = '$sid'";

        $result = $this->db->delete($query);
        return $result;
    }

    public function check_order($MaPH){
        $sid = session_id();
        $query = "SELECT * FROM hoadon WHERE MaPH = '$MaPH'";

        $result = $this->db->select($query);
        return $result;
    }




    public function insert_order($MaPH){
        $sid = session_id();
        $query = "SELECT * FROM cart WHERE sid = '$sid'";

        $get_KhoaHoc = $this->db->select($query);
        if($get_KhoaHoc){
            while($result = $get_KhoaHoc->fetch_assoc()){
                $MaPH = $MaPH;
                $khoahoc_id = $result['MaKhoanThu'];
                $khoahoc_name = $result['TenKhoanThu'];
                $khoahoc_gia = $result['Gia'];

                $query_order = "INSERT INTO hoadon (MaPH, MaKhoanThu, TenKhoanThu, TongHD)
                VALUES ('$MaPH','$khoahoc_id','$khoahoc_name','$khoahoc_gia')";
                $insert_order = $this -> db ->insert($query_order);
            }
        }
    } 


    public function getAmountPrice($MaPH){
        $query = "SELECT TongHD FROM hoadon WHERE MaPH = '$MaPH'";
        $get_price = $this->db->select($query);

        return $get_price;
    }

    public function get_cart_ordered($MaPH){
        $query = "SELECT * FROM hoadon WHERE MaPH = '$MaPH'";
        $get_cart_ordered = $this->db->select($query);

        return $get_cart_ordered;
    }


    public function get_order_cart(){
        $query = "SELECT hoadon.*, phuhuynh.MaPH, phuhuynh.TenPH, khoanthu.MaKhoanThu, khoanthu.TenKhoanThu, hocsinh.MaHS, hocsinh.TenHS, hocsinh.MaLop 
        FROM hoadon 
        INNER JOIN hocsinh 
        ON hocsinh.MaPH = hoadon.MaPH 
        INNER JOIN phuhuynh 
        ON phuhuynh.MaPH = hoadon.MaPH 
        INNER JOIN khoanthu 
        ON khoanthu.MaKhoanThu = hoadon.MaKhoanThu 
        
        ORDER BY hoadon.NgayLap";

        $get_order_cart = $this->db->select($query);
        return $get_order_cart;
    }

    public function Shiftid($SoHD,$datetime,$price){
        $SoHD = mysqli_real_escape_string($this->db->link, $SoHD);
        $datetime = mysqli_real_escape_string($this->db->link, $datetime);
        $price = mysqli_real_escape_string($this->db->link, $price);

        $query = "UPDATE hoadon SET Trangthai = '2'
        Where SoHD = '$SoHD' AND NgayLap = '$datetime' AND TongHD = '$price'";
        $result = $this->db->update($query);
        if($result){
            $mes = "<span style='color:green;'>Đã Nhận Học Phí!</span>";
        return $mes;
        }else{
            $mes = "<span style='color:red;'>Không Thành Công</span>";
        return $mes;
        }
    }

    public function del_id($SoHD,$datetime,$price){
        $SoHD = mysqli_real_escape_string($this->db->link, $SoHD);
        $datetime = mysqli_real_escape_string($this->db->link, $datetime);
        $price = mysqli_real_escape_string($this->db->link, $price);

        $query = "DELETE FROM hoadon
        Where SoHD = '$SoHD' AND NgayLap = '$datetime' AND TongHD = '$price'";
        $result = $this->db->delete($query);
        if($result){
            $mes = "<span style='color:green;'>Đã Xóa</span>";
        return $mes;
        }else{
            $mes = "<span style='color:red;'>Không Thành Công</span>";
        return $mes;
        }
    }

    public function Xacnhan($MaPH,$datetime,$price){
        $MaPH = mysqli_real_escape_string($this->db->link, $MaPH);
        $datetime = mysqli_real_escape_string($this->db->link, $datetime);
        $price = mysqli_real_escape_string($this->db->link, $price);

        $query = "UPDATE hoadon SET Trangthai = '2'
        Where MaPH = '$MaPH' AND NgayLap = '$datetime' AND TongHD = '$price'";
        $result = $this->db->update($query);
    }
}
?>