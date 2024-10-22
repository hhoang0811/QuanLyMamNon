<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
?>


<?php
class SucKhoe{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    public function show_ssk(){
        $query = "SELECT theodoisuckhoe.*, hocsinh.TenHS 
        FROM  theodoisuckhoe
        INNER JOIN hocsinh
        ON theodoisuckhoe.MaHS = hocsinh.MaHS 
        ORDER BY theodoisuckhoe.MaSo DESC";

        $result = $this -> db ->select($query);
        return $result;
    }
    
    public function get_ssk($ssk_id){
        $query = "SELECT theodoisuckhoe.*, hocsinh.TenHS 
        FROM  theodoisuckhoe
        INNER JOIN hocsinh
        ON theodoisuckhoe.MaHS = hocsinh.MaHS
        WHERE MaSo = '$ssk_id'";
        $result = $this -> db ->select($query);
        return $result;
    }



    public function insert_ssk($_post){
        $ssk_date = $_POST['Ngay'];
        $hs_id = $_POST['MaHS'];
        $ssk_chieucao = $_POST['ChieuCao'];
        $ssk_cannang = $_POST['CanNang'];
        $ssk_mat = $_POST['Mat'];
        $ssk_taimuihong = $_POST['TaiMuiHong'];
        $ssk_rang = $_POST['Rang'];
        $ssk_huyetap = $_POST['HuyetAp'];
        $ssk_ghichu = $_POST['GhiChu'];
        $ssk_ketluan = $_POST['KetLuan'];
        
        $query = "INSERT INTO theodoisuckhoe(
            Ngay,
            MaHS,
            ChieuCao,
            CanNang,
            Mat,
            TaiMuiHong,
            Rang,
            HuyetAp,
            GhiChu,
            KetLuan) 
            VALUES (
                    '$ssk_date',
                    '$hs_id',
                    '$ssk_chieucao',
                    '$ssk_cannang',
                    '$ssk_mat',
                    '$ssk_taimuihong',
                    '$ssk_rang',
                    '$ssk_huyetap',
                    '$ssk_ghichu',
                    '$ssk_ketluan')";
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


    public function update_ssk($post, $ssk_id){
        $ssk_date = $_POST['Ngay'];
        $hs_id = $post['MaHS'];
        $ssk_chieucao = $_POST['ChieuCao'];
        $ssk_cannang = $_POST['CanNang'];
        $ssk_mat = $_POST['Mat'];
        $ssk_taimuihong = $_POST['TaiMuiHong'];
        $ssk_rang = $_POST['Rang'];
        $ssk_huyetap = $_POST['HuyetAp'];
        $ssk_ghichu = $_POST['GhiChu'];
        $ssk_ketluan = $_POST['KetLuan'];
    
            $query = "UPDATE theodoisuckhoe SET 
            Ngay = '$ssk_date',
            MaHS = '$hs_id',
            ChieuCao = '$ssk_chieucao',
            CanNang = '$ssk_cannang',
            Mat = '$ssk_mat',
            TaiMuiHong = '$ssk_taimuihong',
            Rang = '$ssk_rang',
            HuyetAp = '$ssk_huyetap',
            GhiChu = '$ssk_ghichu',
            KetLuan = '$ssk_ketluan'

            WHERE MaSo = '$ssk_id' ";

        $result = $this -> db ->update($query);
        //header('Location:SucKhoelist.php');
        return $result;
        if($result){
            $alert = "<span style='color:green;' class='success'>Cập Nhật Thành Công</span>";
            return $alert;
            }else{
                $alert = "<span style='color:red;' class='error'> ***Không Thành Công ***</span>";
                return $alert;
            }  
    }

    public function delete_ssk($ssk_id){
        $query = "DELETE FROM theodoisuckhoe WHERE MaSo = '$ssk_id'";
        $result = $this -> db ->delete($query);
        header('Location:SucKhoelist.php');
        return $result;
    }



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