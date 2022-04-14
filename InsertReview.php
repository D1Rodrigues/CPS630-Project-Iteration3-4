<?php 
    session_start(); 
    require_once "includes/db.inc.php"; 
    require_once "includes/ReviewBackEnd.php";

    $table ="reviewtable"; 
    $Product =$_POST["ReviewPname"];
    $Review = $_POST["ReviewR"]; 

    $m = new ReviewBackEnd("$table"); 
    $res = $m->insertReview($Product, $Review); 

    if($res){
        header("Location: ProjectHome2.php#!/Review");
    }
    else{ 
        echo $Product. " ".$Review;
    }


?>