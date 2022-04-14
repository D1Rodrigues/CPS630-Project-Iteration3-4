<?php
    session_start();
    require_once 'includes/db.inc.php';
    require_once 'includes/retrieval.inc.php';
    require_once "includes/update.inc.php";

    $errors = array();
    $salt = bin2hex(random_bytes(4));


    $ccnum = md5($_POST["creditCard"].$salt);
    $email = $_POST["email"];
    $month = md5($_POST["month"].$salt);
    $year = md5($_POST["year"].$salt);
    $ccv = md5($_POST["card-ccv"].$salt);

    //form validation: check if all fields are filled
    //if not, put them into $errors array
    if(empty ($ccnum))
    {
        array_push($errors, "Credit card number is required.");
    }
    if(empty($email))
    {
        array_push($errors, "User registration email is required.");
    }
    if(empty($month))
    {
        array_push($errors, "Month of expiry is required.");
    }
    if(empty($year))
    {
        array_push($errors, "Year of expiry is required.");
    }
    if(empty($ccv))
    {
        array_push($errors, "Credit card ccv is required.");
    }

    $model = new Retrieval("Users");
    $result = $model->getRecords("*", "email='$email'");

    //... if they are, user is logged in and sent to homepage
    if(!($result->num_rows == 1))
    {
        array_push($errors, "Entered email is not registered.");
    }

    if(count($errors) == 0)
    {
        $m = new UpdateDB("Users");

        $res = $m->updateRecords("creditcard_no='$ccnum', creditcard_month='$month', creditcard_year='$year', creditcard_ccv='$ccv', creditcard_seed='$salt'", "email='$email'");

        if ($res)
        {
            header("Location: ProjectHome2.php/#!Home");
        }

    }
    /*
    $m = new UpdateDB("Users");

    $res = $m->updateRecords("creditcard_no='$ccnum', creditcard_month='$month', creditcard_year='$year', creditcard_ccv='$ccv'", "email='$email'");*/

    else
    {
        foreach ($errors as $errorWarning)
        {
            echo $errorWarning . "<br>";
        }
        echo '<a href = "checkout.html"> Try registering again!</a>';
    } 
    

?>