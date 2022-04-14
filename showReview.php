<?php
    session_start();
    require_once "includes/db.inc.php"; 
    require_once "includes/ReviewBackEnd.php";

    $table ="reviewtable"; 
    $m = new ReviewBackEnd("$table"); 
    $res = $m->viewTable();

    if($res->num_rows > 0){ 
        while($row = $res->fetch_assoc()){
            echo "<br> id: ".$row["productNum"].": <br> 
            Product: ".$row["productN"]. "<br> Review: <br>".
            $row["productR"]. "<br>";
        }
    }
    if($res->num_rows >5){
        header("Location: ProjectHome2.php#!/Review");
    }

?>