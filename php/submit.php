<?php
    $name = addslashes($_POST['name']);
    $email = $_POST['email'];
    $message = addslashes($_POST['message']);

    include("connect.php");
    $q = "INSERT INTO feedback (id, name, email, message) VALUES (NULL, '$name', '$email', '$message')";
    $r = mysqli_query($conn, $q);
    if($r){
        echo "Form submitted sucessfully";
    } else {
        echo "error submitting form";
    }
?>