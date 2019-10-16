<?php
// initializing variables
$fullName = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'Dangote');

// REGISTER USER
if (isset($_POST['submit'])) {
    // receive all input values from the form
    $fullName = mysqli_real_escape_string($db, $_POST['fullName']);
    $email = mysqli_real_escape_string($db, $_POST['email']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($fullName)) { array_push($errors, "fullName is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }

    // first check the database to make sure
    // a user does not already exist with the same fullName and/or email
    $user_check_query = "SELECT * FROM subscriptionn WHERE fullName='$fullName' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['fullName'] === $fullName) {
            array_push($errors, "fullName already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO subscriptionn (fullName, email) 
  			  VALUES('$fullName', '$email')";
        mysqli_query($db, $query);
        $_SESSION['fullName'] = $fullName;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}

// ...