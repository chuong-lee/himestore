<?php
class CategoryModel
{
    private $db;
    function __construct()
    {
        $this->db = new Database();
    }
    function getCate()
    {
        $sql = "SELECT * FROM danhmuc";
        return $this->db->getAll($sql);
    }

    function getCateById($id)
    {
        $sql = "SELECT * FROM danhmuc where id = $id";
        return $this->db->getOne($sql);
    }

    function insertCate($data)
    {
        $sql = "INSERT INTO danhmuc(tenDanhMuc,image) VALUES(?,?)";
        $param = [$data['tenDanhMuc'], $data['image']];
        return $this->db->insert($sql, $param);
    }

    function getIdCate($idcate)
    {
        if ($idcate > 0) {
            $sql = "SELECT * FROM danhmuc WHERE id = $idcate";
            return $this->db->getOne($sql);
        } else {
            return null;
        }
    }
    function deleteCate($id)
    {
        $sql = "DELETE FROM danhmuc WHERE id = ?";
        return $this->db->delete($sql, [$id]);
    }

    function updateCate($data){
        $sql = "UPDATE danhmuc SET tenDanhMuc = ?, image = ? WHERE id = ?";
        $param = [$data['tenDanhMuc'], $data['image'], $data['id']];
        $this->db->insert($sql,$param);
    }
}
