<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
?>


<?php
class PhanHoi{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    public function show_phanhoi(){
        $query = "SELECT * FROM phanhoi ORDER BY id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    
    public function get_phanhoi($id){
        $query = "SELECT * FROM phanhoi WHERE id = '$id'";
        $result = $this -> db ->select($query);
        return $result;
    }


    public function insert_phanhoi($_post){
        $noidung = $_POST['NoiDung'];

        $query = "INSERT INTO phanhoi(
            NoiDung) 
            VALUES (
                    '$noidung')";
        $result = $this -> db ->insert($query);
        //header('Location:Loplist.php');
        if($result){
            $mes = "<span style='color:#696969;font-family:'Times New Roman', Times, serif;'>Cám ơn quý phụ huynh đã đóng góp!</span>";
        return $mes;
        }else{
            $mes = "<span style='color:red;'>Không Thành Công</span>";
        return $mes;
        }
    }



    public function delete_phanhoi($id){
        $query = "DELETE FROM phanhoi WHERE id = '$id'";
        $result = $this -> db ->delete($query);
        header('Location:PhanHoilist.php');
        return $result;
    }

}
?>