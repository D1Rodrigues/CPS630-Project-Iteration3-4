<?php
   session_start();    
   require_once 'includes/db.inc.php';
   require_once 'includes/retrieval.inc.php';
   require_once 'includes/insert.inc.php';

    $fname = $_POST["signup-fname"];
    $lname = $_POST["signup-lname"];
    $email = $_POST["signup-email"];
    $salt = bin2hex(random_bytes(4));
    $password = md5($_POST["signup-pass"].$salt);
    $date = $_POST["signup-date"];
    $gender = $_POST["gender"];
    $errors = array(); 

    echo $fname . "<br>";
    echo $lname . "<br>";
    echo $email . "<br>";
    echo $password . "<br>";
    echo $salt . "<br>";
    echo $date . "<br>";
    echo $gender . "<br>";

    //form validation: check if all fields are filled
    //if not, put them into $errors array
    if(empty ($fname) || empty ($lname))
    {
        array_push($errors, "First and last name are required.");
    }
    if(empty($email))
    {
        array_push($errors, "Email is required.");
    }
    if(empty($password))
    {
        array_push($errors, "Password is required.");
    }
    if(empty($date))
    {
        array_push($errors, "Date is required.");
    }
    if(empty($gender))
    {
        array_push($errors, "Gender are required.");
    }

    //check if email already exists in the database
    $model = new Retrieval("Users");
    $result = $model->getRecords("*", "email='$email'");
    
    if ($result->num_rows > 0) { // if user exists
        array_push($errors, "Email already exists");
    }

    //if there are errors then register user by putting their details into databse
    if(count($errors) == 0)
    {
        $m = new InsertRecords("Users");
        $res = $m->insert("firstname, lastname, email, pswd, seed, dob, gender", 
        "'$fname', '$lname', '$email', '$password','$salt', '$date', '$gender'");

        if ($res)
        {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header("Location: ProjectHome2.php#!/Home");
        }	
    }
    else //if there any errors, tell user to try start again
    {
        foreach ($errors as $errorWarning)
        {
            echo $errorWarning . "<br>";
        }
        echo "Please go back and try again.";
        echo '<a href = "sign-up.php"> Try registering again!</a>';
    }
?>
