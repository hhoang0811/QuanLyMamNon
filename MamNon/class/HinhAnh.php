<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
?>


<?php
class HinhAnh{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    public function show_Anh(){
        $query = "SELECT * FROM hinhanh";

        $result = $this -> db ->select($query);
        return $result;
    }


    public function show_HinhAnh(){
        $query = "SELECT * FROM hinhanh ORDER BY id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    
    public function insert_Anh($_post, $_files){
        
        $Ngaypost = $_POST['Ngay'];
        $mota = $_POST['MoTa'];
        
        $filename = $_FILES['Anh']['name'];
        $permited = array('jpg','jpeg','png','gif');
        $filetmp = $_FILES['Anh']['tmp_name'];

        $div = explode ('.', $filename);
        $file_ext = strtolower (end($div));
        $Anh = substr (md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_img = "uploads/".$Anh;
        move_uploaded_file($filetmp,$uploaded_img);
        $query = "INSERT INTO hinhanh(
           Ngay,
           MoTa,
           Anh) 
            VALUES (
                    '$Ngaypost',
                    '$mota',
                    '$Anh')";
        $result = $this -> db ->insert($query);
        
        
        return $result;
    }
    


    public function delete_Anh($anh_id){
        $query = "DELETE FROM hinhanh WHERE id = '$anh_id'";
        $result = $this -> db ->delete($query);
        header('Location:HinhAnhlist.php');
        return $result;
    }



}
?>