<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../helpers/format.php');
?>


<?php
class PhuHuynh{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
        $this -> fm = new Format();
    }

    public function show_PhuHuynh(){
        $query = "SELECT * FROM phuhuynh";
        $result = $this -> db ->select($query);
        return $result;
    }
    

    
    public function get_PhuHuynh($phuhuynh_id){
        $query = "SELECT * FROM phuhuynh WHERE MaPH = '$phuhuynh_id'";
        $result = $this -> db ->select($query);
        return $result;
    }



    public function insert_PhuHuynh($_post){
        $phuhuynh_id = $_POST['MaPH'];
        $phuhuynh_name = $_POST['TenPH'];
        $phuhuynh_ns = $_POST['NamSinh'];
        $phuhuynh_nghe = $_POST['NgheNghiep'];
        $phuhuynh_congtac = $_POST['NoiCongTac'];
        $phuhuynh_diachi = $_POST['DiaChiThuongTru'];
        $phuhuynh_mail = $_POST['Email'];
        $phuhuynh_pass = $_POST['MatKhau'];

        $query = "INSERT INTO phuhuynh(
            MaPH,
            TenPH,
            NamSinh,
            NgheNghiep,
            NoiCongTac,
            DiaChiThuongTru,
            Email,
            MatKhau) 
            VALUES (
                    '$phuhuynh_id',
                    '$phuhuynh_name',
                    '$phuhuynh_ns',
                    '$phuhuynh_nghe',
                    '$phuhuynh_congtac',
                    '$phuhuynh_diachi',
                    '$phuhuynh_mail',
                    '$phuhuynh_pass')";
        $result = $this -> db ->insert($query);
        //header('Location:Loplist.php');
        return $result;
    }

    public function update_PhuHuynh($post, $phuhuynh_id){
        $phuhuynh_name = $_POST['TenPH'];
        $phuhuynh_ns = $_POST['NamSinh'];
        $phuhuynh_nghe = $_POST['NgheNghiep'];
        $phuhuynh_congtac = $_POST['NoiCongTac'];
        $phuhuynh_diachi = $_POST['DiaChiThuongTru'];
        $phuhuynh_mail = $_POST['Email'];
        $phuhuynh_pass = $_POST['MatKhau'];
       
        $query = "UPDATE phuhuynh SET 
            TenPH = '$phuhuynh_name',
            NamSinh = '$phuhuynh_ns',
            NgheNghiep = '$phuhuynh_nghe',
            NoiCongTac = '$phuhuynh_congtac',
            DiaChiThuongTru = '$phuhuynh_diachi',
            Email = '$phuhuynh_mail',
            MatKhau = '$phuhuynh_pass'

            WHERE MaPH = '$phuhuynh_id' ";

        $result = $this -> db ->update($query);
        //header('Location:productlist.php');
        return $result;
    }


    public function get_PHbyID($phuhuynh_id){
        $query = "SELECT * FROM phuhuynh WHERE MaPH = '$phuhuynh_id'";
        $result = $this -> db ->select($query);
        return $result;
    }

    public function get_HocSinhByMaPH($phuhuynh_id){
        $query = "SELECT phuhuynh.*, hocsinh.*
        FROM hocsinh 
        INNER JOIN phuhuynh ON hocsinh.MaPH = phuhuynh.MaPH 
        WHERE hocsinh.MaPH = '$phuhuynh_id'";

        $result = $this -> db ->select($query);
        return $result;
    }

    // // public function update_cartegory($cartegory_name, $cartegory_id){
    // //     $query = "UPDATE loaihh SET TenLoaiHH = '$cartegory_name' WHERE MaLoaiHH = '$cartegory_id'";
    // //     $result = $this -> db ->update($query);
    // //     header('Location:cartegorylist.php');
    // //     return $result;
    // // }

    public function delete_PhuHuynh($phuhuynh_id){
        $query = "DELETE FROM phuhuynh WHERE MaPH = '$phuhuynh_id'";
        $result = $this -> db ->delete($query);
        header('Location:PhuHuynhlist.php');
        return $result;
    }

    public function login_PhuHuynh($data){
        $maso = mysqli_real_escape_string($this->db->link, $data['MaPH']);
        $pass = mysqli_real_escape_string($this->db->link, $data['MatKhau']);

        if($maso=="" || $pass=="" ){
            $alert = "<span style='color:red;' class= 'error'>Mật Khẩu và Tên Đăng Nhập không được trống!!!</span>";
            return $alert;
        }   else {
               $check_login = "SELECT * FROM phuhuynh WHERE MaPH='$maso' AND MatKhau = '$pass'";
               $result_check = $this->db->select($check_login);
               if($result_check != false){
                   $value = $result_check->fetch_assoc();
                  Session::set('customer_login', true);
                  Session::set('customer_id', $value['MaPH']);
                  Session::set('customer_name', $value['TenPH']);
                  header('Location:index_PH.php');

               }else {
                $alert = "<span style='color:red;' class='error'> *** Tên Đăng Nhập hoặc Mật Khẩu Sai ***</span>";
                return $alert;  
                }   
            }
    }

}
?>