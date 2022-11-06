<?php 

class Connection{

    public function connect(){
        $conn = new mysqli('localhost','root','','testwork');
        if($conn->connect_error){
            die("Connecton Failed: ".$conn->connect_error);
        }else{
            return $conn;
        }
    }
};
?>