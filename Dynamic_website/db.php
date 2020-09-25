<?php
    $con = mysqli_connect("127.0.0.1","root","12345","moon_feedback");

    if(!$con){
        echo "Not connected";
    }

    if(!mysqli_select_db($con, 'moon_feedback')){
        echo "Database not selected";
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];


    $sql = "INSERT INTO feedback VALUES ('$name', '$email', '$feedback')";

    if (mysqli_query($con, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Fail";
    }

?>


