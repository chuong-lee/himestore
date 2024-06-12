<?php
class ProductModel{
    private $db;
    function __construct(){
        $this->db = new Database();
    }

    function getAllProduct(){
        $sql = 'select * from sanpham';
        return $this->db->getAll($sql);
    }

    function getProductByIdDanhMuc($id_danhmuc){
        $sql = "select s.id , s.name , s.gia, s.image , d.tenDanhMuc from sanpham s join danhmuc d on d.id = s.id_danhmuc where d.id= " . $id_danhmuc ;
        return $this->db->getAll($sql);
    }
    
    function getProductByLuotMua(){
        $sql = "SELECT * FROM sanpham WHERE luot_mua > 200";
        return $this->db->getAll($sql);
    }

    public function getProductById($id) {
        $sql = "SELECT * FROM sanpham WHERE id = " . $id;
        $get_one = $this->db->getOne($sql);
        extract($get_one);
        return $id;
    }
    function insertPro($data){
        $sql = "INSERT INTO sanpham(name,gia,soluong,mota,sale,luot_mua,image,id_danhmuc) VALUES(?,?,?,?,?,?,?,?)";
        $param = [$data['name'],$data['gia'],$data['soluong'],$data['mota'],$data['sale'],$data['luot_mua'],$data['image'],$data['id_danhmuc']];
        return $this->db->insert($sql,$param);
    }

    function getIdPro($idpro){
            if($idpro > 0){
                $sql = "SELECT * FROM sanpham WHERE id = $idpro";
                return $this->db->getOne($sql);
            }else{
                return null;
            }
        }
    function deletePro($id){
            $sql = "DELETE FROM sanpham WHERE id = ?";
            return $this->db->delete($sql,[$id]);
        }
    function updatePro($data){
            $sql = "UPDATE sanpham SET name = ?, gia = ?, soluong = ?,mota = ?, image = ?, id_danhmuc = ? WHERE id = ?";
            $param = [$data['name'],$data['gia'],$data['soluong'],$data['mota'], $data['image'],$data['id_danhmuc'],$data['id']];
            $this->db->insert($sql,$param);
        }
}
?>