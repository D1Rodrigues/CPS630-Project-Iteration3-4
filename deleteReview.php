<?php
    session_start();
    require_once "includes/db.inc.php"; 
    require_once "includes/ReviewBackEnd.php";

    $table ="reviewtable"; 
    $RNumb = $_POST["ReviewNumber"];
    $m = new ReviewBackEnd("$table"); 
    $res = $m->deleteReview($RNumb);
    
    if($res){ 
        header("Location: ProjectHome2.php#!/Review");
    }
    else{ 
        header("Location: ProjectHome2.php#!/Review");
    }
?>