<?php

namespace App\Resources\Classes;

use App\Resources\Database;

class Queries implements DatabaseQueries {

    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    } 
   
    public function getAll($tableName){
        $sql = 'SELECT * FROM ' . $tableName;
        $res = $this->db->select($sql);
        return $res;
    }

    public function getAllById($tableName, $rowName, $id){
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE ' .$rowName. ' = ' .$id;
        $res = $this->db->select($sql);
        return $res;
    }

    public function getAllWithLimit($tableName, $limit){
        $sql = 'SELECT * FROM ' . $tableName. ' LIMIT '. $limit;
        $res = $this->db->select($sql);
        return $res;
    }

    public function getAllAsc($tableName, $rowName){
        $sql = 'SELECT * FROM ' . $tableName. ' ORDER BY '. $rowName. ' ASC';
        $res = $this->db->select($sql);
        return $res;
    }

    public function getAllDesc($tableName, $rowName){
        $sql = 'SELECT * FROM ' . $tableName. ' ORDER BY '. $rowName. ' DESC';
        $res = $this->db->select($sql);
        return $res;
    }

    public function getAllByCategoryAsc($tableName, $catId, $rowName){
        $sql = 'SELECT * FROM ' . $tableName. ' WHERE category_id = '. $catId .' ORDER BY '. $rowName. ' ASC';
        $res = $this->db->select($sql);
        return $res;
    }

    public function getAllByCategoryDesc($tableName, $catId, $rowName){
        $sql = 'SELECT * FROM ' . $tableName. ' WHERE category_id = '. $catId .' ORDER BY '. $rowName. ' DESC';
        $res = $this->db->select($sql);
        return $res;
    }

    public function getAllByRecommendedAsc($tableName, $rcm, $rowName){
        $sql = 'SELECT * FROM ' . $tableName. ' WHERE recommended = '. $rcm .' ORDER BY '. $rowName. ' ASC';
        $res = $this->db->select($sql);
        return $res;
    }

    public function getAllByRecommendedDesc($tableName, $rcm, $rowName){
        $sql = 'SELECT * FROM ' . $tableName. ' WHERE recommended = '. $rcm .' ORDER BY '. $rowName. ' DESC';
        $res = $this->db->select($sql);
        return $res;
    }

    public function getAllWithLimitAsc($tableName, $rowName, $limit){
        $sql = 'SELECT * FROM ' . $tableName . ' ORDER BY '.$rowName .' ASC LIMIT '. $limit;
        $res = $this->db->select($sql);
        return $res;
    }

    public function getAllWithLimitDesc($tableName, $rowName, $limit){
        $sql = 'SELECT * FROM ' . $tableName . ' ORDER BY '.$rowName .' DESC LIMIT '. $limit;
        $res = $this->db->select($sql);
        return $res;
    }

    public function getAllByCategoryWithLimitAsc($tableName, $catId, $rowName, $limit){
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE category_id = '.$catId.' ORDER BY '. $rowName .' ASC LIMIT '. $limit;
        $res = $this->db->select($sql);
        return $res;
    }

    public function getAllByCategoryWithLimitDesc($tableName, $catId, $rowName, $limit){
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE category_id = ' . $catId . ' ORDER BY ' . $rowName . ' DESC LIMIT '. $limit;    
        $res = $this->db->select($sql);
        return $res;
    }

}