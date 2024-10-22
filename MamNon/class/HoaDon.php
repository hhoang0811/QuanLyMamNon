<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
?>


<?php
class HoaDon{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    
    

    public function get_HoaDon($SoHD){
        $query = "SELECT hoadon.*, phuhuynh.MaPH, phuhuynh.TenPH, khoanthu.MaKhoanThu, khoanthu.TenKhoanThu, hocsinh.MaHS, hocsinh.TenHS, hocsinh.MaLop 
        FROM hoadon 
        INNER JOIN hocsinh 
        ON hocsinh.MaPH = hoadon.MaPH 
        INNER JOIN phuhuynh 
        ON phuhuynh.MaPH = hoadon.MaPH 
        INNER JOIN khoanthu 
        ON khoanthu.MaKhoanThu = hoadon.MaKhoanThu 
        WHERE SoHD = '$SoHD'
        ORDER BY hoadon.NgayLap DESC";

        $result = $this -> db ->select($query);
        return $result;
    }

}
?>