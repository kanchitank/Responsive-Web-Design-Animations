<?php

    $errorMSG = "";


    /* Name */
    if (empty($_POST["name"])) {
        $errorMSG = " Name is required ";
    } else {
        $name = $_POST["name"];
    }


    /* Email */
    if (empty($_POST["email"])) {
        $errorMSG .= " Email is required ";
    } else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errorMSG .= "Invalid email format";
    }else {
        $email = $_POST["email"];
    }


    /* Feedback */
    if (empty($_POST["feedback"])) {
        $errorMSG .= " Feedback field is empty ";
    } else {
        $feedback = $_POST["feedback"];
    }


    if(empty($errorMSG)){
        $msg = "Name: ".$name.", Email: ".$email.", Feedback:".$feedback;
        echo json_encode(['code'=>200, 'msg'=>$msg]);
        exit;
    }

    echo json_encode(['code'=>404, 'msg'=>$errorMSG]);

?>