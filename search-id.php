<?php
    require_once "includes/db.inc.php";
    require_once "includes/retrieval.inc.php";

    function validate_input($user_input) 
    {
        $user_input = trim($user_input);
        $user_input = stripslashes($user_input);
        $user_input = htmlspecialchars($user_input);
        $user_input = strtolower($user_input);
        return $user_input;
    }

    $choice = validate_input($_POST['edit']);
    $search = validate_input($_POST['searchbar']);

    echo $choice . "<br>";


    if(!empty($search) && !ctype_space($search))
    {
        $model = new Retrieval("Orders");
        $result = $model->getRecords("*", "order_id='$search'  OR user_id='$search'");

        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc()) {
                echo "order id: " . $row["order_id"]. " - user id: " . $row["user_id"]. " - date of delivery: " . $row["date_received"]. "<br>";
            }
        }
        else 
        {
            echo "No order found with such ids.";
        }
    }
    else
    {
        echo "Please enter valid input.";
    }
?>
