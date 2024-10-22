<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
?>


<?php
class HocSinh{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    public function show_HocSinh(){
        $query = "SELECT hocsinh.*, loailop.TenLoaiLop, lop.TenLop, phuhuynh.TenPH, gioitinh.TenGT
        FROM hocsinh 
        INNER JOIN loailop 
        ON hocsinh.MaLoaiLop = loailop.MaLoaiLop 
        INNER JOIN lop 
        ON hocsinh.MaLop = lop.MaLop 
        INNER JOIN phuhuynh 
        ON hocsinh.MaPH = phuhuynh.MaPH
        INNER JOIN gioitinh 
        ON hocsinh.GioiTinh = gioitinh.id
        ORDER BY hocsinh.MaHS DESC";

        $result = $this -> db ->select($query);
        return $result;
    }

    public function show_HocSinhNam(){
        $query = "SELECT hocsinh.*, loailop.TenLoaiLop, lop.TenLop 
        FROM hocsinh
        
        INNER JOIN loailop 
        ON hocsinh.MaLoaiLop = loailop.MaLoaiLop 
        INNER JOIN lop 
        ON hocsinh.MaLop = lop.MaLop 
        WHERE hocsinh.GioiTinh = 0
        ORDER BY hocsinh.MaHS DESC";

        $result = $this -> db ->select($query);
        return $result;
    }

    public function show_HocSinhNu(){
        $query = "SELECT hocsinh.*, loailop.TenLoaiLop, lop.TenLop 
        FROM hocsinh
        
        INNER JOIN loailop 
        ON hocsinh.MaLoaiLop = loailop.MaLoaiLop 
        INNER JOIN lop 
        ON hocsinh.MaLop = lop.MaLop 
        WHERE hocsinh.GioiTinh = 1
        ORDER BY hocsinh.MaHS DESC";

        $result = $this -> db ->select($query);
        return $result;
    }

    public function sum_hs(){
        $query = "SELECT COUNT(MaHS) FROM hocsinh";

        $result = $this -> db ->select($query);
        return $result;
    }


    public function get_HocSinhListByMaLop($lop_id){
        $query = "SELECT hocsinh.*, loailop.TenLoaiLop, phuhuynh.TenPH 
        FROM hocsinh 
        INNER JOIN loailop 
        ON hocsinh.MaLoaiLop = loailop.MaLoaiLop 
        INNER JOIN phuhuynh 
        ON hocsinh.MaPH = phuhuynh.MaPH 
        WHERE MaLop = '$lop_id'
        ORDER BY hocsinh.MaHS DESC";

        $result = $this -> db ->select($query);
        return $result;
    }

    public function get_ssk($hs_id){
        $query = "SELECT * FROM theodoisuckhoe
        WHERE MaHS = '$hs_id'";
        $result = $this -> db ->select($query);
        return $result;
    }
    

    public function get_HS($hs_id){
        $query = "SELECT hocsinh.*, loailop.TenLoaiLop, lop.*, phuhuynh.TenPH 
        FROM hocsinh 
        INNER JOIN loailop 
        ON hocsinh.MaLoaiLop = loailop.MaLoaiLop 
        INNER JOIN lop 
        ON hocsinh.MaLop = lop.MaLop 
        INNER JOIN phuhuynh 
        ON hocsinh.MaPH = phuhuynh.MaPH 
        WHERE MaHS = '$hs_id'
        ORDER BY hocsinh.MaHS DESC";

        $result = $this -> db ->select($query);
        return $result;
    }

    public function show_GT(){
        $query = "SELECT * FROM gioitinh ORDER BY id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }


    public function insert_HocSinh($_post, $_files){
        $hs_id = $_POST['MaHS'];
        $hs_name = $_POST['TenHS'];
        $hs_sex = $_POST['GioiTinh'];
        $hs_Dtoc = $_POST['DanToc'];
        $hs_namsinh = $_POST['NamSinh'];
        $hs_NgayNH = $_POST['NgayNhapHoc'];
        $hs_loailop = $_POST['MaLoaiLop'];
        $hs_lop = $_POST['MaLop'];
        $hs_Phuhuynh = $_POST['MaPH'];
        $filename = $_FILES['AnhDaiDien']['name'];
        $permited = array('jpg','jpeg','png','gif');
        $filetmp = $_FILES['AnhDaiDien']['tmp_name'];

        $div = explode ('.', $filename);
        $file_ext = strtolower (end($div));
        $AnhDaiDien = substr (md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_img = "uploads/".$AnhDaiDien;
        move_uploaded_file($filetmp,$uploaded_img);

        $query = "INSERT INTO hocsinh(
            MaHS,
            TenHS,
            GioiTinh,
            DanToc,
            NamSinh,
            NgayNhapHoc,
            MaLoaiLop,
            MaLop,
            MaPH,
            AnhDaiDien) 
            VALUES (
                    '$hs_id',
                    '$hs_name',
                    '$hs_sex',
                    '$hs_Dtoc',
                    '$hs_namsinh',
                    '$hs_NgayNH',
                    '$hs_loailop',
                    '$hs_lop',
                    '$hs_Phuhuynh',
                    '$AnhDaiDien')";
        $result = $this -> db ->insert($query);
        //header('Location:productlist.php');
        return $result;
        if($result){
            $alert = "<span style='color:green;' class='success'>Thêm Thành Công</span>";
            return $alert;
            }else{
                $alert = "<span style='color:red;' class='error'> *** Thêm Không Thành Công ***</span>";
                return $alert;
            }  
        
    }



    public function update_HocSinh($_post, $_files, $hs_id){
        
        $hs_name = $_POST['TenHS'];
        $hs_sex = $_POST['GioiTinh'];
        $hs_Dtoc = $_POST['DanToc'];
        $hs_namsinh = $_POST['NamSinh'];
        $hs_NgayNH = $_POST['NgayNhapHoc'];
        $hs_loailop = $_POST['MaLoaiLop'];
        $hs_lop = $_POST['MaLop'];
        $hs_Phuhuynh = $_POST['MaPH'];
        $filename = $_FILES['AnhDaiDien']['name'];
        $permited = array('jpg','jpeg','png','gif');
        $filetmp = $_FILES['AnhDaiDien']['tmp_name'];

        $div = explode ('.', $filename);
        $file_ext = strtolower (end($div));
        $AnhDaiDien = substr (md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_img = "uploads/".$AnhDaiDien;
        move_uploaded_file($filetmp,$uploaded_img);

        if(!empty($filename)){
        $query = "UPDATE hocsinh SET
            
            TenHS = '$hs_name',
            GioiTinh = '$hs_sex',
            DanToc = '$hs_Dtoc',
            NamSinh = '$hs_namsinh',
            NgayNhapHoc = '$hs_NgayNH',
            MaLoaiLop = '$hs_loailop',
            MaLop = '$hs_lop',
            MaPH = '$hs_Phuhuynh',
            AnhDaiDien = '$AnhDaiDien' 
            
            WHERE MaHS = '$hs_id' ";
        }else {
            $query = "UPDATE hocsinh SET
            
            TenHS = '$hs_name',
            GioiTinh = '$hs_sex',
            DanToc = '$hs_Dtoc',
            NamSinh = '$hs_namsinh',
            NgayNhapHoc = '$hs_NgayNH',
            MaLoaiLop = '$hs_loailop',
            MaLop = '$hs_lop',
            MaPH = '$hs_Phuhuynh'
            
            WHERE MaHS = '$hs_id' ";
        }
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

    public function delete_HocSinh($hs_id){
        $query = "DELETE FROM hocsinh WHERE MaHS = '$hs_id'";
        $result = $this -> db ->delete($query);
        header('Location:HocSinhlist.php');
        return $result;
    }

    // //font-end-
    // public function getproduct_all (){
    //     $query = "SELECT * FROM hanghoa order by MSHH DESC";
    //     $result = $this -> db ->select($query);
    //     return $result;
    // }

    

    public function get_PHByMaHS($hs_id){
        $query = "SELECT hocsinh.*, phuhuynh.*
        FROM hocsinh 
        INNER JOIN phuhuynh ON hocsinh.MaPH = phuhuynh.MaPH 
        WHERE hocsinh.MaHS = '$hs_id'";

        $result = $this -> db ->select($query);
        return $result;
    }


}
?>