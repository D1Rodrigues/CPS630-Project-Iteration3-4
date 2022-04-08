<?php
    class Deletion extends Database
    {

      public function __construct($tbl)
      {
          parent::__construct($tbl);
      }

      public function deleteRecords($conditionals="none")
      {
        $conn = $this->connect();
        
        if(strcmp($conditionals, "none") !== 0)
        {
            $sql = "DELETE FROM " . $this->table . " WHERE " . $conditionals;
        }
        else
        {
            $sql = "DELETE FROM " . $this->table;
        }

        $result = $conn->query($sql);
        
        return $result;

      }
    }
?>
