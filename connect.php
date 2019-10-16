<?php
$fullName = filter_input(INPUT_POST, 'fullName');
$email = filter_input(INPUT_POST, 'email');
if (!empty($fullName)){
    if (!empty($email)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "dangote";
// Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO subscriptionn (fullName, email)
values ('?','?')";
            if ($conn->query($sql)){
                echo "New record is inserted successfully";
            }
            else{
                echo "Error: ". $sql ."
". $conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo "email should not be empty";
        die();
    }
}
else{
    echo "fullName should not be empty";
    die();
}
?>