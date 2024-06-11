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
 }