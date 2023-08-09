<?php

$conn = mysqli_connect("localhost", "root", "", "rent-a-car");

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    echo "<span style='color:red'> Email is not in correct format!</span>";
    echo "<script>$('#submit').prop('disabled', true);</script>";
}

else if (!empty($_POST["email"])) {
    $query = "SELECT * FROM users WHERE Email='" . $_POST["email"] . "'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        echo "<span style='color:red'> Email already exists!</span>";
        echo "<script>$('#submit').prop('disabled', true);</script>";
    } 
    
    else {
        echo "<span style='color:green'> Email is avaliable.</span>";
        echo "<script>$('#submit').prop('disabled', false);</script>";
    }
}