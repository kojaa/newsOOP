<?php

namespace App\Resources;
class Database {
    
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $name = 'news';

    public $conn;
    private static $_instance = null;

    public function __construct() {

        $this->conn = new \mysqli($this->host, $this->user, $this->pass, $this->name);

        if(!$this->conn){
            $this->conn->connect_error;
            return false;
        }
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->conn->set_charset("utf8mb4");
    
    }

    public static function getInstance(){

        if(is_null(self::$_instance)){
            self::$_instance = new Database;
        }
        return self::$_instance;
    }

    private function __clone(){

    }

    


    // //insert - Create
    // public function insert($query){

    //     $insert = $this->conn->query($query) or die($this->conn->error);
    //     if($insert)
    //     {
    //         return $insert;
    //     }
    //     else{
    //         return false;
    //     }

    // }

    // //select - Read
    // public function select($query){

    //     $result = $this->conn->query($query) or die($this->conn->error);
    //     if($result->num_rows > 0)
    //     {
    //         return $result;
    //     }else{
    //         return false;
    //     }
    // }

    // //update - Update
    // public function update($query){

    //     $update = $this->conn->query($query) or die($this->conn->error);
    //     if($update){
    //         return $update;
    //     }else{
    //         return false;
    //     }
    // }

    // //delete - Delete
    // public function delete($query){

    //     $delete = $this->conn->query($query) or die($this->conn->error);
    //     if($delete){
    //         return $delete;
    //     }else{
    //         return false;
    //     }
    // }
}
