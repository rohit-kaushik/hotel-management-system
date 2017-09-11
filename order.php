<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "food");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $ID = mysqli_real_escape_string($link, $_POST['id']);
    $first_name = mysqli_real_escape_string($link, $_POST['firstname']);
    $food_name = mysqli_real_escape_string($link, $_POST['foodname']);
 $time = mysqli_real_escape_string($link, $_POST['time']);

    // attempt insert query execution
    $sql = "INSERT INTO foodname (ID,first_name, food_name, time) VALUES ('$ID','$first_name', '$food_name', '$time')";

    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";

    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>

