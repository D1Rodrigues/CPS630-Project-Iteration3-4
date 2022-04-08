   <?php
    require_once "includes/db.inc.php";
    require_once "includes/delete.inc.php";

    $table = $_POST["TName"];
    $conditions = $_POST["Conditions"];

    $m = new Deletion($table);

    if(empty($conditions) || ctype_space($conditions))
    {
        $res = $m->deleteRecords();
    }
    else {
        $res = $m->deleteRecords($conditions);
    }

    if ($res)
    {
        header("Location: ProjectHome2.php#!/Delete");
    }
    else
    {
        header("Location: ProjectHome2.php#!/Delete");
    } 
?>
