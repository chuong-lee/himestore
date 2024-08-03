<?php
class RoleModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    public function getAllRole()
    {
        $sql = "select * from `role` r  ";
        return $this->db->getAll($sql);
    }


    function getIdUser($iduser)
    {
        if ($iduser > 0) {
            $sql = "SELECT * FROM user WHERE id = $iduser";
            return $this->db->getOne($sql);
        } else {
            return null;
        }
    }
    

    


}
