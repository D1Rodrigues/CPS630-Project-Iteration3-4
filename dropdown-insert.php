<?php
    session_start();
    require_once "includes/db.inc.php";
    require_once "includes/insert.inc.php";

    echo "cock";
    


    $table = $_POST["table"];
    $columns = $_POST["columns"];
    $values = $_POST["values"];

    
    $m = new InsertRecords("$table");
    $res = $m->insert($columns, $values);

    if ($res)
    {
        $_SESSION['InsertStatus'] = true;
        header("Location: ProjectHome2.php#!/Insert");
    }
    else{
        $_SESSION['InsertStatus'] = false;
        header("Location: ProjectHome2.php#!/Insert");
    }

    
    

?>