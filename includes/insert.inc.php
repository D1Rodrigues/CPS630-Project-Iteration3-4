<?php
    class InsertRecords extends Database
    {

      public function __construct($tbl)
      {
          parent::__construct($tbl);
      }
      
      public function insert($fields, $values)
      {
        $conn = $this->connect();
        $sql = "INSERT INTO " . $this->table . "(" . $fields . ") VALUES
        (" . $values . ")";

        $result = $conn->query($sql);
        
        return $result;

        //$conn->close();
      }
    }
?>
