<?php

    class Database
    {
        //database login details
        private $servername;
        private $username;
        private $password;
        private $dbname;

        public $table; //table that will be worked with

        //construct object around table to be manipulated
        public function __construct($tbl)
        {
          if($tbl){
            $this->table = $tbl;
          }
        }
      
        //connect to database, return connection
        public function connect()
        {
            $this->servername = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->dbname = "dnd";

            $conn = new mysqli($this->servername, $this->username, 
            $this->password, $this->dbname);

            return $conn;
        }

    }
?>
