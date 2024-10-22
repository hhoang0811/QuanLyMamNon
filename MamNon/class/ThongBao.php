<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
?>


<?php
class ThongBao{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    public function show_thongbao(){
        $query = "SELECT * FROM thongbao ORDER BY id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    
    public function get_thongbao($id){
        $query = "SELECT * FROM thongbao WHERE id = '$id'";
        $result = $this -> db ->select($query);
        return $result;
    }


    public function insert_thongbao($_post){
        $thongbao_date = $_POST['Ngay'];
        $thongbao_CD = $_POST['ChuDe'];
        $thongbao_ND = $_POST['NoiDung'];

        $query = "INSERT INTO thongbao(
            Ngay,
            ChuDe,
            NoiDung) 
            VALUES (
                    '$thongbao_date',
                    '$thongbao_CD',
                    '$thongbao_ND')";
        $result = $this -> db ->insert($query);
        //header('Location:Loplist.php');
        return $result;
    }

    public function update_thongbao($post, $id){
        $thongbao_date = $_POST['Ngay'];
        $thongbao_CD = $_POST['ChuDe'];
        $thongbao_ND = $_POST['NoiDung'];
       
        $query = "UPDATE thongbao SET 
            Ngay = '$thongbao_date',
            ChuDe = '$thongbao_CD',
            NoiDung = '$thongbao_ND'

            WHERE id = '$id' ";

        $result = $this -> db ->update($query);
        //header('Location:ThongBaolist.php');
        return $result;
    }


    public function delete_thongbao($id){
        $query = "DELETE FROM thongbao WHERE id = '$id'";
        $result = $this -> db ->delete($query);
        header('Location:ThongBaolist.php');
        return $result;
    }

}
?>