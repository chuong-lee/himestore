<?php
class UserModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    public function getUser($username,$pass) {
        $sql = "select * from `user` u where email = '$username' and password = '$pass'";
        return $this->db->getOne($sql);
    }

    public function getUserByName($username) {
        $sql = "SELECT * FROM user where email = '$username'";
        return $this->db->getOne($sql);
    }

    public function getAllUser() {
        $sql = "SELECT * FROM user";
        return $this->db->getAll($sql);
    }

    function getIdUser($iduser){
        if($iduser > 0){
            $sql = "SELECT * FROM user WHERE id = $iduser";
            return $this->db->getOne($sql);
        }else{
            return null;
        }
    }
    function insertUserForUser($data){
        $sql = "INSERT INTO user (ten, phone, email, password) VALUES (?, ?, ?, ?)";
        $param = [$data['ten'], $data['phone'], $data['email'], $data['password']];
        return $this->db->insert($sql, $param);
    }
    function insertUser($data){
        $sql = "INSERT INTO email(ten,phone,email,password) VALUES(?,?,?,?)";
        $param = [$data['ten'],$data['phone'],$data['email'],$data['password']];
        return $this->db->insert($sql,$param);
    }

    function deleteUser($id){
        $sql = "DELETE FROM email WHERE id = ?";
        return $this->db->delete($sql,[$id]);  
    }

    function updateUser($data){
        $sql = "UPDATE email SET ten = ?, phone = ?, email = ?, password = ?, role = ? WHERE id = ?";
        $param = [$data['ten'],$data['phone'],$data['email'],$data['password'],$data['role'],$data['id']];
        $this->db->insert($sql,$param);
    }
}