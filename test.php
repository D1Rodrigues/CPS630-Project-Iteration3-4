<?php
    require_once "includes/db.inc.php";
    require_once "includes/update.inc.php";

    $table = $_POST["TName"];
    $conditions = $_POST["Conditions"];
    $ccnum = $_POST["creditCard"];
    $email = $_POST["email"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $ccv = $_POST["card-ccv"];

    $m = new UpdateDB("Users");

    $res = $m->updateRecords("creditcard_no='$ccnum', creditcard_month='$month', creditcard_year='$year', creditcard_ccv='$ccv'", "email='$email'");

    if ($res)
    {
        echo "query successful";
    }
    else
    {
        echo "query unsuccessful";
    } 
?>