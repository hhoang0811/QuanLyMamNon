<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../helpers/format.php');
?>


<?php
class LoaiLop{
    private $db;
    private $fm;

    public function __construct()
    {
        $this -> db = new Database();
        $this -> fm = new Format();
    }

    public function insert_LoaiLop ($loaiLop_name){
        $query = "INSERT INTO loailop(TenLoaiLop) VALUES ('$loaiLop_name')";
        $result = $this -> db ->insert($query);
        // header('Location:LoaiLoplist.php');
        return $result;
    }

    public function show_LoaiLop(){
        $query = "SELECT * FROM loailop ORDER BY MaLoaiLop DESC";
        $result = $this -> db ->select($query);
        return $result;
    }

    public function get_loailop($loailop_id){
        $query = "SELECT * FROM loailop WHERE MaLoaiLop = '$loailop_id'";
        $result = $this -> db ->select($query);
        return $result;
    }

    

    public function update_loailop($loailop_name, $loailop_id){
        $query = "UPDATE loailop SET TenLoaiLop = '$loailop_name' WHERE MaLoaiLop = '$loailop_id'";
        $result = $this -> db ->update($query);
        // header('Location:LoaiLoplist.php');
        return $result;
    }

    public function delete_loailop($loailop_id){
        $query = "DELETE FROM loailop WHERE MaLoaiLop = '$loailop_id'";
        $result = $this -> db ->delete($query);
        header('Location:LoaiLoplist.php');
        return $result;
    }
}