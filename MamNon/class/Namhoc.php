<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../helpers/format.php');
?>


<?php
class NamHoc{
    private $db;
    private $fm;

    public function __construct()
    {
        $this -> db = new Database();
        $this -> fm = new Format();
    }

    public function insert_namhoc($namhoc_name, $khaigiang){
        $namhoc_name = $_POST['NamHoc'];
        $khaigiang = $_POST['NgayKhaiGiang'];
        $query = "INSERT INTO namhoc(NamHoc, NgayKhaiGiang) VALUES ('$namhoc_name', '$khaigiang')";
        $result = $this -> db ->insert($query);
        // header('Location:LoaiLoplist.php');
        return $result;
    }

    public function show_namhoc(){
        $query = "SELECT * FROM namhoc ORDER BY NamHoc DESC";
        $result = $this -> db ->select($query);
        return $result;
    }

    public function get_namhoc($namhoc_id){
        $query = "SELECT * FROM namhoc WHERE NamHoc = '$namhoc_id'";
        $result = $this -> db ->select($query);
        return $result;
    }

    public function update_namhoc($ngaykhaigiang, $namhoc_id){
        $query = "UPDATE namhoc SET NgayKhaiGiang = '$ngaykhaigiang' WHERE NamHoc = '$namhoc_id'";
        $result = $this -> db ->update($query);
        return $result;
    }

    public function delete_namhoc($namhoc_id){
        $query = "DELETE FROM namhoc WHERE NamHoc = '$namhoc_id'";
        $result = $this -> db ->delete($query);
        header('Location:NamHoclist.php');
        return $result;
    }

}