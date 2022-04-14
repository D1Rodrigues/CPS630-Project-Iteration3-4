<?php
    session_start();
    //require_once 'config.php';
    require_once 'includes/db.inc.php';
    require_once 'includes/retrieval.inc.php';

    $errors = array();
    $email = $_POST['login-name'];
    $password = $_POST['login-password'];

    //check if the fields are filled in
    //...if not, put the error into the $errors array
    if (empty($email) || ctype_space($email))
    {
        array_push($errors, "Email field is empty. Please enter in your email.");
    }
    if (empty($password) || ctype_space($password))
    {
        array_push($errors, "Password field is empty. Please enter in your password.");
    }

    //if there are no errors, see if the user's email & pswd are in database
    if(count($errors) == 0)
    {

        $model = new Retrieval("Users");
        $result = $model->getRecords("*", "email='$email'  AND pswd=MD5(CONCAT('$password', (SELECT seed FROM Users WHERE email='$email')))");
    
        //... if they are, user is logged in and sent to homepage
        if($result->num_rows == 1)
        {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are signed in!";
            header("Location: P_Home.php");
        }
        //...if not, 
        else 
        {
            array_push($errors, "Password or email not registered. Please sign up.");
        }
    }

    if (count($errors) > 0)
    {
        foreach ($errors as $errorWarning)
        {
            echo $errorWarning . "<br>";
        }
        header("Location: signin.php");
    }

?>
