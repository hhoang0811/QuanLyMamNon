<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../helpers/format.php');
?>


<?php
class Menu{
    private $db;
    private $fm;

    public function __construct()
    {
        $this -> db = new Database();
        $this -> fm = new Format();
    }

    public function insert_Menu($_post){
        $date = $_POST['Ngay'];
        $loailop_id = $_POST['MaLoaiLop'];
        $menu_sang = $_POST['Sang'];
        $menu_trua = $_POST['Trua'];
        $menu_chieu = $_POST['Chieu'];

        $query = "INSERT INTO thucdon(
            Ngay,
            MaLoaiLop,
            Sang,
            Trua,
            Chieu) 
            VALUES (
                    '$date',
                    '$loailop_id',
                    '$menu_sang',
                    '$menu_trua',
                    '$menu_chieu')";
        $result = $this -> db ->insert($query);
        //header('Location:productlist.php');
        return $result;
    }

    public function show_Food(){
        $query = "SELECT * FROM monan ORDER BY MaMon DESC";
        $result = $this -> db ->select($query);
        return $result;
    }

    public function show_Menu(){
        $query = "SELECT thucdon.*, loailop.TenLoaiLop
        FROM thucdon 
        INNER JOIN loailop 
        ON thucdon.MaLoaiLop = loailop.MaLoaiLop         
        ORDER BY thucdon.id DESC";

        $result = $this -> db ->select($query);
        return $result;
    }

    public function get_Menu($menu_id){
        $query = "SELECT * FROM thucdon WHERE id = '$menu_id'";
        $result = $this -> db ->select($query);
        return $result;
    }


    public function show_LoaiLop(){
        $query = "SELECT * FROM loailop ORDER BY MaLoaiLop DESC";
        $result = $this -> db ->select($query);
        return $result;
    }

    public function update_Menu($post, $menu_id){
        
        $date = $_POST['Ngay'];
        $loailop_id = $_POST['MaLoaiLop'];
        $menu_sang = $_POST['Sang'];
        $menu_trua = $_POST['Trua'];
        $menu_chieu = $_POST['Chieu'];

        $query = "UPDATE thucdon SET 
            Ngay = '$date',
            MaLoaiLop = '$loailop_id',
            Sang = '$menu_sang',
            Trua = '$menu_trua',
            Chieu = '$menu_chieu'
            
            WHERE id='$menu_id'";

        $result = $this -> db ->update($query);
        //header('Location:Foodlist.php');
        return $result;
    }

    public function delete_Menu($menu_id){
        $query = "DELETE FROM thucdon WHERE id = '$menu_id'";
        $result = $this -> db ->delete($query);
        header('Location:Menulist.php');
        return $result;
    }
}