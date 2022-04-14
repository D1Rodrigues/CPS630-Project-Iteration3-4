<?php
    class ReviewBackEnd extends Database
    {

      public function __construct($tbl)
      {
          parent::__construct($tbl);
      }
      
      public function insertReview($fields, $values){
        $conn = $this->connect(); 
        $sql = "INSERT INTO ".$this->table." (productN,productR) VALUES ('" . $fields . "','" . $values ."')"; 
        $result = $conn->query($sql);
        return $result;

        //$conn->close();
      }

      public function deleteReview($PNum){
        $conn = $this->connect(); 
        $sql = "DELETE FROM ". $this->table." WHERE productNum = '".$PNum."'";
        $result = $conn->query($sql);
        return $result;  
      }

      public function viewTable(){ 
          $conn = $this->connect();
          $sql = "SELECT * FROM reviewtable";
          $result = $conn->query($sql);
          return $result;
      }

    }
?>