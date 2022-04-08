<?php
    require_once "includes/db.inc.php";
    require_once "includes/update.inc.php";

    $table = $_POST["TName"];
    $conditions = $_POST["Conditions"];
    $values = $_POST["Values"];

    $m = new UpdateDB($table);

    $res = $m->updateRecords($values, $conditions);

    if ($res)
    {
        header("Location: ProjectHome2.php#!/Update");
    }
    else
    {
        header("Location: ProjectHome2.php#!/Update");
    } 
?>