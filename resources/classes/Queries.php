<?php

namespace App\Resources\Classes;

use App\Resources\Database;

class Queries implements DatabaseQueries {
 
    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    } 
   
    public function getData($sql){
        $arr = [];
        $stmt = $this->db->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_object()) {
            $arr[] = $row;
        }
        if(!$arr) exit('No rows');
        return $arr;
    }

    public function insertNews() {

        $stmt = $this->db->conn->prepare("INSERT INTO post (title, content, image, cat_id) VALUES (?, ?, ?, ?)");
        $s = '1.jpg';
        $i = 2;
        $stmt->bind_param("sssi", htmlentities($_POST['title']), htmlentities($_POST['content']), $s, $i);
        $stmt->execute();
    }

    


}