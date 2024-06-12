<?php
    class CategoryModel{
        private $db;
        function __construct()
        {
            $this->db = new Database();
        }
        function getCate(){
             $sql = "SELECT * FROM danhmuc";
            return $this->db->getAll($sql);
        }

        function getCateById($id){
            $sql = "SELECT * FROM danhmuc where id = $id";
           return $this->db->getOne($sql);
       }
 }