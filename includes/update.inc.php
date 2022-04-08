<?php

    class UpdateDB extends Database
    {

      public function __construct($tbl)
      {
          parent::__construct($tbl);
      }

      public function updateRecords($values, $conditionals)
      {
        $conn = $this->connect();
        

        $sql = "UPDATE " . $this->table . " SET " . $values . " WHERE " . $conditionals;

        $result = $conn->query($sql);
        
        return $result;

        //$conn->close();

      }
    }
?>