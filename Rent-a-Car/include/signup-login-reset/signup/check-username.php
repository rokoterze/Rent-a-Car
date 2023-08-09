<?php

$conn = mysqli_connect("localhost", "root", "", "rent-a-car");

if (!empty($_POST["username"])) {
    $query = "SELECT * FROM users WHERE Username='" . $_POST["username"] . "'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        echo "<span style='color:red'> Username already exists!</span>";
        echo "<script>$('#submit').prop('disabled', true);</script>";
    } else {
        echo "<span style='color:green'> Username is avaliable.</span>";
        echo "<script>$('#submit').prop('disabled', false);</script>";
    }
}